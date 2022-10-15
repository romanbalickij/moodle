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
 * Strings for component 'media_videojs', language 'uk', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'Клас CSS для аудіо';
$string['audioextensions'] = 'Розширення звукових файлів';
$string['configaudiocssclass'] = 'Клас CSS, який буде додано до &lt;audio&gt; елементу.';
$string['configaudioextensions'] = 'Список розділених комами розширень підтримуваних аудіофайлів. VideoJS намагатиметься використовувати власний відеопрогравач для браузера, якщо він доступний, і Flash-плеєр для інших форматів, якщо Flash підтримується браузером, а Flash-резервна функція включена нижче.';
$string['configlimitsize'] = 'Якщо ввімкнено, а ширина і висота не вказані, відео відображатиметься з шириною і висотою за замовчуванням. В іншому випадку вона розтягується до максимально можливої ширини.';
$string['configrtmp'] = 'Якщо увімкнено, посилання, що починаються з rtmp: //, будуть оброблені плагіном, незалежно від того, чи включено його розширення у підтримуваних налаштуваннях розширень. Для роботи RTMP має бути увімкнено резервну копію Flash.';
$string['configuseflash'] = 'Використовуйте Flash-програвач, якщо формат відео не підтримується браузером і/або програвачем VideoJS. Якщо ввімкнено, VideoJS буде задіяно для будь-якого розширення файлу зі списку вище без перевірки браузера. Зверніть увагу, що Flash недоступний у мобільних браузерах і не рекомендується у багатьох настільних браузерах.';
$string['configvideocssclass'] = 'Клас CSS, який буде додано до &lt;video&gt; елементу. Наприклад, клас CSS "vjs-big-play-centered" розмістить кнопку відтворення в середині. Докладні відомості, зокрема, як встановити спеціальний skin, див. У docs.videojs.com.';
$string['configvideoextensions'] = 'Список розділених комами розширень підтримуваних відеофайлів. VideoJS намагатиметься використовувати власний відеопрогравач браузера, якщо він доступний, і повертатися до Flash-плеєра для інших форматів, якщо Flash підтримується браузером, а Flash-резервна функція включена нижче.';
$string['configyoutube'] = 'Використовуйте VideoJS для відтворення відео YouTube. Зауважте, що відеозапису YouTube ще не підтримуються.';
$string['limitsize'] = 'Обмежити розмір';
$string['pluginname'] = 'Програвач VideoJS';
$string['pluginname_help'] = 'Обгортка JavaScript для відеофайлів, що відтворюються у віртуальному відеопрогравачі веб-переглядача з резервним програвачем Flash. (Підтримка формату залежить від браузера.)';
$string['privacy:metadata'] = 'Медіа-плагін VideoJS Player не зберігає жодних особистих даних.';
$string['rtmp'] = 'RTMP-потоки';
$string['useflash'] = 'Використовувати резервні копії Flash';
$string['videocssclass'] = 'Клас CSS для відео';
$string['videoextensions'] = 'Розширення файлів відео';
$string['youtube'] = 'Відео YouTube';
