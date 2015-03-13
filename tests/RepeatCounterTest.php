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
    }
?>
