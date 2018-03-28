<?php
 /*
  --------------------------------------
             Database Connection
  --------------------------------------
 */


$con  = mysqli_connect('localhost','root','','Student_Attendance');


if (!function_exists('row_count')) {

function row_count($result)
{
  global $con;
  return mysqli_num_rows($result);
}
}

/*
 --------------------------------------
            Scape Function
 --------------------------------------
*/

if (!function_exists('escape')) {

function escape($string)
{
  global $con;
  return mysqli_real_escape_string($con,$string);
}
}


/*
 --------------------------------------
            SQL Query from the database
 --------------------------------------
*/

if (!function_exists('query')) {

function query($query)
{
  global $con;
  return mysqli_query($con,$query);
}

}

/*
 --------------------------------------
          For fetching array rows
 --------------------------------------
*/

if (!function_exists('fetch_array')) {


function fetch_array($result)
{
  global $con;
  return mysqli_fetch_array($result);
}

}


/*
 --------------------------------------
            Confirmation
 --------------------------------------
*/

if (!function_exists('confirm')) {

function confirm($result)
{
  global $con ;
  die(" error".mysqli_error($con));
}

}




 ?>
