<?php

$settings = array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../app/Views',
    'model' => (Object)array(
            "message" => "Hello World"
        )
);

return $settings;

//"require": {
//    "sata/test": "@dev",
//},
//"repositories": [
//    {
//        "type": "svn",
//        "url": "https://main/svn/repository.com"
//    }
//]
//in svn
//{
//    "name": "sata/test",
//}

/*
 * @todo
 * 2) avtomati4no zarejdane na view-tata v kontrolera
 * 3) vuzmojnost za dobavqne na prefix na kontroleri i view-ta
 * 6) admin - gotovi template-i ot saita
 * 7) iserver kato vendor biblioteka s vuzmojnost za slagane vuv composer
 * 8) layout
 * 9) router setting file
 */