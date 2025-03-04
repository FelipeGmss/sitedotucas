<?php 

require('../models/cadastroEmp.class.php');

if(isset($_POST['btn'])){
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $localizacao = $_POST['localizacao'];
     $perfil = $_POST['perfil'];
     $contato = $_POST['contato'];

    try{
    $conexao = $pdo->prepare("INSERT INTO usuarios (nome, email, localizacao, perfil, contato) 
    VALUES (:nome, :email, :localizacao, :perfil, :contato)");
    $conexao->bindParam(":nome",$nome);
    $conexao->bindParam(":email",$email);
    $conexao->bindParam(":localizacao",$localizacao);
    $conexao->bindParam(":perfil",$perfil);
    $conexao->bindParam(":contato",$contato);
    $conexao->execute();
    header("Location:../views/PaginaInicialProf.php");
    }
    catch(PDOException $th){
        header("Location:../views/CadatroEmpresas.php");
    }

}

    

?>