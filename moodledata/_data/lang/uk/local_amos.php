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
 * Strings for component 'local_amos', language 'uk', version '3.11'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS – це центральне сховище рядків Moodle та їх історії. Він відстежує додавання рядків англійською мовою в код Moodle, збирає переклади, виконує звичайні завдання перекладу та створює мовні пакети для розгортання на серверах Moodle.</p>
<p>Див. <a href="https://docs.moodle.org/dev/AMOS_manual">документацію AMOS</a> для отримання додаткової інформації.</p>';
$string['amos'] = 'Набір інструментів для перекладу AMOS';
$string['amos:changecontriblang'] = 'Змінити мову доданих рядків';
$string['amos:commit'] = 'Комітуйте поетапні рядки в головне сховище';
$string['amos:execute'] = 'Виконайте заданий AMOScript';
$string['amos:importfile'] = 'Імпортуйте переклади із завантаженого файлу та поставте їх';
$string['amos:importstrings'] = 'Імпортуйте рядки (включаючи англійські) безпосередньо в основне сховище';
$string['amos:manage'] = 'Керуйте порталом AMOS';
$string['amos:stage'] = 'Скористайтеся інструментом перекладу AMOS і створіть рядки';
$string['amos:stash'] = 'Зберігайте поточний етап у постійній схованці';
$string['amos:usegoogle'] = 'Використовуйте служби Google Translate';
$string['applangindexfile'] = 'Розташування файлу langindex додатка Moodle';
$string['applangindexfile_desc'] = 'Повна URL-адреса, де можна завантажити файл. Це буде зроблено завданням cron.';
$string['branchesall'] = 'Усі відомі версії Moodle';
$string['branchesall_desc'] = 'Розділений комами список кодів версій Moodle, які підтримує AMOS. Це використовується для заповнення списку версій у фільтрі перекладача та інших місцях.';
$string['branchsupported'] = 'Найстаріша підтримувана версія Moodle';
$string['branchsupported_desc'] = 'Код найстарішої версії Moodle, який ще слід відстежувати на предмет змін в англійських рядках і для якого ще створено мовні пакети інсталятора. Використовуйте <https://docs.moodle.org/dev/Releases#Version_support> для довідки.';
$string['cachedef_lists'] = 'Списки мов і компонентів, відомих в AMOS';
$string['cachedef_stats'] = 'Статистичні дані, згенеровані AMOS';
$string['commitbutton'] = 'Commit (Внести зміни)';
$string['commitkeepstaged'] = 'Тримати рядки на етапі';
$string['commitmessage'] = 'Повідомлення про коміт';
$string['commitmessageempty'] = 'Будь ласка, заповніть повідомлення про коміт';
$string['commitstage'] = 'Комітуйте поетапні рядки';
$string['commitstage_help'] = 'Постійно зберігайте всі поетапні переклади в репозиторії AMOS. Етап автоматично обрізається та перебазується перед комітом. Зберігаються лише комітовані рядки. Це означає, що зберігатимуться лише переклади, виділені зеленим нижче. Після коміту етап очищається.';
$string['committable'] = 'У вас є дозвіл приєднатися до цього мовного пакета';
$string['committableall'] = 'всі мови';
$string['committablenone'] = 'мови не дозволені - будь ласка, зв\'яжіться з менеджером AMOS';
$string['componentsall'] = 'Все';
$string['componentsapp'] = 'Додаток Moodle';
$string['componentsnone'] = 'Жодного';
$string['componentsstandard'] = 'Стандартний';
$string['confirmaction'] = 'Це не може бути скасовано. Ти впевнений?';
$string['contribaccept'] = 'Прийняти';
$string['contribactions'] = 'Сприяв дії перекладу';
$string['contribactions_help'] = 'Залежно від ваших прав і робочого процесу внесення внеску ви можете мати деякі з таких дій.

* Подати заявку – копіювати наданий переклад на свою сцену, не змінює запис про внесок
* Призначити мені - встановіть себе правоодержувачем внеску, тобто особою, відповідальною за перегляд та інтеграцію внесків
* Скасувати призначення – не встановлювати нікого як правонаступника
* Почніть рецензування - призначте новий внесок собі, установіть його статус на «На розгляді» та скопіюйте надісланий переклад у свій етап
* Прийняти - позначте внесок як прийнятий
* Відхилити - позначте внесок як відхилений, опишіть причини в коментарі.

