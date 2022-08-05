<?php ##Функция для форматированного вывода содержимого переменной

function dumper($object){
    echo "<pre>", htmlspecialchars(dumperGet($object)),"</pre>";
}

function dumperGet(&$object, $leftSp = ""){
    if(is_array($object))
        $type = "Array[".count($object)."]";
    elseif (is_object($object))
        $type = "Object";
    elseif (gettype($object) == "boolean")
        return $object ? "true" : "false";
    else
        return "\"$object\"";

    $buffer = $type;
    $leftSp .= "     ";
    for(reset($object); list($key, $value) = each($object); ){
        if($key === "GLOBALS") continue;
        $buffer .= "\n$leftSp$key => ".dumperGet($value, $leftSp);
    }
    return $buffer;
}
?>

