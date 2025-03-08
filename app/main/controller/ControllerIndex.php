<?php 

if (isset($_POST['btn'])) {
    $opc = $_POST['btn'];
}

switch ($opc) {
    case 'Aluno':
        header("Location:../views/PaginaInicialAluno.php");
        break;
    case 'Professor':
        header("Location:../views/PaginaInicialProf.php");
        break;
    default:
        break;
}

?>