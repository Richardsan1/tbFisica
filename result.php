<html>
<body>
<?php

$questionario = $_GET['numQuest'];
$resp = array(
    0 => (int)$_GET['questa01'],
    1 => (int)$_GET['questa02'],
    2 => (int)$_GET['questa03'],
    3 => (int)$_GET['questa04'],
    4 => (int)$_GET['questa05']
);
$cont= 0;
$ponts = 0;
$i = 0;
if($questionario == 1)
    $correto = array(
        0 => 3,
        1 => 1,
        2 => 4,
        3 => 1,
        4 => 2
    );

    while($cont < 5)
    {
        if (++$i >= strlen($questionario))
        {
            
            $i = 0;
        }
        if($questionario["1"] == $correto["1"])
            $ponts++;
        $i++;
    }
var_dump($ponts);

?>
</body>
</html>