Учасник отримує повідомлення електронною поштою, коли статус його внеску змінюється.';
$string['contribapply'] = 'Застосувати';
$string['contribassignee'] = 'Правонаступник';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Призначте мені';
$string['contribauthor'] = 'Автор';
$string['contribclosedno'] = 'Сховати вирішені внески';
$string['contribclosedyes'] = 'Показати вирішені внески';
$string['contribcomponents'] = 'Компоненти';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'Немає вхідних внесків';
$string['contribincomingsome'] = 'Вхідні внески ({$a})';
$string['contriblanguage'] = 'Мова';
$string['contriblanguagebutton'] = 'Конвертувати';
$string['contriblanguagechange'] = 'Виправлено неправильну мову внеску';
$string['contriblanguagechange_help'] = 'Якщо внесок помилково надіслано в неправильний мовний пакет, виберіть правильну мову у спадному меню нижче, а потім натисніть кнопку Конвертувати.';
$string['contriblanguagereport'] = 'Повідомлення про неправильну мову внеску';
$string['contriblanguagereport_help'] = 'Якщо цей внесок помилково надіслано в неправильний мовний пакет, скопіюйте та вставте URL-адресу внеску в електронний лист на адресу `translation@moodle.org`. Після цього внесок буде переміщено на правильну мову.';
$string['contriblanguagewrong'] = 'Неправильна мова?';
$string['contribnotif'] = '[AMOS] Сповіщення про внесок (#{$a->id})';
$string['contribnotifaccepted'] = '{$a->fullname} прийняв ваш наданий переклад
#{$a->id} {$a->subject}

-------------------------------------------------- -------------------
Сторінка внеску: {$a->contriburl}';
$string['contribnotifcommented'] = '{$a->fullname} прокоментував наданий переклад
#{$a->id} {$a->subject}
-------------------------------------------------- -------------------

{$a->message}

-------------------------------------------------- -------------------
Сторінка внеску: {$a->contriburl}';
$string['contribnotifconverted'] = '{$a->fullname} перетворив ваш наданий переклад
#{$a->id} {$a->subject}

Дякую за ваш внесок. Однак, схоже, він був надісланий не в той мовний пакет помилково. Таким чином, ваш внесок було відхилено з неправильного мовного пакета та переміщено в правильний мовний пакет для перегляду розпорядником мовного пакету. Ніяких дій від вас не потрібно.

Надалі, будь ласка, перевірте, чи ви вибрали власну мову, перш ніж почати перекладати рядки.

-------------------------------------------------- -------------------
Оригінальна сторінка внеску: {$a->contriborigurl}
Нова сторінка внеску: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Є наданий переклад, який очікує на розгляд, і вимагає ваших дій
#{$a->id} {$a->subject}

Як розпорядник мовного пакета, ви повинні переглянути та врешті-решт
здійснити всі подані внески. Після завершення позначте їх як прийняті або
відхилено.

Додаткову інформацію див. у розділі {$a->docsurl}.
-------------------------------------------------- -------------------
Сторінка внеску: {$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} відхилив ваш переклад
#{$a->id} {$a->subject}

-------------------------------------------------- -------------------
Сторінка внеску: {$a->contriburl}';
$string['contribnotifsubmitted'] = '{$a->fullname} надіслав новий переклад
#{$a->id} {$a->subject}
-------------------------------------------------- -------------------

{$a->message}

* Мова: {$a->language}
* Компоненти: {$a->components}
* Рядки: {$a->strings}

-------------------------------------------------- -------------------
Сторінка внеску: {$a->contriburl}';
$string['contribreject'] = 'Відхилити';
$string['contribresign'] = 'Скасувати призначення';
$string['contribstaged'] = 'Поетапний внесок <a href="contrib.php?id={$a->id}">#{$a->id}</a> від {$a->author}';
$string['contribstagedinfo'] = 'Постановочний внесок';
$string['contribstagedinfo_help'] = 'Сцена містить рядки, надані учасником спільноти. Підтримувачі мовного пакету повинні переглянути їх, а потім встановити їх статус на Прийнято (якщо вони були вчинені) або Відхилено (якщо вони не можуть бути включені в офіційний мовний пакет з якихось причин).';
$string['contribstartreview'] = 'Почати огляд';
$string['contribstatus'] = 'Статус';
$string['contribstatus0'] = 'Новий';
$string['contribstatus10'] = 'В огляді';
$string['contribstatus20'] = 'Відхилено';
$string['contribstatus30'] = 'Прийнято';
$string['contribstatus_help'] = 'Робочий процес наданого перекладу складається з таких станів:

