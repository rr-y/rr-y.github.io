<?php


/*
 --------------------------------------
      Function For Adding Class Details
 --------------------------------------
*/

if (!function_exists('addClass')) {


function addClass()
{
        if ($_SERVER['REQUEST_METHOD']=='POST')
       {
         $class_id     =   escape($_POST['class_id']);
         $class_name   =  escape($_POST['class_name']);
         $instructor_name   =  escape($_POST['instructor_name']);
         $class_date  = escape( $_POST['class_date']);


           if( !preg_match("/^[0-9]*$/u", $class_id) )
           {

              $_SESSION['class'] = "Invalid Class ID";

              header("Location: class.php?signup=invalid");
              exit();

           }

           else
           {

                 if( !preg_match("/^[a-zA-Z]*$/u", $class_name) ||  !preg_match("/^[a-zA-Z]*$/u", $instructor_name))
                  {
                    $_SESSION['class'] = "Invalid Class name or Instructor name";

                    header("Location: class.php?signup=invalid");
                    exit();

                  }

                  else{

                          if( !preg_match("/^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])*$/u", $class_date))
                          {

                          $_SESSION['class'] = "Invalid Date format";

                          header("Location: class.php?signup=invalid");
                          exit();
                        }

                        else
                        {
                            $sql  = "insert into class_info (class_id ,class_name , class_instructor , class_date) values('$class_id','$class_name' , '$instructor_name','$class_date')";
                             $result = query($sql);
                           $_SESSION['class'] = "Class has been Added successfully";

                          header("Location: class.php?signup=success");
                          exit();

                        }


                }





           }




      }

}

}





/*
 --------------------------------------
      Function For Register
 --------------------------------------
*/

if (!function_exists('register')) {

function register()
{

  

}
}



?>
