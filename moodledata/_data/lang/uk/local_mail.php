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
 * Strings for component 'local_mail', language 'uk', version '3.11'.
 *
 * @package     local_mail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addbcc'] = 'Додати Bcc';
$string['addcc'] = 'Додати Cc';
$string['addrecipients'] = 'Кому';
$string['addto'] = 'Додати до';
$string['advsearch'] = 'Розширений пошук';
$string['all'] = 'Уся пошта';
$string['applychanges'] = 'Застосувати';
$string['assigntonewlabel'] = 'Призначити нову мітку...';
$string['attachments'] = 'Прикріпити файл';
$string['attachnumber'] = '{$a} вкладених файлів';
$string['bulkmessage'] = 'Вибраним користувачам надіслати пошту...';
$string['cancel'] = 'Скасувати';
$string['cannotcompose'] = 'Ви не можете писати повідомлення, тому що ви не зараховані на жодні курси.';
$string['compose'] = 'Написати';
$string['configenablebackup'] = 'Резервне копіювання / відновлення';
$string['configenablebackupdesc'] = 'Увімкнути резервне копіювання та відновлення поштових повідомлень і міток.';
$string['continue'] = 'Продовжити';
$string['courses'] = 'Курси';
$string['delete'] = 'Видалити';
$string['discard'] = 'Відхилити';
$string['downloadall'] = 'Завантажити усе';
$string['draft'] = 'Чернетка';
$string['drafts'] = 'Чернетки';
$string['editlabel'] = 'Редагувати мітку';
$string['emptyrecipients'] = 'Одержувачів не вибрано';
$string['emptytrash'] = 'Очистити корзину';
$string['emptytrashconfirm'] = 'Ви збираєтеся очистити корзину';
$string['erroremptycourse'] = 'Будь ласка, вкажіть курс.';
$string['erroremptylabelname'] = 'Укажіть назву мітки.';
$string['erroremptyrecipients'] = 'Будь ласка, виберіть принаймні одного одержувача.';
$string['erroremptysubject'] = 'Будь ласка, вкажіть тему.';
$string['errorinvalidcolor'] = 'Недійсний колір';
$string['errorrepeatedlabelname'] = 'Назва мітки вже існує';
$string['filterbydate'] = 'Дата (до дня):';
$string['forward'] = 'Переслати';
$string['from'] = 'Від';
$string['hasattachments'] = '(Повідомлення з вкладеннями)';
$string['inbox'] = 'Вхідні';
$string['invalidlabel'] = 'Недійсна мітка';
$string['invalidmessage'] = 'Недійсне повідомлення';
$string['labelcolor'] = 'Колір';
$string['labeldeleteconfirm'] = 'Ви збираєтеся повністю видалити мітку \'{$a}\'';
$string['labelname'] = 'Ім\'я';
$string['labels'] = 'Мітки';
$string['mail:addinstance'] = 'Додайте нову пошту';
$string['mail:mailsamerole'] = 'Надсилати листи користувачам із такою ж роллю';
$string['mail:usemail'] = 'Користуватися поштою';
$string['mailmenu'] = 'Меню пошти';
$string['mailupdater'] = 'Оновлення пошти';
$string['markasread'] = 'Позначити як прочитане';
$string['markasread_help'] = 'Якщо ввімкнено, усі нові повідомлення позначатимуться як прочитані';
$string['markasstarred'] = 'Позначити зірочкою';
$string['markasunread'] = 'Позначити як непрочитане';
$string['markasunstarred'] = 'Позначити як без зірочки';
$string['maxattachments'] = 'Максимальна кількість вкладень';
$string['maxattachmentsize'] = 'Максимальний розмір вкладеного файлу';
$string['message'] = 'Повідомлення';
$string['messagedeleteconfirm'] = 'Ви збираєтеся повністю видалити повідомлення \'{$a}\'';
$string['messageprovider:mail'] = 'Сповіщення про отримання';
$string['messagesdeleteconfirm'] = 'Ви збираєтеся повністю видалити повідомлення {$a}';
$string['moreactions'] = 'Більше';
$string['mymail'] = 'Моя пошта';
$string['newlabel'] = 'Нова мітка';
$string['nocolor'] = 'Без кольору';
$string['nolabels'] = 'Немає міток.';
$string['nomessages'] = 'Немає повідомлень.';
$string['nomessageserror'] = 'Потрібно вибрати принаймні одне повідомлення';
$string['nomessagestoview'] = 'Немає повідомлень для перегляду.';
$string['none'] = 'Жодного';
$string['norecipient'] = '(немає одержувача)';
$string['noselectedmessages'] = 'Не вибрано жодного повідомлення';
$string['nosubject'] = '(без теми)';
$string['notificationbody'] = '- Від: {$a->user}

- Тема: {$a->subject}

{$a->content}';
$string['notificationbodyhtml'] = '<p>Від: {$a->user}</p><p>Тема: <a href="{$a->url}">{$a->subject}</a></p><p>{$a->content}</p>';
$string['notificationpref'] = 'Надсилати повідомлення';
$string['notificationsubject'] = 'Нове повідомлення в {$a}';
$string['notingroup'] = 'Ви не є в жодній групі';
$string['pagingmultiple'] = '{$a->first}-{$a->last} з {$a->total}';
$string['pagingsingle'] = '{$a->index} з {$a->total}';
$string['perpage'] = 'Показати {$a} повідомлень';
$string['pluginname'] = 'Пошта';
$string['read'] = 'Прочитані';
$string['removelabel'] = 'Видалити мітку';
$string['reply'] = 'Відповісти';
$string['replyall'] = 'Відповісти всім';
$string['restore'] = 'Відновити';
$string['save'] = 'Зберегти';
$string['search'] = 'Пошук';
$string['searchbyattach'] = 'Містить вкладені файли';
$string['searchbyunread'] = 'Лише непрочитані';
$string['send'] = 'Надіслати';
$string['sendmessage'] = 'Надіслати повідомлення';
$string['sentmail'] = 'Надіслані';
$string['setlabels'] = 'Мітки';
$string['shortaddcc'] = 'Cc';
$string['shortaddto'] = 'До';
$string['showlabelmessages'] = 'Показати повідомлення мітки "{$a}".';
$string['showrecentmessages'] = 'Показати останні повідомлення';
$string['smallmessage'] = '{$a->user} надіслав вам електронний лист';
$string['starred'] = 'Позначені зірочкою';
$string['starredmail'] = 'Позначені зірочкою';
$string['subject'] = 'Тема';
$string['to'] = 'До';
$string['togglemailmenu'] = 'Відкрити меню пошти';
$string['toomanyrecipients'] = 'Пошук дав забагато результатів';
$string['trash'] = 'Корзина';
$string['undo'] = 'Скасувати';
$string['undodelete'] = '{$a} повідомлень переміщено до кошика';
$string['undorestore'] = '{$a} повідомлень відновлено';
$string['unread'] = 'Непрочитані';
$string['unstarred'] = 'Без зірочки';
