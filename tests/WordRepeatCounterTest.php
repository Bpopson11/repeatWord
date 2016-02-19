<?php

    require_once "src/WordRepeatCounter.php";

    class WordRepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_stringFormat_count() //this includes formatting the string and input word so that the function can easily seek out the desired word.
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $string_input = "A hydrochloric acid solution of 4% has a smaller reaction rate than a solution of 16%, which therefore proves that a smaller amount of concentration will result in a lower rate of reaction. This concludes that a solution with a smaller amount of concentration has a lower rate of reaction.";
            $word_to_count = "a";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($string_input, $word_to_count);

            //Assert
            $this->assertEquals(8, $result);
        }


    }

?>
