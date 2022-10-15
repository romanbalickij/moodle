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
 * Strings for component 'calendar', language 'uk', version '3.11'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'Подія діяльності';
$string['addevent'] = 'Додати події';
$string['advancedoptions'] = 'Розширені параметри';
$string['allday'] = 'Цілий день';
$string['annually'] = 'Щороку';
$string['calendar'] = 'Календар';
$string['calendarheading'] = '{$a} Календар';
$string['calendarpreferences'] = 'Налаштування календаря';
$string['calendartypes'] = 'Типи календаря';
$string['calendarurl'] = 'URL календаря: {$a}';
$string['category'] = 'Категорія';
$string['categoryevent'] = 'Подія категорії';
$string['categoryevents'] = 'Категорія подій';
$string['clickhide'] = 'Сховати';
$string['clickshow'] = 'Показати';
$string['colactions'] = 'Дії';
$string['colcalendar'] = 'Календар';
$string['collastupdated'] = 'Останнє оновлення';
$string['colpoll'] = 'Оновити';
$string['commontasks'] = 'Параметри';
$string['confirmeventdelete'] = 'Ви впевнені, що хочете видалити подію "{$a}"?';
$string['confirmeventseriesdelete'] = 'Подія "{$a->name}" є частиною серії. Видалити лише цю подію або всі події {$a->count} у серії?';
$string['course'] = 'Курсу';
$string['coursecalendar'] = 'календар {$a}';
$string['courseevent'] = 'Подія курсу';
$string['courseevents'] = 'Події курсу';
$string['courses'] = 'Курси';
$string['customexport'] = 'Спеціальний діапазон ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Щоденно';
$string['day'] = 'День';
$string['dayeventsmany'] = '{$a->num} події, {$a->day}';
$string['dayeventsnone'] = 'Немає подій, {$a}';
$string['dayeventsone'] = '1 подія, {$a}';
$string['daynext'] = 'Наступного дня';
$string['dayprev'] = 'Попередній день';
$string['dayviewfor'] = 'Денний для:';
$string['dayviewtitle'] = 'Денний для: {$a}';
$string['daywithnoevents'] = 'На сьогодні нічого не заплановано.';
$string['default'] = 'Типово';
$string['deleteallevents'] = 'Видалити всі події';
$string['deleteevent'] = 'Видалити подію';
$string['deleteevents'] = 'Видалити події';
$string['deleteoneevent'] = 'Видалити цю подію';
$string['detailedmonthviewfor'] = 'Детальний місячний для:';
$string['detailedmonthviewtitle'] = 'Детальний місячний для: {$a}';
$string['durationminutes'] = 'Тривалість в хвилинах';
$string['durationnone'] = 'Не вказувати тривалість події';
$string['durationuntil'] = 'Триває до';
$string['editevent'] = 'Редагувати подію';
$string['erroraddingevent'] = 'Не вдається додати подію';
$string['errorbadsubscription'] = 'Підписаний календар не знайдено.';
$string['errorbeforecoursestart'] = 'Не можна запланувати подію до дати початку курсу';
$string['errorcannotimport'] = 'Ви не можете створити підписку календаря в цей час.';
$string['errorhasuntilandcount'] = 'У правилах повторення можуть з\'являтися або UNTIL або COUNT, але UNTIL і COUNT НЕ ПОВИННІ зустрічатися в одному правилі повторення.';
$string['errorinvalidbydayprefix'] = 'Цілочисельні значення, що передують правилам BYDAY, можуть бути присутніми тільки для МЕСЯЧНОГО або РІКНОГО правила повторення.';
$string['errorinvalidbydaysuffix'] = 'Дійсними значеннями для дня тижня частини правила BYDAY є MO, TU, WE, TH, FR, SA і SU';
$string['errorinvalidbyhour'] = 'Дійсними значеннями для правила BYHOUR є від 0 до 23.';
$string['errorinvalidbyminute'] = 'Дійсними значеннями для правила BYMINUTE є від 0 до 59.';
$string['errorinvalidbymonth'] = 'Дійсні значення для правила BYMONTH - від 1 до 12.';
$string['errorinvalidbymonthday'] = 'Дійсними значеннями для правила BYMONTHDAY є від 1 до 31 або -31 до -1.';
$string['errorinvalidbysecond'] = 'Дійсними значеннями для правила BYSECOND є 0 до 59.';
$string['errorinvalidbysetpos'] = 'Дійсними значеннями для правила BYSETPOS є від 1 до 366 або -366 до -1.';
$string['errorinvalidbyweekno'] = 'Дійсними значеннями для правила BYWEEKNO є від 1 до 53 або від -53 до -1.';
$string['errorinvalidbyyearday'] = 'Дійсними значеннями для правила BYYEARDAY є від 1 до 366 або -366 до -1.';
$string['errorinvaliddate'] = 'Неправильна дата';
$string['errorinvalidicalurl'] = 'Надане посилання iCal не коректне.';
$string['errorinvalidinterval'] = 'Значення для правила INTERVAL має бути цілим числом.';
$string['errorinvalidminutes'] = 'Вкажіть тривалість в хвилинах від 1 до 999.';
$string['errorinvalidrepeats'] = 'Вкажіть кількість подій від 1 до 99';
$string['errormustbeusedwithotherbyrule'] = 'Правило BYSETPOS може використовуватися тільки разом з іншою частиною правила BYxxx.';
$string['errornodescription'] = 'Потрібно надати опис';
$string['errornoeventname'] = 'Потрібно вказати назву';
$string['errornonyearlyfreqwithbyweekno'] = 'Правило BYWEEKNO дійсне лише для правил YEARLY.';
$string['errorrequiredurlorfile'] = 'Для імпорту календаря потрібно вказати URL або файл.';
$string['errorrrule'] = 'Прийняте правило повторення здається неправильним.';
$string['errorrruleday'] = 'Правило повторення має недійсний параметр дня.';
$string['errorrrulefreq'] = 'Правило повторення має недійсний параметр частоти.';
$string['eventcalendareventcreated'] = 'Створено календарну подію';
$string['eventcalendareventdeleted'] = 'Вилучено календарну подію';
$string['eventcalendareventupdated'] = 'Оновлено календарну подію';
$string['eventdate'] = 'Дата';
$string['eventdescription'] = 'Опис';
$string['eventduration'] = 'Тривалість';
$string['eventendtime'] = 'Час завершення';
$string['eventendtimewrapped'] = '{$a} (час завершення)';
$string['eventinstanttime'] = 'Час';
$string['eventkind'] = 'Категорія';
$string['eventname'] = 'Назва';
$string['eventnameandcategory'] = '{$a->category}: {$a->name}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnone'] = 'Немає подій';
$string['eventrepeat'] = 'Повторюваність';
$string['events'] = 'Події';
$string['eventsall'] = 'Усі події';
$string['eventsdeleted'] = 'Вилучено подію';
$string['eventsfor'] = '{$a} події';
$string['eventsimported'] = 'Імпортовано події: {$a}';
$string['eventskey'] = 'Показувати події:';
$string['eventsource'] = 'Джерело події';
$string['eventspersonal'] = 'Мої особисті події';
$string['eventsrelatedtocategories'] = 'Події, пов\'язані з категоріями';
$string['eventsrelatedtocourses'] = 'Події, пов\'язані з курсом';
$string['eventsrelatedtogroups'] = 'Події, пов\'язані з групами';
$string['eventstarttime'] = 'Час початку';
$string['eventstoexport'] = 'Події для експорту';
$string['eventsubscriptioncreated'] = 'Створена підписка на календар';
$string['eventsubscriptiondeleted'] = 'Підписка на календар видалена';
$string['eventsubscriptioneditwarning'] = 'Ця подія календаря є частиною підписки. Будь-які зміни, внесені до цієї події, будуть втрачені, якщо підписку буде видалено.';
$string['eventsubscriptionupdated'] = 'Оновлення підписки на календар';
$string['eventsupdated'] = 'Оновлено подій: {$a}';
$string['eventtime'] = 'Час';
$string['eventtype'] = 'Тип події';
$string['eventtypecategory'] = 'категорія';
$string['eventtypecourse'] = 'курс';
$string['eventtypeglobal'] = 'глобальний';
$string['eventtypegroup'] = 'група';
$string['eventtypemodule'] = 'модуль';
$string['eventtypeother'] = 'інший';
$string['eventtypesite'] = 'сайт';
$string['eventtypeuser'] = 'користувач';
$string['eventview'] = 'Деталі події';
$string['expired'] = 'Прострочено';
$string['explain_site_timeformat'] = 'Встановити 12-годинний або 24-годинний формат відображення часу для всього сайту. При стандартному налаштуванні формат часу встановлюється автоматично відповідно до мови сайту. Користувачі можуть встановлювати свої налаштування.';
$string['export'] = 'Експорт';
$string['exportbutton'] = 'Експорт';
$string['exportcalendar'] = 'Експортувати календар';
$string['exporthelp'] = 'Як підписатися на цей календар з програми календаря (Google/Outlook/Інше)?';
$string['forcecalendartype'] = 'Примусовий календар';
$string['fri'] = 'Пт';
$string['friday'] = 'П\'ятниця';
$string['generateurlbutton'] = 'Отримати URL календаря';
$string['global'] = 'Загальні';
$string['globalevent'] = 'Загальна подія';
$string['globalevents'] = 'Загальні події';
$string['gotoactivity'] = 'Перейти до активності';
$string['gotocalendar'] = 'Перейти до календаря';
$string['group'] = 'Група';
$string['groupevent'] = 'Подія групи';
$string['groupevents'] = 'Події групи';
$string['hideeventtype'] = 'Приховати {$a} події';
$string['hourly'] = 'Щогодини';
$string['importcalendar'] = 'Імпорт календаря';
$string['importcalendarfrom'] = 'Імпорт з';
$string['importcalendarheading'] = 'Імпорт календаря...';
$string['importfromfile'] = 'Файл календаря (.ics)';
$string['importfrominstructions'] = 'Будь ласка, або вкажіть URL на віддалений календар, або завантажте файл.';
$string['importfromurl'] = 'URL календаря';
$string['invalideventtype'] = 'Вибраний тип події недійсний.';
$string['invalidtimedurationminutes'] = 'Неправильний формат. Будь ласка, введіть тривалість у хвилинах більшу ніж 0, або виберіть "не вказувати тривалість"';
$string['invalidtimedurationuntil'] = 'Подія не може закінчуватися раніше ніж розпочнеться.';
$string['iwanttoexport'] = 'Експортувати';
$string['less'] = 'Менше';
$string['managesubscriptions'] = 'Керування підписками';
$string['manyevents'] = '{$a} подій';
$string['mon'] = 'Пн';
$string['monday'] = 'Понеділок';
$string['monthly'] = 'Щомісяця';
$string['monthlyview'] = 'Місяць';
$string['monthnext'] = 'Наступний місяць';
$string['monthprev'] = 'Попередній місяць';
$string['monththis'] = 'Поточний місяць';
$string['more'] = 'Більше';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'Ніколи';
$string['newevent'] = 'Створити подію';
$string['nocalendarsubscriptions'] = 'У вас немає календарних підписок.';
$string['notitle'] = 'без назви';
$string['noupcomingevents'] = 'Немає подій у майбутньому';
$string['oneevent'] = '1 подія';
$string['pollinterval'] = 'Інтервал оновлення';
$string['pollinterval_help'] = 'Як часто календар повинен оновлюватися новими подіями.';
$string['pref_lookahead'] = 'Відображати інформацію про заходи, що наближаються за (днів)';
$string['pref_lookahead_help'] = 'Це встановлює (максимум) кількість днів наперед, протягом яких події будуть з’являтися в блоці "Незабаром". Події, які не входять в цей період, не будуть показуватися. Будь ласка, зверніть увагу, що <strong>немає ніякої гарантії</strong>, що всі події, які починаються в цей період часу, будуть показані; якщо їх забагато (більше ніж встановлено в "Максимум майбутніх подій"), то найвіддаленіші події не показуватимуться.';
$string['pref_maxevents'] = 'Максимум майбутніх подій';
$string['pref_maxevents_help'] = 'Це встановлює максимальну кількість майбутніх події, які повинні показуватися. Якщо ви вкажете велика кількість, цілком можливо, що показ майбутніх події займе багато місця на екрані.';
$string['pref_persistflt'] = 'Запам\'ятовувати налаштування фільтру';
$string['pref_persistflt_help'] = 'Якщо ця опція включена, то Moodle буде пам\'ятати ваші останні налаштування фільтра подій і автоматично відновить їх при вході.';
$string['pref_startwday'] = 'Перший день тижня';
$string['pref_startwday_help'] = 'Тижні в календарі показуватимуться починаючи з вказаного тут дня.';
$string['pref_timeformat'] = 'Формат відображення часу';
$string['pref_timeformat_help'] = 'Ви можете вибрати, в якому форматі потрібно показувати час - 12 або 24-годинному. Якщо ви виберете "Типово", то формат буде обраний автоматично відповідно до мови, яку ви використовуєте на сайті.';
$string['preferences'] = 'Налаштування';
$string['preferences_available'] = 'Ваші персональні налаштування';
$string['preferredcalendar'] = 'Популярний календар';
$string['privacy:metadata:calendar:event'] = 'Компонент календаря може зберігати інформацію про події календаря користувача в основній підсистемі.';
$string['privacy:metadata:calendar:event:description'] = 'Опис події календаря.';
$string['privacy:metadata:calendar:event:eventtype'] = 'Тип події календаря.';
$string['privacy:metadata:calendar:event:name'] = 'Назва події календаря.';
$string['privacy:metadata:calendar:event:timeduration'] = 'Тривалість події календаря.';
$string['privacy:metadata:calendar:event:timestart'] = 'Час початку календаря.';
$string['privacy:metadata:calendar:event_subscriptions'] = 'Компонент Calendar може зберігати інформацію про підписки календарів користувачів в основній підсистемі.';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'Тип події календарної підписки.';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'Назва підписки на календар.';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'URL підписки на календар.';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'Налаштований тип події календаря відображає налаштування користувача.';
$string['recentupcoming'] = 'Недавні і наступні 60 днів';
$string['repeatedevents'] = 'Повторювані події';
$string['repeateditall'] = 'Застосувати зміни до всіх {$a} подій в циклі цих подій';
$string['repeateditthis'] = 'Застосувати зміни тільки до цієї події';
$string['repeatevent'] = 'Повторювати';
$string['repeatnone'] = 'Не повторювати';
$string['repeatweeksl'] = 'Повторювати щотижня';
$string['repeatweeksr'] = 'події';
$string['sat'] = 'Сб';
$string['saturday'] = 'Субота';
$string['showeventtype'] = 'Показати події {$a}';
$string['shown'] = 'показано';
$string['site'] = 'Сайт';
$string['siteevent'] = 'Подія на сайті';
$string['siteevents'] = 'Події сайту';
$string['spanningevents'] = 'Події в процесі';
$string['subscriptionname'] = 'Назва календаря';
$string['subscriptionremoved'] = 'Вилучено {$a} підписок календаря';
$string['subscriptions'] = 'Підписка';
$string['subscriptionsource'] = 'Джерело події: {$a}';
$string['subscriptionupdated'] = 'Оновлено {$a} підписок календаря';
$string['sun'] = 'Нд';
$string['sunday'] = 'Неділя';
$string['thu'] = 'Чт';
$string['thursday'] = 'Четвер';
$string['timeformat_12'] = '12-годинний (дп/пп)';
$string['timeformat_24'] = '24-годинний';
$string['timeperiod'] = 'Період часу';
$string['today'] = 'Сьогодні';
$string['todayplustitle'] = 'Сьогодні {$a}';
$string['tomorrow'] = 'Завтра';
$string['tt_deleteevent'] = 'Видалити подію';
$string['tt_editevent'] = 'Редагувати подію';
$string['tue'] = 'Вт';
$string['tuesday'] = 'Вівторок';
$string['typecategory'] = 'Подія категорії';
$string['typeclose'] = 'Закрити подію';
$string['typecourse'] = 'Подія курсу';
$string['typedue'] = 'Відповідна подія';
$string['typegradingdue'] = 'Визначення події';
$string['typegroup'] = 'Подія групи';
$string['typeopen'] = 'Відкрити подію';
$string['typesite'] = 'Подія сайту';
$string['typeuser'] = 'Подія користувача';
$string['upcomingevents'] = 'Майбутні події';
$string['upcomingeventsfor'] = 'Майбутні події для:';
$string['urlforical'] = 'URL для експорту iCalendar, для підписки на події календаря';
$string['user'] = 'Користувач';
$string['userevent'] = 'Подія користувача';
$string['userevents'] = 'Події користувача';
$string['viewupcomingactivitiesdue'] = 'Перегляньте майбутні заходи, які мають відбутися';
$string['wed'] = 'Ср';
$string['wednesday'] = 'Середа';
$string['weekly'] = 'Щотижня';
$string['weeknext'] = 'Наступний тиждень';
$string['weekthis'] = 'Поточний тиждень';
$string['when'] = 'Коли';
$string['whendate'] = 'Коли: {$a}';
$string['yesterday'] = 'Вчора';
$string['youcandeleteallrepeats'] = 'Ця подія є послідовністю повторюваних подій. Ви можете видалити тільки поточну подію, або ж весь цикл з {$a} події(й).';