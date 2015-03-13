<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testSingleLetterMatch()
        {
            //Arrange
            $test_single_letter_match = new RepeatCounter;
            $string = "a";
            $search = "a";

            //Act
            $result = $test_single_letter_match->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 1", $result);
        }

        function testSingleLetterMismatch()
        {
            //Arrange
            $test_single_letter_mismatch = new RepeatCounter;
            $string = "a";
            $search = "b";

            //Act
            $result = $test_single_letter_mismatch->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 0", $result);
        }

        function testSingleLetterCaseInsensitive()
        {
            //Arrange
            $test_single_letter_case_insensitive = new RepeatCounter;
            $string = "A";
            $search = "a";

            //Act
            $result = $test_single_letter_case_insensitive->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 1", $result);
        }

        function testIgnorePartialMatch()
        {
            //Arrange
            $test_ignore_partial_match = new RepeatCounter;
            $string = "ab";
            $search = "a";

            //Act
            $result = $test_ignore_partial_match->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 0", $result);
        }

        function testIgnoreRepeatingPartialMatch()
        {
            //Arrange
            $test_ignore_repeating_partial_match = new RepeatCounter;
            $string = "aa";
            $search = "a";

            //Act
            $result = $test_ignore_repeating_partial_match->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 0", $result);
        }

        function testTwoMatch()
        {
            //Arrange
            $test_two_match = new RepeatCounter;
            $string = "a a";
            $search = "a";

            //Act
            $result = $test_two_match->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 2", $result);
        }

        function testTwoLettersOneMatch()
        {
            //Arrange
            $test_two_letters_one_match = new RepeatCounter;
            $string = "a b";
            $search = "a";

            //Act
            $result = $test_two_letters_one_match->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 1", $result);
        }

        function testThreeLettersTwoMatch()
        {
            //Arrange
            $test_three_letters_two_match = new RepeatCounter;
            $string = "a z a";
            $search = "a";

            //Act
            $result = $test_three_letters_two_match->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 2", $result);
        }

        function testOneWordMatch()
        {
            //Arrange
            $test_one_word_match = new RepeatCounter;
            $string = "Equal";
            $search = "Equal";

            //Act
            $result = $test_one_word_match->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 1", $result);
        }

        function testTwoWordOneMatch()
        {
            //Arrange
            $test_two_word_one_match = new RepeatCounter;
            $string = "Not equal";
            $search = "equal";

            //Act
            $result = $test_two_word_one_match->countRepeats($string, $search);

            //Assert
            $this->assertEquals("Repeats: 1", $result);
        }
    }
?>
