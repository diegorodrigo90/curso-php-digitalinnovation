<?php

include '../app/vendor/autoload.php';
$foo = new App\Foo();
$contaBancaria = new App\ContaBancaria();

var_dump($contaBancaria);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Docker <?php echo $foo->getName(); ?></title>
    </head>
    <body>
        <h1>Docker <?php echo $foo->getName(); ?></h1>
    </body>
</html>
