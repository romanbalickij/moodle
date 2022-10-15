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
 * Strings for component 'subcourse', language 'uk', version '3.11'.
 *
 * @package     subcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentgrade'] = 'Поточна оцінка: {$a}';
$string['errfetch'] = 'Неможливо виконати вибірку оцінок: код помилки {$a}';
$string['errlocalremotescale'] = 'Неможливо виконати вибірку оцінок: підсумкова оцінка використовує локальне шкалювання.';
$string['fetchnow'] = 'Виконати вибірку зараз';
$string['gotocoursename'] = 'Перейди до курсу <a href="{$a->href}">{$a->name}</a>';
$string['hiddencourse'] = '*прихований*';
$string['lastfetchnever'] = 'Вибірка оцінок ще не виконувалась';
$string['lastfetchtime'] = 'Останній запит: {$a}';
$string['modulename'] = 'Підкурс';
$string['modulename_help'] = '<p>Модуль <b>Підкурс</b> реалізує дуже просту і корисну функціональність: за його допомогою можна до базового курсу додати набор дочірніх підкурсів у вигляді діяльностей.</p>
<p>Особливістю використання цього модулю полягає в тому, що в базовий курс автоматично додаються студенти з усіх доданих підкурсів. Передбачена можливість отримувати дані про проходження та оцінки з підкурсів в базовий курс, де вони комбінуються в підсумкову оцінку.</p>
<p>Це дозволяє розбивати курси на окремі блоки, або створювати більш складну структуру курсів.</p>
<p><b>Підкурс</b> можна використовувати:</p>
<ul>
  <li>Коли один курс є обов’язковим для всіх, але при цьому ще додатково плюс один курс на вибір</li>
  <li>Коли потрібно, щоб різні курси були призначені для одної групи студентів</li>
</ul>';
$string['modulenameplural'] = 'Підкурси';
$string['nocoursesavailable'] = 'Немає курсів для вибірки оцінок';
$string['nosubcourses'] = 'В цьому курсі немає підкурсів';
$string['pluginadministration'] = 'Кервання підкусом';
$string['pluginname'] = 'Підкурс';
$string['refcourse'] = 'Посилання на курс';
$string['refcourse_help'] = 'Студенти мають бути зараховані на підкурс. Оцінки будуть вибиратися з урахуванням посилання на курс.

Ви повинні бути викладачем, щоб побачити цей список. Ви можете запитати адміністратора налаштувати вам цей підкурс, щоб ви могли робити вибірку оцінок з інших курсів.';
$string['refcoursecurrent'] = 'Залишити поточне посилання';
$string['refcourselabel'] = 'Зробити вибірку оцінок з';
$string['refcoursenull'] = 'Посилання на курс не налаштоване';
$string['subcoursename'] = 'Ім\'я підкурсу';
