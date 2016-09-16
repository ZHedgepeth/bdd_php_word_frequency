<?php

    require_once (__DIR__ . "/../WordFrequency.php");

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_OneLetterWordOneLetterStringMatch()
        {

            //ARRANGE
            $word = "a";
            $string = "a";
            $repeat_counter_instance = new RepeatCounter($word);

            //ACT
            $test_result = $repeat_counter_instance->CountRepeats($word);

            //ASSERT
            $this->assertEquals($string, $test_result);
        }

    }


?>
