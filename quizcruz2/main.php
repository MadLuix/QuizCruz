<!DOCTYPE html>
<html>
<title>QuizCruz</title>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>QUIZ CRUZ</h1>
    <table border="1">
<tr>
    <td class="n"> Cod </td> 
    <td class="n"> Descrição</td> 
    <td class="n"> Proprietário</td>
    <td class="n"> Autorizada</td>
    <td class="n"> Acessar</td>
</tr>
<?php
$host = "localhost"; 
$db   = "u700215052_QuizCruz";  
$user = "u700215052_quizcruz";
$pass = "quizCruzeiro35";
$connection = mysqli_connect($host, $user, $pass, $db); 
if (mysqli_connect_errno()) {
  echo "Não foi possível a conexão com o BD MySQL: " . mysqli_connect_error();
}
mysqli_select_db($connection, $db);
$dados = mysqli_query($connection,"SELECT tblquestoes.textoAlternativa1 as a1, tblquestoes.textoAlternativa2 as a2, tblquestoes.textoAlternativa3 as a3, tblquestoes.textoAlternativa4 as a4, tblquestoes.textoAlternativa5 as a5, tblquestoes.textoQuestao as questao FROM tblquestoes");
$linha = mysqli_fetch_assoc($dados);
$qts = mysqli_query($connection,"SELECT tblquestoes.qtdeAlternativas as qtda  FROM tblquestoes")
?>
    
    </table>
</body>

</html>
