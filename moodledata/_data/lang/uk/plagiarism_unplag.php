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
 * Strings for component 'plagiarism_unplag', language 'uk', version '3.11'.
 *
 * @package     plagiarism_unplag
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempts'] = 'Кількість зроблених спроб';
$string['check_all_submitted_assignments'] = 'Перевірити всі подані відповіді';
$string['check_confirm'] = 'Ви впевнені, що хочете почати перевірку на плагіат за допомогою модулю UNPLAG';
$string['check_file'] = 'Почати перевірку';
$string['check_start'] = 'Оцінювання оригінальності Unplag в процесі';
$string['check_type'] = 'Вибір типу перевірки на схожість';
$string['cronwarning'] = 'Скрипт <a href="../../admin/cron.php">cron.php</a> не був запущений, принаймні, 30 хв - Cron повинен бути налаштований так, щоб UNPLAG міг правильно функціонувати.';
$string['defaultsdesc'] = 'Наступні налаштування використовуються за замовчуванням при включенні UNPLAG всередині Модуля Діяльності';
$string['defaultupdated'] = 'Налаштування за замовчуванням оновлені';
$string['delete'] = 'Видалити';
$string['deletedwarning'] = 'Цей файл не може бути знайдений - можливо він був видалений користувачем';
$string['exclude_citations'] = 'Автоматичне виключення Цитат та Посилань';
$string['exclude_self_plagiarism'] = 'Виключити самоплагіат відповіді';
$string['explainerrors'] = 'На цій сторінці показані всі файли, які в даний час знаходяться в стані помилки. <br/> Коли файли будуть видалені на цій сторінці, вони не зможуть бути повторно подані і помилки більше не будуть показані викладачам чи студентам';
$string['file'] = 'Файл';
$string['filedeleted'] = 'Файл видалений з черги';
$string['filereset'] = 'Файл був повторно поданий до UNPLAG';
$string['fileresubmitted'] = 'Файл в черзі на повторну відправку';
$string['generalinfo'] = 'Загальна інформація';
$string['getscore'] = 'Отримати результат';
$string['heldevents'] = 'Проводилися заходи';
$string['heldeventsdescription'] = 'Це події, які не були завершені з першої спроби і були поставлені в чергу для повторної подачі - це запобігає подальші події від завершення і, можливо, буде потрібно подальше розслідування. Деякі з цих подій не можуть мати відношення до UNPLAG.';
$string['id'] = 'ID';
$string['identifier'] = 'Ідентифікатор';
$string['max_100000_words'] = 'Файл(и) повинні містити не більше 100 000 слів та не перевищувати розміру 70 MB';
$string['min_30_words'] = 'Необхідні принаймні 30 слів';
$string['module'] = 'Модуль';
$string['my_library'] = 'Документ проти Бібліотеки';
$string['name'] = 'Ім\'я';
$string['no_index_files'] = 'Виключити відповідь з інституційної бібліотеки';
$string['noreceiver'] = 'Не було визначено жодної адреси одержувача';
$string['pending'] = 'Цей файл знаходиться в черзі на подання в UNPLAG';
$string['plagiarism'] = 'Потенційна схожість';
$string['plagiarism_run_success'] = 'Файл відправлений на перевірку на схожість';
$string['pluginname'] = 'UNPLAG модуль перевірки на плагіат';
$string['previouslysubmitted'] = 'Попередньо подані як';
$string['processing'] = 'Цей файл був поданий до UNPLAG, очікування доступу до аналізу';
$string['progress'] = 'Перевірка';
$string['receivernotvalid'] = 'Це не коректна адреса одержувача';
$string['refresh'] = 'Оновіть сторінку, щоб побачити результати';
$string['report'] = 'Відкрити повний звіт';
$string['reportready'] = 'Звіт готовий';
$string['resubmit'] = 'Подати повторно';
$string['savedconfigfailed'] = 'Комбінація Ключ API/API Секрет була введена некоректно. UNPLAG був відключений, будь ласка, спробуйте ще раз.';
$string['savedconfigsuccess'] = 'Налаштування виявлення плагіату збережені';
$string['scoreavailable'] = 'Цей файл був опрацьований UNPLAG та звіт уже доступний';
$string['scorenotavailableyet'] = 'Цей файл ще не був опрацьований UNPLAG.';
$string['showwhenclosed'] = 'Коли Діяльність закрита';
$string['similarity'] = 'Схожість';
$string['similarity_sensitivity'] = 'Приховати джерела із збігами менше, ніж (%)';
$string['status'] = 'Статус';
$string['studentdisclosure'] = 'Ознайомити студентів з Політикою конфіденційності UNPLAG';
$string['studentdisclosure_help'] = 'Цей текст буде відображатися всім студентам на сторінці завантаження файлу.';
$string['studentdisclosuredefault'] = 'Всі завантажені файли будуть подані до системи виявлення плагіату UNPLAG.';
$string['studentemailcontent'] = 'Файл, який Ви подали до {$a->modulename} в {$a->coursename} уже був опрацьований системою виявлення плагіату UNPLAG
{$a->modulelink}';
$string['studentemailsubject'] = 'Файл був опрацьований UNPLAG';
$string['submitondraft'] = 'Відправити файл при першому завантажені';
$string['submitonfinal'] = 'Відправити файл, коли студент відправляє його для оцінювання';
$string['toolarge'] = 'Цей файл занадто великий для опрацювання UNPLAG';
$string['unknownwarning'] = 'Виникла помилка під час спроби відправити цей файл в UNPLAG';
$string['unplag'] = 'UNPLAG модуль антиплагіату';
$string['unplag:enable'] = 'Дозволити викладачу включити / відключити UNPLAG всередині діяльності';
$string['unplag:resetfile'] = 'Дозволити викладачу повторно подати файл до UNPLAG після виникнення помилки';
$string['unplag:vieweditreport'] = 'Дозволити викладачу переглядати та редагувати повний звіт UNPLAG';
$string['unplag:viewreport'] = 'Дозволити викладачу переглядати повний звіт UNPLAG';
$string['unplag_api_secret'] = 'API Секрет';
$string['unplag_api_secret_help'] = 'API Секрет надається Вам сервісом UNPLAG для доступу до API. Ці дані Ви можете знайти тут <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_client_id'] = 'Ключ API';
$string['unplag_client_id_help'] = 'Ключ API надається Вам сервісом UNPLAG для доступу до API. Ці дані Ви можете знайти тут <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_draft_submit'] = 'Коли файл слід відправити до UNPLAG';
$string['unplag_enableplugin'] = 'Включити UNPLAG для {$a}';
$string['unplag_lang'] = 'Мова';
$string['unplag_lang_help'] = 'Код мови наданий UNPLAG';
$string['unplag_settings_url_text'] = 'Відкрити адміністративний акаунт Unplag.com, щоб подивитись чи скопіювати Ключ API/API Секрет';
$string['unplag_show_student_report'] = 'Показати звіт подібності студенту';
$string['unplag_show_student_report_help'] = 'Звіт подібності надає розбивку відповіді на частини, які мають схожість та джерела де UNPLAG їх знайшов';
$string['unplag_show_student_score'] = 'Показувати відсоток подібності студенту';
$string['unplag_show_student_score_help'] = 'Відсоток подібності це відсоток відповіді, який має подібності з іншим текстом';
$string['unplag_studentemail'] = 'Відправити електронною поштою студенту';
$string['unplag_studentemail_help'] = 'Коли файл буде опрацьований, на електрону пошту студенту буде відправлено лист повідомлення, що звіт уже доступний';
$string['unplagdebug'] = 'Налагодження';
$string['unplagdefaults'] = 'Налаштування UNPLAG за замовчуванням';
$string['unplagfiles'] = 'Файли Unplag';
$string['unsupportedfiletype'] = 'Цей тип файлу не підтримується UNPLAG';
$string['use_unplag'] = 'Включити UNPLAG';
$string['use_unplag_help'] = 'Щоб використовувати Unplag модуль, спочатку встановіть опцію →Студенти повинні натискати кнопку "Відправити на оцінення" = Так (налаштування Завдання →Параметри відповідей)';
$string['useunplag_assign_desc_param'] = 'Щоб розблокувати налаштування Unplag';
$string['useunplag_assign_desc_value'] = 'Зайти в налаштування Завдання →Параметри відповідей→Студенти повинні натискати кнопку "Відправити на оцінення" = Так';
$string['waitingevents'] = 'Є {$a->countallevents} події, що чекають на cron та {$a->countheld} події, що чекають на повторне подання';
$string['web'] = 'Документ проти Інтернету';
$string['web_and_my_library'] = 'Документ проти Інтернету + Бібліотеки';
