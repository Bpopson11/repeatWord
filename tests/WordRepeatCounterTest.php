<?php

    require_once "src/WordRepeatCounter.php";

    class WordRepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_stringFormat_initial()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $string_input = "How now brown cow? How are you?!";

            //Act
            $result = $test_WordRepeatCounter->stringFormat($string_input);

            //Assert
            $this->assertEquals(array('how', 'now', 'brown', 'cow', 'how', 'are', 'you'), $result);
        }
    }

?>
