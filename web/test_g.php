<?php
class parentClass
{

    public function myMethod() {
        echo 'Clase instanciada: ' . get_class($this)."<br>\n";
        echo 'Ejecutando: ' . __METHOD__ . "<br>\n";
        return 'Hello world';
    }

    public static function myStaticMethod() {
        echo 'Clase instanciada: ' . get_called_class()."<br>\n";
        echo 'Ejecutando: ' . __METHOD__ . "<br>\n";
        return 'Static hello world';
    }
}

class childClass extends parentClass
{

}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
<p>
    Utilizando las funciones get_class y get_called_class (ver código php del script)
</p>
<?php
$myClass = new childClass();
echo $myClass->myMethod()."<br>\n";

echo "<br>\n";
echo "<br>\n";

echo $myClass::myStaticMethod()."<br>\n";
?>

</body>
</html>
