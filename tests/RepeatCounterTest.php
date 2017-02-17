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
