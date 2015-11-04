
<?php if ($_SESSION['section'] == "aboutCompany"): ?>
    <li><span >О компании</span></li>
<?php else: ?>
    <li><a href="/">О компании</a></li>
<?php endif; ?>

<?php if ($_SESSION['section'] == "products"): ?>
    <li><span>Продукция</span></li>
<?php else: ?>
    <li><a href="/index.php?page=products">Продукция</a></li>
<?php endif; ?>

<?php if ($_SESSION['section'] == "services"): ?>
    <li><span class="gradient">Услуги</span></li>
<?php else: ?>
    <li><a href="/index.php?page=engineering">Услуги</a></li>
<?php endif; ?>

<?php if ($_SESSION['section'] == "production"): ?>
    <li><span >Производство</span></li>
<?php else: ?>
    <li><a href="/index.php?page=technology">Производство</a></li>
<?php endif; ?>

<?php if ($_SESSION['section'] == "contacts"): ?>
    <li><span >Контакты</span></li>
<?php else: ?>
    <li><a href="/index.php?page=contacts">Контакты</a></li>
<?php endif; ?>