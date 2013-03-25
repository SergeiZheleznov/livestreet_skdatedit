<?php
/*-------------------------------------------------------
*
*	Plugin "Sktoe. Расширенное редактирование топиков"
*	Author: Zheleznov Sergey (skif)
*	Site: livestreet.ru/profile/skif/
*	Contact e-mail: sksdes@gmail.com
*
---------------------------------------------------------
*/

$config = array();

$config['user_rating'] = 100; // порог рейтинга по достижении которого пользователь сможет менять дату публикации 
$config['user_array'] = array();  // массив логинов пользователей, которым разрешено менять время публикации
$config['allow_time'] = false; // разрешить менять время

return $config;
