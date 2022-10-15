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
 * Strings for component 'coursecertificate', language 'uk', version '3.11'.
 *
 * @package     coursecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = 'Ця діяльність наразі схована. Якщо зробити видимою, то студенти, які відповідають вимогам доступу до занять автоматично отримають PDF копію сертифікату.';
$string['automaticsend_helptitle'] = 'Допомогти з автоматичною розсилкою';
$string['automaticsenddisabled'] = 'Автоматично надсилати сертифікат, якщо вимкнено.';
$string['automaticsenddisabled_help'] = 'Якщо залишити цей параметр вимкненим, учням необхідно буде використовувати окреме посилання на цю діяльність у курсі для того щоб отримати сертифікат коли вони виконають усі вимоги для цього.<br/><br/> Якщо ж ввімкнути його, то учні автоматично отримають копію сертифікату в формате PDF одразу як виконають усі вимоги. Зверніть увагу, що всі учні, які вже відповідають вимогам доступу отримають сертифікат при ввімкненні цього параметру.';
$string['automaticsenddisabledalert'] = 'Студентам, які відповідають вимогам доступу до цього заняття, буде видано сертифікат як тільки вони отримають до нього доступ.';
$string['automaticsenddisabledinfo'] = 'Наразі {$a} учнів відповідають усім вимогам цієї діяльності й після того, як вони отримають доступ до неї, їм буде видано сертифікат.';
$string['automaticsendenabled'] = 'Автоматично надсилати сертифікат, якщо ввімкнено.';
$string['automaticsendenabled_help'] = 'Якщо залишити цей параметр ввімкненим, учні будуть автоматично отримувати копію сертифікату в форматі PDF, як тільки вони виконають усі вимоги цієї діяльності.<br/><br/>Вимкнувши його, учням необхідно буде використовувати посилання  цієї діяльності у курсі, щоб отримати сертифікат, коли виконають усі вимоги.';
$string['certificateissues'] = 'Проблеми з сертифікатом';
$string['certifiedusers'] = 'Сертифіковані користувачі';
$string['chooseatemplate'] = 'Обрати шаблон...';
$string['code'] = 'Код';
$string['coursecertificate:addinstance'] = 'Додати нову діяльність "Сертифікат з Курсу"';
$string['coursecertificate:receive'] = 'Отримувати видані сертифікати';
$string['coursecertificate:view'] = 'Перегляд сертифікату курсу';
$string['coursecertificate:viewreport'] = 'Переглянути звіт щодо виданих сертифікатів';
$string['coursecompletiondate'] = 'Дата завершення';
$string['courseinternalid'] = 'Використовувати внутрішній ID курсу в посиланнях';
$string['courseurl'] = 'Посилання курсу';
$string['disableautomaticsend'] = 'Учні більше не будут автоматично отримувати копію сертификату в форматі PDF коли виконають усі вимоги цієї діяльності. Замість цього їм необхідно буде використовувати посилання на цю діяльність у курсі коли вони досягнуть усіх вимог.';
$string['enableautomaticsend'] = 'Всі учні автоматично отримують копію сертифікату в форматі PDF як тільки виконують усі вимоги щодо цієї діяльності.<br/><br/> Наразі {$a} учнів вже відповідають вимогам, але ще не скористалися цією діяльністю. Вони також негайно отримають свою копію.<br/><br/> Учні, які вже виконали це завдання, більше не отримають сертифікат.';
$string['enableautomaticsendpopup'] = 'Всі учні автоматично отримують свою копію сертифікату в форматі PDF як тільки виконають вимоги доступу до цієї діяльності.<br/><br/> Учні, які вже відповідають цим вимогам, але ще не скористалися цією діяльністю негайно отримають свою копію також.<br/><br/>Учні, які вже скористалися цією діяльністю більше не отримають сертифікат.';
$string['expirydate'] = 'Строк дії';
$string['issueddate'] = 'Дата видачі';
$string['managetemplates'] = 'Керування шаблонами сертифікатів';
$string['modulename'] = 'Сертифікат Курсу';
$string['modulename_help'] = 'Модуль сертифікатів курсу надає учням можливість відмічати досягнення шляхом отримання сертифікатів.<br/><br/>Він дозволяє обрати з різних шаблонів сертифікатів ті, що автоматично відображають дані користувача, такі як повне ім\'я, курс і т.п.<br/><br/>Користувачі можуть самі завантажувати копію сертифікату в форматі PDF, скориставшись цією діяльністю. Також є можливість автоматичної відправки їм копії в форматі PDF на електронну адресу.<br/><br/> Якщо шаблон, що використовується в цій діяльності, містить QR-код, то користувачі зможуть відсканувати його щоб перевірити свої сертифікати.';
$string['modulenameplural'] = 'Сертифікати курсу';
$string['notemplateselected'] = 'Обраний шаблон не знайдено. Перейдіть в налаштування діяльності та оберіть новий.';
$string['notemplateselecteduser'] = 'Сертифікат не доступний. Зв\'яжіться з адміністратором курсу.';
$string['notemplateswarning'] = 'Немає доступних шаблонів. Зв\'яжіться з адміністратором сайту.';
$string['notemplateswarningwithlink'] = 'Немає доступних шаблонів. Перейдіть на <a href="{$a}">сторінку керування шаблонами сертифікатів</a> та створіть новий.';
$string['nouserscertified'] = 'Немає сертифікованих користувачів';
$string['page-mod-coursecertificate-x'] = 'Будь-яка сторінка модуля Сертифікат Курсу';
$string['pluginadministration'] = 'Керування сертифікатом курсу';
$string['pluginname'] = 'Сертифікат Курсу';
$string['previewcoursefullname'] = 'Повна назва курсу';
$string['previewcourseshortname'] = 'Коротка назва курсу';
$string['privacy:metadata'] = 'Сертифікат курсу не містить персональних даних.';
$string['revoke'] = 'Відкликати';
$string['revokeissue'] = 'Ви впевнені щодо відкликання цього сертифікату у цього користувача?';
$string['selectdate'] = 'Обрати дату';
$string['selecttemplatewarning'] = 'Як тільки в цій діяльності буде видано хоча б один сертифікат це поле буде заблоковане для редагування.';
$string['status'] = 'Статус';
$string['taskissuecertificates'] = 'Видача сертифікатів про проходження курсу';
$string['template'] = 'Шаблон';
