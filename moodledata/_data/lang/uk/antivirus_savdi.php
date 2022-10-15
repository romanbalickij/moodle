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
 * Strings for component 'antivirus_savdi', language 'uk', version '3.11'.
 *
 * @package     antivirus_savdi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkconnectivityok'] = 'Тест сканера пройшов успішно.';
$string['checkconnectivityscandataerror'] = 'Помилка тесту SCANDATA: {$a}.';
$string['checkconnectivityscanfileerror'] = 'Помилка тесту SCANFILE: {$a}.';
$string['checkconnectivitytmpfileerror'] = 'Зв’язок зі сканером пройшов успішно, але не вдалося створити тестовий файл.';
$string['clientresult0'] = 'OK';
$string['clientresult1'] = 'Вірус знайдений';
$string['clientresult2'] = 'Помилка';
$string['clientresult3'] = 'Запит не підтримується';
$string['clientresult4'] = 'Дані занадто великі';
$string['connretry'] = 'Повторіть спробу підключення';
$string['daemonerroractlikevirus'] = 'Розглядати файли як заражені';
$string['daemonerrordonothing'] = 'Розглядайте файли як ОК';
$string['errorfileopen'] = 'Помилка відкриття файлу {$a}';
$string['errorgeneral'] = 'Сканер SAVDI сказав: {$a}';
$string['errorprotocol'] = 'Помилка протоколу SAVDI: {$a}';
$string['errorrejected'] = 'Сервер SAVDI відхилив запит: {$a}';
$string['errorsenddatatoobig'] = 'Розмір даних перевищує ліміт сервера SAVDI на {$a} байт';
$string['errorservernotsupported'] = 'Сервер SAVDI не підтримує тип запиту {$a}';
$string['pluginname'] = 'Антивірус Sophos SAVDI';
$string['testclient'] = 'Перевірте підключення Sophos SAVDI';
$string['testclienthasscandata'] = 'Підтримує запит SCANDATA';
$string['testclienthasscandir'] = 'Підтримує запит SCANDIR';
$string['testclienthasscandirr'] = 'Підтримує запит SCANDIRR';
$string['testclienthasscanfile'] = 'Підтримує запит SCANFILE';
$string['testclientmaxscandata'] = 'Максимальний розмір запиту SCANDATA';
$string['testclientresult'] = 'Результат підключення';
$string['testclientscandataresult'] = 'Результат запиту SCANDATA';
$string['testclientscanfileresult'] = 'Результат запиту SCANFILE';
$string['testclientscantestpath'] = 'Завантажено тимчасовий файл';
$string['testclientscanuploaderror'] = 'Помилка завантаження файлу: {$a}.';
$string['testclientscanuploaderrornotrecognised'] = 'Помилка завантаження файлу PHP: {$a} не розпізнається як завантажений файл.';
