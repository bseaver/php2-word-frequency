<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats()
        {
            // Arrange
            $repeatCounter_class = new RepeatCounter();

            // Specs from README.md:
            // _String_ to process, _Word_ to Count, _Count_, _Reasoning_ for Test
            $expected_results = array(
                array('string' => 'start', 'word' => 'start', 'count' => 1, 'reasoning' => 'Most basic and will fail first')
                , array('string' => 'Portland in the the fall', 'word' => 'the', 'count' => 2, 'reasoning' => 'Parse words on spaces')
                , array('string' => 'The dog doggerel lapdog', 'word' => 'dog', 'count' => 1, 'reasoning' => 'Only whole words match')
                , array('string' => 'What now what then', 'word' => 'What', 'count' => 2, 'reasoning' => 'Case does not matter')
                , array('string' => 'A dog-Dog? $DOG!! D{o}G', 'word' => 'dog', 'count' => 3, 'reasoning' => 'Symbols other than a-z, 0-9 divide words')
                , array('string' => 'Se7en is a TV station', 'word' => 'se7en', 'count' => 1, 'reasoning' => "We'll allow words with numbers in them")
                , array('string' => 'Omaha 44 44left Hut!', 'word' => '44', 'count' => 1, 'reasoning' => "We'll treat numbers similarly to letters")
                , array('string' => 'Now listen to my story', 'word' => 'Jed', 'count' => 0, 'reasoning' => 'Verify word not found returns 0')
                , array('string' => '', 'word' => 'Jed', 'count' => 0, 'reasoning' => 'Empty string will have no matches')
                , array('string' => 'Now listen to my story', 'word' => '', 'count' => 0, 'reasoning' => 'Empty word will have no matches')
                , array('string' => 'And did those feet ', 'word' => ' feet ', 'count' => 1, 'reasoning' => 'Make sure word to count is trimmed')
            );

            foreach ($expected_results as $expected_result) {
                // Arrange
                $actual_result = $expected_result;

                // Act
                $actual_result['count'] = $repeatCounter_class->countRepeats($actual_result['word'], $actual_result['string']);

                // Assert
                $this->assertEquals($expected_result, $actual_result);
            }
        }
    }
?>
