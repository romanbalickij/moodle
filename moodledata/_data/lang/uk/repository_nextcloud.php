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
 * Strings for component 'repository_nextcloud', language 'uk', version '3.11'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Внутрішній і зовнішній';
$string['cannotconnect'] = 'Користувача не вдалося автентифікувати. Будь ласка, увійдіть, а потім завантажте файл.';
$string['chooseissuer'] = 'Емітент';
$string['chooseissuer_help'] = 'Щоб додати нового емітента, перейдіть до Адміністрування сайту/Сервер/Служби OAuth 2.';
$string['configplugin'] = 'Конфігурація репозиторію Nextcloud';
$string['configuration_exception'] = 'У конфігурації клієнта OAuth 2 сталася помилка: {$a}';
$string['contactadminwith'] = 'Запитану дію не вдалося виконати. Якщо це трапляється неодноразово, зв’яжіться з адміністратором сайту, надавши таку додаткову інформацію: <br>"<i>{$a}</i>".';
$string['couldnotmove'] = 'Не вдалося перемістити запитаний файл у папку {$a}.';
$string['defaultreturntype'] = 'Тип повернення за замовчуванням';
$string['endpointnotdefined'] = 'Кінцева точка {$a} не визначена.';
$string['external'] = 'Зовнішні (лише посилання, що зберігаються в Moodle)';
$string['externalpubliclinkwarning'] = 'Попередження: цей файл стане загальнодоступним.';
$string['filenotaccessed'] = 'Не вдалося отримати доступ до запитаного файлу. Будь ласка, перевірте, чи ви вибрали дійсний файл і чи пройшли автентифікацію за допомогою правильного облікового запису.';
$string['fileoptions'] = 'Типи та значення за замовчуванням для повернених файлів можна налаштувати тут. Зауважте, що всі файли, пов’язані ззовні, будуть оновлені, щоб власником був системний обліковий запис Moodle.';
$string['foldername'] = 'Ім’я папки, створеної в приватному просторі користувачів Nextcloud, яка містить усі посилання з контрольованим доступом.';
$string['foldername_help'] = 'Щоб користувачі знаходили файли, до яких їм поділилися, спільні ресурси зберігаються в певній папці.

Цей параметр визначає назву папки. Рекомендується вибрати ім’я, пов’язане з вашим екземпляром Moodle.';
$string['internal'] = 'Внутрішній (файли, що зберігаються в Moodle)';
$string['invalidresponse'] = 'Недійсна відповідь сервера.';
$string['issuervalidation_invalid'] = 'Наразі емітент {$a} активний, однак він не реалізує всі необхідні кінцеві точки. Репозиторій не працюватиме.';
$string['issuervalidation_valid'] = 'Наразі емітент {$a} активний.';
$string['issuervalidation_without'] = 'Ви ще не вибрали сервер Nextcloud як емітента OAuth 2.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Переглянути Nextcloud';
$string['no_right_issuers'] = 'Жоден із існуючих емітентів не реалізує всі необхідні кінцеві точки. Будь ласка, зареєструйте відповідного емітента.';
$string['noclientconnection'] = 'Не вдалося підключити клієнтів OAuth.';
$string['notauthorized'] = 'Ви не уповноважені виконувати цей запит. Будь ласка, переконайтеся, що ви автентифіковані за допомогою правильного облікового запису.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Посилання до конфігурація служб OAuth 2">Конфігурація служб OAuth 2</a>';
$string['pathnotcreated'] = 'Не вдалося створити шлях до папки {$a} в системному обліковому записі.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Nextcloud репозиторій';
$string['privacy:metadata'] = 'Плагін репозиторію Nextcloud не зберігає жодних персональних даних і не передає дані користувача до віддаленої системи.';
$string['request_exception'] = 'Не вдалося надіслати запит до {$a->instance}. {$a->errormessage}';
$string['requestnotexecuted'] = 'Запит не може бути виконаний. Якщо це трапляється неодноразово, зверніться до адміністратора сайту.';
$string['right_issuers'] = 'Такі емітенти реалізують необхідні кінцеві точки: {$a}';
$string['supportedreturntypes'] = 'Підтримувані файли';
