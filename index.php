<?php
    require "./vendor/autoload.php";

    $smarty = new Smarty();

    $smarty->setTemplateDir('./view/');

    $smarty->display('index.tpl');
?>