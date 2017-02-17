<?php
    class RepeatCounter
    {
        function countRepeats($search_word, $string_to_search)
        {
            $count = 0;
            $search_word = strtoupper($search_word);
            $string_to_search_words = explode(' ', strtoupper($string_to_search));

            foreach ($string_to_search_words as $string_to_search_word) {
                if ($search_word == $string_to_search_word) {
                    $count++;
                }
            }

            return $count;
        }
    }
?>