* Нове – внесок було подано, але ще не перевірено
* На розгляді – внесок було призначено розпоряднику мовного пакету та передано на розгляд
* Відхилено – розпорядник мовного пакету відхилив внесок і, ймовірно, залишив пояснення в коментарі
* Прийнято – внесок прийнято розпорядником мовного пакету';
$string['contribstrings'] = 'Строки';
$string['contribstringseq'] = '{$a->orig} новий';
$string['contribstringsnone'] = '{$a->orig} (всі вони вже перекладені у пакеті lang)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} з них уже має новіший переклад)';
$string['contribsubject'] = 'Тема';
$string['contribsubmittednone'] = 'Немає поданих внесків';
$string['contribsubmittedsome'] = 'Ваші внески ({$a})';
$string['contribtimemodified'] = 'Змінено';
$string['contribute'] = 'Внести свій внесок';
$string['contributenow'] = 'Зробити внесок!';
$string['contributestats'] = 'Наразі в AMOS подано {$a->count} рядків, перекладених учасниками спільноти.';
$string['contributethanks'] = 'Щиро дякуємо {$a->listcontributors} за їхні нещодавні внески!';
$string['contributethankslist'] = '{$a->contributor1}, {$a->contributor2}, {$a->contributor3} і {$a->contributor4}';
$string['contributions'] = 'Внески';
$string['creditsaddcontributor'] = 'Додати учасника';
$string['creditsaddmaintainer'] = 'Додати супроводжувача';
$string['creditscontact'] = 'Відправити повідомлення';
$string['creditscontributors'] = 'Інші дописувачі';
$string['creditsdelcontributor'] = 'Видалити учасника';
$string['creditsdelmaintainer'] = 'Видалити супроводжувача';
$string['creditsmaintainedby'] = 'Підтримується';
$string['creditsnomaintainer'] = 'На даний момент немає супроводжувача. <a href="{$a->url}">Стань ним!</a>';
$string['creditsthanks'] = 'На цій сторінці ми хочемо подякувати всім, хто долучився до перекладів Moodle. Їхня робота зробила можливим поширення Moodle у всьому світі.';
$string['creditstitlelong'] = 'Підтримувачі та дописувачі мовного пакету';
$string['creditstitleshort'] = 'Учасники';
$string['diff'] = 'Порівняти';
$string['diffstringmode'] = 'Переключити режим порівнянь';
$string['err_exception'] = 'Помилка: {$a}';
$string['err_invalidlangcode'] = 'Недійсний код мови';
$string['err_parser'] = 'Помилка аналізу: {$a}';
$string['filtercmp'] = 'Компоненти';
$string['filtercmp_desc'] = 'Покажзати рядки цих компонентів';
$string['filtercmpnothingselected'] = 'Будь ласка, виберіть якийсь компонент';
$string['filterlng'] = 'Мови';
$string['filterlng_desc'] = 'Показати переклади цими мовами';
$string['filterlngnothingselected'] = 'Будь ласка, виберіть мову';
$string['filtermis'] = 'Різне';
$string['filtermis_desc'] = 'Додаткові умови для рядків для відображення';
$string['filtermisfapp'] = 'лише рядки, які використовуються в додатку Moodle';
$string['filtermisfapp_help'] = 'Цей рядок використовується в програмах Moodle як {$a}';
$string['filtermisfhas'] = 'лише перекладені рядки';
$string['filtermisfhlp'] = 'лише допоміжні рядки';
$string['filtermisfmis'] = 'лише відсутні та застарілі рядки';
$string['filtermisfout'] = 'лише застарілі рядки';
$string['filtermisfstg'] = 'лише рядки етапу';
$string['filtersid'] = 'Ідентифікатор рядка';
$string['filtersid_desc'] = 'Ключ у масиві рядків';
$string['filtersidpartial'] = 'частковий збіг';
$string['filtertxt'] = 'Підрядок';
$string['filtertxt_desc'] = 'Рядок повинен містити заданий текст';
$string['filtertxtcasesensitive'] = 'чутливий до регістру';
$string['filtertxtregex'] = 'регулярний вираз';
$string['filterver'] = 'Версія';
$string['filterver_desc'] = 'Показати рядки для цієї версії Moodle';
$string['filtervernothingselected'] = 'Будь ласка, виберіть якусь версію';
$string['foundmissing'] = 'Відсутньо {$a}';
$string['foundmissingonthispage'] = '{$a} на цій сторінці';
$string['foundtotal'] = 'Знайдено {$a}';
$string['googletranslate'] = 'запитати у Google';
$string['importfile'] = 'Імпортувати перекладені рядки з файлу';
$string['importfile_help'] = 'Якщо ваші рядки перекладено в автономному режимі, ви можете створити їх за допомогою цієї форми.

