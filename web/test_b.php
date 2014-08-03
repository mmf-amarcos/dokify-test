<?php include_once('test_b_data.php'); ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $json_array  = json_decode($random_json, true);
        echo 'PHP Método 1: (json_decode y count) -- ' . count($json_array) . "<br>\n";
    ?>
    <script>
    var random_json =  <?php echo $random_json ?>;



    document.write('JS Método 1: Object.keys(random_json).length -- ' + Object.keys(random_json).length + '<br>');

    document.write('JS Método 2: random_json.length (siempre que el json tenga como primer elemento un []) -- ' + random_json.length + '<br>');

    var key, count = 0;
    for (key in random_json) if (random_json.hasOwnProperty(key)) count++;
    document.write('JS Método 3: Recorriendo el json) -- ' + count + '<br>');

    </script>
</body>
</html>
