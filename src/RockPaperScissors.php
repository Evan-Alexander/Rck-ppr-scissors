<?php

    class RockPaperScissors
    {
        // function playGame($input1, $input2) //$input1: rock, $input2:scissors
        // {
        //
        //         $getShowHands = showHands($input1, $input2); //"rock"
        //
        //         winning check function
        //             if "draw" -> draw
        //
        //             elseif $input1 == rock -> player1 win
        //             elseif $input2 == rock -> player2 win
        //
        //         // returning result function
        //         // if $input1 and $input2 include rock and scissors
        //         //
        //         //     case; ($input1==rock and $input2==scissors  ||
        //         //           $input1==scissors and $input2 == rock);
        //         //           ->return rock
        //         //
        //         // if $input1 and $input2 include scissors and papers
        //         //     ->return scissors
        //         // if $input1 and $input2 include rock and papers
        //         //     ->return paper
        //         // if $input1 == $input2
        //         //     ->return draw
        //         //
        //         //
        //
        //         //
        //         //     elseif $input1 == scissors -> player1 win
        //         //     elseif $input2 == scissors -> player2 win
        //         //
        //         //     elseif $input1 == scissors -> player1 win
        //         //     elseif $input2 == scissors -> player2 win
        //         //
        // }


        function playGame($input1, $input2)
        {
            //Rock and Scissors
            if (($input1 == "rock" && $input2 == "scissors") || ($input1 == "scissors" && $input2 == "rock")) {
                if ($input1 == "rock") {
                    return "Player 1";
                } else{
                    return "Player 2";
                }
            }


            //Rock and papers
            if (($input1 == "rock" && $input2 == "papers") || ($input1 == "papers" && $input2 == "rock")) {
                if ($input1 == "papers") {
                    return "Player 1";
                } else {
                    return "Player 2";
                }
            }


        }

    }
