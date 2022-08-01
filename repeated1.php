<?php
$data = 'abhueygggggwwpppwi1233333333884';
//We will trim the integr from an string
$str = trim($data,"0123456789");
// split the string per character and count the number of occurrences like a=1,b=1,w=2
$totals = array_count_values( str_split($str) );

// sort the totals so that the most frequent letter is first
arsort( $totals );

// show which letter occurred the most frequently
echo array_keys( $totals )[0] ;


?>
