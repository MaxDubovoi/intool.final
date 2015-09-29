<?php

session_start();
if(!isset($_GET['page']))
{
    $_SESSION['page']='aboutCompany';
}
else{
    $_SESSION['page']=addslashes(strip_tags(trim($_GET['page'])));
}
switch ($_SESSION['page']){
    case 'aboutCompany':
    case 'history':
    case 'aim':
    case 'vacancy':
    case 'partner':
        $title = 'О компании';
        $meta_d = 'О компании';
        $meta_kw = 'О компании';
        $_SESSION['section']='aboutCompany';
        break;
    case 'equipment':
    case 'snap-in':
    case 'tool':
        $title = 'Продукция';
        $meta_d = 'Продукция';
        $meta_kw = 'Продукция';
        $_SESSION['section']='products';
        break;
    case 'engineering':
    case 'maintenance':
    case 'manufacture':
        $title = 'Услуги';
        $meta_d = 'Услуги';
        $meta_kw = 'Услуги';
        $_SESSION['section']='services';
        break;
    case 'production':
    case 'service':
    case 'technology':
        $title = 'Производство';
        $meta_d = 'Производство';
        $meta_kw = 'Производство';
        $_SESSION['section']='production';
        break;
    case 'contacts':
        $title = 'Контакты';
        $meta_d = 'Контакты';
        $meta_kw = 'Контакты';
        $_SESSION['section']='contacts';
        break;

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Inter-instrument</title>
    <meta name="title" content=""/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:description" content=""/>
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />


    <!--<base href="" > -->
    <!--[if lt IE 9]>
    <script src="js/libs/ie-html5tags.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="icon" href="" type="image/x-icon" />
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="screen, projection"/>

    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
</head>

<body>
<!-- BEGIN wrapper-->
<div class="wrapper">
    <div class="min-width">
        <div class="header">
            <?php
            include('views/elements/_header.php');
            ?>
        </div>
        <div class="image-holder">
            <img class="central-photo" src="images/photo-<?echo $_SESSION['section']?>.jpg" alt="Tools photo">
        </div>
        <div class="navigation-site-holder">
            <ul class="navigation-site top">
                <?php
                include('views/elements/navigation-site.php');
                ?>
            </ul>
        </div>
        <div class="central"><!--
         --><div class="left-side">
                <?php
                include('views/elements/_left-side.php');
                ?>
            </div><!--
         --><div class="content">
                <?php
                include('views/'.$_SESSION['section'].'/'.$_SESSION['page'].'.html');
                ?>
            </div><!--
         --><div class="right-side">
                <?php
                include('views/elements/_right-side.php');
                ?>
            </div><!--
         --></div>
        <div class="navigation-site-holder">
            <ul class="navigation-site bottom">
                <?php
                include('views/elements/navigation-site.php');
                ?>
            </ul>
        </div>

        <div class="footer">
            <?php
            include('views/elements/_footer.php');
            ?>
            </div>

        </div>
    </div>

</div>
<!-- END wrapper-->

<!-- BEGIN popups -->
<div class="popup_holder">
    <div class="dtable">
        <div class="dtcell">
            <div class="popup"> <!-- <div class="popup popup_name">
                        body of popup
                        usage:
                        buttons for open popup add attr: data-popup='popup_name' -->
            </div>
        </div>
        <i class="back" id="back"></i>
    </div>
</div>
<!-- END popups -->
</body>
</html>
