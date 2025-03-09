<?php 

    require("../models/LoginProf.class.php");
try {
    if(isset($_POST['btn'])){
         $email = $_POST['email'];
         $senha = $_POST['senha'];
    
        $x = new LoginProf();
        $x->loginProfessor( $email, $senha);
    
    }
        header("Location:../views/paginaInicialProf.php");
    } catch(Exception $th){
        header("Location:../views/loginProf.php");
    }
      

?>