<html>
<style>
body{
    font-family: helvetica;
    text-align: center;
    background-image: url('fundos_final1.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    
}
button{
    margin-top: 50px;
    height: 50px;
    width:150px;
}
div{
    background: rgba(255,255,255,0.8);
    padding: 5px 0px 15px 0px;
    width: 400px;
    margin-left:35vw;
    margin-top:15vh;
    box-shadow: 0px 0px 10px #000;
}
</style>

<script>
function retorno()
{
    window.location.replace("origem.html");
}
</script>

<body>
<div>

<?php
//criação de variáveis
$questionario = $_POST['numQuest'];
$resp = array(
    0 => (int)$_POST['questa01'],
    1 => (int)$_POST['questa02'],
    2 => (int)$_POST['questa03'],
    3 => (int)$_POST['questa04'],
    4 => (int)$_POST['questa05']
);
$ponts = 0;
$i = 0;

//teste de quiz respondido

if($questionario == 1)
    $correto = array(
        0 => 3,
        1 => 1,
        2 => 4,
        3 => 1,
        4 => 2
    );
else if($questionario == 2)
    $correto = array(
        0 => 2,
        1 => 4,
        2 => 1,
        3 => 3,
        4 => 2
    );
echo "<h1>Olá, " . $_COOKIE['nome'] . "</h1><br /><br />";
echo "<h2>Este foi o seu desempenho:</h2>";

//teste de pontuação

while($i < 5)
{
    if($resp[$i] == $correto[$i])
    {
        echo "<label>A Questão ". $i+1 . " Está CORRETA </label><br />";
        $ponts = $ponts + 1 ;
    }
    else if($resp[$i] != $correto[$i])
    {
        echo "<label>A Questão ". $i+1 ." Está ERRADA </label><br />";
    }
    $i++;

}

echo "<br /><label>Você fez $ponts pontos </label><br />";
?>

<button onclick="retorno()">Voltar ao lobby</button>

</div>

</body>

</html>