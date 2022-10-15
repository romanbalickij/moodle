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
 * Strings for component 'qtype_formulas', language 'uk', version '3.11'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Абсолютна помилка';
$string['addmorepartsblanks'] = 'Шаблони на {no} частин';
$string['algebraic_formula'] = 'Алгебраїчна формула';
$string['answer'] = 'Відповідь*';
$string['answer_help'] = '**Вимагається**.
Має бути список чисел або список рядків залежно від вибраного типу відповіді. Якщо є лише одна відповідь, число або рядок можна ввести безпосередньо. Зверніть увагу, що кількість елементів у списку визначає кількість полів відповіді для цієї частини.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Відповідь і одиниця для частини {$a->part}';
$string['answercombinedunitsingle'] = 'Відповідь й одиниця';
$string['answercoordinatemulti'] = 'Відповідь для частини {$a->part} та координат {$a->numanswer}';
$string['answercoordinatesingle'] = 'Відповідь для координат {$a->numanswer}';
$string['answermark'] = 'Оцінка частини';
$string['answermark_help'] = '**Вимагається**. Оцінка для відповіді цієї частини, яка має бути числом, більшим за 0. За замовчуванням оцінкою всього питання є сума оцінок усіх його частин.
Примітка. Якщо поле оцінки цієї частини залишити порожнім, її буде видалено під час збереження запитання.';
$string['answermulti'] = 'Відповідь для частини {$a->part}';
$string['answerno'] = 'Частина {$a}';
$string['answersingle'] = 'Відповідь';
$string['answertype'] = 'Тип відповіді';
$string['answertype_help'] = 'Є чотири типи відповідей.

Відповіді на числа, числа та числові формули потребують числа або списку чисел як відповіді.

Відповіді на алгебраїчні формули вимагають рядок або список рядків як відповідь.

Різні типи відповідей накладатимуть різні обмеження під час введення відповідей, тому учні повинні знати, як їх вводити.

