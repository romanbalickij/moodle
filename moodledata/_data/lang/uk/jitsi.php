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
 * Strings for component 'jitsi', language 'uk', version '3.11'.
 *
 * @package     jitsi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['URLguest'] = 'URL для гостей';
$string['access'] = 'Доступ';
$string['accessto'] = 'Доступ до {$a}. Введіть назву, яка буде відображатися.';
$string['accesstotitle'] = 'Доступ до {$a}';
$string['accesstowithlogin'] = 'Доступ до {$a}';
$string['account'] = 'Обліковий запис';
$string['accountconnected'] = 'Обліковий запис успішно підключено та запущено.';
$string['accountinsufficientprivileges'] = 'Налаштований обліковий запис потокової передачі має недостатні привілеї. Зверніться до свого адміністратора.';
$string['accounts'] = 'Облікові записи для трансляції/запису';
$string['activatetooltip'] = 'Натисніть, щоб увімкнути';
$string['addaccount'] = 'Додати обліковий запис';
$string['adminaccountex'] = 'Щоб транслювати/записувати сеанси за допомогою методу «Moodle інтегрований» для потокової передачі, потрібен щонайменше один обліковий запис.
  </br>Лише один обліковий запис може бути "<b>використовується</b>", і він використовуватиметься для потокової передачі/запису всіх ваших сесій викладача.
  </br>Під час додавання нових облікових записів рекомендується <b>назви їх справжніми іменами облікових записів</b>, оскільки в майбутньому вам може знадобитися повторний вхід, щоб повторно авторизувати обліковий запис.
  </br>Тут можна видалити лише облікові записи, у яких немає записів, пов’язаних із діяльністю вчителя Jitsi, і записів, які очікують на видалення з потокових серверів, за допомогою значка кошика.
  </br>Нові облікові записи без облікових даних можуть з\'являтися тут, коли резервні копії діяльності Jitsi з іншого сервера відновлюються на цьому з обліковими записами, яких тут не було.';
