<?php

class WordRepeatCounter
{
    function stringWordCount($string_input, $word_to_count)
    {
        $string_strip = array("?", ",", ".", "!", ";", ":", "/", "$", "#", "%", "&", "(", ")");
        $format_string = str_repla ce($string_strip, "", $string_input);
        $format_string = strtolower($format_string);
        $format_string = explode(" ", $format_string);
        $word_to_count = strtolower($word_to_count);
        $wordCount = 0;

        foreach ($format_string as $word) {
          if ($word == $word_to_count) {
            $wordCount ++;
          }
        }
        return $wordCount;
    }
}

?>
