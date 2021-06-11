<html>
<script>
function retorno()
{
    window.location.replace("origem.html");
}
</script>
<body>
<?php
//criação de variáveis
$questionario = $_GET['numQuest'];
$resp = array(
    0 => (int)$_GET['questa01'],
    1 => (int)$_GET['questa02'],
    2 => (int)$_GET['questa03'],
    3 => (int)$_GET['questa04'],
    4 => (int)$_GET['questa05']
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
echo "OLÁ " . $_COOKIE['nome'] . "<br />";
//teste de pontuação
while($i < 5)
{
    if($resp[$i] == $correto[$i])
    {
        echo "A Questão $i Está CORRETA <br />";
        $ponts = $ponts + 1 ;
    }
    else if($resp[$i] != $correto[$i])
    {
        echo "A Questão $i Está ERRADA <br />";
    }
    $i++;

}

echo "Você fez $ponts pontos <br />";
?>
<button onclick="retorno()">Voltar ao lobby</button>
</body>
</html>