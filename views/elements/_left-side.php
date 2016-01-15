<?php
switch($_SESSION['section'])
{
    case 'aboutCompany':
        $left_menu = array('name'=>array(/*'aboutCompany',*/'history','aim','vacancy','partner'),
                            'text'=>array(/*'О компании',*/'История','Миссия и цели','Вакансии','Партнеры') );
        break;
    case 'products':
        $left_menu = array('name'=>array(/*'products',*/'tool','snap-in','equipment'),
            'text'=>array(/*'Продукция',*/'Инструмент','Оснастка','Оборудование') );
        break;
    case 'services':
        $left_menu = array('name'=>array('engineering','manufacture','maintenance'),
            'text'=>array('Проектирование','Изготовление','Сопровождение') );
        break;
    case 'production':
        $left_menu = array('name'=>array('technology','production','service'),
            'text'=>array('Технологии','Производство','Сервис') );
        break;
    case 'contacts':
        $left_menu = array('name'=>array('contacts','email_us'),
            'text'=>array('Карта проезда','Написать нам') );
        break;


}
?>
<ul class="navigation-page">
    <?php for($i=0;$i < count($left_menu['name']);$i++)
    {
        if ($_SESSION['page'] == $left_menu['name'][$i]):

            echo ("<li><span>".$left_menu['text'][$i]."</span></li>");
        else:
            echo (
                "<li><a  href='/".$left_menu['name'][$i]."'>".$left_menu['text'][$i]."</a></li>");
        endif;

    }
    ?>
</ul>
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=34716185&amp;from=informer"
   target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/34716185/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                       style="width:88px; height:31px; border:0; margin-top: 20px;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:34716185,lang:'ru'});return false}catch(e){}" /></a>
<!--/Yandex.Metrika informer-->