Перевірка формату в коді запитання також повідомить їм, коли вони вводять, чи щось не так. Будь ласка, прочитайте документацію, щоб дізнатися більше.';
$string['answerunitmulti'] = 'Одиниця для частини {$a->part}';
$string['answerunitsingle'] = 'Одиниця';
$string['checkvarshdr'] = 'Перевірка інстанціювання змінних';
$string['choiceno'] = 'Ні';
$string['choiceyes'] = 'Так';
$string['commonsiunit'] = 'Загальноприйнята одиниця СІ';
$string['correctansweris'] = 'Одна з можливих правильних відповідей: {$a}';
$string['correctfeedback'] = 'Для будь-якої правильної відповіді';
$string['correctfeedback_help'] = 'Цей відгук буде показано студентам, які отримають максимальну оцінку в цій частині. Він може містити глобальні та локальні змінні, які будуть замінені їхніми значеннями';
$string['correctness'] = 'Критерій оцінювання*';
$string['correctness_help'] = '**Вимагається**. Ви можете вибрати відносну або абсолютну помилку з діапазоном помилок. Відносну похибку не можна використовувати для алгебраїчного типу відповіді. Щоб отримати точне визначення відносної та абсолютної похибки, якщо є більше ніж одне поле відповіді, див. документацію.';
$string['correctnessexpert'] = 'Експерт';
$string['correctnesssimple'] = 'Простий';
$string['defaultanswermark'] = 'Оцінка частини за замовчуванням';
$string['defaultanswermark_desc'] = 'Оцінка частини за замовчуванням для нових частин запитання';
$string['defaultanswertype'] = 'Тип відповіді за замовчуванням';
$string['defaultanswertype_desc'] = 'Тип відповіді за умовчанням для нових частин запитання';
$string['defaultcorrectness'] = 'Стандартні критерії оцінювання';
$string['defaultcorrectness_desc'] = 'Стандартні критерії оцінювання для нових частин запитання';
$string['defaultunitpenalty'] = 'Штраф за одиницю за замовчуванням';
$string['defaultunitpenalty_desc'] = 'Стандартний штраф за неправильну одиницю (0-1)';
$string['error_algebraic_var'] = 'Синтаксична помилка визначення алгебраїчної змінної.';
$string['error_answer_missing'] = 'Відповідь не визначена.';
$string['error_answerbox_duplicate'] = 'Кожен заповнювач поля відповіді можна використовувати лише один раз у частині.';
$string['error_answertype_mistmatch'] = 'Невідповідність типу відповіді: для числового типу відповіді потрібне число, а для алгебраїчного — рядок';
$string['error_criterion'] = 'Критерій оцінки повинен бути записаний одним числом.';
$string['error_eval_numerical'] = 'Деякі вирази не можна обчислити чисельно.';
$string['error_fixed_range'] = 'Синтаксична помилка фіксованого діапазону.';
$string['error_forbid_char'] = 'Формула або вираз містить заборонені символи або оператори.';
$string['error_forloop'] = 'Синтаксична помилка циклу for.';
$string['error_forloop_expression'] = 'Вираз циклу for має бути списком.';
$string['error_forloop_var'] = 'Змінна циклу for має деякі помилки.';
$string['error_func_param'] = 'Неправильна кількість або неправильний тип параметрів для функції {$a}()';
$string['error_mark'] = 'Оцінка відповіді повинна мати значення більше 0.';
$string['error_no_answer'] = 'Потрібна принаймні одна відповідь.';
$string['error_placeholder_format'] = 'Неправильний формат заповнювача або заборонені символи.';
$string['error_placeholder_main_duplicate'] = 'Дубльований заповнювач у тексті основного запитання.';
$string['error_placeholder_missing'] = 'Цей заповнювач відсутній в основному тексті запитання.';
$string['error_placeholder_sub_duplicate'] = 'Цей заповнювач уже визначено в іншій частині.';
$string['error_placeholder_too_long'] = 'Довжина заповнювача обмежена 40 символами.';
$string['error_randvars_set_size'] = 'Кількість генерованих елементів у наборі має бути більше 1.';
$string['error_randvars_type'] = 'Усі елементи в наборі повинні мати абсолютно однаковий тип і розмір.';
$string['error_rule'] = 'Помилка аналізу правила!';
$string['error_ruleid'] = 'Таке правило не існує у файлі з ідентифікатором/ім’ям.';
$string['error_subexpression_empty'] = 'Підвираз порожній.';
$string['error_syntax'] = 'Синтаксична помилка.';
$string['error_unit'] = 'Помилка розбору блоку!';
$string['error_unitpenalty'] = 'Штраф має бути числом від 0 до 1.';
$string['error_validation_eval'] = 'Перевірте помилку оцінки!';
$string['error_vars_array_index_nonnumeric'] = 'Нечислове значення не можна використовувати як індекс списку.';
$string['error_vars_array_index_out_of_range'] = 'Індекс списку поза діапазоном !!!';
$string['error_vars_array_size'] = 'Розмір списку має бути від 1 до 1000.';
$string['error_vars_array_type'] = 'Елемент у тому самому списку має бути одного типу, або числа, або рядка.';
$string['error_vars_array_unsubscriptable'] = 'Змінна не підписується.';
$string['error_vars_bracket_mismatch'] = 'Невідповідність дужок.';
$string['error_vars_end_separator'] = 'Відсутній роздільник призначення в кінці.';
$string['error_vars_name'] = 'Відсутній роздільник призначення в кінці.';
$string['error_vars_reserved'] = 'Функція {$a}() зарезервована і не може використовуватися як змінна.';
$string['error_vars_string'] = 'Помилка! Або рядок без закриття подвійних лапок, або використання неприйнятного символу, наприклад \'.';
$string['error_vars_undefined'] = 'Змінна \'{$a}\' не була визначена.';
$string['feedback'] = 'Частина загального відгуку';
$string['feedback_help'] = 'Ця частина відгуку буде показана всім студентам. Він може містити глобальні та локальні змінні, які будуть замінені їхніми значеннями';
$string['functiontakesatleasttwo'] = 'Функція {$a} повинна мати принаймні два аргументи';
$string['functiontakesnoargs'] = 'Функція {$a} не має жодного аргумента';
$string['functiontakesonearg'] = 'Функція {$a} повинна мати рівно один аргумент';
$string['functiontakesoneortwoargs'] = 'Функція {$a} повинна мати один або два аргументи';
$string['functiontakestwoargs'] = 'Функція {$a} повинна мати рівно два аргументи';
$string['globaloptions'] = '[Глобальний] -';
$string['globalvarshdr'] = 'Змінні';
$string['illegalformulasyntax'] = 'Неприпустимий синтаксис формули, що починається з \'{$a}\'';
$string['incorrectfeedback'] = 'Для будь-якої неправильної відповіді';
$string['incorrectfeedback_help'] = 'Цей відгук буде показано студентам, які не отримають жодної оцінки за цю частину. Він може містити глобальні та локальні змінні, які будуть замінені їхніми значеннями';
$string['instantiate'] = 'Створення екземпляра';
$string['mainq'] = 'Основне запитання';
$string['modelanswer'] = 'Модель відповіді';
$string['none'] = 'Жодного';
$string['number'] = 'Число';
$string['number_unit'] = 'Число та одиниця';
$string['numdataset'] = 'Число з набору даних';
$string['numeric'] = 'Числове';
$string['numeric_unit'] = 'Числове значення й одиниця';
$string['numerical_formula'] = 'Числова формула';
$string['numerical_formula_unit'] = 'Числова формула та одиниця';
$string['otherrule'] = 'Інші правила';
$string['otherrule_help'] = 'Тут автор запитання може визначити додаткові правила перетворення для інших прийнятих базових одиниць. Перегляньте документацію для розширеного використання.';
$string['partiallycorrectfeedback'] = 'Для будь-якої частково правильної відповіді';
$string['partiallycorrectfeedback_help'] = 'Цей відгук буде показано студентам, які не отримають максимальний бал у цій частині. Він може містити глобальні та локальні змінні, які будуть замінені їхніми значеннями';
$string['placeholder'] = 'Назва заповнювача';
$string['placeholder_help'] = 'Заповнювач використовується для визначення місця в основному тексті запитання, яке буде замінено вмістом частини. Це рядок буквено-цифрових символів із префіксом "**#**", наприклад #1, #2a, #2b і #A. Якщо це поле залишити порожнім, частина буде додана в кінці основного тексту запитання.';
$string['pleaseputananswer'] = 'Будь ласка, введіть відповідь у кожне поле введення';
$string['pluginname'] = 'Формули';
$string['pluginname_help'] = 'Щоб почати використовувати це запитання, перейдіть на <a href="https://moodleformulas.org/">moodleformulas.org</a>. З можливими запитаннями перейдіть на <a href="https://moodleformulas.org/">moodleformulas.org</a>. Щоб переглянути параметри у формі редагування нижче, перейдіть на <a href="https://moodleformulas.org/">moodleformulas.org</a> Щоб отримати повну документацію, перейдіть на <a href="https:/ /moodleformulas.org/">moodleformulas.org</a>';
$string['pluginnameadding'] = 'Додавання питання формули';
$string['pluginnameediting'] = 'Редагування питання формули';
$string['pluginnamesummary'] = 'Тип запитання з випадковими значеннями та декількома відповідями. Поля відповідей можна розмістити будь-де, щоб ми могли створювати запитання, що включають різні структури, такі як вектори, поліноми та матриці. Інші функції, такі як перевірка одиниць і запитання щодо кількох частин, також тісно інтегровані та прості у використанні.';
$string['postunit'] = 'Одиниця';
$string['postunit_help'] = 'Ви можете вказати одиницю тут. Цей тип запитання розроблено спеціально для одиниць СІ, тому пробіл представляє «добуток» різних «базових одиниць», а <tt> ^ </tt> використовується для показників степеня. Крім того, <tt> / </tt> можна використовувати для оберненого показника. Будь-яка перестановка базової одиниці обробляється однаково. Студенти повинні використовувати той самий формат введення. Наприклад, <pre class="prettyprint">1 м<br>0,1 м^2<br>20 м с^(-1)<br>400 кг м/с<br>100 кВт</pre>';
$string['privacy:metadata'] = 'Плагін типу запитання Formulas не зберігає жодних особистих даних.';
$string['qtextpreview'] = 'Попередній перегляд за допомогою набору даних';
$string['questiontext'] = 'Текст питання';
$string['questiontext_help'] = 'Окрім звичайного тексту запитання, тут також можна використовувати глобальні змінні та заповнювачі. Глобальні змінні буде замінено їхніми значеннями, а заповнювачі — частинами. Простий приклад зі змінними <tt> A, B, C </tt> і заповнювачами <tt> #1, #2, #3 </tt>: <pre class="prettyprint">Що є результатом { A} + {B}?<br>{#1}<br>Який результат {A} - {B}?<br>{#2}<br>Який результат {C} / { B}?<br>{#3}</pre>';
$string['relerror'] = 'Відносна похибка';
$string['renew'] = 'оновлення';
$string['ruleid'] = 'Основні правила перетворення';
$string['ruleid_help'] = 'Цей тип запитань має вбудовану систему перетворення одиниць і містить основні правила перетворення. Основним є правило «загальної одиниці СІ», яке перетворює стандартні одиниці, наприклад одиниці довжини, скажімо, км, м, см і мм. Ця опція не діє, якщо жодна одиниця не використовується.';
$string['settingusepopup'] = 'Використовуйте підказки';
$string['settingusepopup_desc'] = 'Відобразити правильну відповідь і відгук у спливаючій підказці';
$string['subqoptions'] = 'Додаткові опції';
$string['subqtext'] = 'Текст частини';
$string['subqtext_help'] = 'Тут можна вказати текст частини та місця полів відповіді. Заповнювачі, які можна використовувати для визначення місць у полях відповідей: <pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</ pre> <tt> {_0}, {_1}, {_2} </tt> — це поля введення для координат, а <tt> {_u} </tt> — це поле для введення одиниць. Усі пропущені поля автоматично додаються в кінці тексту частини. Особливий випадок полягає в тому, що якщо <tt> {_0}, {_u} </tt> указано послідовно, і є лише одна координата та одиниця, тобто <tt> {_0}{_u} </tt>, вони будуть бути об’єднані в одне довге поле для введення відповіді як для відповіді, так і для одиниці.';
$string['unit'] = 'Одиниця';
$string['unitpenalty'] = 'Відрахування за неправильну одиницю (0-1)*';
$string['unitpenalty_help'] = 'Ця опція вказує оцінку, на яку ви хочете покарати студента за неправильну одиницю. Вона набуває значення від 0 до 1. Якщо вона набуває значення 1, одиниця і відповідь повинні бути правильними одночасно, щоб отримати оцінку. Тобто одиниця і відповідь розглядаються як одне ціле. З іншого боку, якщо вона набуває значення 0, студенти можуть отримати повний бал лише за правильну відповідь, усі випадкові рядки не матимуть ефекту в кінці відповіді. Тому рекомендується використовувати значення 1, якщо відповідь не має пов’язаної одиниці.';
$string['unsupportedformulafunction'] = 'Функція {$a} не підтримується';
$string['vars1'] = 'Локальні змінні';
$string['vars1_help'] = 'Ви можете визначити змінні тут так само, як глобальні змінні визначаються на рівні запитань. Змінні, визначені тут, можна використовувати у відповіді або зворотному зв’язку частини, і область їх видимості обмежена частиною.';
$string['vars2'] = 'Змінні оцінювання';
$string['vars2_help'] = 'Тут можна використовувати всі локальні змінні та відповіді студентів. Перегляньте документацію для розширеного використання.';
$string['varsdata'] = 'Екземпляр набору даних';
$string['varsglobal'] = 'Глобальні змінні';
$string['varsglobal_help'] = 'Тут можна вказати формули для маніпулювання створеними випадковими змінними (усі випадкові величини доступні тут). Повний перелік математичних функцій і операторів наведено в документації. <pre class="prettyprint">a = 1,11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1,5*pi()) + c;< br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["нуль","один","два","три" ][A];<br>distance = sqrt(a*a + b*b);</pre>';
$string['varsrandom'] = 'Випадкові величини';
$string['varsrandom_help'] = 'Нові випадкові значення генеруються для цих змінних на початку кожної спроби. Це можна зробити, визначивши набір елементів на вибір: <pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2 ], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre> Елементами можуть бути числа, рядки або їх списки. На початку нової спроби один елемент буде взято з набору та присвоєно змінній ліворуч. Крім того, для набору чисел ви можете використовувати позначення діапазону, наприклад 10:100:10 (див. приклад E вище.). </p>';
$string['varsstatistics'] = 'Статистика';
$string['yougotnright'] = 'Ви правильно відповіли на {$a->num} частини цього запитання.';