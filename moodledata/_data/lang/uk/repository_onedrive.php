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
 * Strings for component 'repository_onedrive', language 'uk', version '3.11'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Доступ';
$string['both'] = 'Внутрішній і зовнішній';
$string['cachedef_folder'] = 'Ідентифікатори файлів OneDrive для папок в системному обліковому записі';
$string['configplugin'] = 'Налаштуйте плагін OneDrive';
$string['confirmimportskydrive'] = 'Ви впевнені, що хочете імпортувати всі файли зі сховища Microsoft SkyDrive до сховища Microsoft OneDrive? Репозиторій Microsoft OneDrive має бути налаштований і працювати для імпортованих файлів, щоб продовжувати працювати як раніше. Попередження: цю дію неможливо скасувати!';
$string['defaultreturntype'] = 'Тип повернення за замовчуванням';
$string['external'] = 'Зовнішні (лише посилання, що зберігаються в Moodle)';
$string['fileoptions'] = 'Типи та значення за замовчуванням для повернених файлів можна налаштувати тут. Зауважте, що всі файли, пов’язані ззовні, будуть оновлені, щоб власником був системний обліковий запис Moodle.';
$string['importskydrivefiles'] = 'Імпорт файлів із сховища Microsoft SkyDrive';
$string['internal'] = 'Внутрішній (файли, що зберігаються в Moodle)';
$string['issuer'] = 'Сервіс OAuth 2';
$string['issuer_help'] = 'Виберіть службу OAuth 2, яка налаштована для спілкування з OneDrive API. Якщо сервіс ще не існує, його потрібно створити.';
$string['mysitenotfound'] = 'Ви ніколи раніше не входили в OneDrive. Ви повинні увійти в OneDrive принаймні один раз, перш ніж його можна буде використовувати з Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Посилання до конфігурація служб OAuth 2">Конфігурація служб OAuth 2</a>';
$string['onedrive:view'] = 'Переглянути сховище OneDrive';
$string['owner'] = 'Власник: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'Репозиторій Microsoft OneDrive зберігає тимчасові дозволи доступу та передає дані користувача з Moodle до віддаленої системи.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'Microsoft OneDrive з ідентифікатором елемента тимчасового надання доступу.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'Ідентифікатор дозволу на тимчасовий доступ до Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Дата/час створення тимчасового дозволу на доступ до Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'Дата/час зміни надання тимчасового доступу Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'Ідентифікатор користувача, який змінює тимчасовий доступ до Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Пошуковий текстовий запит користувача репозиторію Microsoft OneDrive.';
$string['removetempaccesstask'] = 'Видалити тимчасовий доступ на запис із контрольованих посилань';
$string['searchfor'] = 'Шукати {$a}';
$string['servicenotenabled'] = 'Доступ не налаштовано.';
$string['skydrivefilesimported'] = 'Усі файли було імпортовано із репозиторію Microsoft SkyDrive.';
$string['skydrivefilesnotimported'] = 'Деякі файли не вдалося імпортувати зі сховища Microsoft SkyDrive.';
$string['supportedreturntypes'] = 'Підтримувані файли';
