
        
<?php
  
        session_start();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          if(!empty($_POST["email"]) && !empty($_POST["password"])){

            $_SESSION["admin_username"]=$_POST["email"];
            $_SESSION["admin_password"]=$_POST["password"];

          }
        
        }

        if(isset($_SESSION["admin_username"]) && isset($_SESSION["admin_password"])){
          require '../app/component/admin_interface.php';
        }else{
          require '../app/component/admin_login.php';
        }
        
       
        

?>