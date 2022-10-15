YUI.add("moodle-core-notification-dialogue",function(n,u){var i,t,s,a,l,e,o="moodle-dialogue",d="notificationBase",r={BASE:"moodle-dialogue-base",WRAP:"moodle-dialogue-wrap",HEADER:"moodle-dialogue-hd",BODY:"moodle-dialogue-bd",CONTENT:"moodle-dialogue-content",FOOTER:"moodle-dialogue-ft",HIDDEN:"hidden",LIGHTBOX:"moodle-dialogue-lightbox"};M.core=M.core||{},t=o+"-fullscreen",s=o+"-hidden",a="moodle-has-zindex",n.extend(i=function(e){var t="moodle-dialogue-"+n.stamp(this)+"-wrap";e.notificationBase=n.Node.create('<div class="'+r.BASE+'">').append(n.Node.create('<div id="'+t+'" role="dialog" aria-labelledby="'+t+'-header-text" class="'+r.WRAP+'"  aria-live="polite"></div>').append(n.Node.create('<div class="'+r.HEADER+' yui3-widget-hd"></div>')).append(n.Node.create('<div class="'+r.BODY+' yui3-widget-bd"></div>')).append(n.Node.create('<div class="'+r.FOOTER+' yui3-widget-ft"></div>'))),n.one(document.body).append(e.notificationBase),e.srcNode="#"+t,delete e.buttons,i.superclass.constructor.apply(this,[e])},n.Panel,{_resizeevent:null,_orientationevent:null,_calculatedzindex:!"form",_currentMaskNodeId:null,_originalPosition:null,_hiddenSiblings:null,hideIfNotForm:function(){null===this.get("boundingBox").one("form")&&this.hide()},initializer:function(){var e,t;!1!==this.get("closeButton")&&(e=this.get("closeButtonTitle"),this.get("buttons").header[0].setAttribute("title",e),this.get("buttons").header[0].setAttribute("aria-label",e)),this.setStdModContent(n.WidgetStdMod.HEADER,'<h5 id="'+this.get("id")+'-wrap-header-text">'+this.get("headerContent")+"</h5>",n.WidgetStdMod.REPLACE),this._hiddenSiblings=[],this.get("render")&&this.render(),this.after("visibleChange",this.visibilityChanged,this),this.get("center")&&this.centerDialogue(),this.get("modal")&&(this.get(d).set("aria-hidden","true"),this.plug(n.M.core.LockScroll)),this.set("focusOn",n.Array(this.get("focusOn")).filter(function(e){return"focusoutside"!==e.eventName})),(e=this.get("boundingBox")).addClass(a),n.Array.each(this.get("extraClasses"),e.addClass,e),this.get("visible")&&(this.applyZIndex(),this.applyAndTrapFocus(),this.get("modal")&&this.setAccessibilityVisible()),this.on("maskShow",this.applyZIndex),this.on("maskShow",function(){var e,t=n.one(n.config.win),i=this.get("boundingBox");this.get("center")||(this._originalPosition=i.getXY()),e=this.get("maskNode"),this._currentMaskNodeId!==e.get("_yuid")&&(this._currentMaskNodeId=e.get("_yuid"),e.on("click",this.hideIfNotForm,this)),"fixed"!==i.getStyle("position")&&i.setStyles({top:t.get("scrollTop"),left:t.get("scrollLeft")})},this),e=this.get("notificationBase"),""!==(t=this.get("additionalBaseClass"))&&e.addClass(t),this.after("destroyedChange",function(){this.get(d).remove(!0)},this)},applyZIndex:function(){var e,t=1040,i=this.get("boundingBox"),o=this.get("maskNode"),s=this.get("zIndex");0===s||this._calculatedzindex?(n.all(" [role=dialog], [role=menubar], ."+a).each(function(e){e=this.findZIndex(e);t<e&&(t=e)},this),e=(t+1).toString(),i.setStyle("zIndex",e),this.set("zIndex",e),this.get("modal")&&(o.setStyle("zIndex",e),n.UA.ie&&n.UA.compareVersions(n.UA.ie,9)<0&&setTimeout(function(){o.setStyle("position","static"),setTimeout(function(){o.setStyle("position","fixed")},0)},0)),this._calculatedzindex=!0):i.setStyle("zIndex",s)},findZIndex:function(e){e=e.getStyle("zIndex")||e.ancestor().getStyle("zIndex");return e?parseInt(e,10):0},visibilityChanged:function(e){var t;"visible"===e.attrName&&(this.get("maskNode").addClass(r.LIGHTBOX),e.prevVal&&!e.newVal&&(this.get("boundingBox"),this._resizeevent&&(this._resizeevent.detach(),this._resizeevent=null),this._orientationevent&&(this._orientationevent.detach(),this._orientationevent=null),require(["core/local/aria/focuslock"],function(e){e.untrapFocus()}),this.get("modal")&&this.setAccessibilityHidden()),!e.prevVal&&e.newVal&&(this.applyZIndex(),this.makeResponsive(),this.shouldResizeFullscreen()||this.get("draggable")&&(t="#"+this.get("id")+" ."+r.HEADER,this.plug(n.Plugin.Drag,{handles:[t]}),n.one(t).setStyle("cursor","move")),this.get("modal")&&this.setAccessibilityVisible()),this.get("center")&&!e.prevVal&&e.newVal&&this.centerDialogue())},makeResponsive:function(){var e=this.get("boundingBox");this.shouldResizeFullscreen()?(e.addClass(t),e.setStyles({left:null,top:null,width:null,height:null,right:null,bottom:null})):this.get("responsive")&&e.removeClass(t).setStyles({width:this.get("width"),height:this.get("height")}),this.lockScroll&&this.lockScroll.updateScrollLock(this.shouldResizeFullscreen())},centerDialogue:function(){var e,t,i=this.get("boundingBox"),o=i.hasClass(s);this.shouldResizeFullscreen()||(o&&i.setStyle("top","-1000px").removeClass(s),e=Math.max(Math.round((i.get("winWidth")-i.get("offsetWidth"))/2),15),t=Math.max(Math.round((i.get("winHeight")-i.get("offsetHeight"))/2),15)+n.one(window).get("scrollTop"),i.setStyles({left:e,top:t}),o&&i.addClass(s),this.makeResponsive())},shouldResizeFullscreen:function(){return window===window.parent&&this.get("responsive")&&Math.floor(n.one(document.body).get("winWidth"))<this.get("responsiveWidth")},_focus:function(){this.focus()},show:function(){var e=i.superclass.show.call(this);return!this.get("center")&&this._originalPosition&&this.get("boundingBox").setXY(this._originalPosition),this.applyAndTrapFocus(),e},hide:function(e){if(!e||"key"!==e.type||27!==e.keyCode||this.get("focused"))return this.lockScroll&&this.lockScroll.disableScrollLock(),i.superclass.hide.call(this,arguments)},keyDelegation:function(){this.get("boundingBox").delegate("key",function(e){var t=e.target,i="forward";e.shiftKey&&(i="backward"),this.trapFocus(t,i)&&e.preventDefault()},"down:9",l,this)},trapFocus:function(e,t){var i=this.get("boundingBox"),o=i.one(l),i=i.all(l).pop();return e===i&&"forward"===t?o.focus():e===o&&"backward"===t?i.focus():void 0},setAccessibilityVisible:function(){var i=this.get(d);n.one(document.body).get("children").each(function(e){var t;e===i||"true"!==(t=e.get(
"aria-hidden"))&&(e.setData("previous-aria-hidden",t),this._hiddenSiblings.push(e),e.set("aria-hidden","true"))},this),i.set("aria-hidden","false")},setAccessibilityHidden:function(){this.get(d).set("aria-hidden","true"),n.Array.each(this._hiddenSiblings,function(e){var t=e.getData("previous-aria-hidden");null===t?e.removeAttribute("aria-hidden"):e.set("aria-hidden",t)}),this._hiddenSiblings=[]},applyAndTrapFocus:function(){var e=this.bodyNode,t=this.get("focusOnShowSelector"),i=null;(i=null!==t?this.get("boundingBox").one(t):i)||e&&""!==e&&(i=e.one(l)),require(["core/local/aria/focuslock"],function(e){e.trapFocus(this.get("boundingBox").getDOMNode()),i&&i.focus()}.bind(this))}},{NAME:"Moodle dialogue",CSS_PREFIX:o,ATTRS:{additionalBaseClass:{value:""},notificationBase:{},lightbox:{lazyAdd:!(l='input:not([type="hidden"]):not([disabled]):not([tabindex^="-"]),a[href]:not([disabled]):not([tabindex^="-"]),button:not([disabled]):not([tabindex^="-"]),textarea:not([disabled]):not([tabindex^="-"]),select:not([disabled]):not([tabindex^="-"]),[tabindex]:not([disabled]):not([tabindex^="-"])'),setter:function(e){this.set("modal",e)}},closeButton:{validator:n.Lang.isBoolean,value:!0},closeButtonTitle:{validator:n.Lang.isString,value:M.util.get_string("closebuttontitle","moodle")},center:{validator:n.Lang.isBoolean,value:!0},draggable:{validator:n.Lang.isBoolean,value:!1},COUNT:{writeOnce:!0,valueFn:function(){return n.stamp(this)}},responsive:{validator:n.Lang.isBoolean,value:!0},responsiveWidth:{value:768},focusOnShowSelector:{value:null}}}),n.Base.modifyAttrs(i,{width:{value:"400px",setter:function(e){return"auto"===e?"":e}},visible:{value:!1},centered:{setter:function(e){return e&&this.set("center",!0),!1}},render:{value:!0,writeOnce:!0},extraClasses:{value:[]},id:{writeOnce:!0,valueFn:function(){return"moodle-dialogue-"+n.stamp(this)}},buttons:{getter:n.WidgetButtons.prototype._getButtons,setter:n.WidgetButtons.prototype._setButtons,valueFn:function(){return!1===this.get("closeButton")?null:[{section:n.WidgetStdMod.HEADER,classNames:"closebutton",action:function(){this.hide()}}]}}}),n.Base.mix(i,[n.M.core.WidgetFocusAfterHide]),M.core.dialogue=i,n.extend(e=function(){e.superclass.constructor.apply(this,arguments)},M.core.dialogue,{initializer:function(){this.show()}},{NAME:"Moodle information dialogue",CSS_PREFIX:o}),n.Base.modifyAttrs(e,{modal:{validator:n.Lang.isBoolean,value:!0}}),M.core.notification=M.core.notification||{},M.core.notification.info=e},"@VERSION@",{requires:["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]});