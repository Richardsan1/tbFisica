<html>
<head>
    <title>A Origem do Universo - Resultados</title>
</head>
<style>
@media only screen and (min-device-width:900px){
    body{
        font-family: helvetica;
        text-align: center;
        background-image: url('images/fundos_final1.jpg');
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
}
@media only screen and (max-device-width:899px){
    body{
        font-family: helvetica;
        text-align: center;
        background-image: url('images/fundos_final1.jpg');
        background-repeat: no-repeat;
        background-size: 300% 100%;
        background-position-x: center;
        
    }
    button{
        margin-top: 50px;
        height: 5vh;
        width:20vw;
        font-size:100%;
    }
    div{
        background: rgba(255,255,255,0.8);
        padding: 5px 0px 15px 0px;
        width: 800px;
        margin-left:10vw;
        margin-top:25vh;
        box-shadow: 0px 0px 10px #000;
        font-size: 200%;
    }
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
if ($_COOKIE['nome'] != "")
    echo "<h1>Olá, " . $_COOKIE['nome'] . "</h1><br /><br />";
echo "<h2>Este foi o seu desempenho:</h2>";

//teste de pontuação

while($i < 5)
{
    if($resp[$i] == $correto[$i])
    {
        echo "<label>A Questão ". ($i+1) . " Está CORRETA </label><br />";
        $ponts = $ponts + 1 ;
    }
    else if($resp[$i] != $correto[$i])
    {
        echo "<label>A Questão ". ($i+1) ." Está ERRADA </label><br />";
    }
    $i++;

}
if ($ponts == 1)
{
    echo "<br /><label> Que pena! você fez apenas $ponts ponto </label><br />";
}
else if ($ponts > 1 && $ponts < 5)
{
    echo "<br /><label>Você fez $ponts pontos</label><br />";
}
else if($ponts == 5)
{
    echo "<br /><label>Parabéns, você acertou tudo!</label><br />";
}
else if ($ponts == 0){
    echo "<br /><label>Que pena! Você não acertou nenhum </label><br />";
    echo "<label>assista nosso video para aprender mais </label><br />";
}

?>

<button onclick="retorno()">Voltar ao lobby</button>

</div>

</body>

</html>