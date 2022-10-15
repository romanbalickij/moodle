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
 * Strings for component 'report_coursesize', language 'uk', version '3.11'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Усі курси';
$string['backupsize'] = 'Резервний розмір';
$string['calcmethod'] = 'Оновити основний звіт';
$string['calcmethodcron'] = 'Планове завдання';
$string['calcmethodhelp'] = 'Якщо обчислюється за запланованим завданням, звіт оновиться в запланований час і кешує результати для подальшого перегляду. Це рекомендується для миттєвих обчислень, оскільки це може бути інтенсивним/повільним запитом для виконання.';
$string['calcmethodlive'] = 'При завантаженні сторінки';
$string['catsystembackupuse'] = 'Використання резервного копіювання системи та категорії становить {$a}.';
$string['catsystemuse'] = 'Використання системи та категорій за межами користувачів і курсів становить {$a}.';
$string['coursebackupbytes'] = '{$a->backupbytes} байтів, використаних для резервного копіювання курсом {$a->shortname}';
$string['coursebytes'] = '{$a->bytes} байтів, використаних курсом {$a->shortname}';
$string['coursereport'] = 'Резюме типів плагінів – ПРИМІТКА, що це може відрізнятися від переліку основних страв і, ймовірно, є більш точним.';
$string['coursesize'] = 'Розмір курсу';
$string['coursesize:view'] = 'Переглянути звіт про розмір курсу';
$string['coursesize_desc'] = '<p>Цей звіт містить лише приблизні значення, якщо файл використовується кілька разів протягом курсу або в кількох курсах, звіт враховує кожен екземпляр, навіть якщо Moodle зберігає лише одну фізичну версію на диску.</p>';
$string['coursesummary'] = '(переглянути статистику)';
$string['diskusage'] = 'Всього';
$string['emptycourseshidden'] = 'Курси, які не використовують сховище файлів, виключено з цього звіту.';
$string['exportcsv'] = 'Експортувати CSV';
$string['filearea'] = 'Область файлу';
$string['lastupdate'] = '(Останнє оновлено {$a})';
$string['lastupdatenever'] = 'Очікування запланованого завдання для створення статистики.';
$string['nouserfiles'] = 'Не вказано жодних файлів користувача.';
$string['pluginname'] = 'Розмір курсу';
$string['privacy:metadata'] = 'Плагін розміру курсу не зберігає жодних персональних даних.';
$string['sharedusage'] = 'Спільне використання';
$string['sharedusagecourse'] = 'Приблизно {$a} ділиться з іншими курсами.';
$string['sitefilesusage'] = 'Звіт про використання файлу';
$string['sizepermitted'] = '(Дозволене використання {$a} МБ)';
$string['totalsitedata'] = 'Загальне використання даних сайту: {$a}';
$string['userstopnum'] = 'Користувачі (найбільше {$a})';
