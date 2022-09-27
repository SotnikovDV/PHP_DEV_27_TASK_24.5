<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="headerbox">
            <div class="main-menu">
                <ul class="menu-list">
                    <li class="menu-item"><a href="/">Главная страница</a></li>
                    <li class="menu-item"><a href="/services/">Услуги</a></li>
                    <li class="menu-item"><a href="/about/">О нас</a></li>
                    <li class="menu-item"><a href="/contacts/">Контакты</a></li>
                    <li class="menu-item"><a href="/main?act=phpinfo">phpinfo</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="row">
            <div class="contentbox">
                <?php include $content_view; ?>
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <h3>Поиск</h3>
                    <p><input type="text"></p>
                </div>
                <div class="card">
                    <h3>Новости компании</h3>
                    <p>Мы открылись!</p>
                </div>
                <div class="card">
                    <h3>Популярные услуги</h3>
                    <p>
                    <ul>
    <li>Ограбить собственное население</li>
    <li>Окупировать соседнюю страну</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>