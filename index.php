<?php
session_start();
if(!isset($_GET['page']))
{
    $_SESSION['page']='products';
}
else{
    $_SESSION['page']=addslashes(strip_tags(trim($_GET['page'])));
}
switch ($_SESSION['page']){
    case 'aboutCompany':
        $title = 'Интер Инструмент - О компании - ПРОМЫШЛЕННОЕ ПРОИЗВОДСТВО - ОТ ИДЕИ К РЕАЛЬНОСТИ';
        $meta_d = 'Частное предприятие ИНТЕР ИНСТРУМЕНТ (Днепропетровск, Украина) – это быстро растущее динамично развивающееся предприятие, деятельность которого неразрывно связана с увеличением промышленного потенциала производственно-ориентированных предприятий не только Украины, но и предприятий ближнего и дальнего зарубежья.';
        $meta_kw = 'О компании, интер, инструмент, производство, ';
        $_SESSION['section']='aboutCompany';
        break;
    case 'history':
        $title = ' Интер Инструмент - История';
        $meta_d = 'Частное предприятие ИНТЕР ИНСТРУМЕНТ (Днепропетровск,Украина) - это современное торгово-производственное предприятие, основная деятельность которого связана с комплексным удовлетворением потребностей клиентов производственного сектора. Мы предлагаем не только оборудование, инструмент и вспомогательную оснастку, но и оказываем услуги по разработке и реализации индивидуальных технологических решений, используя передовые технологии. ';
        $meta_kw = 'О компании';
        $_SESSION['section']='aboutCompany';
        break;
    case 'aim':
        $title = ' Интер Инструмент - Цели';
        $meta_d = 'НАША МИССИЯ - Обеспечить стабильный и долгосрочный рост бизнеса, гарантируя клиентам высокое качество предоставляемой продукции и услуг по доступным ценам.';
        $meta_kw = 'О компании';
        $_SESSION['section']='aboutCompany';
        break;
    case 'vacancy':
        $title = ' Интер Инструмент - Вакансии';
        $meta_d = 'Вакансии';
        $meta_kw = 'Вакансии';
        $_SESSION['section']='aboutCompany';
        break;
    case 'partner':
        $title = ' Интер Инструмент - Партнеры';
        $meta_d = 'Партнеры';
        $meta_kw = 'Партнеры';
        $_SESSION['section']='aboutCompany';
        break;
    //***********END ABOUT COMPANY SECTION***
    case 'products':
        $title = 'Интер Инструмент - Продукция - Металорежущий инструмент, оснастка, детали под заказ, токарные пластины Днепропетровск, Украина';
        $meta_d = 'Мы поставляем качественный металлорежущий инструмент, оснастку и вспомогательные приспособления известных производителей стран Азии и Европы. В наших каталогах представлена вся необходимая информация для эффективной организации производства.';
        $meta_kw = 'Продукция, металлорежущий, инструмент, оснастка, производство, оборудование, токарные пластины, детали под заказ';
        $_SESSION['section']='products';
        break;
    case 'equipment':
        $title = 'Интер Инструмент - Оборудование';
        $meta_d = 'Palmary Machinery Co., Ltd. – шлифовальные станки. Yida - производитель станков токарной и фрезерной группы. SINGULAR MACHINERY – ленточнопильное оборудование.';
        $meta_kw = 'шлифовальные, производитель, токарной, фрезерной, ленточнопильное';
        $_SESSION['section']='products';
        break;
    case 'snap-in':
        $title = 'Интер Инструмент - Оснастка';
        $meta_d = 'EROGLU Präzisionswerkzeuge GmbH – немецкий производитель высокоточного вспомогательного инструмента для станков фрезерной, сверлильно-расточной и токарной групп. ROHM GmbH - в настоящее время головное предприятие находится в г.Зонтхайм на р.Бренц, дополнительные в г.Диллинген и Санкт-Георгене. Acrow machinery Mfg. был основана в 1985 году на Тайване, в городе Тайчунг. Сейчас, компания завоевала лидирующие позиции на рынке оснастки для станков с ЧПУ в Тайване.';
        $meta_kw = 'Высокоточный, инструмент, фрезерный, сверлильно-расточной, Eroglu';
        $_SESSION['section']='products';
        break;
    case 'tool':
        $title = 'Интер Инструмент - ваш надежный партнер в области металообработки';
        $meta_d = 'MITSUBISHI CARBIDE – японский производитель обширного спектра твердосплавного металлорежущего инструмента. CERAMTEC - поставщик компонентов из высококачественной керамики, которая нашла применение в автомобилестроении, электронике и электротехнике, строительстве и промышленном секторе. WINSTAR CUTTING TECHNOLOGIES CORP - Тайваньский производитель режущего инструмента';
        $meta_kw = 'японский, поставщик, режущий, твердосплавный, спектр, строительство, прозвидитель, Mitsubishi carbide';
        $_SESSION['section']='products';
        break;
    //***********END PRODUCTS SECTION***
    case 'engineering':
        $title = 'Интер Инструмент - Услуги';
        $meta_d = 'Услуги';
        $meta_kw = 'Услуги';
        $_SESSION['section']='services';
        break;
    case 'maintenance':
        $title = 'Интер Инструмент - Услуги';
        $meta_d = 'Услуги';
        $meta_kw = 'Услуги';
        $_SESSION['section']='services';
        break;
    case 'manufacture':
        $title = 'Интер Инструмент - Услуги';
        $meta_d = 'Услуги';
        $meta_kw = 'Услуги';
        $_SESSION['section']='services';
        break;
    //***********END SERVICES SECTION***
    case 'production':
        $title = 'Интер Инструмент - Производство';
        $meta_d = 'Производство';
        $meta_kw = 'Производство';
        $_SESSION['section']='production';
        break;
    case 'service':
        $title = 'Интер Инструмент - Производство';
        $meta_d = 'Производство';
        $meta_kw = 'Производство';
        $_SESSION['section']='production';
        break;
    case 'technology':
        $title = 'Интер Инструмент - Производство';
        $meta_d = 'Производство';
        $meta_kw = 'Производство';
        $_SESSION['section']='production';
        break;
    //***********END PRODUCTS SECTION***
    case 'email_us':
        $title = 'Интер Инструмент - Контакты';
        $meta_d = 'Контакты';
        $meta_kw = 'Контакты';
        $_SESSION['section']='contacts';
        break;
    case 'contacts':
        $title = 'Интер Инструмент - Контакты';
        $meta_d = 'ЧП «Интер Инструмент»
                    49019, г. Днепропетровск, ул. Ударников, 30
                    Тел.: +38(056) 374-99-10,11,12,13 Тел./факс: +38(056)374-99-14';
        $meta_kw = 'ЧП «ИНТЕР ИНСТРУМЕНТ», +38(056) 374-99-11';
        $_SESSION['section']='contacts';
        break;
    //***********END CONTACTS SECTION***
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
    <title><? echo  $title ?></title>
    <meta name="title" content="<? echo  $title ?>"/>
    <meta name="keywords" content="<? echo  $meta_kw ?>"/>
    <meta name="description" content="<? echo  $meta_d ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:description" content=""/>
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />


    <!--<base href="" > -->
    <!--[if lt IE 9]>
    <script src="js/libs/ie-html5tags.js" type="text/javascript"></script>
    <![endif]-->
    <script src = "js/libs/jquery-1.9.1.js" type = "text/javascript"></script>
    <script src = "js/script.js" type = "text/javascript"></script>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.png" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="screen, projection"/>

    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

</head>

<body>
<?php include_once("php/analytics.php") ?>

<!-- BEGIN wrapper-->
<div class="wrapper">
    <div class="min-width">
        <div class="header">
            <?php
            include('views/elements/_header.php');
            ?>
        </div>
        <div class="image-holder">
            <img class="central-photo" src="images/photo-<?php echo $_SESSION['section']?>.jpg" alt="Tools photo">
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
