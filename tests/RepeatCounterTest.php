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
    }
?>
