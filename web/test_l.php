<?php
$valid_ddmmyyyy = '14/04/1971';

$invalid_ddmmyyyy = '04/14/1971';

function customCheckDate($ddmmyyyy)
{
    $test_arr  = explode('/', $ddmmyyyy);
    return checkdate($test_arr[1], $test_arr[0], $test_arr[2]);
}


function customCheckDate2($ddmmyyyy)
{
    $date = DateTime::createFromFormat('d/m/Y', $ddmmyyyy);
    $date_errors = DateTime::getLastErrors();
    if ($date_errors['warning_count'] + $date_errors['error_count'] > 0) {
        //$errors[] = 'Some useful error message goes here.';
        return false;
    }
    return true;
}



?>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>

<p>(Ver código del script php)</p>

<p>
Utilizando la función php checkdate
<?php
var_dump(customCheckDate($valid_ddmmyyyy));
var_dump(customCheckDate($invalid_ddmmyyyy));
?>
</p>

<p>
Utilizando las clase DateTime y sus errores
<?php
var_dump(customCheckDate2($valid_ddmmyyyy));
var_dump(customCheckDate2($invalid_ddmmyyyy));
?>
</p>

<p>
Utilizando expresiones regulares. Algo similar a:
<code>
    if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1]-(0[1-9]|1[0-2])-[0-9]{4})$/",$ddmmyyyy))
    {
        return true;
    }
    return false;
</code>
</p>

</body>
</html>
