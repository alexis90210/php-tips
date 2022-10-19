<?php

$time  = 1666183391;

$time2 =  time() ;

$inter =  ( $time2 - $time ) / 3600;

if( $inter < 2 ) {
  
  echo "WAITING 24H BEFORE CLEARING";
  
} else {
  
  echo "CLEARING";
  
}


?>
