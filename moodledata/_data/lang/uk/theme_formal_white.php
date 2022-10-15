<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'theme_formal_white', language 'uk', version '3.11'.
 *
 * @package     theme_formal_white
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockcolumnwidth'] = 'Ширина колонки блоків';
$string['blockcolumnwidthdesc'] = 'Цей параметр встановлює ширину колонки блоків для цієї теми оформлення. <strong>Блок Календар не поміститься в колонку, якщо вказати значення менше ніж 200px (blockcolumnwidth-2*blockpadding).</strong>';
$string['blockcontentbgc'] = 'Колір тла блоків';
$string['blockcontentbgcdesc'] = 'Цей параметр задає колір тла всередині блоків.';
$string['blockpadding'] = 'Поля довкола блоків';
$string['blockpaddingdesc'] = 'Параметр задає поле між кожним блоком та колонкою, в якій він знаходиться.';
$string['blueberry'] = 'чорничний';
$string['choosereadme'] = '<div class="clearfix">
<div class="theme_screenshot">

<h2>Тема оформлення Formal White</h2>
<img src="formal_white/pix/screenshot.png" />

<h3>Форум обговорення тем оформлення:</h3>
<p><a href="http://moodle.org/mod/forum/view.php?id=46">http://moodle.org/mod/forum/view.php?id=46</a></p>

<h3>Розробники тем оформлення</h3>
<p><a href="http://docs.moodle.org/en/Theme_credits">http://docs.moodle.org/en/Theme_credits</a></p>

<h3>Документація з використання тем оформлення:</h3>
<p><a href="http://docs.moodle.org/en/Themes">http://docs.moodle.org/en/Themes</a></p>

<h3>Звіти про помилки:</h3>
<p><a href="http://tracker.moodle.org">http://tracker.moodle.org</a></p>
</div>

<div class="theme_description">

<h2>Про тему оформлення</h2>
<p>Formal White - це проста тема для Moodle 2.0 з трьома колонками змінної ширини портована з Moodle 1.х.</p>

<h2>Зміни</h2>
<p>Ця тема базується на двох - Base та Canvas, обидві батьківські теми входять до ядра Moodle. Якщо ви хочете змінити цю тему , то рекомендується скопіювати її до теки з іншою назвою та вносити всі зміни там. Це дозволить захистити змінену тему від перезапису при майбутніх оновленнях Moodle. До того ж в такому випадку у вас залишаться оригінальні файли, раптом щось піде не так. Детальну інформацію про зміни теми можна знайти на <a href="http://docs.moodle.org/en/Theme">MoodleDocs</a>.</p>

<h2>Розробники</h2>
<p>Ця тема розроблена та підтримується MediaTouch 2000. </p>

<h2>Ліцензія</h2>
<p>Ця та всі інші теми, включені до ядра Moodle, розповсюджуються на умовах ліцензії <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>.
</div>
</div>';
$string['configtitle'] = 'Тема Formal white';
$string['creditstomoodleorg'] = 'Показувати лінк на moodle.org';
$string['creditstomoodleorgdesc'] = 'Чи показувати звичний маленький логотип moodle внизу сторінки.';
$string['ctmo_ineverypage'] = 'на кожній сторінці';
$string['ctmo_no'] = 'не показувати';
$string['ctmo_onfrontpageonly'] = 'тільки на головній сторінці';
$string['customcss'] = 'Користувацький CSS';
$string['customcssdesc'] = 'Будь-які вказані тут стилі CSS будуть вбудовані на кожну сторінку, що дозволяє легко змінювати цю тему.';
$string['customlogourl'] = 'Користувацький логотип';
$string['customlogourldesc'] = 'Можна змінити логотип, який використовується в цій темі, вказавши повний або відносний URL нового (наприклад, http://www.yoursite.tld/mylogo.png або ../path/to/your/logo.png). Типово використовується логотип шириною 200 та висотою 50 пікселів. Краше використовувати PNG з прозорим тлом.';
$string['displayheading'] = 'Показувати заголовок сторінки';
$string['displaylogo'] = 'Показувати логотип';
$string['fontsizereference'] = 'Розмір шрифта';
$string['fontsizereferencedesc'] = 'Цей параметр дозволяє встановити типовий розмір шрифта для цієї теми. Не рекомендується задавати розмір понад 13px, оскільки відомі випадки, коли це призводило до проблем відображення деяких блоків.';
$string['footnote'] = 'Підвалини';
$string['footnotedesc'] = 'Додане в текстову область буде виведено в нижній частині кожної сторінки.';
$string['framemargin'] = 'Поля фрейма';
$string['framemargindesc'] = 'Простір між фреймом та краєм вікна браузера. (Цей параметр буде ігноруватися, якщо запитується "{$a}" ).';
$string['frontpagelogourl'] = 'Власний логотип головної сторінки';
$string['frontpagelogourldesc'] = 'Можна змінити логотип, який показується на головній сторінці сайту, вказавши повний або відносний URL нового (наприклад, http://www.yoursite.tld/myfrontpagelogo.png або ../path/to/your/logo.png). Типово використовується логотип шириною 300 та висотою 80 пікселів. Краще використовувати PNG-файл з прозорим тлом.';
$string['headerbgc'] = 'Колір тла заголовків блоків';
$string['headerbgcdesc'] = 'Параметр задає колір тла заголовків блоків для цієї теми.';
$string['headercontent'] = 'Містиме заголовка';
$string['headercontentdesc'] = 'Виберіть, що показувати у заголовку сторінки - логотип чи текст заголовка.';
$string['lblockcolumnbgc'] = 'Колір тла лівої колонки';
$string['lblockcolumnbgcdesc'] = 'Параметр задає колір тла лівої колонки для цієї теми.';
$string['lemon'] = 'лимонний';
$string['lime'] = 'лаймовий';
$string['mink'] = 'кава з молоком';
$string['noframe'] = 'Вигляд як у Formal white 1.9';
$string['noframedesc'] = 'Виберіть цей параметр, щоб сторінки Moodle виглядали як в Moodle 1.х, без рамки.';
$string['orange'] = 'помаранчевий';
$string['peach'] = 'персиковий';
$string['pluginname'] = 'Formal white';
$string['rblockcolumnbgc'] = 'Колір тла правої колонки';
$string['rblockcolumnbgcdesc'] = 'Параметр задає колір тла правої колонки для цієї теми. Якщо поле залишити порожнім, то буде використано колір тла лівої колонки.';
$string['region-side-post'] = 'Праворуч';
$string['region-side-pre'] = 'Ліворуч';
$string['silver'] = 'срібний';
$string['trendcolor'] = 'Бажаний колір';
$string['trendcolordesc'] = 'Виберіть бажаний основний колір теми.';
