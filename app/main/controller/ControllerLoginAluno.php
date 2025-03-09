<?php 

require("../models/LoginAluno.class.php");
try {
    if(isset($_POST['btn'])){
         $email = $_POST['email'];
         $senha = $_POST['senha'];
    
        $x = new LoginAluno();
        $x->loginAlunos( $email, $senha);
    
    }
        header("Location:../views/paginaInicialAluno.php");
    } catch(Exception $th){
        header("Location:../views/loginAluno.php");
    }
      

?>