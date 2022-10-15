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
 * Strings for component 'tool_httpsreplace', language 'uk', version '3.11'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Завершено';
$string['count'] = 'Кількість елементів вбудованого вмісту';
$string['disclaimer'] = 'Я розумію ризики цієї операції';
$string['doclink'] = 'Інструмент перетворення HTTPS';
$string['doit'] = 'Виконайте перетворення';
$string['domain'] = 'Проблемний домен';
$string['domainexplain'] = 'Коли сайт переміщено з HTTP на HTTPS, весь вбудований HTTP-вміст перестане працювати. Цей інструмент дозволяє автоматично конвертувати вміст HTTP у HTTPS.

Перед виконанням перетворення вміст буде скановано, щоб знайти URL-адреси, які можуть не працювати після перетворення. Ви можете перевірити, чи доступний HTTPS, або знайти альтернативні ресурси.';
$string['domainexplainhelp'] = 'Ці домени є у вашому вмісті, але, схоже, не підтримують вміст HTTPS. Після переходу на HTTPS вміст із цих сайтів більше не відображатиметься в Moodle для користувачів із захищеними сучасними браузерами. Можливо, ці сайти тимчасово або постійно недоступні і не працюватимуть з жодним із налаштувань безпеки. Продовжуйте лише після перегляду цих результатів і визначення того, чи є цей вміст, розміщений на зовнішньому сервері, необов’язковим. Примітка. Цей вміст все одно більше не працюватиме після переходу на HTTPS.';
$string['httpwarning'] = 'Цей екземпляр все ще працює на HTTP. Ви все ще можете запустити цей інструмент, і зовнішній вміст буде змінено на HTTPS, але внутрішній вміст залишиться на HTTP. Вам потрібно буде знову запустити цей сценарій після переходу на HTTPS, щоб перетворити внутрішній вміст.';
$string['notimplemented'] = 'На жаль, ця функція не реалізована у вашому драйвері бази даних.';
$string['oktoprocede'] = 'Сканування не виявило проблем із вашим вмістом. Ви можете перейти до оновлення будь-якого вмісту HTTP, щоб використовувати HTTPS.';
$string['pageheader'] = 'Оновіть URL-адреси зовнішнього вмісту до HTTPS';
$string['pluginname'] = 'Інструмент перетворення HTTPS';
$string['privacy:metadata'] = 'Плагін інструмента перетворення HTTPS не зберігає жодних особистих даних.';
$string['replacing'] = 'Заміна вмісту HTTP на HTTPS...';
$string['searching'] = 'Пошук {$a}';
$string['takeabackupwarning'] = 'Попередження: після запуску цього інструменту зміни не можна скасувати. Перед продовженням рекомендується зробити резервну копію сайту, оскільки існує невеликий ризик заміни неправильного вмісту.';
$string['toolintro'] = 'Якщо ви плануєте переробити свій веб-сайт у HTTPS, ви можете використовувати <a href="{$a}"> інструмент для перетворення HTTPS </a> для перетворення вбудованого контенту в HTTPS.';
