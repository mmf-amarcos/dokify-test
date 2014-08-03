<?php

class Translator
{
    private $default_locale;

    private $catalog;

    public function __construct($catalog, $default_locale) {
        $this->catalog = $catalog;
        $this->default_locale = $default_locale;
    }

    public function trans($literal, $locale = null)
    {
        if (is_null($locale)) {
            $locale = $this->default_locale;
        }

        return (isset($this->catalog[$locale][$literal]))? $this->catalog[$locale][$literal] : $literal;
    }
}

// get catalog from database, static files or whereever
$catalog = array();
$catalog['en'] = array(
    'key.banana' => 'Banana',
    'key.apple' => 'Apple',
    'key.orange' => 'Orange',
    'key.melon' => 'Melon',
);

$catalog['es'] = array(
    'key.banana' => 'Plátano',
    'key.apple' => 'Manzana',
    'key.orange' => 'Naranja',
    'key.melon' => 'Melón',
);

$translator = new Translator($catalog, 'en');
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>

<p>Una parte del soporte multiidiomas debería consistir en herramientas/clases para poder cargar catálogos de traducciones y devolver las traducciones en distintos idiomas</p>
<p>(Ver código fuente de este script)</p>

<?php
echo $translator->trans('key.banana')."<br>\n";
echo $translator->trans('key.orange')."<br>\n";

echo $translator->trans('key.banana', 'es')."<br>\n";
echo $translator->trans('key.orange', 'es')."<br>\n";
?>

<p>También habría que tener en cuenta la traducción de los campos de base de datos en los que sea necesario</p>
<p>Para ello habría que utilizar un esquema de base de datos preparado para registrar las posibles traducciones</p>
<p>Un ejemplo de ese modelo de datos podría ser:</p>
<code>
    CREATE TABLE PRODUCT (id int, PRICE NUMBER(18, 2))<br>

    con una relación 1 a n con <br>

    CREATE TABLE PRODUCT_TRANSLATION (pr_id INT FK, locale varchar, product_name text, product_description text)<br>
</code>
<p>Existen diversas estrategias con diferentes pros y contras a la hora de definir estos esquemas. <a target="_blank" href="http://stackoverflow.com/questions/316780/schema-for-a-multilanguage-database">Por ejemplo</a> </p>

<p>Por otro lado ya existen multitud de componentes reutilizables. Por ejemplo: el componente translation de symfony para traducciones estáticas o sobre doctrine las extensiones translatable</p>


</body>
</html>
