﻿<?php
/*
 * e107 website system - Bulgarian Translation
 *
 * Copyright (C) 2005-2012 e107 Bulgaria e107.bg
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * $Id: forum.php 916 2012-04-11 06:05:50Z nickypn $
 * $URL: http://dev.clabteam.com/svn/e107bg/main/langpack/e107_0.8/e107_languages/Bulgarian/admin/help/forum.php $
 * $Revision: 916 $
 * $Author: nickypn $
*/
$caption = "Форум";
$text = "<b>Общи</b><br />
От тук можете да създавате или редактирате ваши форуми<br />
<br />
<b>Главни/Форуми</b><br />
В главният форум съдържа един или по-вече форуми в себе си, така се улеснява навигацията на сайта ви и я прави по лесна за посетителите ви.
<br /><br />
<b>Достъпност</b>
<br />
Можете да настроите форуми за определен тип посетители. След като посочите определен клас потребители можете да ограничите форума само за него. Можете да настроите главни или индивидуални форуми по този начин.
<br /><br />
<b>Модератори</b>
<br />
Изберете имената от листата с администратори за да им придадете Модераторски статус на форума. Администратора трябва да има разрешение за модератор за да е в тази листа.
<br /><br />
<b>Рангове</b>
<br />
Настройте ранговете на потребителите си от тук. Ако има въведено изображение, то ще се показва, за да използвате изображения за ранговете въведете имената.<br />Нивото е брой от точки които потребителя трябва да има за да стигне до определеният ранг.";
$ns -> tablerender($caption, $text);
unset($text);