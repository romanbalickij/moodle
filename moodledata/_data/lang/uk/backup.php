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
 * Strings for component 'backup', language 'uk', version '3.11'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Процес резервного копіювання завершено';
$string['asyncbackupcompletebutton'] = 'Продовжуйте';
$string['asyncbackupcompletedetail'] = 'Процес резервного копіювання успішно завершено. <br/>Ви можете отримати доступ до резервної копії на <a href="{$a}">сторінці відновлення</a>.';
$string['asyncbackuperror'] = 'Помилка процесу резервного копіювання';
$string['asyncbackuperrordetail'] = 'Помилка процесу резервного копіювання. Зверніться до свого системного адміністратора.';
$string['asyncbackuppending'] = 'Процес резервного копіювання очікує';
$string['asyncbackupprocessing'] = 'Виконується резервне копіювання';
$string['asyncbadexecution'] = 'Погане виконання контролера резервного копіювання. Це {$a} і має бути 2.';
$string['asynccheckprogress'] = 'Ви можете будь-коли перевірити прогрес на <a href="{$a}">сторінці відновлення</a>.';
$string['asyncemailenable'] = 'Увімкнути сповіщення про повідомлення';
$string['asyncemailenabledetail'] = 'Якщо ввімкнено, користувачі отримають повідомлення, коли асинхронне резервне копіювання або відновлення завершиться.';
$string['asyncgeneralsettings'] = 'Асинхронне резервне копіювання/відновлення';
$string['asyncmessagebody'] = 'Повідомлення';
$string['asyncmessagebodydefault'] = 'Ваша {операція} (ідентифікатор: {backupid}) успішно завершена. Ви можете отримати доступ до нього тут: <a href="{link}">{link}</a>.';
$string['asyncmessagebodydetail'] = 'Повідомлення для надсилання після завершення асинхронного резервного копіювання або відновлення.';
$string['asyncmessagesubject'] = 'Тема';
$string['asyncmessagesubjectdefault'] = 'Moodle {операцію} успішно завершено';
$string['asyncmessagesubjectdetail'] = 'Тема повідомлення';
$string['asyncnowait'] = 'Вам не потрібно чекати тут, оскільки процес триватиме у фоновому режимі.';
$string['asyncprocesspending'] = 'Процес очікує на розгляд';
$string['asyncrestorecomplete'] = 'Процес відновлення завершено';
$string['asyncrestorecompletebutton'] = 'Продовжуйте';
$string['asyncrestorecompletedetail'] = 'Процес відновлення успішно завершено. Натиснувши «Продовжити», ви перейдете до <a href="{$a}">курсу для відновленого елемента</a>.';
$string['asyncrestoreerror'] = 'Помилка процесу відновлення';
$string['asyncrestoreerrordetail'] = 'Помилка процесу відновлення. Зверніться до свого системного адміністратора.';
$string['asyncrestoreinprogress'] = 'Триває відновлення';
$string['asyncrestoreinprogress_help'] = 'Тут показано асинхронне відновлення курсу, що триває.';
$string['asyncrestorepending'] = 'Процес відновлення очікує';
$string['asyncrestoreprocessing'] = 'Відновлення триває';
$string['asyncreturn'] = 'Повернутися до курсу';
$string['autoactivedescription'] = 'Оберіть можливість автоматичного створення резервних копій. Якщо встановлено режим ручних налаштувань, створення автоматичних резервних копій буде можливим лише з допомогою інтерфейсу командного рядка. Це можна зробити вручну на командному рядку або за допомогою утиліти крон.';
$string['autoactivedisabled'] = 'Заблокований';
$string['autoactiveenabled'] = 'Активований';
$string['autoactivemanual'] = 'Ручний';
$string['automatedbackupschedule'] = 'Розклад';
$string['automatedbackupschedulehelp'] = 'Оберіть дні тижня, коли будуть створюватися автоматичні резервні копії.';
$string['automatedbackupsinactive'] = 'Автоматичні резервні копії не було активовано адміністрацією сайту';
$string['automatedbackupstatus'] = 'Статус автоматичної резервної копії';
$string['automateddeletedays'] = 'Вилучити резервні копії старіші ніж';
$string['automatedmaxkept'] = 'Максимальне число збережених резервних копій';
$string['automatedmaxkepthelp'] = 'Це визначає максимальне число автоматично збережених резервних копій, які повинні зберігатися в курсі. Старіші версії будуть автоматично вилучені.';
$string['automatedminkept'] = 'Максимальне число збережених резервних копій';
$string['automatedminkepthelp'] = 'Якщо вилучаються резервні копії старіші за визначену кількість днів, то може виявитися, що в неактивному курсі, не залишиться резервних копій. Щоб запобігти такій ситуації, потрібно вказати мінімальне число для збережених резервних копій.';
$string['automatedsettings'] = 'Автоматичні параметри налаштуваннь резервних копій';
$string['automatedsetup'] = 'Автоматичні налаштування резервних копій';
$string['automatedstorage'] = 'Автоматичне зберігання резервних копій';
$string['automatedstoragehelp'] = 'Оберіть місце зберігання автоматично створених резервних копій.';
$string['backupactivity'] = 'Резервне копіювання діяльності: {$a}';
$string['backupcourse'] = 'Резервне копіювання курсу: {$a}';
$string['backupcoursedetails'] = 'Подробиці курсу';
$string['backupcoursesection'] = 'Секція: {$a}';
$string['backupcoursesections'] = 'Секції курсу';
$string['backupdate'] = 'Визначена дата';
$string['backupdetails'] = 'Деталі резервного копіювання';
$string['backupdetailsnonstandardinfo'] = 'Обраний файл не є стандартним резервним файлом Moodle. За допомогою процесу реконструкції резервний файл буде конвертовано у стандартний формат і повернено в попередній стан.';
$string['backupformat'] = 'Формат';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Невідомий формат';
$string['backuplog'] = 'Технічна інформація або попередження';
$string['backupmode'] = 'Режим';
$string['backupmode10'] = 'Загальний';
$string['backupmode20'] = 'Імпорт';
$string['backupmode30'] = 'Хаб';
$string['backupmode40'] = 'Той самий сайт';
$string['backupmode50'] = 'Автоматичний';
$string['backupmode60'] = 'Конвертований';
$string['backupmode70'] = 'Асинхронний';
$string['backupsection'] = 'Розділ резервного копіювання курсу: {$a}';
$string['backupsettings'] = 'Параметри налаштування резервного копіювання';
$string['backupsitedetails'] = 'Подробиці сайту';
$string['backupstage16action'] = 'Далі';
$string['backupstage1action'] = 'Вперед';
$string['backupstage2action'] = 'Вперед';
$string['backupstage4action'] = 'Виконати дублювання';
$string['backupstage8action'] = 'Далі';
$string['backuptype'] = 'Тип';
$string['backuptypeactivity'] = 'Діяльність';
$string['backuptypecourse'] = 'Курс';
$string['backuptypesection'] = 'Секція';
$string['backupversion'] = 'Дублікат';
$string['cannotfindassignablerole'] = 'Роль {$a} у файлі резервної копії не відповідає жодній з ролей, на які вам дозволено підписувати користувачів.';
$string['choosefilefromactivitybackup'] = 'Область для виконання дублювання';
$string['choosefilefromactivitybackup_help'] = 'Тут зберігаються резервні копії активності, зроблені за умовчанням.';
$string['choosefilefromautomatedbackup'] = 'Автоматичні резервні копії';
$string['choosefilefromautomatedbackup_help'] = 'Містить автоматично створені резервні копії';
$string['choosefilefromcoursebackup'] = 'Область резервних копій курсу';
$string['choosefilefromcoursebackup_help'] = 'Тут зберігаються резервні копії курсів, зроблені за умовчанням.';
$string['choosefilefromuserbackup'] = 'Особиста область резервних копій користувача';
$string['choosefilefromuserbackup_help'] = 'Тут зберігаються файли резервної копії з анонімізованою інформацією користувача.';
$string['config_keep_groups_and_groupings'] = 'За замовчуванням зберегти поточні групи та угрупування.';
$string['config_keep_roles_and_enrolments'] = 'За замовчуванням зберегти поточні ролі і зарахування на курс.';
$string['config_overwrite_conf'] = 'Дозволити користувачеві перезаписувати поточну конфігурацію курсу';
$string['config_overwrite_course_fullname'] = 'За замовчуванням перезаписати повне ім\'я курсу з файлу резервної копії. Для цього потрібно вибрати параметр «Перезапис конфігурації курсу» і поточний користувач, повинен мати право змінювати повне ім\'я курсу (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'За замовчуванням перезаписати коротке ім\'я курсу з файлу резервної копії. Для цього потрібно вибрати параметр «Перезапис конфігурації курсу» і поточний користувач, повинен мати право змінювати коротке ім\'я курсу (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'За замовчуванням перезаписувати дату початку курсу з файлу резервної копії. Для цього потрібно вибрати параметр «Перезапис конфігурації курсу» і поточний користувач, повинен мати право змінювати дату початку курсу при відновленні (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Встановлює типове значення для включення діяльностей до резервної копії';
$string['configgeneralanonymize'] = 'Після активації вся інформація, що стосується користувача буде стандартно зберігати анонімність.';
$string['configgeneralbadges'] = 'Встановлює типове значення для включення відзнак до резервної копії';
$string['configgeneralblocks'] = 'Встановлює типові параметри у блоках, що входять до складу резервної копії.';
$string['configgeneralcalendarevents'] = 'За замовчуванням включати події календаря в резервну копію.';
$string['configgeneralcomments'] = 'Встановлює типові параметри у коментарях, що входять до складу резервної копії';
$string['configgeneralcompetencies'] = 'За замовчуванням включати компетенції в резервну копію.';
$string['configgeneralcontentbankcontent'] = 'Встановлює значення за замовчуванням для включення вмісту банку вмісту до резервної копії.';
$string['configgeneralfiles'] = 'Встановлює значення за замовчуванням для включення файлів у резервну копію. Зверніть увагу: вимкнення цього параметра призведе до створення резервної копії, яка містить лише посилання на файли. Це не проблема, якщо резервну копію відновлено на тому самому сайті, а файли не було видалено відповідно до параметра «Очистити файли кошика» (filescleanupperiod).';
$string['configgeneralfilters'] = 'Встановлює типові параметри у фільтрах, що входять до складу резервної копії';
$string['configgeneralgroups'] = 'Встановлює типове значення для включення груп та групувань в резервну копію.';
$string['configgeneralhistories'] = 'Встановлює типові параметри в історії користувача, що входить до складу резервної копії';
$string['configgenerallogs'] = 'Якщо дозволено, записи системного журналу будуть відразу включені у резервні копії';
$string['configgeneralpermissions'] = 'Якщо ввімкнено, дозволи ролі будуть імпортовані. Це може замінити наявні дозволи для зареєстрованих користувачів.';
$string['configgeneralquestionbank'] = 'Якщо вибрано, то банк питань буде типово включено до резервних копій.

ЗАУВАЖТЕ: Якщо не вибрано цю опцію, то буде відключено також резервне копіювання всіх діяльностей, які використовують банк питань (наприклад, тести).';
$string['configgeneralroleassignments'] = 'Якщо вибрано, то типово призначені ролі також будуть включені до резервної копії.';
$string['configgeneralusers'] = 'Встановлює типові параметри, щоб вирішити чи включати користувачів у резервні копії.';
$string['configgeneraluserscompletion'] = 'Після активації, доповнення до інформації користувача буде типово додано у резервні копії.';
$string['configlegacyfiles'] = 'Встановлює значення за замовчуванням для включення застарілих файлів курсу до резервної копії. Застарілі файли курсів з версій Moodle до 2.0.';
$string['configloglifetime'] = 'Це визначає час, протягом якого ви хочете зберігати інформацію про резервні копії  в журналі подій. Старіші дані автоматично видаляються. Рекомендується тримати це значення малим, оскільки інформація про резервні копії може бути величезною.';
$string['configrestoreactivities'] = 'За замовчуванням відновлювати елементи курсу.';
$string['configrestorebadges'] = 'За замовчуванням відновлювати значки.';
$string['configrestoreblocks'] = 'За замовчуванням відновлювати блоки.';
$string['configrestorecalendarevents'] = 'За замовчуванням відновлювати подій календаря.';
$string['configrestorecomments'] = 'За замовчуванням відновлювати коментарі.';
$string['configrestorecompetencies'] = 'За замовчуванням відновлювати компетенції.';
$string['configrestorecontentbankcontent'] = 'Встановлює значення за замовчуванням для відновлення вмісту банку вмісту.';
$string['configrestoreenrolments'] = 'За замовчуванням відновлювати способи зарахування на курс.';
$string['configrestorefilters'] = 'За замовчуванням відновлювати фільтри.';
$string['configrestoregroups'] = 'За замовчуванням відновлювати групи і потоки, якщо вони включені в резервну копію.';
$string['configrestorehistories'] = 'За замовчуванням відновлювати історію користувача, якщо вона включена в резервну копію.';
$string['configrestorelogs'] = 'При включеному параметрі журнали подій за замовчуванням будуть відновлені, якщо вони включені в резервну копію.';
$string['configrestorepermissions'] = 'Якщо ввімкнено, дозволи ролі будуть відновлені. Це може замінити наявні дозволи для зареєстрованих користувачів.';
$string['configrestoreroleassignments'] = 'При ввімкненому параметрі призначення ролей за замовчуванням будуть відновлені, якщо вони включені в резервну копію.';
$string['configrestoreusers'] = 'За замовчуванням відновлювати користувачів, якщо вони включені в резервну копію.';
$string['configrestoreuserscompletion'] = 'При включеному параметрі інформація про проходження курсу користувачами буде за замовчуванням відновлена, якщо вона включена в резервну копію.';
$string['confirmcancel'] = 'Скасувати резервне копіювання';
$string['confirmcancelimport'] = 'Скасувати імпорт';
$string['confirmcancelno'] = 'Не скасовувати';
$string['confirmcancelquestion'] = 'Ви впевнені, що хочете скасувати? Всю введену інформацію буде втрачено.';
$string['confirmcancelrestore'] = 'Скасувати відновлення';
$string['confirmcancelyes'] = 'Скасувати резервне копіювання';
$string['confirmnewcoursecontinue'] = 'Попередження нового курсу';
$string['confirmnewcoursecontinuequestion'] = 'Тимчасовий (прихований) курс буде створено в процесі відновлення курсу. Для того щоб зупинити процес відновлення натисніть скасувати. Не закривайте браузер під час відновлення.';
$string['copiesinprogress'] = 'Цей курс має копії.<a href="{$a}"> Переглянути поточні копії.</a>';
$string['copycoursedesc'] = 'Цей курс буде продубльовано та поміщено у вибрану категорію курсу.';
$string['copycourseheading'] = 'Скопіюйте курс';
$string['copycoursetitle'] = 'Копіювати курс: {$a}';
$string['copydest'] = 'Пункт призначення';
$string['copyfieldnotfound'] = 'Необхідні дані поля не знайдено для полів: {$a}';
$string['copyformfail'] = 'Не вдалося надіслати форму копії курсу AJAX.';
$string['copyingcourse'] = 'Триває копіювання курсу';
$string['copyingcourseshortname'] = 'копіювання';
$string['copyop'] = 'Поточна операція';
$string['copyprogressheading'] = 'Виконуються копії курсу';
$string['copyprogressheading_help'] = 'Ця таблиця показує статус усіх ваших незакінчених копій курсу.';
$string['copyprogresstitle'] = 'Хід копіювання курсу';
$string['copyreturn'] = 'Скопіюйте та поверніть';
$string['copysource'] = 'Джерело';
$string['copyview'] = 'Скопіюйте та перегляньте';
$string['coursecategory'] = 'Категорію курс буде поміщено у';
$string['courseid'] = 'Початковий пароль';
$string['coursesettings'] = 'Налаштування курсу';
$string['coursetitle'] = 'Загаловок';
$string['currentstage1'] = 'Первинні налаштування';
$string['currentstage16'] = 'Завершити';
$string['currentstage2'] = 'Схема налаштувань';
$string['currentstage4'] = 'Підтвердження та перегляд';
$string['currentstage8'] = 'Здійснити резервне копіювання';
$string['enableasyncbackup'] = 'Увімкнути асинхронне резервне копіювання';
$string['enableasyncbackup_help'] = 'Якщо ввімкнено, усі операції резервного копіювання та відновлення виконуватимуться асинхронно. Це не впливає на імпорт та експорт. Асинхронне резервне копіювання та відновлення дозволяють користувачам виконувати інші операції під час резервного копіювання або відновлення.';
$string['enterasearch'] = 'Ввести пошук';
$string['error_block_for_module_not_found'] = 'Знайдено копію висячої строки (id: {$a->bid}) для курсу модуля (id: {$a->mid}) . Цей блок не буде піддано резервному копіюванню.';
$string['error_course_module_not_found'] = 'Знайдено копію висячої строки (id: {$a}). Цей модуль не буде піддано резервному копіюванню.';
$string['errorcopyingbackupfile'] = 'Не вдалося скопіювати файл резервної копії до тимчасової папки перед відновленням.';
$string['errorfilenamemustbezip'] = 'Вам потрібно вказати ім\'я ZIP файлу з розширенням .mbz';
$string['errorfilenamerequired'] = 'Вам потрібно ввести правильне ім\'я файлу для цієї резервної копії';
$string['errorfilenametoolong'] = 'Довжина імені файлу не повинна перевищувати 255 символів.';
$string['errorinvalidformat'] = 'Невідомий формат резервної копії';
$string['errorinvalidformatinfo'] = 'Обраний файл не є коректною резервною копією Moodle і не може бути відновленим.';
$string['errorminbackup20version'] = 'Цей файл резервної копії було створено в одній з версій Moodle, яка була в розробці - ({$a->backup}). Мінімально необхідна версія - {$a->min}. Відновлення не можливе.';
$string['errorrestorefrontpagebackup'] = 'На головну сторінку можна відновлювати лише з резервної копії головної сторінки';
$string['executionsuccess'] = 'Резервний файл було успішно створено.';
$string['extractingbackupfileto'] = 'Розпакування файлу резервної копії до: {$a}';
$string['failed'] = 'Помилка резервного копіювання';
$string['filealiasesrestorefailures'] = 'Невдача при відновленні псевдонімів';
$string['filealiasesrestorefailures_help'] = 'Псевдоніми - це символьні посилання до інших файлів, в тому числі тих, які зберігаються у зовнішніх сховищах. У деяких випадках, Moodle не може відновити їх - наприклад, при відновленні резервної копії на іншому сайті або коли вказаний файл не існує.

Докладніше та про фактичну причину невдачі можна знайти у файлі журналу відновлення.';
$string['filealiasesrestorefailuresinfo'] = 'Деякі псевдоніми, включені у файл резервної копії, не можуть бути відновлені. Наступний список містить очікуване розташування і  посилання на на колишнє місце.';
$string['filename'] = 'Ім\'я файлу';
$string['filereferencesincluded'] = 'До файлу резервної копії включено посилання на зовнішній вміст. Вони не працюватимуть, якщо резервну копію відновлено на іншому сайті.';
$string['filereferencesnotsamesite'] = 'Файл резервної копії з іншого сайту, тому посилання на файли не можна відновити.';
$string['filereferencessamesite'] = 'Файл резервної копії з цього сайту, тому посилання на файли можна відновити.';
$string['generalactivities'] = 'Включити діяльності та ресурси';
$string['generalanonymize'] = 'Анонімна інформація';
$string['generalbackdefaults'] = 'Деталі головної резервної копії';
$string['generalbadges'] = 'Включити відзнаки';
$string['generalblocks'] = 'Включити блоки';
$string['generalcalendarevents'] = 'Включити події календаря';
$string['generalcomments'] = 'Включити коментарі';
$string['generalcompetencies'] = 'Включити компетенції';
$string['generalcontentbankcontent'] = 'Включіть вміст банку вмісту';
$string['generalenrolments'] = 'Включати способи зарахування на курс';
$string['generalfiles'] = 'Включити файли';
$string['generalfilters'] = 'Включити фільтри';
$string['generalgradehistories'] = 'Включити історію';
$string['generalgroups'] = 'Включити групи та групування';
$string['generalhistories'] = 'Включити історію';
$string['generallegacyfiles'] = 'Включіть старі файли курсу';
$string['generallogs'] = 'Включити записи про події';
$string['generalpermissions'] = 'Включити перевизначення дозволів';
$string['generalquestionbank'] = 'Включити банк питань';
$string['generalrestoredefaults'] = 'Загальні параметри відновлення за замовчуванням';
$string['generalrestoresettings'] = 'Загальні параметри відновлення';
$string['generalroleassignments'] = 'Включити ролі користувача';
$string['generalsettings'] = 'Налаштування головної резервної копії';
$string['generalusers'] = 'Включити користувачів';
$string['generaluserscompletion'] = 'Включити інформацію проходження';
$string['hidetypes'] = 'Приховати тип параметрів';
$string['importbackupstage16action'] = 'Продовжити';
$string['importbackupstage1action'] = 'Далі';
$string['importbackupstage2action'] = 'Далі';
$string['importbackupstage4action'] = 'Виконати імпорт';
$string['importbackupstage8action'] = 'Продовжити';
$string['importcurrentstage0'] = 'Вибір курсу';
$string['importcurrentstage1'] = 'Початкові налаштування';
$string['importcurrentstage16'] = 'Закінчено';
$string['importcurrentstage2'] = 'Налаштування схеми';
$string['importcurrentstage4'] = 'Підтвердження та огляд';
$string['importcurrentstage8'] = 'Виконати імпорт';
$string['importfile'] = 'Імпорт файлу резервної копії';
$string['importgeneralduplicateadminallowed'] = 'Включити вирішення конфлікту імені admin';
$string['importgeneralduplicateadminallowed_desc'] = 'Якщо сайт має обліковий запис з іменем admin, то при спробі відновлення резервної копії, яка має обліковий запис з іменем admin, виникне конфлікт. Якщо цей параметр включено, то то конфлікт вирішується заміною імені у файлі резервної копії на admin_xyz.';
$string['importgeneralmaxresults'] = 'Максимальна кількість курсів, показаних для імпорту';
$string['importgeneralmaxresults_desc'] = 'Це контролює кількість курсів, які виведуться в ході першого етапу процесу імпорту';
$string['importgeneralsettings'] = 'Загальні типові значення імпорту';
$string['importrootsettings'] = 'Налаштування імпорту';
$string['importsettings'] = 'Загальні параметри імпорту';
$string['importsuccess'] = 'Імпорт завершено. Натисніть продовжити для повернення до курсу.';
$string['includeactivities'] = 'Включити:';
$string['includeditems'] = 'Включені елементи:';
$string['includefilereferences'] = 'Посилання до інших елементів';
$string['includesection'] = 'Секція {$a}';
$string['includeuserinfo'] = 'Дані користувачів';
$string['inprogress'] = 'Виконується резервне копіювання';
$string['jumptofinalstep'] = 'Перейти до заключного етапу';
$string['keep'] = 'Зберігайте';
$string['keptroles'] = 'Включіть реєстрацію ролей';
$string['keptroles_help'] = 'Користувачі з обраними ролями будуть зараховані до нового курсу. Дані користувача не будуть скопійовані, якщо не ввімкнено параметр «Включати дані користувача».';
$string['locked'] = 'Заблоковано';
$string['lockedbyconfig'] = 'Цей параметр було заблоковано типовим налаштуванням резервних копій';
$string['lockedbyhierarchy'] = 'Заблоковано залежностями';
$string['lockedbypermission'] = 'Ви не маєте достатньо прав для зміни цього параметра';
$string['loglifetime'] = 'Зберігати записи про події впродовж';
$string['managefiles'] = 'Керування файлами резервних копій';
$string['mergerestoredefaults'] = 'Налаштування відновлення за замовчуванням при злитті з іншим курсом';
$string['missingfilesinpool'] = 'Деякі файли не вдалося зберегти під час резервного копіювання, тому їх неможливо буде відновити.';
$string['module'] = 'Модуль';
$string['moodleversion'] = 'Версія модуля';
$string['morecoursesearchresults'] = 'Знайдено більше {$a} курс(ів), показано перші {$a}';
$string['moreresults'] = 'Забагато результатів, введіть більш конкретний пошук.';
$string['nomatchingcourses'] = 'Немає курсів для показу';
$string['norestoreoptions'] = 'Немає категорій або існуючих курсів, в які ви могли б відновити.';
$string['originalwwwroot'] = 'URL резервної копії';
$string['overwrite'] = 'Перезаписати';
$string['pendingasyncdeletedetail'] = 'Цей курс очікує на асинхронне резервне копіювання. Курси не можна видалити, доки не завершиться резервне копіювання.';
$string['pendingasyncdetail'] = 'Асинхронні резервні копії дозволяють користувачеві мати лише одну резервну копію ресурсу, що очікує на розгляд. Кілька асинхронних резервних копій одного ресурсу не можна поставити в чергу, оскільки це, ймовірно, призведе до створення кількох резервних копій з однаковим вмістом.';
$string['pendingasyncedit'] = 'Для цього курсу запитується резервна копія або копія, що очікує на розгляд. Будь ласка, не редагуйте курс, поки це не буде завершено.';
$string['pendingasyncerror'] = 'Очікує резервне копіювання цього ресурсу';
$string['preparingdata'] = 'Підготовка даних';
$string['preparingui'] = 'Підготовка до показу сторінки';
$string['previousstage'] = 'Назад';
$string['privacy:metadata:backup:detailsofarchive'] = 'Цей архів може містити різні дані користувача, пов’язані з курсом, такі як оцінки, записи користувачів і дані про діяльність.';
$string['privacy:metadata:backup:externalpurpose'] = 'Метою цього архіву є зберігання інформації, пов’язаної з курсом, яка може бути відновлена в майбутньому.';
$string['privacy:metadata:backup_controllers'] = 'Список операцій резервного копіювання';
$string['privacy:metadata:backup_controllers:itemid'] = 'Ідентифікатор курсу';
$string['privacy:metadata:backup_controllers:operation'] = 'Операція, яка була виконана, напр. відновлення.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Час створення дії';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Час, коли дію було змінено';
$string['privacy:metadata:backup_controllers:type'] = 'Тип об’єкта, на якому оперують, напр. діяльність.';
$string['qcategory2coursefallback'] = 'Категорія питань "{$a->name}", з оригінальним розташуванням у файлі резервної копії у система/категорія курсу, буде створена в контексті курсу при відновленні';
$string['qcategorycannotberestored'] = 'Категорія питань "{$a->name}" не може бути створена в процесі відновлення';
$string['question2coursefallback'] = 'Категорія питань "{$a->name}", з оригінальним розташуванням у файлі резервної копії у система/категорія курсу, буде створена в контексті курсу при відновленні';
$string['questionegorycannotberestored'] = 'Питання "{$a->name}" не можуть бути створені в процесі відновлення';
$string['recyclebin_desc'] = 'Зауважте, що ці налаштування також використовуватимуться для кошика.';
$string['replacerestoredefaults'] = 'Налаштування за замовчуванням при відновленні в інший курс з попереднім видаленням його вмісту';
$string['restoreactivity'] = 'Відновлення діяльності';
$string['restorecourse'] = 'Відновлення курсу';
$string['restorecoursesettings'] = 'Налаштування курсу';
$string['restoredcourseid'] = 'Відновлений ідентифікатор курсу: {$a}';
$string['restoreexecutionsuccess'] = 'Курс успішно відновлено, натисніть кнопку продовжити для переходу до відновленого курсу.';
$string['restorefileweremissing'] = 'Деякі файли не можуть бути відновлені, оскільки вони відсутні у файлі резервної копії.';
$string['restorenewcoursefullname'] = 'Назва нового курсу';
$string['restorenewcourseshortname'] = 'Коротка назва нового курсу';
$string['restorenewcoursestartdate'] = 'Нова дата початку';
$string['restorerolemappings'] = 'Відновлення відображення ролей';
$string['restorerootsettings'] = 'Налаштування відновлення';
$string['restoresection'] = 'Відновити секцію';
$string['restorestage1'] = 'Підтвердити';
$string['restorestage16'] = 'Огляд';
$string['restorestage16action'] = 'Виконати відновлення';
$string['restorestage1action'] = 'Далі';
$string['restorestage2'] = 'Призначення';
$string['restorestage2action'] = 'Далі';
$string['restorestage32'] = 'Процес';
$string['restorestage32action'] = 'Продовжити';
$string['restorestage4'] = 'Налаштування';
$string['restorestage4action'] = 'Далі';
$string['restorestage64'] = 'Закінчено';
$string['restorestage64action'] = 'Продовжити';
$string['restorestage8'] = 'Схема';
$string['restorestage8action'] = 'Далі';
$string['restoretarget'] = 'Ціль відновлення';
$string['restoretocourse'] = 'Відновити в курс:';
$string['restoretocurrentcourse'] = 'Відновити в цей курс';
$string['restoretocurrentcourseadding'] = 'Злити резервну копію з цим курсом';
$string['restoretocurrentcoursedeleting'] = 'Вилучити вміст курсу, а потім відновити';
$string['restoretoexistingcourse'] = 'Відновити в існуючий курс';
$string['restoretoexistingcourseadding'] = 'Злити резервну копію з існуючим курсом';
$string['restoretoexistingcoursedeleting'] = 'Вилучити вміст існуючого курсу, а потім відновити';
$string['restoretonewcourse'] = 'Відновити як новий курс';
$string['restoringcourse'] = 'Відновлення курсу в процесі';
$string['restoringcourseshortname'] = 'відновлення';
$string['rootenrolmanual'] = 'Відновити як ручне зарахування';
$string['rootsettingactivities'] = 'Включити діяльності та ресурси';
$string['rootsettinganonymize'] = 'Зробити дані користувачів анонімними';
$string['rootsettingbadges'] = 'Включити відзнаки';
$string['rootsettingblocks'] = 'Включити блоки';
$string['rootsettingcalendarevents'] = 'Включити події календаря';
$string['rootsettingcomments'] = 'Включити коментарі';
$string['rootsettingcompetencies'] = 'Включити компетентності';
$string['rootsettingcontentbankcontent'] = 'Включіть вміст банку вмісту';
$string['rootsettingcustomfield'] = 'Включіть спеціальні поля';
$string['rootsettingenrolments'] = 'Включати способи зарахування на курс';
$string['rootsettingenrolments_always'] = 'Так, завжди';
$string['rootsettingenrolments_never'] = 'Ні, відновлювати користувачів вручну';
$string['rootsettingenrolments_withusers'] = 'Так, але тільки якщо користувачі включені';
$string['rootsettingfiles'] = 'Включити файли';
$string['rootsettingfilters'] = 'Включити фільтри';
$string['rootsettinggradehistories'] = 'Включити історію оцінок';
$string['rootsettinggroups'] = 'Включити групи та групування';
$string['rootsettingimscc1'] = 'Конвертувати до IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Конвертувати до IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Включіть старі файли курсу';
$string['rootsettinglogs'] = 'Включити записи про події курсу';
$string['rootsettingpermissions'] = 'Включити перевизначення дозволів';
$string['rootsettingquestionbank'] = 'Включити банк питань';
$string['rootsettingroleassignments'] = 'Включити призначення ролей користувачам';
$string['rootsettings'] = 'Параметри налаштування резервного копіювання';
$string['rootsettingusers'] = 'Включити зареєстрованих користувачів';
$string['rootsettinguserscompletion'] = 'Включити інформацію про виконання курсу користувачами';
$string['samesitenotification'] = 'Ця резервна копія була створена з посиланнями лише на файли, а не на самі файли. Відновлення працюватиме лише на цьому сайті.';
$string['sectionactivities'] = 'Діяльності';
$string['sectioninc'] = 'Включено до резервної копії (без інформації про користувача)';
$string['sectionincanduser'] = 'Включено до резервної копії з інформацією про користувача';
$string['selectacategory'] = 'Виберіть категорію';
$string['selectacourse'] = 'Виберіть курс';
$string['setting_course_fullname'] = 'Назва курсу';
$string['setting_course_shortname'] = 'Коротка назва курсу';
$string['setting_course_startdate'] = 'Дата початку курсу';
$string['setting_keep_groups_and_groupings'] = 'Зберегти поточні групи і групування';
$string['setting_keep_roles_and_enrolments'] = 'Зберігати поточні ролі та реєстраційні записи';
$string['setting_overwrite_conf'] = 'Замінити налаштування курсу';
$string['setting_overwrite_course_fullname'] = 'Замінити повне ім\'я курсу';
$string['setting_overwrite_course_shortname'] = 'Замінити коротку назву курсу';
$string['setting_overwrite_course_startdate'] = 'Замінити дату початку курсу';
$string['showtypes'] = 'Показати тип параметрів';
$string['sitecourseformatwarning'] = 'Це резервна копія головної сторінки, зауважте, що відновлювати ви її можете тільки як головну сторінку';
$string['skiphidden'] = 'Пропустити приховані курси';
$string['skiphiddenhelp'] = 'Виберіть, чи слід пропустити приховані курси';
$string['skipmodifdays'] = 'Пропустити курси, які не змінювалися з';
$string['skipmodifdayshelp'] = 'Виберіть, чи слід пропустити курси, що не змінювалися вказану кількість днів';
$string['skipmodifprev'] = 'Пропустити курси не змінені від часу попередньої резервної копії';
$string['skipmodifprevhelp'] = 'Виберіть, чи слід пропускати курси, що не були змінені з моменту останнього автоматичного резервного копіювання. Це вимагає включеного журналювання подій.';
$string['status'] = 'Статус';
$string['storagecourseandexternal'] = 'Резервна копія файлів курсу та специфічних каталогів';
$string['storagecourseonly'] = 'Резервна копія файлів курсу';
$string['storageexternalonly'] = 'Специфічний каталог для автоматичного резервного копіювання';
$string['successful'] = 'Резервне копіювання успішно';
$string['successfulcopy'] = 'Копіювання успішно';
$string['successfulrestore'] = 'Відновлення успішне';
$string['timetaken'] = 'Витрачено часу';
$string['title'] = 'Заголовок';
$string['totalcategorysearchresults'] = 'Всього категорій: {$a}';
$string['totalcoursesearchresults'] = 'Всього курсів: {$a}';
$string['undefinedrolemapping'] = 'Не визначено зіставлення ролей для архетипу \'{$a}\'.';
$string['unnamedsection'] = 'Неназвана секція';
$string['userdata'] = 'Включіть дані користувача';
$string['userdata_help'] = 'Якщо ввімкнено, такі дані, як повідомлення на форумі, подані завдання тощо, будуть скопійовані в новий курс для всіх користувачів із роллю, вибраною в «Включити реєстрацію ролей».';
$string['userinfo'] = 'Інформація користувача';
