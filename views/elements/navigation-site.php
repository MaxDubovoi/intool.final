<?php if ($_SESSION['section'] == "aboutCompany"): ?>
    <li><span class="active" >О компании</span></li>
<?php else: ?>
    <li><a href="/aboutCompany">О компании</a></li>
<?php endif; ?>

<?php if ($_SESSION['section'] == "products"): ?>
    <li><a class="active" href="/">Продукция</a></li>
<?php else: ?>
    <li><a href="/">Продукция</a></li>
<?php endif; ?>

<?php if ($_SESSION['section'] == "services"): ?>
    <li><span class="active" >Услуги</span></li>
<?php else: ?>
    <li><a href="/engineering">Услуги</a></li>
<?php endif; ?>

<?php if ($_SESSION['section'] == "production"): ?>
    <li><span class="active" >Производство</span></li>
<?php else: ?>
    <li><a href="/technology">Производство</a></li>
<?php endif; ?>

<?php if ($_SESSION['section'] == "contacts"): ?>
    <li><span class="active" >Контакты</span></li>
<?php else: ?>
    <li><a href="/contacts">Контакты</a></li>
<?php endif; ?>