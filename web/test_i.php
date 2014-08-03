<?php

class parentClass
{
    private $products = array();

    public function __construct($products) {
        // get productos from database or whereever
        $this->products = $products;
    }

    public function numFilas() {
        return count($this->products);
    }
}

class childClass extends parentClass
{
    public function numFilas() {
        return parent::numFilas() * 100;
    }
}


$products = new childClass(
    array('producto_0', 'producto_1', 'producto_2', 'producto_3', 'producto_4', 'producto_5')
);
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>

<p>
    Sobreescribimos (overwrite) el método de la clase padre(ver código php del script)
</p>

<?php
    echo $products->numFilas();
?>


</body>
</html>



