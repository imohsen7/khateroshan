<?php
require_once 'vendor/autoload.php';
use RestService\Server;
require_once '../get.php';
require_once '../tcpdf/tcpdf.php';

        Server::create('/')
            ->addGetRoute('getProductInfo/(.*)', function($v) {
                $data = getProductDetails ($v) ;
                $pdfTextTitle = "محصول : ".$data['title']." <hr> قیمت :".$data['price'];
                $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
                $pdf->AddPage();
                $pdf->SetFont('bnazanin','', 12);
                $pdf->WriteHTML($pdfTextTitle, true, 0, true, 0);
                $pdf->Image($data['image']);
               return $pdf->Output();
            })
        ->run();
