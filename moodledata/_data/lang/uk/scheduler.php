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
 * Strings for component 'scheduler', language 'uk', version '3.11'.
 *
 * @package     scheduler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Дія';
$string['addappointment'] = 'Додати іншого студента';
$string['addondays'] = 'Додати графіки прийомів на';
$string['addsession'] = 'Додати інтервали - щотижня';
$string['addsingleslot'] = 'Додати окремий інтервал';
$string['addslot'] = 'Ви можете будь-коли створити додаткові інтервали прийому.';
$string['addstudenttogroup'] = 'Додати цього студента до групи в розкладі';
$string['allappointments'] = 'Всі графіки прийомів';
$string['allowgroup'] = 'Обмежений інтервал - клацніть щоб змінити';
$string['alreadyappointed'] = 'Запис на прийом неможливий. Інтервал часу повністю заповнений.';
$string['appointagroup_help'] = 'Виберіть, чи Ви хочете записатися на прийом самі, чи хочете записати всіх одногрупників також.';
$string['appointingstudent'] = 'Графік прийому, що включає інтервал';
$string['appointingstudentinnew'] = 'Графік прийому для нового інтервалу';
$string['appointmentmode'] = 'Налаштування режиму розкладу прийому';
$string['appointmentmode_help'] = '<p>Ви можете вибрати такі варіанти здійснення запису на прийом. </p>
<p><ul>
<li><b>"Студенти можуть зареєструвати лише один запис на прийом" режим:</b> Студент може мати лише один запис на прийом в цьому модулі. Навіть після зустрічі з викладачем студент не зможе запланувати жодної наступної зустрічі. Єдиний спосіб надати студенту можливість знову записуватися на прийом - видалити старі записи про здійснені зустрічі ("З\'явився").</li>
<li><b>"Студенти можуть зареєструвати лише один запис на прийом за один раз" режим:</b> Студент може записатися лише на одну дату (в майбутньому) по кожному курсу. По закінченню часу зустрічі (незалежно, відбулася вона, чи ні), він зможе записатися знову. Цей режим підходить для керування індивідуальними, курсовими, дипломними роботам (проектами) чи проведення відробок пропущених занять.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Запис {$a}';
$string['appointments'] = 'Графіки прийомів';
$string['appointsolo'] = 'лише я';
$string['appointsomeone'] = 'Добавити новий графік прийому';
$string['attendable'] = 'Можуть записатися';
$string['attendablelbl'] = 'Загалом кандидатів для запису';
$string['attended'] = 'Записані';
$string['attendedlbl'] = 'Кількість записаних студентів';
$string['attendedslots'] = 'Інтервали з записами';
$string['availableslots'] = 'Доступні інтервали';
$string['availableslotsall'] = 'Всього інтервалів';
$string['availableslotsnotowned'] = 'Не мої';
$string['availableslotsowned'] = 'Мої';
$string['bookwithteacher'] = 'Зареєстрував';
$string['bookwithteacher_help'] = 'Виберіть викладача, відповідального за проведення прийому.';
$string['break'] = 'Перерва між інтервалами прийому';
$string['breaknotnegative'] = 'Тривалість перерви між інтервалами прийому не може бути від\'ємною';
$string['chooseexisting'] = 'Виберіть існуючий';
$string['choosingslotstart'] = 'Виберіть час початку';
$string['choosingslotstart_help'] = 'Змініть (чи встановіть новий) час початку прийому (зустрчі). Якщо даний графік прийому буде перекривати інші інтервали, вам буде задано питання про заміну всіх попередніх інтервалів, з якими виявлено конфлікти. Пам\'ятайте, що налаштування нового інтервалу будуть мати пріоритет над попередніми налаштуваннями.';
$string['comments'] = 'Примітки';
$string['complete'] = 'Відмічено';
$string['conflictingslots'] = 'Конфлікти';
$string['course'] = 'Курс';
$string['csvfieldseparator'] = 'Розділювач полів для csv';
$string['cumulatedduration'] = 'Сумарна тривалість прийомів';
$string['date'] = 'Дата';
$string['datelist'] = 'Огляд';
$string['defaultslotduration'] = 'Тривалість інтервалу по-замовчуванню';
$string['defaultslotduration_help'] = 'Тривалість по-замовчуванню (в хвилнах) для інтервалу графіку прийому, що Ви налаштовуєте';
$string['deleteallslots'] = 'Видалити всі інтервали';
$string['deleteallunusedslots'] = 'Видалити всі незадіяні інтервали';
$string['deletemyslots'] = 'Видалити всі мої інтервали';
$string['deleteselection'] = 'Видалити вибрані інтервали';
$string['deletetheseslots'] = 'Видалити ці інтервали';
$string['deleteunusedslots'] = 'Видалити мої незадіяні інтервали';
$string['department'] = 'Звідки?';
$string['disengage'] = 'Знищити мої графіки прийому';
$string['displayfrom'] = 'Показати графік прийому студентам починаючи з';
$string['distributetoslot'] = 'Поширити на всю групу';
$string['divide'] = 'Ділити на інтервали?';
$string['duration'] = 'Тривалість';
$string['durationrange'] = 'Тривалість інтервалу прийому повинна бути від {$a->min} до {$a->max} хвилин.';
$string['email_applied_html'] = '<p>Запис на прийом був проведений на {$a->date} о {$a->time},<br/>
студентом <a href="{$a->attendee_url}">{$a->attendee}</a> на курсі:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>з використання модулю розкладу під назвою "<i>{$a->module}</i>" на сайті: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Запис на прийом був проведений на {$a->date} о {$a->time},
студентом {$a->attendee} на курсі:

