<?php

    require_once "src/WordRepeatCounter.php";

    class WordRepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function ()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $input = ;

            //Act
            $result = $test_WordRepeatCounter->($input);

            //Assert
            $this->assertEquals(, $result);
        }
    }

?>
