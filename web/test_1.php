<?php include_once('test_1_data.php'); ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $json_array  = json_decode($random_json, true);
        echo 'PHP Método 1: (json_decode y count) -- ' . count($json_array) . "<br>\n";
	echo 'PHP Método 2: En el caso de un objeto json más reducido y acotado y asegurándonos que no aparece dentro de ninguna propiedad del objeto el literal ,{ se podría contar el número de veces que aparece ,{'. "<br>\n";
    ?>
    <script>
    var random_json =  <?php echo $random_json ?>;



    document.write('JS Método 1: Object.keys(random_json).length -- ' + Object.keys(random_json).length + '<br>');

    document.write('JS Método 2: random_json.length (siempre que el json tenga como primer elemento un []) -- ' + random_json.length + '<br>');

    var key, count = 0;
    for (key in random_json) if (random_json.hasOwnProperty(key)) count++;
    document.write('JS Método 3: Recorriendo el json y usando hasOwnProperty) -- ' + count + '<br>');

    </script>
</body>
</html>
