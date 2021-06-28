<?php
include_once("conexao.php");

?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados1";

    if(isset($_POST["idfuncionario"])) {
        $idfuncionario = $_POST["idfuncionario"];
        $nome = $_POST["nome"];


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
         else {
            $sql = "SELECT * FROM funcionario WHERE idfuncionario =
    '$idfuncionario' AND nome = '$nome'";
           $result = mysqli_query($conexao, $sql);

$row = mysqli_num_rows($result);

if($row == 1) {
  $_SESSION['funcionario'] = $funcionario;
  header('Location: index1.php');
  exit();
 } else {
                echo "<span><b>Aviso:</b> Erro , verifique os dados!<span>";
            }
            
}
  }
  ?>
