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
 * Strings for component 'local_mailtest', language 'uk', version '3.11'.
 *
 * @package     local_mailtest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowlog'] = 'Завжди показувати журнал зв\'язку з поштовим сервером, навіть якщо немає помилок.';
$string['credit'] = 'Майкл Мілетт – <a href="http://www.tngconsulting.ca/">TNG Consulting Inc.</a>';
$string['divertedto'] = 'Переадресовано на {$a}';
$string['errorcommunications'] = 'Moodle не може зв’язатися з вашим поштовим сервером.</p><p><strong>Рекомендація.</strong></p><p>Почніть із перевірки свого Moodle <a href="{$a}" target=" _blank">Налаштування пошти SMTP</a>.</p><p>Якщо вони виглядають правильно, перевірте параметри свого SMTP-сервера та/або брандмауера, щоб переконатися, що вони налаштовані на прийняття SMTP-з\'єднань з вашого веб-сервера Moodle і з вашого адреса електронної пошти без відповіді. Щоб отримати додаткову допомогу, перегляньте розділ FAQ в документації.';
$string['errorsend'] = 'Не вдалося доставити тестове повідомлення електронної пошти на поштовий сервер.</p><p><strong>Рекомендація:</strong></p><p>Перевірте цільову <a href="{$a}" Moodle ="blank">Налаштування електронної пошти</a>. Щоб отримати додаткову допомогу, перегляньте розділ FAQ в документації.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'З адреси електронної пошти';
$string['heading'] = 'Тест конфігурації електронної пошти';
$string['message'] = '<p>Це тестове повідомлення. Будь ласка, не зважайте.</p>
<p>Якщо ви отримали цей електронний лист, це означає, що ви успішно налаштували параметри електронної пошти свого сайту Moodle.</p>
<hr><p><strong>Додаткова інформація про користувача</strong></p>
<ul>
<li><strong>Статус реєстрації:</strong> {$a->regstatus}</li>
<li><strong> Бажана мова :</strong> {$a->lang}</li>
<li><strong>Веб-браузер користувача:</strong> {$a->browser}</li>
<li><strong>Повідомлення надіслано від:</strong> {$a->referer</li>
<li><strong>Версія Moodle:</strong> {$a->release}</li>
<li><strong>IP-адреса користувача:</strong> {$a->ip}</li>
</ul>';
$string['noemailever'] = '<p>Електронну пошту на цьому сайті вимкнено за допомогою <strong>$CFG-&gt;noemailever = true;</strong>.</p>';
$string['nologavailable'] = '<p>Регистрація недоступна під час використання функції PHP mail(). Однак може знайти журнали на вашому сервері. Найпоширеніші розташування в Linux:</p>
<ul>
<li>/var/log/maillog</li>
<li>/var/log/mail.log</li>
<li>/var/adm/maillog</li>
<li>/var/adm/syslog/mail.log</li>
</ul>
<p>Налаштування розташування можна вказати за допомогою параметра mail.log у php.ini.</p>';
$string['notregistered'] = 'Не зареєстровані або не ввійшли.';
$string['phpmethod'] = 'Метод за замовчуванням PHP';
$string['pluginname'] = 'eMail Test';
$string['pluginname_help'] = 'eMail Test перевірить налаштування електронної пошти для цього сайту Moodle, надіславши тестове повідомлення електронної пошти на вказану вами адресу. Тільки для адміністраторів сайту.';
$string['primaryadminemail'] = 'Основна електронна адреса адміністратора';
$string['privacy:metadata'] = 'Плагін eMail Test не зберігає жодних персональних даних про жодного користувача.';
$string['recipientisrequired'] = 'Ви повинні вказати адресу електронної пошти одержувача.';
$string['registered'] = 'Зареєстрований користувач ({$a}).';
$string['sendmethod'] = 'Метод відправки електронною поштою';
$string['sendtest'] = 'Надішліть тестове повідомлення';
$string['sentmail'] = 'Moodle успішно доставив тестове повідомлення на поштовий сервер SMTP.';
$string['sentmailphp'] = 'Тестове повідомлення Moodle було успішно прийнято PHP Mail.';
$string['smtpmethod'] = 'Хости SMTP: {$a}';
$string['toemail'] = 'На адресу електронної пошти';
$string['winsyslog'] = 'Журнал подій у Windows';
$string['youremail'] = 'Ваша електронна адреса';