{$a->course_short}: {$a->course}

з використання модулю розкладу під назвою "{$a->module}" на сайті: {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Новий запис на прийом';
$string['email_cancelled_html'] = '<p>Ваш запис на прийом на <b>{$a->date}</b> о <b>{$a->time}</b>,<br/>
з студентом <b><a href="{$a->attendee_url}">{$a->attendee}</a></b> на курсі:</p>

<p><b>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></b></p>

<p>в модулі розкладу під назвою "<i>{$a->module}</i>" на сайті: <b><a href="{$a->site_url}">{$a->site}</a></b></p>

<p><b><span style="color: red">був відмінений чи перенесений</span></b>.</p>';
$string['email_cancelled_plain'] = 'Ваш запис на прийом на  {$a->date} о {$a->time},
з студентом {$a->attendee} на курсі:

{$a->course_short} : {$a->course}

в модулі розкладу під назвою "{$a->module}" на сайті: {$a->site}

був відмінений чи перенесений.';
$string['email_cancelled_subject'] = '{$a->course_short}: Запис на прийом відмінено чи переміщено студентом';
$string['email_reminder_html'] = '<p>Наближається час Вашого запису на прийом на <b>{$a->date}</b>
від <b>{$a->time}</b> до <b>{$a->endtime}</b><br/>
з <b><a href="{$a->attendant_url}">{$a->attendant}</a></b>.</p>

<p>Розміщення: <b>{$a->location}</b></p>';
$string['email_reminder_plain'] = 'Наближається час Вашого запису на прийом
на {$a->date} від {$a->time} до {$a->endtime}
з {$a->attendant}.

Розміщення: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Нагадування про запис на прийом';
$string['email_teachercancelled_html'] = '<p>Ваш запис на прийом на <b>{$a->date}</b> о <b>{$a->time} </b>,<br/>
з {$a->staffrole} <b><a href="{$a->attendant_url}">{$a->attendant}</a></b> на курсі:</p>

<p><b>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></b></p>

<p>в модулі розкладу під назвою "<i>{$a->module}</i>" на сайті: <b><a href="{$a->site_url}">{$a->site}</a></b></p>

<p><b><span style="color : red">було відмнено</span></b>. Будь-ласка, пошукайте інший інтервал.</p>';
$string['email_teachercancelled_plain'] = 'Ваш запис на прийом на {$a->date} о {$a->time},
з {$a->staffrole} {$a->attendant} на курсі:

{$a->course_short}: {$a->course}

в модулі розкладу під назвою "{$a->module}" на сайті: {$a->site}

було відмнено. Будь-ласка, пошукайте інший інтервал.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: Запис на прийом відмінено викладачем';
$string['emailreminder'] = 'Надіслати нагадування по email';
$string['emailreminderondate'] = 'Надіслати нагадування по email на';
$string['end'] = 'Кінець';
$string['enddate'] = 'Повторити інтервал до';
$string['exclusive'] = 'Персональний';
$string['exclusivity'] = 'Персонально';
$string['exclusivity_help'] = '<p>Ви можете встановити граничне число студентів, що можуть записатися на окремий інтервал. </p>
<p>Встановленя обмеження в 1 перемкає даний інтервал в режим персональної зустрічі.</p>
<p>Якщо для інтервалу дозволено записувати необмежену кількість студентів, він не буде враховуватися в умовах обмеженя окрім випадків, коли інші інтервали також є персональними зустрічами чи потрапяють в той же відрізок часу.
</p>';
$string['exclusivityoverload'] = 'В інтервал записано {$a} студентів, що більше, ніж дозволяє цей параметр.';
$string['explaingeneralconfig'] = 'Це налаштування може бути встановлено лише на рівні сайту і буде застосовано для всіх розкладів у цьому Moodle.';
$string['finalgrade'] = 'Остаточна оцінка';
$string['firstslotavailable'] = 'Перший інтервал буде відчинено о:';
$string['forbidgroup'] = 'Груповий інтервал - клацніть щоб змінити';
$string['forcewhenoverlap'] = 'Примусово перекривати';
$string['forcewhenoverlap_help'] = '<p>Ця опція дозволяє примусово добавити інтервал(и) часу прийому, навіть, якщо в процесі добавлення нового(их) інтервалу(ів) виявлено їх перекривання (конфлікт) з існуючим(и) інтервалом(и).
Якщо опція увімкнена, лише "чисті" (без конфліктів) інтервали будуть додані.</p>

<p>Якщо опція вимкнена, процедура добавлення інтервалу(ів) при виявленні їх перекривання (конфлікт) буде перервана, і Вам буде задано питання з пропозцією видалити попередні(й) інтревал(и), щоб стало можливим добвити новий(і).</p>';
$string['forcourses'] = 'Виберіть студентів на курсі';
$string['friday'] = 'П\'ятниця';
$string['generalconfig'] = 'Загальні налаштування';
$string['grade'] = 'Оцінка';
$string['gradingstrategy'] = 'Методика оцінювання';
$string['gradingstrategy_help'] = 'Для розкладів в яких студенти можуть мати кілька записів, виберіть, яка оцінка буде остаточною.
В журналі оцінок може відображатися або <ul><li>середня оцінка або</li><li>максимальна оцінка</li></ul> отримані студентом.';
$string['group'] = 'група';
$string['groupbreakdown'] = 'За розміром групи';
$string['groupscheduling'] = 'Увімкнути заспис на прийом групами';
$string['groupscheduling_desc'] = 'Дозволяє записати на прийом усіх членів групи за один раз.
(Незалежно від глобальних налаштувань, щоб увімкнути цю функціональність груповий режим для даного виду активності повинен бути встановлений у  "Показувати групи" чи "Відокремлені групи").';
$string['groupsession'] = 'Сесія для групи';
$string['groupsize'] = 'Розмір групи';
$string['guestscantdoanything'] = 'Гості не можуть нічого міняти тут.';
$string['howtoaddstudents'] = 'Застосовуйте налаштування ролей модуля щоб додати студентів до розкладу на глобальному ріні.<br/>Ви також можете застосуватии налаштування ролей у модулі для того, щоб вказати осіб-реєстраторів для ваших студентів.';
$string['ignoreconflicts'] = 'Не брати до уваги перекривання розкладів';
$string['ignoreconflicts_help'] = 'Якщо ця опція увімкнена, то інтервал прийому буде встановлено на вказану дату і час, навіть якщо існують інші інтервали прийому, з якими відбувається перекривання. Це може призвести до перекривання графіків прийому для викладачів та студентів, тому, використовуйте цю опцію обережно.';
$string['incourse'] = 'в курсі';
$string['introduction'] = 'Вступ';
$string['isnonexclusive'] = 'Не персональний';
$string['lengthbreakdown'] = 'По тривалості інтервалу';
$string['limited'] = 'Обмежено ({$a} залишилось)';
$string['location'] = 'Розміщення';
$string['location_help'] = 'Вкажіть тут інформацію про місце, де буде здійснюватися прийом (проводитися зустріч).';
$string['markasseennow'] = 'Відмітити як присутнього зараз';
$string['markseen'] = 'будь-ласка, після зустрічі з студентом зробіть відмітку "Був присутній", поставивши відповідний прапорець та натиснувши посилання в таблиці вище.';
$string['maxgrade'] = 'Взяти найвищу оцінку';
$string['maxstudentlistsize'] = 'Максимальна довжина списку студентів';
$string['maxstudentlistsize_desc'] = 'Максимальна довжина списку студентів, що потребують розкладу прийому, яка буде відображена у панелі викладача. Якщо студентів більше, список не буде відображено.';
$string['maxstudentsperslot'] = 'Максимальна кількість студентів на інтервал прийому';
$string['maxstudentsperslot_desc'] = 'Інтервали групового прийому / не-персональні інтервали прийому можуть мати не більше цієї кількості студентів. Примітка: на додаток, значення "необмежено" завжди може бути встановлено для інтервалу прийому.';
$string['meangrade'] = 'Взяти оцінку по середньому';
$string['meetingwith'] = 'Зустріч з вами';
$string['meetingwithplural'] = 'Зустріч з вами';
$string['message'] = 'Повідомлення';
$string['minutes'] = 'хвилин';
$string['minutesperslot'] = 'хвилин на інтервал';
$string['missingstudents'] = '{$a} студентів все ще потребують розкладу прийому';
$string['missingstudentsmany'] = '{$a} студентів все ще потребують розкладу прийому. Список не відображається через великий розмір.';
$string['mode'] = 'Режим';
$string['modulename'] = 'Розклад';
$string['modulename_help'] = 'Модуль діяльності "Розклад" допоможе Вам планувати зустрічі з Вашими студентами.

Викладачі визначають часові інтервали для зустрічей, студенти вибирають їх у Moodle.
Викладачі можуть відмічати пристність студентів, результати зустрічі - та, опціонально, виставляти оцінки.

Підтримується створення розкладів для груп. Зокрема, в кожен інтервал часу може записатися кілька студентів. Опціонально, є можливість запланувати розклад прийому для всієї групи студентів одночасно.';
$string['modulename_link'] = 'mod/scheduler/view';
$string['modulenameplural'] = 'Розклади';
$string['monday'] = 'Понеділок';
$string['myappointments'] = 'Мої графіки прийомів';
$string['myself'] = 'мене';
$string['name'] = 'Ім\'я розкладу';
$string['needteachers'] = 'Інтервали не можуть бути додані - на курсі немає викладачів';
$string['negativerange'] = 'Період негативний. Цього неможе бути.';
$string['never'] = 'Ніколи';
$string['noappointments'] = 'Немає розкладів прийому';
$string['noexistingstudents'] = 'Немає студентів';
$string['nogroups'] = 'Немає груп, доступних для складання розкладу.';
$string['noresults'] = 'Немає результатів.';
$string['noschedulers'] = 'Немає розкладів';
$string['noslots'] = 'Немає наявних інтревалів для прийому.';
$string['noslotsavailable'] = 'Немає обов\'язкових розкадів прийому, чи всі оголошені розклади прийомів бли виконані.';
$string['noslotsopennow'] = 'Зараз немає відкритих інтревалів.';
$string['nostudents'] = 'Немає записаних на прийом студентів';
$string['nostudenttobook'] = 'Немає студента для запису';
$string['note'] = 'Оцінка';
$string['noteacherforslot'] = 'Немає викладача для інтревалів';
$string['noteachershere'] = 'Викладач відсутній';
$string['notifications'] = 'Повідомлення';
$string['notifications_help'] = 'Якщо увімкнути цю опцію, вкладачі та студенти стануть отримувати повідомлення про нові записи/зміни/анулювання в графіках прийому.';
$string['now'] = 'Зараз';
$string['occurrences'] = 'Спостереження';
$string['on'] = 'на';
$string['onedaybefore'] = '1 день до інтервалу';
$string['oneslotadded'] = '1 інтервал додано';
$string['oneweekbefore'] = '1 тиждень до інтервалу';
$string['onthemorningofappointment'] = 'Вранці дня прийому';
$string['overall'] = 'Всюди';
$string['overlappings'] = 'Кілька інших інтервалів перекриваються';
$string['pluginadministration'] = 'Керування розкладом';
$string['pluginname'] = 'Розклад';
$string['registeredlbl'] = 'Прийнятий студент';
$string['reminder'] = 'Нагадування';
$string['resetappointments'] = 'Видалити записи на прийом та оцінки';
$string['resetslots'] = 'Видалити інтервали графіку прийому';
$string['return'] = 'Повернутися до курсу';
$string['revoke'] = 'Анулювати графік прийому';
$string['saturday'] = 'Субота';
$string['save'] = 'Зберегти';
$string['savechoice'] = 'Зберегти мій вибір';
$string['saveseen'] = 'Був присутній';
$string['schedule'] = 'Розклад';
$string['scheduleappointment'] = 'Запланувати прийом для {$a}';
$string['schedulecancelled'] = '{$a} : Ваш прийом відмінено чи перенесено';
$string['schedulegroups'] = 'Розклад по групі';
$string['scheduleinnew'] = 'Записати в новий інтервал';
$string['scheduler'] = 'Розклад';
$string['scheduler:addinstance'] = 'Добавити новий розклад';
$string['scheduler:appoint'] = 'Прийом';
$string['scheduler:attend'] = 'Записані студенти';
$string['scheduler:canscheduletootherteachers'] = 'Планувати графік прийому для інших викладачів кафедри';
$string['scheduler:canseeotherteachersbooking'] = 'Переглядати реєстрації інших викладачів';
$string['scheduler:disengage'] = 'Видалити всі графіки прийому (студенти)';
$string['scheduler:manage'] = 'Керувати вашими часовими інтервалами та графіками прийому';
$string['scheduler:manageallappointments'] = 'Керувати всією інформацією про розклад';
$string['scheduler:seeotherstudentsbooking'] = 'Переглядати реєстрації інших студентів на інтервалі';
$string['scheduler:seeotherstudentsresults'] = 'Переглядати результати інших студентів на інтервалі';
$string['schedulestudents'] = 'Розклад по студенту';
$string['seen'] = 'Присутність';
$string['showemailplain'] = 'Показувати e-mail адресу як звичайний текст';
$string['showemailplain_desc'] = 'В інтерфейсі керування розкладом для викладча,
показувати e-mail адреси студентів, що потребують запису на прийом ще і звичайним текстом, на додачу до mailto: посилання.';
$string['slot_is_just_in_use'] = 'Вибачте, прийом щойно був вибраний іншим студентом!<br>Спробуйте ще раз.';
$string['slots'] = 'Інтервали';
$string['slotsadded'] = '{$a} інтервали були додані';
$string['slottype'] = 'Тип інтервалу';
$string['slotupdated'] = '1 інтервал було оновлено';
$string['slotwarning'] = '<strong>Увага: </strong>Переміщення цього інтервалу на вибраний час конфліктує з інтервалом(ами), що перераховані нижче. Увімкніть опцію "Не брати до уваги перекривання розкладів" якщо ви все ще хочете перемістити цей інтервал.';
$string['staffbreakdown'] = 'Ким: {$a}';
$string['staffrolename'] = 'Назва ролі відповідального за реєстрацію';
$string['staffrolename_help'] = 'Текстова мітка для ролі з правами реєстрації студентів на прийом. Може містити будь-яке значення, не обов\'язково "викладач".';
$string['start'] = 'Початок';
$string['startpast'] = 'Ви не можете розпочати інтервал прийому в минулому';
$string['statistics'] = 'Статистика';
$string['student'] = 'Студент';
$string['studentbreakdown'] = 'Студентом';
$string['studentcomments'] = 'Примітки для студентів';
$string['studentdetails'] = 'Детальна інформація по студенту';
$string['studentmultiselect'] = 'Кожен студент може бути вибраний лише раз в цьому інтервалі';
$string['students'] = 'Студенти';
$string['sunday'] = 'Неділя';
$string['teacher'] = 'Викладач';
$string['thursday'] = 'Четвер';
$string['tuesday'] = 'Вівторок';
$string['unattended'] = 'Незаписані';
$string['unlimited'] = 'Без обмежень';
$string['unregisteredlbl'] = 'Студенти без графіків прийому';
$string['updategrades'] = 'Оновити оцінки';
$string['updatesingleslot'] = '';
$string['wednesday'] = 'Середа';
$string['welcomebackstudent'] = 'Виділений жирним шрифтом рядок в таблиці нижче вказує на вибраний Вами час прийому. Ви можете змінити його на будь-який інший наявний інтервал.';
$string['welcomenewstudent'] = 'Таблиця нижче показує всі наявні інтервали для графіку прийому. Виберіть бажаний, поставивши відмітку перемикачем і не забудьте клацнути на кнопці "Зберегти мій вибір" після цього. Якщо пізніше Ви захочете внести змінити - зайдіть на цю сторінку ще раз.';
$string['welcomenewteacher'] = 'Будь-ласка, натисніть кнопку нижче щоб добавити записи про зустріч для показу всім студентам.';
$string['what'] = 'Що?';
$string['whathappened'] = 'Що відбулося?';
$string['whatresulted'] = 'Результат?';
$string['when'] = 'Коли?';
$string['where'] = 'Де?';
$string['who'] = 'З ким?';
$string['whosthere'] = 'Хто тут?';
$string['xdaysbefore'] = '{$a} дні до інтервалу';
$string['xweeksbefore'] = '{$a} тижні до інтервалу';
$string['yourappointmentnote'] = 'Примітки для Вас';
$string['yourslotnotes'] = 'Примітки до зустрічі';
