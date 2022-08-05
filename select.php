<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Пример функции и её использование</title>
    <meta charset="utf-8">
</head>
<body>

<?php

function selectItems($items, $selected = 0){
    $text = "";
    foreach ($items as $key => $value){
        if($key === $selected)
            $choice = " selected";
        else
            $choice = "";
        $text .= "<option$choice value='$key'>$value</option>\n";
    }
    return $text;
}

$names = [
        "Weaving" => "Hugo",
        "Goddard" => "Paul",
        "Taylor"  => "Robert",
];

if(isset($_REQUEST['surname'])) {
    $name = $names[$_REQUEST['surname']];
    echo "Вы выбрали: {$_REQUEST['surname']}, {$name} ";
}
?>

<form action ="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    Выберите имя:
    <select name = "surname">
        <?=selectItems($names, $_REQUEST['surname'])?>
    </select><br />
    <input type="submit" value="Узнать фамилию">
</form>

</body>
</html>
