<?
switch($_SESSION['section'])
{
    case 'aboutCompany':
        $left_menu = array('name'=>array('aboutCompany','history','aim','vacancy','partner'),
                            'text'=>array('О компании','История','Миссия и цели','Вакансии','Партнеры') );
        break;
    case 'products':
        $left_menu = array('name'=>array('products','equipment','tool','snap-in'),
            'text'=>array('Продукция','Оборудование','Инструмент','Оснастка') );
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
        $left_menu = null;
        break;


}
?>
<ul class="navigation-page">
    <?for($i=0;$i < count($left_menu['name']);$i++)
    {
        if ($_SESSION['page'] == $left_menu['name'][$i]):

            echo ("<li><span>".$left_menu['text'][$i]."</span></li>");
        else:
            echo (
                "<li><a  href='/index.php?page=".$left_menu['name'][$i]."'>
                        ".$left_menu['text'][$i]."
                        </a></li>");
        endif;

    }
    ?>
</ul>
