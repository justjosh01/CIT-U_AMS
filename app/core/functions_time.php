<?php


function days($date){


	$datetime1 = date_create(date("Y-m-d h:i:s",strtotime($date) ));
    $datetime2 = date_create(date('Y-m-d h:i:s'));

     
    $interval = date_diff($datetime1, $datetime2);
    return $interval->format('%a');

}

                