* Файл має бути дійсним файлом визначення рядків Moodle PHP. Перегляньте приклади в каталозі `/lang/en/` вашої інсталяції Moodle.
* Ім\'я файлу має збігатися з тим, що містить англійські визначення рядків для даного компонента (наприклад, `moodle.php`, `assignment.php` або `enrol_manual.php`).

Усі рядки, знайдені у файлі, будуть упорядковані для вибраної версії та мови.

Кілька файлів PHP можна обробляти одночасно, якщо помістити їх у ZIP-файл.';
$string['language'] = 'Мова';
$string['languagepacks'] = 'Додаткові мовні пакети можна встановити на вашому сайті Moodle через <em>Адміністрування > Адміністрування сайту > Мова > Мовні пакети</em> або вручну. Щоб дізнатися більше, перегляньте <a href="https://docs.moodle.org/en/Language_packs">документацію про мовні пакети</a>.';
$string['languages'] = 'Мови';
$string['languagesall'] = 'Все';
$string['languagesnone'] = 'Жодного';
$string['lastavailable'] = 'Остання доступна версія';
$string['lessfilteringoptions'] = 'Менше варіантів';
$string['log'] = 'Журнал';
$string['logfilterbranch'] = 'Версії';
$string['logfiltercommithash'] = 'git хеш';
$string['logfiltercommitmsg'] = 'Повідомлення про коміт містить';
$string['logfiltercommits'] = 'Фільтр коміту';
$string['logfiltercommittedafter'] = 'Коміт після';
$string['logfiltercommittedbefore'] = 'Коміт раніше';
$string['logfiltercomponent'] = 'Компоненти';
$string['logfilterlang'] = 'Мови';
$string['logfiltershow'] = 'Показати відфільтровані коміти та рядки';
$string['logfiltersource'] = 'Джерело';
$string['logfiltersourceamos'] = 'amos (веб-перекладач)';
$string['logfiltersourceautomerge'] = 'automerge (переклад скопійовано з іншої гілки)';
$string['logfiltersourcebot'] = 'бот (масові операції, що виконуються сценарієм)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOScript у повідомленні коміту)';
$string['logfiltersourcefixdrift'] = 'fixdrift (виправлений дрейф AMOS-git)';
$string['logfiltersourcegit'] = 'git (git дзеркало вихідного коду Moodle та пакетів 1.x)';
$string['logfiltersourceimport'] = 'імпорт (імпортовані рядки для внесеного плагіна)';
$string['logfiltersourcerevclean'] = 'revclean (зворотний процес очищення)';
$string['logfilterstringid'] = 'Ідентифікатор рядка';
$string['logfilterstrings'] = 'Струковий фільтр';
$string['logfilterusergrp'] = 'Комітер';
$string['logfilterusergrpor'] = 'або';
$string['maintainers'] = 'Обслуговувачі';
$string['manageamos'] = 'Керуйте AMOS';
$string['markuptodate'] = 'Позначення перекладу як актуального';
$string['markuptodatelabel'] = 'позначити як актуально';
$string['messageprovider:checker'] = 'Результати перевірки мовного пакету';
$string['messageprovider:contribution'] = 'Співробітники перекладів';
$string['morefilteringoptions'] = 'Більше варіантів';
$string['newlanguage'] = 'Нова мова';
$string['nodiffs'] = 'Відмінностей не знайдено';
$string['nofiletoimport'] = 'Надайте файл для імпорту.';
$string['nologsfound'] = 'Не знайдено рядків, будь ласка, змініть фільтри';
$string['nostringsfound'] = 'Не знайдено рядків';
$string['nostringtoimport'] = 'У файлі не знайдено дійсний рядок. Переконайтеся, що файл має правильну назву та правильно відформатований.';
$string['nothingtostage'] = 'Операція не повернула жодного рядка, який можна було б інсценувати.';
$string['novalidzip'] = 'Не вдається розпакувати ZIP-файл.';
$string['numofcommitsabovelimit'] = 'Знайдено {$a->found} коміти, що відповідають фільтру коміту, використовуючи останній {$a->limit}';
$string['numofcommitsunderlimit'] = 'Знайдено коміти {$a->found}, що відповідають фільтру коміту';
$string['numofmatchingstrings'] = 'У цьому контексті зміни {$a->strings} в комітах {$a->commits} відповідають фільтру рядків';
$string['outdatednotcommitted'] = 'Застарілий рядок';
$string['outdatednotcommitted_help'] = 'AMOS виявив, що рядок може бути застарілим, оскільки англійська версія була змінена після її перекладу. Будь ласка, перегляньте переклад.';
$string['outdatednotcommittedwarning'] = 'Застарілий';
$string['ownstashactions'] = 'Дії зі сховком';
$string['ownstashactions_help'] = '* Застосувати - скопіюйте перекладені рядки зі схованки в сцену і не змінюйте схованку. Якщо рядок уже знаходиться в стадії, він перезаписується прихованим.
* На етап - перемістіть перекладені рядки зі схованки на етап та скиньте схованку (тобто Застосувати та скинути).
* Скиньте - викиньте приховані рядки.
* Надіслати – відкриває форму для подання схованки офіційним мовам, щоб вони могли включити ваш внесок до офіційного мовного пакету.';
$string['ownstashes'] = 'Ваші схованки';
$string['ownstashes_help'] = 'Це список усіх ваших схованок.';
$string['ownstashesnone'] = 'Власних схованок не знайдено';
$string['permalink'] = 'Постійне посилання';
$string['placeholder'] = 'Заповнювачі';
$string['placeholder_help'] = 'Заповнювачі – це спеціальні оператори, такі як `{$a}` або `{$a->something}` всередині рядка. Вони замінюються значенням, коли рядок фактично друкується.

