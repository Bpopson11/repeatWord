<?php

class WordRepeatCounter
{
    function stringWordCount($string_input, $word_to_count)
    {
        $string_strip = array("?", ",", ".", "!", ";", ":", "/", "$", "#", "%", "&", "(", ")");
        $format_string = str_replace($string_strip, "", $string_input);
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


    function stringHighlight($string_input, $word_to_count)
    {
        $word_to_count = strtolower($word_to_count);

        $string_input = str_replace($word_to_count, strtoupper($word_to_count), $string_input);

        return $string_input;
    }
}

?>
