<?php

// christmas tree exapmle
//

// for ($i=0; $i < 10 ; $i++)
// {
//   var_dump($i);
//
//   for ($n=0; $n < 10; $n++)
//   {
//
//     var_dump('druga'.$n);
//   }
// }
// $numberOfLoopExercise=0;
// $decrementNumberOfSecondLoop = [];
//
// for ($i=0; $i < 10; $i++)
// {
//   var_dump($i);
//
//   for ($n=$i; $n < 10; $n++)
//   {
//
//     var_dump('druga '.$n);
//     $numberOfLoopExercise++;
//
//   }
//     $decrementNumberOfSecondLoop[$i]=$numberOfLoopExercise;
// }
//
// echo $numberOfLoopExercise;
// var_dump($decrementNumberOfSecondLoop);


// for ($i=0; $i <10 ; $i++)
// {
//   for ($n=0; $n<$i ; $n++)
//   {
//     echo "*";
//   }
//   echo "<br>";
// }

$nLeft=5;
$nRight=5;

for ($i=0; $i < 5; $i++)
{
    //lef side of tree
    for ($n=1; $n < 10 ; $n++)
    {
        if( $n<$nLeft || $n>$nRight)
        {
          echo "-";

        }
        else
        {
          echo"*";
        }
    }

    $nLeft--;


    //right side of tree

    // for ($j=1; $j <= 10 ; $j++)
    // {
    //     if($j>=$nMax)
    //     {
    //       echo "-";
    //
    //     }
    // }
    $nRight++;

    echo "<br>";
}
