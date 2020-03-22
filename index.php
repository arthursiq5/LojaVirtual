<?php
    require "./vendor/autoload.php";

    $smarty = new Smarty();

    $smarty->setTemplateDir('./view/');

    $smarty->assign('NOME', 'ARTHUR SIQUEIRA');

    $smarty->display('index.tpl');
?>