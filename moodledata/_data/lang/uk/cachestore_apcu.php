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
 * Strings for component 'cachestore_apcu', language 'uk', version '3.11'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Майте на увазі, що APCu є лише підходящим вибором для сайтів одного вузла або кешу, які можна зберігати локально.
Докладнішу інформацію див. У <a href="{$a}"> документації кешу користувачів APC </a>.';
$string['notice'] = 'Повідомлення';
$string['pluginname'] = 'Кеш користувача APC (APCu)';
$string['prefix'] = 'Префікс';
$string['prefix_help'] = 'Вищевказаний префікс використовується для всіх ключів, які зберігаються в цьому примірнику APC. За замовчуванням використовується префікс бази даних.';
$string['prefixinvalid'] = 'Вибраний префікс є недійсним. Можна використовувати лише a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'Вибраний префікс не є унікальним. Виберіть унікальний префікс.';
$string['privacy:metadata'] = 'Плагін кешу користувача APC (APCu) зберігає дані як частину функцій кешування, але ці дані регулярно видаляються і не передаються зовні.';
$string['testperformance'] = 'Тестування продуктивності';
$string['testperformance_desc'] = 'Якщо увімкнено, продуктивність APCu буде включена під час перегляду сторінки Тестова продуктивність. Включення цього на виробничому сайті не рекомендується.';
