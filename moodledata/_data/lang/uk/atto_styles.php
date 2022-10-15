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
 * Strings for component 'atto_styles', language 'uk', version '3.11'.
 *
 * @package     atto_styles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['code_example'] = '{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Blue box",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "box blue",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"preview": true<br />
}';
$string['code_example_bootstrap'] = '{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Success alert",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-success"<br />
}';
$string['code_example_bootstrap_multiple'] = '[{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Success alert",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-success"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Danger alert",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-danger"<br />
}]';
$string['config'] = 'Налаштування стилів';
$string['config_desc'] = 'Конфігурація віджета стилів для Atto у форматі JSON. <br /> Ви можете знайти великий приклад у README.md у розділі <a href="https://github.com/moodleuulm/moodle-atto_styles/blob/master/README.md#usage--settings" >"Використання та налаштування"</a>.
<hr />
Наприклад:<br />
{$a->code_example}
<hr />
Атрибут <em>title</em> визначає назву стилю у віджеті Atto styles.<br />
<br />
Заголовок також може підтримувати багатомовний фільтр Moodle (якщо ввімкнено), але додаткові подвійні лапки потрібно буде екранувати за допомогою зворотної косої риски.<br />
Для прикладу перегляньте файл README плагіна.<br />
<hr />
Атрибут <em>type</em> може містити одне з двох значень: "block" або "inline".<br />
<br />
"block" створить тег div із заданим класом(ами) і буде діяти як стандартний елемент рівня блоку. Це займе поточний елемент рівня блоку і може застосовуватися не тільки до поточного виділеного тексту.<br />
<br />
"inline" створить тег span із заданим класом(ами) і буде діяти як стандартний вбудований елемент. Це буде застосовано лише до поточного виділеного тексту.
<hr />
Атрибут <em>classes</em> приймає назву класу CSS, яке буде застосовано до блоку/вбудованого тексту.<br />
<br />
Для кожного елемента можна визначити кілька класів, розділених пробілом. Усі вони будуть застосовані до блоку/вбудованого тексту.<br />
<br />
Визначення класів CSS не можуть бути створені в цьому плагіні. Вам доведеться додати визначення класів CSS до своєї теми або додаткові налаштування HTML Moodle.
<hr />
Атрибут <em>preview</em> приймає логічні значення true або false (за замовчуванням). Якщо для цього значення встановлено значення true, то елемент стилю отримає реальний попередній перегляд стилю. В іншому випадку елемент стилю просто показуватиме його назву у вигляді простого тексту.<br />
<br />
Зверніть увагу, що якщо ви вирішите показати попередній перегляд для елемента стилю, цей клас має бути визначений у CSS таким чином, щоб його можна було застосувати до тегів span, навіть якщо сам елемент стилю є елементом рівня блоку.
<hr />
В установках Moodle із темами на основі завантаження (особливо <em>Boost</em>) ви також можете створювати стилі за допомогою завантажувальних CSS-класів замість того, щоб визначати власні класи.
<br /><br />
Наприклад:<br />
{$a->code_example_bootstrap}
<br/><br/>
Щоб отримати додаткову інформацію про класи Bootstrap, перейдіть за такими посиланнями в документації Bootstrap 4:
<ul>
<li><a href="https://getbootstrap.com/docs/4.3/components/badge/">Значки Bootstrap</a></li>
<li><a href="https://getbootstrap.com/docs/4.3/components/alerts/">Сповіщення Bootstrap</a></li>
<li><a href="https://getbootstrap.com/docs/4.3/utilities/">Утиліти Bootstrap</a></li>
</ul>
<hr />
Зауважте, що кілька визначень потрібно взяти в квадратні дужки.
<br /><br />
Наприклад:<br />
{$a->code_example_bootstrap_multiple}';
$string['inlinehint'] = 'Виберіть текст, щоб застосувати цей стиль';
$string['jsondecodemessage'] = 'Введений код JSON недійсний.';
$string['nostyle'] = 'Без стилю';
$string['pluginname'] = 'Стилі';
$string['privacy:metadata'] = 'Модуль atto_styles не зберігає жодних персональних даних.';
$string['settings'] = 'Налаштування стилів';
