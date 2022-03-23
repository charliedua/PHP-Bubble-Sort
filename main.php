<?php

function bubbleSort(&$data, $a_length)
{
    $length = 0;
    
    // if length is not known
    if ($a_length == null)
        $length = sizeof($data);
        
    else
        $length = $a_length;
    
    for ($i=0; $i<$length; $i++)
    {
        for ($j=0; $j<$length-$i-1; $j++)
        {
            if ($data[$j] > $data[$j+1])
            {
                $t = $data[$j];
                $data[$j] = $data[$j+1];
                $data[$j+1] = $t;
            }
        }
    }
}


$data = array();

// if length is known
$length = 15;

// Generates data for algorithm
for ($i=0; $i<$length; $i++)
    array_push($data, rand(15, 200));

$length = null;

bubbleSort($data, $length);

print_r($data)

?>
