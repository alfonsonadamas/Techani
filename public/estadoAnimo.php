<?php
    include("../public/php/open.php");
    if($sesion){
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Estado de Ánimo</title>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CY9Q1W4ZRL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CY9Q1W4ZRL');
</script>

<body>
    <h1>Estado de Ánimo</h2>
    <form action="php/addEstadoAnimo.php" method="post" class="sm:flex sm:flex-row">
        <label for="estado_animo">Selecciona cómo está tu estado de ánimo:</label>
        <select name="estado_animo" id="estado_animo" class="border-2 border-black" onchange="actualizarEmoticon()">
            <option value="triste">&#128577; Triste</option>
            <option value="enojado">&#128545; Enojado</option>
            <option value="neutral">&#128528; Neutral</option>
            <option value="feliz">&#128516; Feliz</option>
            <option value="muy-feliz">&#128512; Muy Feliz</option>
        </select>
    </form>
    <div class="emoticon-container">
        <div class="emoticon" id="emoticon-triste">&#128577;</div>
        <div class="emoticon" id="emoticon-enojado">&#128545;</div>
        <div class="emoticon" id="emoticon-neutral">&#128528;</div>
        <div class="emoticon" id="emoticon-feliz">&#128516;</div>
        <div class="emoticon" id="emoticon-muy-feliz">&#128512;</div>
    </div>
    <!-- 
    <style>
        body {
    text-align: center;
    font-family: Arial, sans-serif;
}

form {
    margin: 20px auto;
}

.emoticon-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.emoticon {
    font-size: 40px;
    cursor: pointer;
    display: none;
}

.emoticon.active {
    display: block;
}
    </style>

-->


</body>
<script src="script.js"></script>

</html>

<?php
    }else{
        header("location: login.php");
    }
?>