<html>
<head>
    <title>redirect</title>
</head>
<body>
<?php
    $teste = (int) $_GET['redirecionamento'];
?>
</body>
<script>
    var teste = "<?php echo $teste;?>"
    var nome = "<?php echo $_GET['NOME']?>";
    document.cookie = 'nome=' + nome + '; path=/';
    if(teste == 0)
    {
        window.location.replace("quizes.html");
    }
    else if(teste == 1)
    {
        window.location.replace("doc.html");
    }
</script>
</html>