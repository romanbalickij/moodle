<?php

class __Mustache_a9058bb23481776caec30e7f5219c8e0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h1>List of product</h1>
';
        $buffer .= $indent . '<input type="button" class="btn btn-primary" value="Create message" onclick="location.href=\'';
        $value = $this->resolveValue($context->find('editurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<hr>
';
        $value = $context->find('products');
        $buffer .= $this->section4d364c1fa5e8baadc5690e96f3b0c9e4($context, $indent, $value);

        return $buffer;
    }

    private function section5b18837a7b873ffd5b1cce0937655510(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedate, core_langconfig ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strftimedate, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section867b5d411ec59079363d1ea1b43a0161(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '  {{timecreated}} , {{#str}} strftimedate, core_langconfig {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '  ';
                $value = $this->resolveValue($context->find('timecreated'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' , ';
                $value = $context->find('str');
                $buffer .= $this->section5b18837a7b873ffd5b1cce0937655510($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d364c1fa5e8baadc5690e96f3b0c9e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

 <table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Title</th>
       <th scope="col">Description</th>
       <th scope="col">Created</th>
       <th scope="col">Action</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <th scope="row">{{id}}</th>
       <td >{{title}}</td>
       <td>{{description}}</td>
       <td>{{#userdate}}  {{timecreated}} , {{#str}} strftimedate, core_langconfig {{/str}} {{/userdate}}</td>
       <td>
         <input type="button" class="btn btn-primary" value="Edit Product" onclick="location.href=\'{{editurl}}?productid={{id}}\'">
         <input type="button" class="btn btn-danger local_message_delete_button" value="Delete product" onclick="location.href=\'{{deleteurl}}?productid={{id}}\'">
       </td>
     </tr>
   </tbody>
 </table>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . ' <table class="table">
';
                $buffer .= $indent . '   <thead>
';
                $buffer .= $indent . '     <tr>
';
                $buffer .= $indent . '       <th scope="col">#</th>
';
                $buffer .= $indent . '       <th scope="col">Title</th>
';
                $buffer .= $indent . '       <th scope="col">Description</th>
';
                $buffer .= $indent . '       <th scope="col">Created</th>
';
                $buffer .= $indent . '       <th scope="col">Action</th>
';
                $buffer .= $indent . '     </tr>
';
                $buffer .= $indent . '   </thead>
';
                $buffer .= $indent . '   <tbody>
';
                $buffer .= $indent . '     <tr>
';
                $buffer .= $indent . '       <th scope="row">';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</th>
';
                $buffer .= $indent . '       <td >';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '       <td>';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '       <td>';
                $value = $context->find('userdate');
                $buffer .= $this->section867b5d411ec59079363d1ea1b43a0161($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '       <td>
';
                $buffer .= $indent . '         <input type="button" class="btn btn-primary" value="Edit Product" onclick="location.href=\'';
                $value = $this->resolveValue($context->find('editurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '?productid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'">
';
                $buffer .= $indent . '         <input type="button" class="btn btn-danger local_message_delete_button" value="Delete product" onclick="location.href=\'';
                $value = $this->resolveValue($context->find('deleteurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '?productid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'">
';
                $buffer .= $indent . '       </td>
';
                $buffer .= $indent . '     </tr>
';
                $buffer .= $indent . '   </tbody>
';
                $buffer .= $indent . ' </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
