<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        // function test_rock_papers()
        // {
        //     //Arrange
        //     $test_RockPaperScissors = new RockPaperScissors;
        //     $first_input = "rock";
        //     $second_input = "papers";
        //
        //     //Act
        //     $result = $test_RockPaperScissors->playGame($first_input, $second_input);
        //
        //     //Assert
        //     $this->assertEquals("Player 2", $result);
        // }
        //
        // function test_scissors_papers()
        // {
        //     //Arrange
        //     $test_RockPaperScissors = new RockPaperScissors;
        //     $first_input = "scissors";
        //     $second_input = "papers";
        //
        //     //Act
        //     $result = $test_RockPaperScissors->playGame($first_input, $second_input);
        //
        //     //Assert
        //     $this->assertEquals("Player 1", $result);
        // }
        //
        // function test_draw()
        // {
        //     //Arrange
        //     $test_RockPaperScissors = new RockPaperScissors;
        //     $first_input = "scissors";
        //     $second_input = "scissors";
        //
        //     //Act
        //     $result = $test_RockPaperScissors->playGame($first_input, $second_input);
        //
        //     //Assert
        //     $this->assertEquals("It's a Draw!", $result);
        // }
    }

?>
