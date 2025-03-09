<?php 

if (isset($_POST['btn'])) {
    $opc = $_POST['btn'];
}

switch ($opc) {
    case 'Aluno':
        header("Location:../views/loginAluno.php");
        break;
    case 'Professor':
        header("Location:../views/loginProf.php");
        break;
    default:
        break;
}

?>