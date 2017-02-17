<?php
    class RepeatCounter
    {
        function countRepeats($search_word, $string_to_search)
        {
            $a_space = ' ';
            $empty_string = '';
            $count = 0;

            // Change all non-alpha numeric characters in string to search to spaces
            $string_to_search_characters = str_split($string_to_search);
            array_walk(
                $string_to_search_characters,
                function (&$value, $key, $a_space)
                {
                    if (!ctype_alnum($value)) {
                        $value = $a_space;
                    }
                },
                $a_space
            );
            $string_to_search = join($string_to_search_characters, $empty_string);

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
