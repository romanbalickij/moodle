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
 * Strings for component 'local_edusupport', language 'uk', version '3.11'.
 *
 * @package     local_edusupport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archive'] = 'Архів';
$string['assigned'] = 'Назначено';
$string['autocreate_orggroup'] = 'Автоматично створювати групи для eduvidual';
$string['autocreate_usergroup'] = 'Автоматично створювати приватну групу для користувача';
$string['be_more_accurate'] = 'Будь-ласка, точніше опишіть Вашу проблему!';
$string['cachedef_supportmenu'] = 'Кеш для меню групи підтримки';
$string['changes_saved_fail'] = 'Зміни не можуть бути збережені.';
$string['changes_saved_successfully'] = 'Зміни збережено.';
$string['contactphone'] = 'Телефон';
$string['contactphone_missing'] = 'Будь-ласка, вкажіть Ваш номер телефону';
$string['courseconfig'] = 'Налаштування курсу';
$string['create_issue'] = 'Звернення до групи підтримки';
$string['create_issue_error_description'] = 'Ваша звернення щодо проблеми не може бути збережене!';
$string['create_issue_error_title'] = 'Помилка';
$string['create_issue_mail_success_description'] = 'Ваша проблема';
$string['create_issue_success_close'] = 'вирішено';
$string['create_issue_success_description'] = 'Ваше звернення щодо проблеми збережено. Ми спробуємо допомогти Вам якомога швидше!';
$string['create_issue_success_description_mail'] = 'Ваше звернення відправлене на пошту. Ми спробуємо допомогти Вам якомога швидше!';
$string['create_issue_success_goto'] = 'Перегляд звернення';
$string['create_issue_success_responsibles'] = 'Контактна особа з цього питання:';
$string['create_issue_success_title'] = 'Успішно';
$string['cron:deleteexpiredissues:title'] = 'видалити застарілі звернення';
$string['cron:reminder:intro'] = 'Це дружне нагадування про наявні звернення, які призначені Вам як eduSupport!';
$string['cron:reminder:title'] = 'Нагадування eduSupport';
$string['dedicatedsupporter'] = 'Відповідальний';
$string['dedicatedsupporter:not_successfully_set'] = 'Не вдалося призначити відповідального';
$string['dedicatedsupporter:successfully_set'] = 'Відповідального успішно призначено';
$string['deletethreshhold'] = 'Видалити звернення після вирішення';
$string['description'] = 'Опис';
$string['description_missing'] = 'Опис відсутній';
$string['edusupport:addinstance'] = 'Додати блок звернення у підтримку';
$string['edusupport:manage'] = 'Керування';
$string['edusupport:myaddinstance'] = 'Додати блок звернення у підтримку';
$string['email_to_xyz'] = 'Відправити лист на пошту {$a->email}';
$string['extralinks'] = 'Зовнішне посилання';
$string['faqlink'] = 'FAQ-посилання';
$string['faqlink:description'] = 'Посилання до FAQ';
$string['faqread'] = 'перемикнути читання FAQ';
$string['faqread:description'] = 'Я підтверджую, що детально ознайомився з <a href="{$a}" target="_blank">FAQ</a> перед публікацією звернення.';
$string['goto_targetforum'] = 'Форум підтримки';
$string['goto_tutorials'] = 'Документи та вказівки';
$string['header'] = 'Запит на допомогу в <i>{$a}</i>';
$string['holidaymode'] = 'Режим відпустки';
$string['holidaymode_end'] = 'Закінчити відпустку';
$string['holidaymode_is_on'] = 'Ввімкнено режим відпустки';
$string['holidaymode_is_on_descr'] = 'Поки Ви у відпустці Вам не будуть призначатися нові звернення.';
$string['issue'] = 'Звернення';
$string['issue:countassigned'] = 'Призначених звернень';
$string['issue:countclosed'] = 'Вирішені звернення';
$string['issue:countcurrent'] = 'Відкриті звернення';
$string['issue:countother'] = 'Інших звернень';
$string['issue_assign'] = 'Призначити звернення';
$string['issue_assign_nextlevel'] = 'Направити до команди підтримки \'{$a->sitename}\'';
$string['issue_assign_nextlevel:error'] = 'На жаль це питання не може бути передане до команди підтримки платформи';
$string['issue_assigned:subject'] = 'Звернення до підтримки призначено';
$string['issue_assigned:text'] = 'Виконання задачі підтримки було покладено на <a href="{$a->wwwroot}/user/view.php?id={$a->id}">{$a->firstname} {$a->lastname}</a>!';
$string['issue_close'] = 'Вирішити звернення';
$string['issue_closed:post'] = 'Це звернення відмічено як вирішене <a href="{$a->wwwroot}/user/view.php?id={$a->fromuserid}">{$a->fromuserfullname}</a>. Відправте це звернення знову до команди підтримки платформи, якщо Вам необхідна додаткова допомога.';
$string['issue_closed:subject'] = 'Вирішене звернення';
$string['issue_responsibles:post'] = '<p>Відповідальність за це звернення покладено на: {$a->responsibles}!</p>
<p>Керівники Вашої організації можуть направити це питання до команди підтримки \'{$a->sitename}\' натиснувши на кнопку "Направити це звернення до команди підтримки \'{$a->sitename}\'" (відображається лише менеджерам у правій верхній частині сторінки). </p>';
$string['issue_responsibles:subject'] = 'Звернення призначено';
$string['issue_revoke'] = 'Відкликати це звернення з більш високого рівня підтримки';
$string['issue_revoke:error'] = 'Вибачте, це звернення не може бути відкликане з більш високого рівня підтримки';
$string['issue_revoke:post'] = '<a href="{$a->wwwroot}/user/view.php?id={$a->fromuserid}">{$a->fromuserfullname}</a> відкликав це звернення з більш високого рівня підтримки';
$string['issue_revoke:subject'] = 'Відкликані звернення';
$string['issues'] = 'Звернення';
$string['issues:assigned'] = 'Призначено';
$string['issues:assigned:none'] = 'Наразі у Вас немає призначень';
$string['issues:closed'] = 'Вирішені звернення';
$string['issues:current'] = 'Мої звернення';
$string['issues:current:none'] = 'У Вас немає звернень. Можете зробити перерву!';
$string['issues:openall'] = '{$a} всього відкрито звернень';
$string['issues:openmine'] = '{$a} для мене';
$string['issues:opennosupporter'] = '{$a} без призначення';
$string['issues:other'] = 'Інші звернення';
$string['label:2ndlevel'] = 'Команда підтримки платформи';
$string['missing_permission'] = 'Відсутні необхідні дозволи';
$string['missing_targetforum'] = 'Відсутній цільовий форум, необхідно налаштувати!';
$string['missing_targetforum_exists'] = 'Налаштований цільовий форум не існує. Помилка налаштування!';
$string['only_you'] = 'Тільки для Вас та Вашої команди';
$string['phonefield'] = 'вимкнути поле телефон';
$string['phonefield:description'] = 'Деактивувати поле телефону в формі створення звернень';
$string['pluginname'] = 'Підтримка';
$string['postto2ndlevel'] = 'Надіслати до команди підтримки платформи';
$string['postto2ndlevel:description'] = 'Одразу направити до команди підтримки \'{$a->sitename}\'';
$string['priority'] = 'встановити пріоритет';
$string['prioritylvl'] = 'ввімкнути пріоритети';
$string['prioritylvl:description'] = 'Якщо ввімкнена Ви можете обирати пріоритет в переліку звернень';
$string['prioritylvl:high'] = 'високий пріоритет';
$string['prioritylvl:low'] = 'низький пріоритет';
$string['prioritylvl:mid'] = 'середній пріоритет';
$string['privacy:metadata'] = 'Цей плагін не зберігає ніяких особистих даних, так як використовує форум в якості основи.';
$string['privacy:metadata:edusupport:courseid'] = 'Ідентифікатор курсу з форумом підтримки';
$string['privacy:metadata:edusupport:currentsupporter'] = 'Ідентифікатор призначеного користувача';
$string['privacy:metadata:edusupport:discussionid'] = 'Ідентифікатор обговорення у форумі';
$string['privacy:metadata:edusupport:issueid'] = 'Номер звернення';
$string['privacy:metadata:edusupport:issues'] = 'Звернення групи підтримки';
$string['privacy:metadata:edusupport:opened'] = 'Статус звернення';
$string['privacy:metadata:edusupport:subscr'] = 'Усі призначені звернення';
$string['privacy:metadata:edusupport:supporters'] = 'Усі визначені відповідальні';
$string['privacy:metadata:edusupport:supportlvl'] = 'Рівень підтримки';
$string['privacy:metadata:edusupport:userid'] = 'Номер користувача';
$string['relativeurlsupportarea'] = 'Відносне посилання для зони підтримки';
$string['screenshot'] = 'Надіслати знімок екрану';
$string['screenshot:description'] = 'Знімок екрану може допомогти вирішити проблему.';
$string['screenshot:generateinfo'] = 'Для створення знімку екрану форма буде схована, а потім знову з\'явиться.';
$string['screenshot:upload:failed'] = 'Не вдалося підготувати файл!';
$string['screenshot:upload:successful'] = 'Файл успішно підготовлено для завантаження!';
$string['select_isselected'] = 'Обрано';
$string['select_unavailable'] = 'не доступно';
$string['send'] = 'Надіслати';
$string['subject'] = 'Тема';
$string['subject_missing'] = 'Тема відсутня';
$string['support_area'] = 'Служба підтримки та вказівки';
$string['supportcourse'] = 'Група підтримки курсу';
$string['supporters'] = 'Група підтримки';
$string['supporters:choose'] = 'Обрати виконавця';
$string['supporters:description'] = 'Усі користувачі курсу, які зареєстровані як мінімум як «Асистент», можуть бути налаштовані як відповідальні. Введіть що небудь в якості рівня підтримки, щоб активувати когось в якості відповідального!';
$string['supportforum:central:disable'] = 'вимкнути глобально';
$string['supportforum:central:enable'] = 'включити глобально';
$string['supportforum:choose'] = 'Оберіть форум для eduSupport';
$string['supportforum:disable'] = 'вимкнути';
$string['supportforum:enable'] = 'включити';
$string['supportlevel'] = 'Рівень підтримки';
$string['targetforum'] = 'Форум служби підтримки';
$string['to_group'] = 'до';
$string['toggle'] = 'Форум підтримки курсу';
$string['toggle:central'] = 'Головний форум підтримки';
$string['trackhost'] = 'Відстежувати хост';
$string['trackhost:description'] = 'Великі мудл-сайти можуть використовувати архітектуру з декількома веб-хостами. Якщо Ви ввімкнете цю опцію, edusupport додасть до проблеми назву веб-хосту, що використовується.';
$string['userid'] = 'ID Користувача';
$string['userlinks'] = 'дозволити посилання користувача';
$string['userlinks:description'] = 'відображати посилання користувача в переліку звернень';
$string['webhost'] = 'Сервер';
$string['weburl'] = 'Посилання';
$string['your_issues'] = 'Ваші звернення';
