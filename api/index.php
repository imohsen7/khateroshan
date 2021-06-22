<?php
require_once 'vendor/autoload.php';
use RestService\Server;
require_once '../get.php';

        Server::create('/')
            ->addGetRoute('getProductInfo/(.*)', function($v) {
                $data = getProductDetails ($v) ; 
                return $data;
            })
        ->run();