Важливо скопіювати їх точно так, як вони є в оригінальному рядку. Не перекладайте їх і не змінюйте їх орієнтацію зліва направо.';
$string['placeholderwarning'] = 'заповнювачі';
$string['pluginclasscore'] = 'Основні підсистеми';
$string['pluginclassnonstandard'] = 'Нестандартні плагіни';
$string['pluginclassstandard'] = 'Стандартні плагіни';
$string['pluginname'] = 'AMOS';
$string['plugintypelocations'] = 'Розташування типу плагінів';
$string['plugintypelocations_desc'] = 'Дозволяє визначати розташування додаткових стандартних типів плагінів, таких як типи підплагінів, які надаються стандартними плагінами, або застарілі типи.';
$string['presetcommitmessage'] = 'Наданий переклад #{$a->id} від {$a->author}';
$string['presetcommitmessage2'] = 'Об’єднано відсутні рядки з гілки {$a->source} у {$a->target}';
$string['presetcommitmessage3'] = 'Виправлення відмінностей між {$a->versiona} і {$a->versionb}';
$string['privacy:commitnumber'] = 'Комітувати {$a}';
$string['privacy:contribnumber'] = 'Внесок {$a}';
$string['privacy:filterusage'] = 'Використання фільтра';
$string['privacy:metadata:db:amoscommits'] = 'Зберігає всі мета-дані, пов’язані з комітом.';
$string['privacy:metadata:db:amoscommits:commitmsg'] = 'Повідомлення про коміт, надане користувачем.';
$string['privacy:metadata:db:amoscommits:timecommitted'] = 'Позначка часу коміту.';
$string['privacy:metadata:db:amoscommits:userinfo'] = 'Ідентифікація користувача, як зазначено у джерелі коміту, напр. в Git.';
$string['privacy:metadata:db:amoscontributions'] = 'Надано переклади від членів спільноти.';
$string['privacy:metadata:db:amoscontributions:lang'] = 'Код мови, до якої належить цей внесок.';
$string['privacy:metadata:db:amoscontributions:message'] = 'Початкове повідомлення з описом подання.';
$string['privacy:metadata:db:amoscontributions:stashid'] = 'Внутрішній ідентифікатор прикріпленої схованки.';
$string['privacy:metadata:db:amoscontributions:status'] = 'Статус робочого процесу внеску».';
$string['privacy:metadata:db:amoscontributions:subject'] = 'Тема внесеного подання.';
$string['privacy:metadata:db:amoscontributions:timecreated'] = 'Відмітка часу створення запису внеску.';
$string['privacy:metadata:db:amoscontributions:timemodified'] = 'Позначка часу, коли запис про внески нещодавно змінено.';
$string['privacy:metadata:db:amosfilterusage'] = 'Журнал використання фільтра перекладача AMOS.';
$string['privacy:metadata:db:amosfilterusage:currentlang'] = 'Поточна мова сеансу.';
$string['privacy:metadata:db:amosfilterusage:ismaintainer'] = 'Чи має користувач дозвіл на коміт до сховища AMOS?';
$string['privacy:metadata:db:amosfilterusage:numofcomponents'] = 'Кількість вибраних компонентів';
$string['privacy:metadata:db:amosfilterusage:numoflanguages'] = 'Кількість вибраних мов';
$string['privacy:metadata:db:amosfilterusage:numofversions'] = 'Кількість вибраних версій';
$string['privacy:metadata:db:amosfilterusage:showexistingonly'] = 'Чи потрібно відображати лише наявні переклади?';
$string['privacy:metadata:db:amosfilterusage:showgreylistedonly'] = 'Чи слід відображати лише рядок із сірого списку?';
$string['privacy:metadata:db:amosfilterusage:showhelpsonly'] = 'Чи мають відображатися лише довідкові рядки?';
$string['privacy:metadata:db:amosfilterusage:showmissingonly'] = 'Чи потрібно відображати лише відсутні та застарілі рядки?';
$string['privacy:metadata:db:amosfilterusage:showoutdatedonly'] = 'Чи потрібно відображати лише застарілі рядки?';
$string['privacy:metadata:db:amosfilterusage:showstagedonly'] = 'Чи потрібно відображати лише сценічні рядки?';
$string['privacy:metadata:db:amosfilterusage:showwithoutgreylisted'] = 'Чи слід видалити рядки із сірого списку з результатів?';
$string['privacy:metadata:db:amosfilterusage:stringidpartial'] = 'Чи запитується часткова відповідність для stringid?';
$string['privacy:metadata:db:amosfilterusage:substringcasesensitive'] = 'Чи слід вважати підрядок чутливим до регістру?';
$string['privacy:metadata:db:amosfilterusage:substringregex'] = 'Чи слід вважати підрядок регулярним виразом?';
$string['privacy:metadata:db:amosfilterusage:timesubmitted'] = 'Позначка часу, коли було надіслано форму фільтра';
$string['privacy:metadata:db:amosfilterusage:usercountry'] = 'Код країни користувача, вибраний у його профілі';
$string['privacy:metadata:db:amosfilterusage:userlang'] = 'Бажана мова користувача з його профілю';
$string['privacy:metadata:db:amosfilterusage:usesdefaultlang'] = 'Чи використовував користувач попередньо вибрані мови?';
$string['privacy:metadata:db:amosfilterusage:usesdefaultversion'] = 'Чи використовував користувач попередньо вибрані версії у формі?';
$string['privacy:metadata:db:amosfilterusage:withstringid'] = 'Чи вказано stringid?';
$string['privacy:metadata:db:amosfilterusage:withsubstring'] = 'Чи вказано підрядок для пошуку?';
$string['privacy:metadata:db:amosstashes'] = 'Зберігає інформацію про схованки в сховищі';
$string['privacy:metadata:db:amosstashes:components'] = 'Список компонентів, які зберігаються на стадії зберігання';
$string['privacy:metadata:db:amosstashes:id'] = 'Внутрішній ідентифікатор схованки';
$string['privacy:metadata:db:amosstashes:languages'] = 'Список мов, які містяться на стадії прихованого';
$string['privacy:metadata:db:amosstashes:message'] = 'Повне повідомлення, що описує схованку, використовується як повідомлення про коміт за замовчуванням, коли схованка подається як доданий переклад.';
$string['privacy:metadata:db:amosstashes:name'] = 'Назва або назва схованки';
$string['privacy:metadata:db:amosstashes:strings'] = 'Назва схованки';
$string['privacy:metadata:db:amosstashes:timecreated'] = 'Позначка часу створення схованки';
$string['privacy:metadata:db:amosstashes:timemodified'] = 'Позначка часу, коли запис нещодавно змінено';
$string['privacy:metadata:db:amostranslators'] = 'Описує зв’язок між мовним пакетом і користувачем. Це може бути або супроводжувач (має права здійснювати коміт мовного пакету) або явний учасник (відображається на сторінці заголовків навіть без надісланих внесків).';
$string['privacy:metadata:db:amostranslators:lang'] = 'Код мови, який перекладач має право перекладати, або зірочка для всіх мов.';
$string['privacy:metadata:db:amostranslators:status'] = 'Визначає, чи є користувач супроводжувачем (0) чи явним учасником (1) мовного пакета.';
$string['privacy:metadata:external:languagepacks'] = 'Внески перекладу експортуються в ZIP-файли, які поширюються по всьому світу та встановлюються на сайтах Moodle.';
$string['privacy:metadata:external:languagepacks:email'] = 'Адреса електронної пошти співавтора може бути включена у файли мовного пакету.';
$string['privacy:metadata:external:languagepacks:firstname'] = 'Ім’я учасника може бути включено у файли мовного пакету.';
$string['privacy:metadata:external:languagepacks:lastname'] = 'Прізвище співавтора може бути включено у файли мовного пакету.';
$string['privacy:metadata:subsystem:comment'] = 'Опишіть, як плагін використовує підсистему коментарів.';
$string['privacy:stashnumber'] = 'Схованка {$a}';
$string['privileges'] = 'Ваші привілеї';
$string['privilegesnone'] = 'Ви маєте доступ лише для читання до публічної інформації.';
$string['processing'] = 'Обробка...';
$string['quicklinks'] = 'Швидкі посилання';
$string['quicklinks_amos'] = 'Перекладач AMOS';
$string['quicklinks_forum'] = 'Форум перекладів';
$string['quicklinks_manual'] = 'Посібник користувача';
$string['quicklinks_newcomers'] = 'Допомога новачкам';
$string['requestactions'] = 'Дія';
$string['requestactions_help'] = '* Застосувати – скопіюйте перекладені рядки із запиту на витяг у свою сцену. Якщо рядок уже знаходиться в стадії, він перезаписується прихованим.
* Приховати - блокує запит на витяг, щоб він більше не відображався вам.';
$string['savefilter'] = 'Показати рядки';
$string['script'] = 'AMOScript';
$string['script_help'] = 'AMOScript — це набір інструкцій для виконання над сховищем рядків.';
$string['scriptexecute'] = 'Виконати та виставити результат';
$string['sourceversion'] = 'Вихідна версія';
$string['stage'] = 'Етап';
$string['stageactions'] = 'Етапні дії';
$string['stageactions_help'] = '* Редагувати поетапні рядки - змінює налаштування фільтра перекладача, щоб відображалися лише поетапні переклади.
* Вирізати рядки, які не мають коміту, - зніміть усі переклади, які вам заборонено виконувати. Етап автоматично обрізається перед комітом.
* Перебазувати – скасувати всі переклади, які або не змінюють поточний переклад, або є старшими за останній переклад у сховищі. Етап автоматично змінюється перед комітом.
* Unstage all - очищає етап, усі поетапні переклади втрачено.';
$string['stagedownload'] = 'Завантажити';
$string['stageedit'] = 'Редагувати поетапні рядки';
$string['stageprune'] = 'Обрізати необов\'язкові';
$string['stagerebase'] = 'Перебазувати';
$string['stagestringsnocommit'] = 'Рядків з етапами: {$a->staged}';
$string['stagestringsnone'] = 'Рядків етару немає';
$string['stagestringssome'] = 'Рядків з етапами: {$a->staged}, можна комітувати: {$a->committable}';
$string['stagesubmit'] = 'Надіслати рядки розпорядникам мовних пакетів';
$string['stagetoolopen'] = 'Перейти до етапу';
$string['stagetranslation'] = 'Переклад';
$string['stagetranslation_help'] = 'Показує поетапний переклад, який потрібно виконати. Колір фону клітинки означає:

