<?php

    require_once "src/WordRepeatCounter.php";

    class WordRepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_stringFormat_1letter() //this includes formatting the string and input word so that the function can easily seek out the desired word.
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $string_input = "a";
            $word_to_count = "a";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($string_input, $word_to_count);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_stringFormat_2letter() //this includes formatting the string and input word so that the function can easily seek out the desired word.
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $string_input = "a";
            $word_to_count = "b";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($string_input, $word_to_count);

            //Assert
            $this->assertEquals(0, $result);
        }


    }

?>
