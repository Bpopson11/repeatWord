<?php

    require_once "src/WordRepeatCounter.php";

    class WordRepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_stringFormat_1letter()
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

        function test_stringFormat_falseletter()
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

        function test_stringFormat_2letter()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $string_input = "a b";
            $word_to_count = "b";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($string_input, $word_to_count);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_stringFormat_1wordApostrophe()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $string_input = "They're";
            $word_to_count = "They're";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($string_input, $word_to_count);

            //Assert
            $this->assertEquals(1, $result);
        }


    }

?>
