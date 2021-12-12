<div class="header">
    <div class="logo">
        <a href="/">
            <img src="/img/logotype.png" alt="" class="logotype">
        </a>
    </div>
    <div class="menu">
        <?php $url = $_SERVER["REQUEST_URI"];?>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="/" <?php if ($url == "/") {echo 'class="active"';}?>>Главная</a>
            </li>
            <li class="menu-item">
                <a href="../pages/services.php" <?php if ($url == "/pages/services.php") {echo 'class="active"';}?>>Услуги</a>
            </li>
            <li class="menu-item">
                <a href="../pages/prices.php" <?php if ($url == "/pages/prices.php") {echo 'class="active"';}?>>Цены</a>
            </li>
            <li class="menu-item">
                <a href="../pages/projects.php" <?php if ($url == "/pages/projects.php") {echo 'class="active"';}?>>Проекты</a>
            </li>
            <li class="menu-item">
                <a href="../pages/about.php" <?php if ($url == "/pages/about.php") {echo 'class="active"';}?>>О компании</a>
            </li>
            <li class="menu-item">
                <a href="../pages/contacts.php" <?php if ($url == "/pages/contacts.php") {echo 'class="active"';}?>>Контакты</a>
            </li>
        </ul>
    </div>
    <div class="contacts">
        <i class="fas fa-phone"></i>&nbsp;&nbsp;25-83-53
    </div>
</div>