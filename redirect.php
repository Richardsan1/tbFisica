<html>
<body>
<?php
    $teste = (int) $_GET['redirecionamento'];
?>
</body>
<script>
    var teste = "<?php echo $teste;?>"
    if(teste == 0)
    {
        window.location.replace("quiz.html");
    }
    else if(teste == 1)
    {
        window.location.replace("video.html");
    }
</script>
</html>