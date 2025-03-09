<?php 


Class LoginAluno {
    public function loginAlunos($email, $senha){
        $pdo = new PDO("mysql:dbname=site_tucano;host=localhost","root","");
        $consulta = "SELECT * FROM login_aluno WHERE email = :email and senha = :senha";
        $query = $pdo->prepare($consulta);
        $query->bindParam(":email", $email);
        $query->bindParam(":senha", $senha);
        $query->execute();


    }
}


?>