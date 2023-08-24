<?php

// Отправьте при помощи PHP HTTP-заголовки обновления страницы через 5 секунд.
echo "time refresh 5 sec: " . time();
header("Refresh:5");

?>