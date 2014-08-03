<?php
class myIterator implements Iterator, Countable
{
    private $position = 0;
    private $array = array();


    public function __construct() {
        $this->position = 0;
    }

    public function addElement($element) {
        $this->array[] = $element;
    }

    //now for the iterator interface methods

    function current() {
        //var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    function key() {
        //var_dump(__METHOD__);
        return $this->position;
    }

    function next() {
        //var_dump(__METHOD__);
        ++$this->position;
    }

    function rewind() {
        //var_dump(__METHOD__);
        $this->position = 0;
    }


    function valid() {
        //var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }

    //now for the countable interface
    function count() {
        //var_dump(__METHOD__);
        return count($this->array);
    }

}

$it = new myIterator();
$it->addElement("firstelement");
$it->addElement("secondelement");
$it->addElement("thirdelement");

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>

<p>
    Implementamos en nuestra clase los interfaces iterator y countable (ver código php del script)
</p>

<?php
foreach($it as $key => $value) {
    echo $key . ': ' . $value . "<br>\n";
}
echo 'Count sobre el objeto:' .count($it);
?>


</body>
</html>



