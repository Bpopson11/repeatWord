<?php

class WordRepeatCounter
{
    function stringFormat($string_input)
    {
        $string_strip = array("?", ",", ".", "!", ";", ":", "/", "$", "#", "%", "&", "(", ")");
        $format_string = str_replace($string_strip, "", $string_input);
        $format_string = strtolower($format_string);
        $format_string = explode(" ", $format_string);
        return $format_string;
    }
}

?>
