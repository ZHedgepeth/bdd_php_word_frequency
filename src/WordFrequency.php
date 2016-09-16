<?php

    class RepeatCounter
    {
        private $word;
        private $repeats;
        private $sentence;

        function __construct($word_to_count)
        {
            $this->word = $word_to_count;
            $this->sentence =
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
            $word_to_count = $this->getWord();
            $repeats = 0;
            $sentence = [];

            foreach($word_count_sentence as $sentence)
            {
                for ($index = 0; $index < count($word_to_count); $index++)
                {
                    foreach($word_to_count[$index] as $counted_word)
                    {
                        if ($sentence === $counted_word)
                        {
                            $repeats += 1;
                        }
                    }

                }

            }
            return $repeats;
        }
    }

?>