$string['alias'] = 'Псевдонім';
$string['allow'] = 'Розпочати відеоконференцію';
$string['apikeyid8x8'] = 'Ідентифікатор ключа API';
$string['apikeyid8x8ex'] = 'Ідентифікатор ключа API для використання із сервером 8x8. Ви можете отримати його в адміністрації сервера 8x8. (https://jaas.8x8.com/)';
$string['appaccessinfo'] = 'Якщо ви хочете приєднатися до зустрічі за допомогою мобільного пристрою, вам знадобиться мобільний додаток Jitsi Meet.';
$string['appid'] = 'Ідентифікатор додатка';
$string['appidex'] = 'Ідентифікатор додатка для маркерів конфігурації';
$string['appinstalledtext'] = 'Якщо у вас уже є додаток:';
$string['appnotinstalledtext'] = 'Якщо у вас ще немає програми:';
$string['attendeesreport'] = 'Звіт учасників';
$string['authq'] = 'Увійти за допомогою цього облікового запису, щоб отримати облікові дані та ввімкнути "у використання"?';
$string['blurbutton'] = 'Варіанти згладжування';
$string['blurbuttonex'] = 'Показати варіанти згладжування';
$string['buttondownloadapp'] = 'Завантажити додаток';
$string['buttonopeninbrowser'] = 'Відкрити в браузері';
$string['buttonopenwithapp'] = 'Приєднайтеся до цієї зустрічі за допомогою програми';
$string['calendarstart'] = 'Розпочати відеоконференцію \'{$a}\'';
$string['click'] = 'Натисніть';
$string['close'] = 'Завершення відеоконференції';
$string['closebeforeopen'] = 'Не вдалося оновити сеанс. Ви вказали дату закриття перед датою відкриття.';
$string['completiondetail:minutes'] = 'Відвідайте {$a} хв';
$string['completionminutes'] = 'Студент повинен бути присутнім';
$string['completionminutes_help'] = 'Кількість хвилин, яку учень повинен відвідати, щоб назвати вправу виконаною';
$string['completionminutesex'] = 'Хвилини для участі';
$string['confirmdeleterecordinactivity'] = 'Підтвердьте, що хочете видалити цей запис. Цю операцію не можна скасувати.';
$string['connectedattendeesnow'] = 'Підключені учасники зараз';
$string['copied'] = 'Скопійовано в буфер обміну';
$string['deeplink'] = 'Глибоке посилання';
$string['deeplinkex'] = 'Дозволяє переносити сеанс у програму jitsi.';
$string['deleteq'] = 'Видалити та відключити цей обліковий запис?';
$string['deletesourceq'] = 'Ви впевнені? Запис буде остаточно видалено з відеосервера, і його не можна буде відновити';
$string['deletesources'] = 'Записи доступні для видалення';
$string['deletetooltip'] = 'Видалити';
$string['deprecated'] = 'Не підтримується';
$string['deprecatedex'] = 'Застарілі параметри, які, ймовірно, не працюватимуть, оскільки Jitsi Meet змінив свою реалізацію';
$string['desktopaccessinfo'] = 'Якщо ви хочете приєднатися до зустрічі, натисніть кнопку нижче, щоб відкрити Jitsi у своєму браузері.';
$string['domain'] = 'Домен';
$string['domainex'] = 'Доменний сервер Jitsi для використання. Ви можете шукати в Google альтернативні загальнодоступні сервери Jitsi, які можуть бути найближчими до ваших користувачів і з меншою затримкою.
Якщо у вас є власний приватний сервер Jitsi, повідомте про нього тут без «https://».';
$string['editrecordname'] = 'Редагувати назву запису';
$string['entersession'] = 'Увійдіть до сеансу';
$string['errordeleting'] = 'Помилка видалення';
$string['experimental'] = 'Експериментальний';
$string['experimentalex'] = 'Це варіанти, з якими ми експериментуємо і які можуть зникнути в наступних версіях.';
$string['finish'] = 'Сесія закінчилася.';
$string['finishandreturn'] = 'Завершити та повернютися';
$string['finishandreturnex'] = 'Повернутися до курсу після завершення сесії';
$string['finishinvitation'] = 'Термін дії посилання на запрошення закінчиться';
$string['fullscreen'] = 'Повноекранний';
$string['guestform'] = 'Увійдіть до форми гостя';
$string['hasentered'] = 'увійшов у вашу приватну сесію Jitsi';
$string['help'] = 'Допомога';
$string['helpex'] = 'Текст інструкції для показу на заході Jitsi';
$string['here'] = 'тут';
$string['identification'] = 'Ідентифікатор користувача';
$string['identificationex'] = 'Відображати ідентифікатор в сесії';
$string['instruction'] = 'Натисніть на кнопку для доступу';
$string['integrated'] = 'Інтегрований Moodle';
$string['inuse'] = '<b>(використовується)</b>';
$string['invitations'] = 'Запрошення';
$string['invitationsnotactivated'] = 'Запрошення не активовані';
$string['invitebutton'] = 'Параметри запрошення';
$string['invitebuttonex'] = 'Показати параметри запрошення під час сеансу';
$string['iscalling'] = 'закликає вас увійти до його приватного Jitsi';
$string['jitsi'] = 'Jitsi';
$string['jitsi:addinstance'] = 'Додати новий';
$string['jitsi:createlink'] = 'Створіть посилання, щоб запросити на сеанс';
$string['jitsi:hide'] = 'Приховати записи';
$string['jitsi:moderation'] = 'Jitsi модератор';
$string['jitsi:record'] = 'Запис сеансу';
$string['jitsi:sharedesktop'] = 'Показати екран';
$string['jitsi:view'] = 'Переглянути Jitsi';
$string['jitsi:viewusersonsession'] = 'Доступ до звітів учасників';
$string['jitsiinterface'] = 'Інтерфейс Jitsi';
$string['jitsiname'] = 'Назва сесії';
$string['linkexpiredon'] = 'Термін дії цього посилання закінчився {$a}';
$string['loginq'] = 'Ви хочете використовувати цей обліковий запис?';
$string['logintooltip'] = 'Необхідні облікові дані для цього облікового запису';
$string['loginyoutube'] = 'Увійдіть на Youtube';
$string['logoutyoutube'] = 'Вийти з YouTube';
$string['mailprivacy'] = 'Для параметра gravatar використовуватиметься лише електронна пошта';
$string['messageprovider:callprivatesession'] = 'Телефонуйте до Jitsi приватно';
$string['messageprovider:onprivatesession'] = 'Користувач на приватній сесії';
$string['minpretime'] = 'Хвилини до доступу';
$string['minpretime_help'] = 'Користувачі з дозволом модерації матимуть доступ до цих хвилин до початку';
$string['minutesconnected'] = 'Ви були підключені протягом {$a} хв';
$string['modulename'] = 'Jitsi';
$string['modulename_help'] = 'Використовуйте модуль Jitsi для відеоконференції. Ці відеоконференції використовуватимуть ваше ім’я користувача Moodle, відображаючи ваше ім’я користувача та аватар у відеоконференціях.