* Зелений - ви додали відсутній переклад, і вам дозволено його коміт.
* Жовтий - ви змінили рядок, і вам дозволено коміт змін.
* Синій - ви змінили переклад або додали відсутній переклад, але вам не дозволено вносити його на дану мову.
* Без кольору - поетапний переклад такий самий, як і поточний, і тому не буде здійснено.';
$string['stageunstageall'] = 'Зняти все з етапу';
$string['standardcomponents'] = 'Список стандартних компонентів';
$string['standardcomponents_desc'] = 'Список стандартних компонентів Moodle. Необов’язковий номер вказує код версії з моменту, коли компонент є стандартним. Якщо число негативне, це вказує на останню версію, коли компонент був присутній як стандартний. Можуть бути присутні обидва числа. приклад:

* `mod_workshop` - без версій цей компонент вважається стандартним для всіх версій
* `report_infectedfiles 310` - вказує на компонент, який слід вважати стандартним, починаючи з Moodle 3.10
* `theme_clean 25 -36` - стандартний компонент, починаючи з Moodle 2.5 до 3.6 включно';
$string['stashactions'] = 'Збережіть незавершені роботи';
$string['stashactions_help'] = 'Схованка — це знімок поточного етапу. Схованки можна надіслати розпорядникам офіційного мовного пакету для включення в мовний пакет.';
$string['stashapply'] = 'Застосувати';
$string['stashautosave'] = 'Автоматично збережена резервна копія';
$string['stashautosave_help'] = 'Ця схованка містить останній знімок вашої сцени. Ви можете використовувати його як резервну копію для випадків, коли всі рядки випадково не поставлені, наприклад. Використовуйте дію «Застосувати», щоб скопіювати всі приховані рядки назад на сцену (перезапише рядок, якщо він уже поставлений).';
$string['stashcomponents'] = '<span>Компоненти:</span> {$a}';
$string['stashdownload'] = 'Завантажити';
$string['stashdrop'] = 'Знищити';
$string['stashdropconfirm'] = 'Ви дійсно хочете назавжди видалити збережену схованку \'{$a}\'?';
$string['stashes'] = 'Схованки';
$string['stashlanguages'] = '<span>Мови:</span> {$a}';
$string['stashpop'] = 'На етап';
$string['stashpush'] = 'Помістіть усі поетапні рядки в нову схованку';
$string['stashstrings'] = '<span>Кількість рядків:</span> {$a}';
$string['stashsubmit'] = 'Надати супроводжувачам';
$string['stashsubmitdetails'] = 'Подання деталей';
$string['stashsubmitmessage'] = 'Повідомлення';
$string['stashsubmitsubject'] = 'Тема';
$string['stashtitle'] = 'Назва схованки';
$string['stashtitledefault'] = 'Триває робота – {$a->time}';
$string['stdvernotebetween'] = 'Стандартний від {$a->from} до {$a->to}';
$string['stdvernotefrom'] = 'Стандартний від {$a->from}';
$string['stdvernoteto'] = 'Стандартний до {$a->to}';
$string['stringhistory'] = 'історія';
$string['strings'] = 'Рядки';
$string['stringversionnotlatest'] = 'існує новіша версія';
$string['submitting'] = 'Подання внеску';
$string['submitting_help'] = 'Це надішле перекладені рядки розпорядникам офіційної мови. Вони зможуть застосувати вашу роботу на своїй стадії, переглянути її і в кінцевому підсумку взяти на себе зобов’язання. Будь ласка, надішліть їм повідомлення з описом вашої роботи та чому б ви хотіли, щоб ваш внесок був включений.';
$string['targetversion'] = 'Цільова версія';
$string['timeline'] = 'Строкова шкала часу';
$string['timelineheading'] = 'Строкова шкала: {$a->component} | {$a->strname}';
$string['translatortool'] = 'Перекладач';
$string['translatortoolopen'] = 'Відкрити перекладач AMOS';
$string['translatortranslation'] = 'Переклад';
$string['translatortranslation_help'] = 'Клацніть клітинку, щоб перетворити її в редактор введення. Вставте переклад і клацніть за межами клітинки, щоб виконати переклад. Колір фону клітинки означає:

