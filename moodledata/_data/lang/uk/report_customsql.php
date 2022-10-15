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
 * Strings for component 'report_customsql', language 'uk', version '3.11'.
 *
 * @package     report_customsql
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Добавити нову категорію';
$string['addcategorydesc'] = 'Щоби змінити категорію звіту слід відредагувати даний звіт. Тут Ви можете редагувати назву категорії, видаляти категорію або добавляти нову категорію';
$string['addreport'] = 'Добавити новий запит';
$string['addreportcategory'] = 'Добавити нову категорію звітів';
$string['anyonewhocanveiwthisreport'] = 'Будь-кому, кому доступні дані звіти
(report/customsql:view)';
$string['archivedversions'] = 'Архівні версії даного запиту';
$string['at'] = 'в';
$string['automaticallydaily'] = 'по розкладу, щоденно';
$string['automaticallymonthly'] = 'по розкладу в перший день кожного місяця';
$string['automaticallyweekly'] = 'по розкладу, в перший день кожного тижня';
$string['availablereports'] = 'Звіти на вимогу';
$string['availableto'] = 'Доступно: {$a}.';
$string['backtoreportlist'] = 'Повернутися до списку запитів';
$string['category'] = 'Категорія';
$string['categorycontent'] = '({$a->manual} на вимогу, {$a->daily} щоденно, {$a->weekly} кожного тижня, {$a->monthly} щомісяця)';
$string['categoryexists'] = 'Назва категорії  повинна бути унікальною, дана назва вже використовується';
$string['categorynamex'] = 'Назва категорії: {$a}';
$string['changetheparameters'] = 'Змінити параметри';
$string['crontask'] = 'Спеціальні запити до бази даних: запустіть завдання з запланованих звітів';
$string['customdir'] = 'Експорт  csv звіту до шлях/каталог';
$string['customdir_help'] = 'Файли експортуються у форматі CSV по вказаному шлях до файлу. Якщо вказаний каталог, формат імені файлу буде reportid--timecreate.csv.';
$string['customdirmustexist'] = 'Каталогу  "{$a}"  немає';
$string['customdirnotadirectory'] = 'За вказаним  "{$a}"  шляхом немає каталогу';
$string['customdirnotwritable'] = 'Каталог  "{$a}"  закритий для запису';
$string['customsql:definequeries'] = 'Визначити запит користувача';
$string['customsql:managecategories'] = 'Визначити категорію користувача';
$string['customsql:view'] = 'Перегляд звітів по запитах';
$string['dailyheader'] = 'Щоденно';
$string['dailyheader_help'] = 'Ці запити будуть виконуватися щоденно у вказаний час. Посилання дозволяє переглянути результати запитів, які були накопичені раніше';
$string['defaultcategory'] = 'Різне';
$string['delete'] = 'Видалити';
$string['deleteareyousure'] = 'Ви впевнені, що хочете видалити цей запис?';
$string['deletecategoryareyousure'] = '<p>Ви впевнені, що хочете знищити дану категорію? </p><p>Категорія не повинна містити жодних запитів.</p>';
$string['deletecategoryx'] = 'Видалити категорію  \'{$a}\\';
$string['deletecategoryyesno'] = '<p>Ви дійсно впевнені що хочете видалити цю категорію? </p>';
$string['deletereportx'] = 'Видалити запит  \'{$a}\\';
$string['description'] = 'Опис';
$string['displayname'] = 'Назва запиту';
$string['displaynamerequired'] = 'Ви повинні ввести назву запиту';
$string['displaynamex'] = 'Назва запиту : {$a}';
$string['downloadthisreportas'] = 'Оновити результат як';
$string['downloadthisreportascsv'] = 'Завантажити ці результати як CSV файл';
$string['edit'] = 'Добавити/Редагувати';
$string['editcategory'] = 'Оновити категорію';
$string['editcategoryx'] = 'Редагувати категорію  \'{$a}\\';
$string['editingareport'] = 'Редагування спеціальних запитів до бази даних';
$string['editreportx'] = 'Редагувати запит  \'{$a}\\';
$string['emailbody'] = 'Шановний(а) {$a}';
$string['emailink'] = 'Щоби отримати доступ до звіту , натисніть на це посилання : {$a}';
$string['emailnumberofrows'] = 'тільки кількість рядків і посилань';
$string['emailresults'] = 'вкласти результати в текст листа';
$string['emailrow'] = 'Запит повернув рядки  {$a}';
$string['emailrows'] = 'Запит повернув рядки -  {$a}';
$string['emailsent'] = 'Повідомлення було відправлено по електронній пошті  {$a}';
$string['emailsentfailed'] = 'Повідомлення по електронній пошті не може бути відправлене  {$a}';
$string['emailsubject'] = 'Запит  {$a}';
$string['emailto'] = 'Автоматично повідомляти по електронній пошті';
$string['emailwhat'] = 'Зміст повідомлення по електронній пошті';
$string['enterparameters'] = 'Введіть параметри спеціальних запитів до бази даних';
$string['errordeletingcategory'] = '<p>Помилка при видаленні категорії запитів.</p><p>Видаляєма категорія має бути порожньою.</p>';
$string['errordeletingreport'] = 'Помилка при видаленні запиту';
$string['errorinsertingreport'] = 'Помилка при вставці запиту';
$string['errorupdatingreport'] = 'Помилка при оновленні запиту';
$string['invalidreportid'] = 'Хибний ідентифікатор запиту  {$a}.';
$string['lastexecuted'] = 'Цей запит востаннє запускався {$a->lastrun}. Він виконується {$a->lastexecutiontime} сек.';
$string['managecategories'] = 'Керування категоріями звітів';
$string['manual'] = 'На вимогу';
$string['manualheader'] = 'На вимогу';
$string['manualheader_help'] = 'Ці запити виконуються на вимогу, коли Ви натискуєте на посилання для перегляду результатів';
$string['messageprovider:notification'] = 'Повідомлення і оповіщення про SQL звіти користувачів';
$string['monthlyheader'] = 'Щомісячно';
$string['monthlyheader_help'] = 'Ці запити автоматично виконуються в перший день кожного місяця, відображаючи результати попереднього місяця. Посилання дозволяють переглядати накопичені раніше результати';
$string['monthlynote_help'] = 'Ці запити автоматично виконуються в перший день кожного місяця, відображаючи результати попереднього місяця. Посилання дозволяють переглядати накопичені раніше результати.';
$string['morethanonerowreturned'] = 'Було повернуто більше одного рядка. Цей запит повинен повертати один рядок.';
$string['nodatareturned'] = 'Цей запит не повернув жодних даних.';
$string['noexplicitprefix'] = 'Будь ласка, використовуйте префікс <code>{$a}</code>таблиць в SQL. Або ж за допомогою назви таблиць (без префікса), поміщені в фігурних дужках <code>{}</code>.';
$string['noreportsavailable'] = 'Немає доступних запитів';
$string['norowsreturned'] = 'Немає повернутих рядків.Цей запит повинен повертати один рядок.';
$string['noscheduleifplaceholders'] = 'Запити, котрі містять підстановки  можуть бути запущені тільки на вимогу';
$string['nosemicolon'] = 'Ви не можете використовувати символ «;» в SQL.';
$string['notallowedwords'] = 'Ви не можете використовувати слова <code>{$a}</code> в SQL.';
$string['note'] = 'Примітка';
$string['notrunyet'] = 'Цей запит все ще не був запущений';
$string['onerow'] = 'Запит повертає один рядок, накопичувати результати в одному рядку не можна';
$string['pluginname'] = 'Спеціальні запити до бази даних';
$string['privacy:metadata'] = 'Плагін спеціальних запитів до бази даних не зберігає жодних особистих даних.';
$string['query_deleted'] = 'Запит видалено';
$string['query_edited'] = 'Запит змінено';
$string['query_viewed'] = 'Запит переглянуто';
$string['queryfailed'] = 'Помилка при виконанні запиту: {$a}';
$string['querylimit'] = 'Кількість рядків, що будуть повернуті';
$string['querylimitdefault'] = 'Повернено обмеження для рядків';
$string['querylimitdefault_desc'] = 'Щоб уникнути нещасних випадків, коли запит повертає величезну кількість рядків, які можуть перевантажувати сервер, кожен запит має обмеження на кількість рядків, які він може повернути. Це значення за замовчуванням для цього обмеження для нових запитів.';
$string['querylimitmaximum'] = 'Максимально дозволений ліміт на повернення рядків';
$string['querylimitmaximum_desc'] = 'Це абсолютний максимальний ліміт рядків, що повертаються, які автор запиту може встановлювати.';
$string['querylimitrange'] = 'Число повинно бути між  1 та {$a}';
$string['querynote'] = '<ul>
<li>Маркер <code>%%WWWROOT%%</code> в результаті буде замінений <code>{$a}</code>.</li>
<li>Будь-яке значення у результаті, схоже на URL-адресу, автоматично перетворюється на посилання. </li>
<li>Якщо у ваших результатах запиту є два стовпці  <code><i>column_name</i></code> та <code><i>column_name</i>_link_url</code> результат отриманого звіту матиме один стовпчик, що містить посилання з першим стовпцем як текстом посилання, а другим як URL..</li>
<li>Якщо ім\'я стовпця в результатах закінчується символами <code> date </code>, а стовпець містить цілі значення, вони будуть розглядатися як часові позначки Unix та автоматично перетворюватися на дати, прочитані людиною. </li>
<li>Маркер <code>%%USERID%%</code> у запиті буде замінено ідентифікатором користувача користувача, який переглядає звіт, перед тим як виконати звіт. </li>
<li> Для запланованих звітів жетони <code>%%STARTTIME%%</code> та <code>%%ENDTIME%%</code> замінюються часовою міткою Unix на початку та в кінці звітного тижня / місяця у запиті до його виконання. </li>
<li> Ви можете розмістити параметри в SQL, використовуючи іменовані заповнювачі, наприклад  <code>:parameter_name</code>. Потім, коли запускається звіт, користувач може ввести значення параметрів, які використовуватимуться під час виконання запиту. </li>
<li> Якщо <code>: ім\'я параметра_code </code> починається або закінчується символами <code> date </code>, тоді для введення цього значення буде використовуватися перемикач дати та часу, інакше звичайне текстове поле буде б / в. </li>
<li> Ви не можете використовувати символи  <code>:</code>, <code>;</code>  або <code>?</code>у рядках у вашому запиті. <ul>
    <li> Якщо вони вам потрібні у вихідних даних (наприклад, при видачі URL-адрес), ви можете використовувати лексеми <code>%%C%%</code>, <code>%%S%%</code> and <code>%%Q%%</code> .</li>
    <li>Якщо вони вам потрібні для введення даних (наприклад, у регулярному виразі або під час запитів для символів), вам потрібно буде використовувати функцію бази даних, щоб отримати символи та об\'єднати їх самостійно. У Postgres відповідно це CHR(58), CHR(59) and CHR(63); in MySQL CHAR(58), CHAR(59) and CHAR(63).</li>