Jitsi-meet — це рішення для відеоконференцій з відкритим кодом, яке дозволяє легко створювати та впроваджувати безпечні рішення для відеоконференцій.';
$string['modulenameplural'] = 'Jitsis';
$string['myprivatesession'] = 'Моя приватна сесія';
$string['nameandsurname'] = 'Ім\'я+Прізвище';
$string['newvaluefor'] = 'Нове значення для';
$string['noinviteaccess'] = 'Гостьовий доступ наразі заборонений.';
$string['nojitsis'] = 'Діяльності Jitsi не знайдено';
$string['nostart'] = 'Сесія не розпочалася. Ви можете отримати доступ за {$a} хвилин.';
$string['notloggedin'] = 'Необхідні облікові дані облікового запису';
$string['noviewpermission'] = 'У вас немає дозволу на перегляд цієї сесії Jitsi';
$string['oauthid'] = 'OAuth2 id';
$string['oauthidex'] = 'Ідентифікатор облікового запису Google Oauth2';
$string['oauthsecret'] = 'Секрет OAuth2';
$string['oauthsecretex'] = 'Секретний обліковий запис Google Oauth2';
$string['participantspane'] = 'Панель учасників';
$string['participantspaneex'] = 'Показати панель учасників всім користувачам. Якщо зняти прапорець, лише користувачі з можливістю модерації Jitsi (mod/jitsi:moderation), зазвичай викладачі, можуть дивитися панель.';
$string['participatingsession'] = 'Участь у сесії';
$string['password'] = 'Пароль';
$string['passwordex'] = 'Пароль для захисту ваших сеансів. Рекомендується, якщо ви використовуєте загальнодоступний сервер';
$string['pluginadministration'] = 'Jitsi адмін';
$string['pluginname'] = 'Jitsi';
$string['preparing'] = 'Підготовка. Будь ласка, зачекайте...';
$string['privacy:metadata:jitsi'] = 'Для інтеграції з сеансом Jitsi потрібні обмін даними користувача з цією службою.';
$string['privacy:metadata:jitsi:avatar'] = 'Аватар надсилається з moodle, щоб показати іншим користувачам сесії Jitsi';
$string['privacy:metadata:jitsi:username'] = 'Ім\'я користувача відправляється з moodle, щоб показати іншим користувачам сесії Jitsi';
$string['privatekey'] = 'Приватний ключ';
$string['privatekeyex'] = 'Закритий ключ для підписання токена на сервері 8x8. Ви можете отримати його в адміністрації сервера 8x8. (https://jaas.8x8.com/)';
$string['privatesession'] = '{$a} приватна сесія';
$string['privatesessiondisabled'] = 'Приватні сесії вимкнено';
$string['privatesessions'] = 'Приватні сесії';
$string['privatesessionsex'] = 'Додайте приватні сеанси до профілів користувачів';
$string['raisehand'] = 'Кнопка підняття руки';
$string['raisehandex'] = 'Показати кнопку підняття для всіх користувачів. Коли користувачі піднімають руки, вони можуть отримати доступ до панелі учасників. Якщо ви приховаєте панелі учасників, можливо, вам слід приховати цю кнопку.';
$string['reactions'] = 'Реакції';
$string['reactionsex'] = 'Показує звукові смайли оплесків, сюрпризів тощо ... Необхідно ввімкнути «Кнопку підняти руку».';
$string['record'] = 'Варіант запису';
$string['recordex'] = 'Дозволити опцію запису';
$string['records'] = 'Записи';
$string['recordtitle'] = 'Запис';
$string['secret'] = 'Секрет';
$string['secretex'] = 'Секрет для конфігурації токена';
$string['securitybutton'] = 'Кнопка безпеки';
$string['securitybuttonex'] = 'Показати кнопку безпеки під час сеансу';
$string['separator'] = 'Роздільник';
$string['separatorex'] = 'Визначте роздільник полів для імені сеансу';
$string['server'] = 'Сервер Jitsi';
$string['serverexpl'] = 'URL-адреса сервера Jitsi';
$string['sessionisbeingrecorded'] = 'Сесія записується';
$string['sessionnamefields'] = 'Поля назви сеансу';
$string['sessionnamefieldsex'] = 'Поля, які визначають назву сеансу';
$string['sharetoinvite'] = 'Поділіться цим посиланням, щоб запросити когось на сеанс';
$string['showavatars'] = 'Показати аватари в Jitsi';
$string['showavatarsex'] = 'Показати аватар користувача в Jitsi. Якщо у користувача немає зображення профілю, це завантажить зображення профілю за замовчуванням з Moodle замість ініціалів, які Jitsi буде показувати, якщо зображення не встановлено.';
$string['simultaneouscameras'] = 'Одночасні камери';
$string['simultaneouscamerasex'] = 'Кількість одночасних камер';
$string['startstream'] = 'Почати трансляцію';
$string['stopstream'] = 'Зупинити трансляцію';
$string['streamingandrecording'] = 'Трансляція та запис';
$string['streamingbutton'] = 'Потокове передавання на Youtube';
$string['streamingbuttonex'] = 'Показати опцію потокового передавання.';
$string['streamingconfig'] = 'Конфігурація потокової передачі';
$string['streamingconfigex'] = 'Потокове передавання на Youtube. Для методу інтеграції потрібно додати таку URL-адресу до URI авторизованого переспрямування "{$a}" на консолі API Google.';
$string['streamingoption'] = 'Метод';
$string['streamingoptionex'] = 'Виберіть, чи бажаєте ви автоматичну інтеграцію з потоковим передаванням YouTube, або скористайтеся опцією потокового передавання інтерфейсу Jitsi';
$string['tablelistjitsis'] = 'Укажіть усі відео у ваших постачальників облікових записів для потокового передавання/запису, які можна видалити, оскільки вони більше не пов’язані з діяльністю Jitsi у цьому екземплярі moodle. Ви можете безпечно видалити їх, щоб звільнити місце на потоковому сервері. Список може включати відео, які зараз знаходяться в «Кошику» в деяких курсах. Рекомендується видалити лише старі записи, які, як ви знаєте, не знадобляться. </br></br> <b>¡¡¡ УВАГА!!! </b>Якщо у вас є екземпляри резервної копії Moodle, НЕ видаляйте ці відео, якщо вони пов’язані в інших екземплярах.';
$string['toenter'] = 'для входу';
$string['tokenconfiguration8x8ex'] = 'Якщо ви використовуєте сервери 8x8, вам потрібно налаштувати наступні параметри.';
$string['tokenconfigurationex'] = 'Порожній для серверів без маркера';
$string['tokennconfig'] = 'Конфігурація токена';
$string['tokennconfig8x8'] = 'Конфігурація серверів 8x8';
$string['updated'] = 'Оновлено';
$string['usercall'] = '{$a} дзвонить вам на приватний Jitsi';
$string['userenter'] = '{$a} на Jitsi';
$string['username'] = 'Ім\'я користувача';
$string['validitytime'] = 'Термін дії';
$string['validitytime_help'] = 'Термін дії посилання';
$string['validitytimevalidation'] = 'Термін дії запрошення не може закінчитися до дати початку сеансу або після дати закінчення сеансу.';
$string['warningprivate'] = 'Якщо ви отримаєте доступ, {$a} отримає попередження зі сповіщенням.';
$string['watermarklink'] = 'Посилання на водяний знак';
$string['watermarklinkex'] = 'Посилання на водяний знак';
$string['youtubebutton'] = 'Опція обміну на YouTube';
$string['youtubebuttonex'] = 'Показати параметр обміну на YouTube';
