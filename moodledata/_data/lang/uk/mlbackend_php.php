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
 * Strings for component 'mlbackend_php', language 'uk', version '3.11'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Лише частина набору даних була оцінена через його розмір. Встановіть $CFG->mlbackend_php_no_memory_limit, якщо ви впевнені, що ваша система може впоратися з набором даних {$a}.';
$string['errorcantloadmodel'] = 'Файл моделі {$a} не існує. Модель повинна бути навчена, перш ніж використовувати її для прогнозування.';
$string['errorlowscore'] = 'Точність прогнозування оціненої моделі не дуже висока, тому деякі прогнози можуть бути неточними. Оцінка моделі = {$a->score}, мінімальна оцінка = {$a->minscore}';
$string['errornotenoughdata'] = 'Немає достатньо даних, щоб оцінити цю модель за допомогою наданого інтервалу аналізу.';
$string['errornotenoughdatadev'] = 'Результати оцінки дуже відрізнялися. Рекомендується зібрати більше даних, щоб переконатися, що модель дійсна. Результати оцінки стандартне відхилення = {$a->deviation}, максимальне рекомендоване стандартне відхилення = {$a->accepteddeviation}';
$string['errorphp7required'] = 'Для серверної частини машинного навчання PHP потрібен PHP 7';
$string['pluginname'] = 'PHP-механізм машинного навчання';
$string['privacy:metadata'] = 'Додатковий модуль машинного навчання PHP не зберігає жодних особистих даних.';
