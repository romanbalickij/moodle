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
 * Strings for component 'amvonetroom', language 'uk', version '3.11'.
 *
 * @package     amvonetroom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error'] = '{$a}';
$string['error_backup_fail'] = 'Під час резервного копіювання сеансу {$a->session} сталася помилка. Зверніться до {$a->support_begin} підтримки{$a->support_end}.';
$string['error_backup_fail_with_msg'] = 'Під час резервного копіювання сеансу  {$a->session} сталася помилка: {$a->message}';
$string['error_backup_space_limit_reached'] = 'Досягнуто ліміт місця для резервної копії. Будь ласка, зв’яжіться з адміністратором школи та повідомте про цю проблему.';
$string['error_key_not_defined'] = 'Модуль AMVONET Room не зареєстровано.';
$string['error_limit_reached'] = 'Межі досягнуто. Будь ласка, зв’яжіться з адміністратором школи та повідомте про цю проблему.';
$string['error_school_bad_request'] = 'master.amvonet.com повідомив про поганий запит. Зателефонуйте до служби технічної підтримки AMVONET.';
$string['error_school_forbidden'] = 'master.amvonet.com відхилив запит. Зателефонуйте до служби технічної підтримки AMVONET.';
$string['error_school_not_registered'] = 'Школа не зареєстрована на master.amvonet.com';
$string['error_session_restoring'] = 'Не вдається створити резервну копію, зараз сеанс відновлюється. Будь ласка, спробуйте пізніше.';
$string['error_storage_space_limit_reached'] = 'Досягнуто ліміт місця для на диску. Будь ласка, зв’яжіться з адміністратором школи та повідомте про цю проблему.';
$string['error_unavailable'] = 'master.amvonet.com тимчасово недоступний.';
$string['error_version_incompatible'] = 'master.amvonet.com не підтримує поточну версію модуля AMVONET Room. Зателефонуйте до служби технічної підтримки AMVONET.';
$string['error_version_too_old'] = 'Модуль AMVONET Room має занадто стару версію. Оновіть модуль.';
$string['formatdate'] = 'Y-m-d h:i';
$string['introduction_text'] = 'Вступний текст';
$string['key_caption'] = 'Ключ реєстрації';
$string['key_hint'] = 'Зареєструйте свій модуль AMVONET Room на master.amvonet.com і отримайте ключ.';
$string['label_domain'] = 'Домен';
$string['label_status'] = 'Статус';
$string['label_version'] = 'Версія';
$string['label_version_enterprise'] = 'Підприємство';
$string['label_version_type_free'] = 'Безкоштовний';
$string['label_version_type_testing'] = 'Тестування';
$string['label_warning'] = 'Увага';
$string['link_account'] = 'Мій аккаунт';
$string['link_buy'] = 'Купити';
$string['link_support'] = 'Підтримка';
$string['message_firewall_not_configured'] = 'На жаль, запитану операцію не вдалося виконати через неправильну конфігурацію. Ви можете знайти можливі причини та рішення, перейшовши на {$a->kb_begin} за URL-адресою {$a->kb_end}. Якщо вам потрібна допомога, зв’яжіться з нашою{$a->support_end}підтримкою{$a->support_end}.';
$string['status_active_till'] = 'до';
$string['status_blocked'] = 'Заблоковано';
$string['status_blocked_since'] = 'з';
$string['status_no_key'] = 'Не зареєстровано';
$string['warn_missed_plugin'] = 'Для модуля AMVONET Room потрібне розширення PHP {$a}. Будь ласка, встановіть його.';
$string['warn_missed_plugins'] = 'Для модуля AMVONET Room потрібні такі розширення PHP: {$a}. Будь ласка, встановіть їх.';
