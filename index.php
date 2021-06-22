<?php
require_once 'get.php';
?>
<html dir="rtl">
<head>
    <title>Test Project </title>
</head>
<style type="text/css">
    html * { 
        font-family:tahoma;
    }
    #wrapper { 
        width:90%;
        margin:0 auto;
        border:1px solid #000;
        border-radius:5px;
    }
    #wrapper form { 
        background-color:#ccf;
        margin:10px;
        padding:8px;
        border-radius:4px;
    }
    #productInfo * { 
        margin:0 auto;
        font-size: 1.5vw;
    }
    #productInfo { 
        border:1px dotted #ccffcc;
        margin:10px auto;
        width:40%;
    }
    #productInfo img { 
        /* float:left; */
        display:flex;
        max-width: 100%;
        height: auto;
    }
    .balancer { 
        clear:both;
    }
    #ptitle { 
        background-color:#c00;
        color:#fff;
        padding:3px;
        
    }
    #pprice { 
        background-color:#cff;
        padding:3px;
    }
</style>

<body>
    <div id="wrapper">
        <form method="POST">
            کد محصول : <input type="text" name="pcode" placeHolder = "dkp-96290" />
            <input type="submit" value="نمایش"/>
        </form>

        <?php
        if ( isset($_POST['pcode'])) { 
            $pcode = $_POST['pcode'];
            $data = getProductDetails ( $pcode ) ;
            include 'showProductInfo.php';
        }
        ?>
    </div>
</body>
</html>