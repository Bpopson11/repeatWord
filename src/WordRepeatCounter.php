<?php

class WordRepeatCounter
{
    function stringWordCount($sentence_input, $word_to_count)
    {
        $string_strip = array("?", ",", ".", "!", ";", ":", "/", "$", "#", "%", "&", "(", ")");
        $format_string = str_replace($string_strip, "", $sentence_input);
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


    function stringHighlight($sentence_input, $word_to_count)
    {
        $word_to_count = strtolower($word_to_count);

        $sentence_input = str_replace($word_to_count, strtoupper($word_to_count), $sentence_input);

        return $sentence_input;
    }
}

?>