</ul></li>
</ul>';
$string['queryparameters'] = 'Параметри запиту';
$string['queryparams'] = 'Будь ласка, введіть значення по замовчуванню для параметрів запиту';
$string['queryparamschanged'] = 'Іменовані підстановки в запиті змінені';
$string['queryrundate'] = 'дата запуску запиту';
$string['querysql'] = 'Запит SQL';
$string['querysqlrequried'] = 'Ви повинні ввести якийсь SQL запит';
$string['recordcount'] = 'Цей звіт містить  {$a} рядків';
$string['recordlimitreached'] = 'Цей запит досягнув ліміту по рядках {$a}. Деякі рядки в кінці можуть бути відсутні';
$string['reportfor'] = 'Запуск запиту в   {$a}';
$string['requireint'] = 'Необхідне ціле';
$string['runable'] = 'Запуск';
$string['runablex'] = 'Запустити: {$a}';
$string['runquery'] = 'Виконати запит';
$string['schedulednote'] = 'Ці запити будуть автоматично запускатися в перший день кожного тижня або місяця, збираючи результати за попередній тиждень або місяць. Ці посилання дозволять переглядати накопичені результати.';
$string['scheduledqueries'] = 'Заплановані запити';
$string['startofweek'] = 'День виконання щотижневого звіту';
$string['startofweek_default'] = 'Використовуйте календар сайту на початку тижня  ({$a})';
$string['startofweek_desc'] = 'Це день, який слід вважати першим днем тижня, для щотижневих планових звітів.';
$string['typeofresult'] = 'Тип результату';
$string['unknowndownloadfile'] = 'Невідомий файл що завантажується';
$string['userhasnothiscapability'] = 'Користувач  \'{$a->username}\'  не має права  \'{$a->capability}\' . Будь ласка, видаліть користувача зі списку або змініть вибір в  \'{$a->whocanaccess}\'.';
$string['userinvalidinput'] = 'Невірний введення, потрібно розділений комами список імен користувачів';
$string['usernotfound'] = 'Користувача з логіном \'{$a}\' не існує';
$string['userswhocanconfig'] = 'Тільки адміністраторам (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Всім, кому доступні системні звіти (moodle/site:viewreports)';
$string['verifyqueryandupdate'] = 'Перевірити текст запиту SQL  і оновити форму';
$string['weeklyheader'] = 'Щотижнево';
$string['weeklyheader_help'] = 'Ці запити автоматично виконуються в перший день кожного тижня, відображаючи результати попереднього тижня. Посилання дозволяють переглядати накопичені раніше результати.';
$string['whocanaccess'] = 'Кому доступний цей запит';
