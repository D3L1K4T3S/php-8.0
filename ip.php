<!DOCTYPE html>
<html lang="ru">
<head>
    <title>IP-адреса и бразуера пользователя</title>
    <meta charset="utf-8">
</head>
<body>
    Ваш IP-адрес: <?= $_SERVER['REMOTE_ADDR'] ?><br />
    Ваш браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?><br />
</body>
</html>
