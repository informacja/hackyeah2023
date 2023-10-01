<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
        
        
require_once(__DIR__ . '../vendor/autoload.php');
define('__ROOT__', dirname(dirname(__FILE__)));
var_dump(__ROOT__);
require_once(__ROOT__.'../php/lib.php');


        echo '<p>Hello World</p>'; ?>
    </body>
</html>