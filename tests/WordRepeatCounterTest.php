<?php

    require_once "src/WordRepeatCounter.php";

    class WordRepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_stringFormat_1letter()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $sentence_input = "a";
            $word_to_count = "a";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($sentence_input, $word_to_count);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_stringFormat_falseletter()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $sentence_input = "a";
            $word_to_count = "b";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($sentence_input, $word_to_count);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_stringFormat_2letter()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $sentence_input = "a b";
            $word_to_count = "b";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($sentence_input, $word_to_count);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_stringFormat_1wordSimple()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $sentence_input = "How are you? How have you been? Do you know how Joe is?";
            $word_to_count = "how";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($sentence_input, $word_to_count);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_stringFormat_1wordComplex()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $sentence_input = "How ARE you? hOW haVe you bEEn? Do you KNOW hoW Joe is?";
            $word_to_count = "how";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($sentence_input, $word_to_count);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_stringFormat_1wordApostrophe()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $sentence_input = "They're coming to the party a bit late.";
            $word_to_count = "They're";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($sentence_input, $word_to_count);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_stringFormat_exactMatch()
        {
            //Arrange
            $test_WordRepeatCounter = new WordRepeatCounter;
            $sentence_input = "The sofa is brown. It matches the color of our brownstone."; //tested with result being 2 and it came back false;
            $word_to_count = "brown";

            //Act
            $result = $test_WordRepeatCounter->stringWordCount($sentence_input, $word_to_count);

            //Assert
            $this->assertEquals(1, $result);
        }

    }

?>
