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
 * Strings for component 'tool_behat', language 'uk', version '3.11'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Цей інструментарій допомагає розробникам та тестерам створювати файли типу .feature з описом Moodle функціональності та автоматичним їх запуском.';
$string['allavailablesteps'] = 'Усі доступні визначення кроків';
$string['errorapproot'] = '$CFG->behat_ionic_dirroot не вказує на дійсну інсталяцію програми Moodle розробником.';
$string['errorbehatcommand'] = 'Помилка при виконання команди behat з інтерфейсу командного рядка. Спробуйте вручну запустити  з командного рядка "{$a} --help", щоб більше дізнатися про цю проблему.';
$string['errorcomposer'] = 'Компоновщик залежності не встановлено';
$string['errordataroot'] = '$CFG->behat_dataroot не встановлено або він не коректний';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix та $CFG->behat_wwwroot повинні бути встановлені в config.php.';
$string['erroruniqueconfig'] = 'Значення $CFG->behat_dataroot, $CFG->behat_prefix та $CFG->behat_wwwroot повинні відрізнятися від значень $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot та $CFG->phpunit_prefix';
$string['fieldvalueargument'] = 'Значення аргументів поля';
$string['fieldvalueargument_help'] = 'Цей аргумент повинен відповідати значенню поля. Є багато типів полів, прості, наприклад, прапорці або текстова область, або складні, наприклад, вибір дати. Перегляньте документацію для розробників <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Acceptance_testing</a>, щоб дізнатися більше про очікувані значення полів.';
$string['giveninfo'] = 'Дано. Процеси налаштування середовища';
$string['infoheading'] = 'Інформація';
$string['installinfo'] = 'Прочитайте інформація з встановлення та виконання перевірок  {$a}';
$string['newstepsinfo'] = 'Прочитайте {$a}, щоб дізнатися, як додати нові визначення кроків';
$string['newtestsinfo'] = 'Прочитайте інформацію про те, як додати нові тести - {$a}';
$string['nostepsdefinitions'] = 'Немає визначень кроків, які відповідають цьому фільтру';
$string['pluginname'] = 'Перевірки працездатності';
$string['privacy:metadata'] = 'Плагін Acceptance Testing не зберігає жодних персональних даних.';
$string['stepsdefinitionscomponent'] = 'Область';
$string['stepsdefinitionscontains'] = 'Містить';
$string['stepsdefinitionsfilters'] = 'Визначення кроків';
$string['stepsdefinitionstype'] = 'Тип';
$string['theninfo'] = 'Потім. Перевірка для отримання очікуваних результатів';
$string['unknownexceptioninfo'] = 'Виявлено проблему в Selenium або у вашому браузері. Будь ласка, переконайтеся, що ви використовуєте останню версію Selenium. Помилка:';
$string['viewsteps'] = 'Фільтр';
$string['warndirrootconfigfound'] = 'Файл конфігурації знайдено за адресою {$a}. Цей файл не оновлюється автоматично і може стати застарілим. Ми рекомендуємо видалити цей файл.';
$string['wheninfo'] = 'Коли. Дія, яка провокує подію';
$string['wrongbehatsetup'] = 'Щось не так з установкою behat і кроки визначень не можуть бути перерахованими:<b>{$a->errormsg}</b><br/><br/>Будь ласка, перевірте:<ul>
<li>в config.php значення $CFG->behat_dataroot, $CFG->behat_prefix та $CFG->behat_wwwroot відрізняються від значень $CFG->dataroot, $CFG->prefix та $CFG->wwwroot.</li>
<li>ви запускали "{$a->behatinit}" з кореневого каталога Moodle.</li>
<li>Залежності встановлені в vendor/ та файл {$a->behatcommand} мають дозвіл на виконання.</li></ul>';