* Зелений - рядок уже перекладено, ви можете змінити переклад.
* Жовтий - рядок може бути застарілим. Англійський оригінал, ймовірно, був змінений після перекладу рядка.
* Червоний - рядок ще не перекладено.
* Синій - ви змінили переклад, і тепер він поставлений.
* Сірий – AMOS не можна використовувати для перекладу цього рядка. Наприклад, рядки для Moodle 1.9 потрібно редагувати лише через застарілий доступ CVS.

Супроводжувачі мовного пакету можуть побачити маленький червоний символ у кутку клітинок, які їм дозволено комітувати.';
$string['typecontrib'] = 'Додаткові плагіни';
$string['typecontribbadge'] = 'Додатковий';
$string['typecore'] = 'Основні підсистеми';
$string['typecorebadge'] = 'Ядро';
$string['typestandard'] = 'Стандартні плагіни';
$string['typestandardbadge'] = 'Стандартний';
$string['unableenfixaddon'] = 'Виправлення англійською мовою дозволені лише для стандартних плагінів';
$string['unableenfixcountries'] = 'Назви країн скопійовані з ISO 3166-1';
$string['unableunmaintained'] = 'Мовний пакет \'{$a}\' на даний момент не має супроводжувача, тому переклад не приймається. Будь ласка, подумайте про те, щоб стати волонтером мовного пакету "{$a}".';
$string['unstage'] = 'розетапувати';
$string['unstageconfirm'] = 'Підтвердьте скасування етапування';
$string['unstageconfirmlong'] = '<p>Ви збираєтеся вимкнути переклад рядка <code>{$a->stringid}</code>, компонента <code>{$a->component}</code>, мовного пакета <code>{$ a->language}</code>.</p><p>Ви впевнені?</p>';
$string['unstaging'] = 'Розетапувати';
$string['untranslate'] = 'не перекладати';
$string['untranslateconfirm'] = '<p>Ви збираєтеся видалити наявний переклад рядка <code>{$a->stringid}</code>, компонент <code>{$a->component}</code>, з <code>{$ a->із</code> і новіших версій мовного пакета <code>{$a->language}</code>.</p><p>Ви впевнені?</p>';
$string['untranslatetitle'] = 'Видалення перекладу з мовного пакета';
$string['untranslating'] = 'Без перекладу';
$string['userdefaultreset'] = 'Скинути налаштування за замовчуванням';
$string['userdefaultsave'] = 'Зберегти як мої параметри за замовчуванням';
$string['version'] = 'Версія';
