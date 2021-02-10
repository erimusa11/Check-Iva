<?php 
date_default_timezone_set('Europe/Rome');
include "dbconnect.php";
//*******************************************************this is the log in function *******************************************/
function login()
{
    global $connection;

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

     
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        //query to get users from user
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connection, $query);
     
        while ($row = mysqli_fetch_array($result)) {

            if($username == $row['username'] && $password == $row['password']){
           

            $_SESSION['users_id'] = $row['users_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['users_name'] = $row['users_name'];
            $_SESSION['users_subname'] = $row['users_subname'];
            //$_SESSION['cognome_user'] = $row[4];
          
                return header("Location: dashboard.php");

            
        } else {
          
            return header("Location: index.php?error=1");
        
          }
     }
    }
}
//*******************************************************this is the end of  log in function ********************************/


//**************************************************this is the log out function  *******************************************/

function logout()           
{
    if (isset($_POST['logout'])) {
        $_SESSION = array();
        session_destroy();
        return header("Location: index.php");
        exit();
    }
}
//**************************************************this is the end  log out function  *******************************************/
?>