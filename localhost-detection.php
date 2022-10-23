<?php 

/**
 * 
 * localHostDetection()
 * Detect server request host 
 * Very simple function to change value based on request 
 * 
 * Return true if request coming from localhost
 * 
 * Return false if request coming form remote host 
 * 
 * @return  boolean  
 * @package WordPress
 * @author  Mokter Hossain
 *  
 */


function localHostDetection(){

// localhost ip array 
$localhost = array(
    '127.0.0.1',
    '::1'
);

// default output 
$output = FALSE; 

// check if the request is coming from localhost 
if(in_array($_SERVER['REMOTE_ADDR'], $localhost)){

  // set output to true if request coming from localhost 
  $output = TRUE; 
    
} 

// return boolean true or false 
return $output; 

}

?>
