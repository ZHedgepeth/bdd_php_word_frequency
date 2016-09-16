<?php

    class RepeatCounter
    {
        private $word;
        private $repeats;

        function __construct($word_to_count)
        {
            $this->word = $word_to_count;
            $this->repeats = 0;
        }

        function getWord()
        {
            return $this->word;
        }

        function setWord($word_to_count)
        {
            $this->word = (string) $word_to_count;
        }

        function getRepeats()
        {
            return $this->repeats;
        }

        function setRepeats($word_to_count_repeats)
        {
            $this->repeats = (int) $word_to_count_repeats;
        }

        function CountRepeats()
        {


        }
    }

?>
