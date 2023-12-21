<?php
    namespace TDD;

    include("./Receipt.php");

    $receipt = new Receipt();

    // $rekening = array(56, 128, 89, 24, 133, 233, 212);

    $rekening = [56, 128, 89, 24, 133, 233, 212, 23];

    echo dirname(__FILE__);
    echo "<br>";
    echo DIRECTORY_SEPARATOR;
    echo "<br>";
    echo dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

?>


<h1>Voorbeld Unittest</h1>

<h3>Het totaal bedrag van de bill is: <?php echo $receipt->total($rekening); ?>€</h3>

<h3>Het productbedrag van de rekening is: <?php echo $receipt->product ($rekening); ?>€</h3>