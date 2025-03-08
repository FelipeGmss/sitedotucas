<?php 

require('../models/cadastroEmp.class.php');
try {
if(isset($_POST['btn'])){
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $localizacao = $_POST['localizacao'];
     $perfil = $_POST['perfil'];
     $contato = $_POST['contato'];

    $x = new CadastroEmp();
    $x->CadastrarEmp($nome, $email, $localizacao, $perfil, $contato);

}
    header("Location:../views/paginaEmp.php");
} catch(Exception $th){
    echo "deu ruim". $th->getMessage();
}
    

?>