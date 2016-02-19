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
        $revised_string = explode(" ", $string_input);

        foreach ($revised_string as $word) {
          if ($word == $word_to_count) {
            preg_replace("/($word_to_count)/i","<span style='background-color:#b99596>'$0</span>",$revised_string);
          }
        }
          $revised_string = implode(" ", $revised_string);
          return ucfirst($revised_string);
      }

}

?>
