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
 * Strings for component 'enrol_lti', language 'uk', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Зверніть увагу: Рекомендується включити параметр сайту "Дозволити вкладення у фрейм", щоб засоби показувалися у фреймі, а не у новому вікні.';
$string['authltimustbeenabled'] = 'Зверніть увагу: Цей модуль вимагає. щоб також був включений модуль ЗВН аутентифікації.';
$string['cartridgeurl'] = 'URL-адреса картриджа';
$string['couldnotestablishproxy'] = 'Не вдалося встановити проксі із споживачем.';
$string['deletedactivity'] = 'Видалена діяльність';
$string['deletedactivityalt'] = 'Активність, спільну для цього екземпляра, видалено';
$string['deletedactivitydescription'] = 'Активність, спільну для цього екземпляра, видалено. Ви можете вибрати іншу дію для спільного використання, відредагувавши примірник, або, якщо він більше не потрібний, ви можете просто видалити примірник. Видалення екземпляра призведе до видалення всіх пов’язаних реєстрацій користувачів.';
$string['enrolenddate'] = 'Дата завершення';
$string['enrolenddate_help'] = 'Якщо включено, то користувачі можуть мати доступ лише до вказаної дати.';
$string['enrolenddateerror'] = 'Дата завершення зарахування не може бути раніше ніж дата початку зарахування';
$string['enrolisdisabled'] = 'Модуль "Публікації як ЗВН засобу" відключено.';
$string['enrolmentfinished'] = 'Зарахування закінчено.';
$string['enrolmentnotstarted'] = 'Зарахування ще не почато.';
$string['enrolperiod'] = 'Термін навчання';
$string['enrolperiod_help'] = 'Термін, протягом якого зарахування буде дійсним, починається з моменту запису користувачем себе з віддаленої системи. Якщо параметр відключено, то термін ніяк не обмежується.';
$string['enrolstartdate'] = 'Дата початку';
$string['enrolstartdate_help'] = 'Якщо включено, то користувачі можуть мати доступ лише з вказаної дати.';
$string['failedrequest'] = 'Помилка запиту. Причина: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Для доступу до засобу, будь ласка, перейдіть за посиланням нижче.';
$string['gradesync'] = 'Синхронізація оцінок';
$string['gradesync_help'] = 'Чи передавати оцінки із засобу до віддаленої системи (клієнта ЗВН)';
$string['incorrecttoken'] = 'Токен був неправильним. Перевірте URL-адресу та повторіть спробу або зверніться до адміністратора цього інструмента.';
$string['invalidrequest'] = 'Невірний запит';
$string['invalidtoolconsumer'] = 'Недійсний споживач інструменту.';
$string['launchdetails'] = 'Деталі запуску';
$string['launchdetails_help'] = 'Для налаштування інструмента потрібні URL-адреса картриджа (також називається URL-адресою конфігурації) плюс секретна URL-адреса або URL-адреса запуску.';
$string['launchurl'] = 'URL-адреса запуску';
$string['lti:config'] = 'Налаштовувати екземпляри "Публікації як ЗВН засобу"';
$string['lti:unenrol'] = 'Відраховувати користувачів з курсу';
$string['maxenrolled'] = 'Максимум зарахованих користувачів';
$string['maxenrolled_help'] = 'Максимальне число зовнішніх користувачів, які можуть отримати доступ до засобу. Якщо вказати нуль, то максимум не обмежується.';
$string['maxenrolledreached'] = 'Досягнуто максимуму зовнішніх користувачів, яким дозволено доступ до засобу.';
$string['membersync'] = 'Синхронізація користувачів';
$string['membersync_help'] = 'Чи запланована задача синхронізує зареєстрованих користувачів у віддаленій системі з реєстрацією на цьому курсі, створення облікового запису для кожного віддаленого користувача, якщо це необхідно, і реєстрацію чи скасування їх за потреби. Якщо встановлено значення ні, у момент, коли віддалений користувач отримає доступ до інструменту, для нього буде створено обліковий запис, і він буде автоматично зареєстрований.';
$string['membersyncmode'] = 'Режим синхронізації користувачів';
$string['membersyncmode_help'] = 'Як віддалені користувачі повинні бути зараховані та/або відраховані з курсу.';
$string['membersyncmodeenrolandunenrol'] = 'Зараховувати нових та відраховувати відсутніх користувачів';
$string['membersyncmodeenrolnew'] = 'Зарахувати нових користувачів';
$string['membersyncmodeunenrolmissing'] = 'Відрахувати відсутніх користувачів';
$string['notoolsprovided'] = 'Не надано засобів';
$string['opentool'] = 'Відкрити засіб';
$string['pluginname'] = 'Публікувати як ЗВН засіб';
$string['pluginname_desc'] = 'Модуль "Публікувати як ЗВН засіб", разом з модулем аутентифікації ЗВН, дозволяє зовнішнім користувачам отримати доступ до вказаних курсів та їх діяльностей. Іншими словами, Moodel діє як провайдер ЗВН засобів.';
$string['privacy:metadata:enrol_lti_users'] = 'Список користувачів, зареєстрованих через постачальника LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Час останнього доступу користувача до курсу';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Остання оцінка, яку користувач мав';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Час реєстрації користувача';
$string['privacy:metadata:enrol_lti_users:userid'] = 'Ідентифікатор користувача';
$string['registration'] = 'Опублікована реєстрація інструменту';
$string['registrationurl'] = 'URL реєстрації';
$string['registrationurl_help'] = 'Якщо використовується реєстраційна URL-адреса (також називається проксі-URL), інструмент налаштовується автоматично.';
$string['remotesystem'] = 'Віддалена система';
$string['requirecompletion'] = 'Вимагає закінчення курсу або діяльності до синхронізації оцінок';
$string['returnurlnotset'] = 'URL-адресу повернення не встановлено.';
$string['roleinstructor'] = 'Роль для викладача';
$string['roleinstructor_help'] = 'Роль, яка надається у засобі зовнішньому викладачеві.';
$string['rolelearner'] = 'Роль для студента';
$string['rolelearner_help'] = 'Роль, яка надається у засобі зовнішньому студенту.';
$string['secret'] = 'Секретний ключ';
$string['secret_help'] = 'Рядок символів, який є спільним із зовнішньою системою (клієнтом ЗВН) для забезпечення доступу до засобу.';
$string['sharedexternaltools'] = 'Опубліковано як ЗВН засіб';
$string['successfulregistration'] = 'Успішна реєстрація';
$string['tasksyncgrades'] = 'Синхронізація оцінок модуля "Публікувати як ЗВН засіб"';
$string['tasksyncmembers'] = 'Синхронізація користуачів модуля "Публікувати як ЗВН засіб"';
$string['toolsprovided'] = 'Опубліковані засоби';
$string['toolsprovided_help'] = 'Інструментом можна поділитися з іншим сайтом, надавши деталі запуску або реєстраційну URL-адресу.';
$string['tooltobeprovided'] = 'Засоби до публікації';
$string['toolurl'] = 'URL-адреса інструмента';
$string['userdefaultvalues'] = 'Типові значення користувача';
