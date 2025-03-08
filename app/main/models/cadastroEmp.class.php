<?php 

    Class CadastroEmp {
        public function CadastrarEmp($nome, $email, $localizacao, $perfil, $contato){
            $pdo = new PDO("mysql:dbname=site_tucano;host=localhost","root","");
            $consulta = "INSERT INTO usuarios (nome, email, localizacao, perfil, contato) 
            VALUES (:nome, :email, :localizacao, :perfil, :contato)";
            $query = $pdo->prepare($consulta);
            $query->bindParam(":nome",$nome);
            $query->bindParam(":email",$email);
            $query->bindParam(":localizacao",$localizacao);
            $query->bindParam(":perfil",$perfil);
            $query->bindParam(":contato",$contato);
            $query->execute();
        }
    }
    

    

?>
