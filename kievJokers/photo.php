<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" Content="ru">
    <title>Jokers. Фотографии</title>
    <meta name="description" content="&quot;Jokers&quot; - американский футбол Киев. Мы молодая команда по футболу в городе Киев.">
    <meta name="keywords" content="Американский футбол Киев, американский футбол">
    <link rel="shortcut icon" href="image/j.png" type="image/x-icon">
   <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/photo.css" type="text/css">
    <script type="text/javascript" src="js/jquery-2.1.3.js"></script>
    <script type="text/javascript" src="js/scrolling.js"></script>
</head>
<body>
    <div id="h_menu" class="default fixed">
        <div class="inline inline_menu">
            <center>
        <ul class="navigation">
            <a href="index.html#AboutUs"><li>О нас</li></a>
            <a href="index.html#trainersAnc"><li>Тренера</li></a>
            <a href="index.html#WhyWe"><li>Почему мы</li></a>
            <li>Медиа
                <ul class="dropdown">
                    <a href=""><li>Фото</li></a>
                    <hr>
                    <a href=""><li>Видео</li></a>
                </ul>
                </li>
            <a href=""><li>Новости</li></a>
            <a href="index.html#Contacts"><li>Контакты</li></a>
            </ul>
            </center>
        </div>
        <div class="MenuIcons inline inline_icons">
            <a href="https://vk.com/kiev_jokers" target="_blank"><img src="image/Helmet_VK.png" class="Helmet_Icon" id="iconVk" title="Vkontakte"></a>
            <a href="https://instagram.com/aft_jokers/" target="_blank"><img src="image/Helmet_F.png" class="Helmet_Icon" id="iconFace" title="Facebook"></a>
            <a href="https://instagram.com/aft_jokers/" target="_blank"><img src="image/Helmet_Ins.png" class="Helmet_Icon" id="iconInst" title="Instagram"></a>
        </div>
    </div>
    
    <div class="wrapPhoto">
    <?php
  $dir = 'image/games/small/'; // Папка с изображениями
  $cols = 3; // Количество столбцов в будущей таблице с картинками
  $files = scandir($dir); // Берём всё содержимое директории
  echo "<table>"; // Начинаем таблицу
  $k = 0; // Вспомогательный счётчик для перехода на новые строки
  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      if ($k % $cols == 0) echo "<tr>"; // Добавляем новую строку
      echo "<td>"; // Начинаем столбец
      $path = $dir.$files[$i]; // Получаем путь к картинке
      echo "<a href='$path'>"; // Делаем ссылку на картинку
      echo "<img src='$path' alt='' width='100' />"; // Вывод превью картинки
      echo "</a>"; // Закрываем ссылку
      echo "</td>"; // Закрываем столбец
      /* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
      if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
      $k++; // Увеличиваем вспомогательный счётчик
    }
  }
  echo "</table>"; // Закрываем таблицу
?>
    </div>
    
    <footer>
        <div class="fot d1">
            <h4>
                All rights reserved &#171;<a href="http://aftjokers.esy.es/">Jokers</a>&#187; 2015 - 2016
            </h4>
        </div>
        <div class="fot d2">
            <h4>Свяжитесь с нами</h4>
            <p>+38(063) 341 67 62</p>
        </div>
        <div class="fot d3">
            <a href="http://vk.com/kiev_jokers" target="_blank"><img src="image/Helmet_VK.png"></a>
            <a href="https://www.facebook.com/kievjoker/info/?tab=page_info" target="_blank"><img src="image/Helmet_F.png"></a>
            <a href="https://www.instagram.com/aft_jokers/" target="_blank"><img src="image/Helmet_Ins.png"></a>
        </div>
    </footer>
</body>
</html>