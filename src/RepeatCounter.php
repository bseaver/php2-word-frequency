<?php
    class RepeatCounter
    {
        function countRepeats($search_word, $string_to_search)
        {
            $count = 0;
            $string_to_search_words = explode(' ', $string_to_search);

            foreach ($string_to_search_words as $string_to_search_word) {
                if ($search_word == $string_to_search_word) {
                    $count++;
                }
            }

            return $count;
        }
    }
?>
