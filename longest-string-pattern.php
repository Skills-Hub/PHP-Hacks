<?php 

function solution($AA, $AB, $BB) :string
{
    $strArray = [];

    $placeHolderAA = 'AA';
    $placeHolderAB = 'AB';
    $placeHolderBB = 'BB';

    for ($count = 0; $count < ($AA+$AB+$BB); $count++){
        //Count how many AA already on the generated string and check the condition.
        $matchedCountAA= count(array_intersect($strArray,[$placeHolderAA]));
        if ($matchedCountAA < $AA )
            $strArray[] = $placeHolderAA;

        //Count how many BB already on the generated string and check the condition
        $matchedCountBB= count(array_intersect($strArray,[$placeHolderBB]));
        if ($matchedCountBB < $BB )
            $strArray[] = $placeHolderBB;

        //Count how many AB already on the generated string and check the condition
        $matchedCountAB= count(array_intersect($strArray,[$placeHolderAB]));
        if ($matchedCountAB < $AB)
            $strArray[] = $placeHolderAB;
    }
    
    // result holder 
    $result = '';
    for ($count = 0; $count < count($strArray); $count++) {
        $lastChar = substr($result, -1);
        if ($lastChar != 'B' && $strArray[$count] == $placeHolderBB)
            $result .= $placeHolderBB;
        elseif ($lastChar != 'A' && $strArray[$count] == $placeHolderAB)
            $result .= $placeHolderAB;
        elseif ($lastChar != 'A' && $strArray[$count] == $placeHolderAA)
            $result .= $placeHolderAA;

    }

    return $result;
}




?>
