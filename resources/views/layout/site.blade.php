<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Магазин</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<div class="container">
    <header class="p-3 text-bg-dark mb-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a class="navbar-brand" href="/">Магазин</a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a class="nav-link px-2 text-secondary" href="{{ route('catalog.index') }}">Каталог</a>
                    </li>
                    <li>
                        <a class="nav-link px-2 text-secondary" href="#">Доставка</a>
                    </li>
                    <li>
                        <a class="nav-link px-2 text-secondary" href="#">Контакты</a>
                    </li>
                    <li>
                        <a class="nav-link px-2 text-secondary" href="{{ route('basket.index') }}">Корзина</a>
                    </li>
                </ul>

                <form class="row col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <div class="input-group mb-3">
                    <div class="col-auto">
                        <input
                            type="search"
                            class="col-auto form-control form-control-dark"
                            placeholder="Поиск по каталогу" aria-label="Search">
                    </div>
                    <div class="col-auto">

                    <button class="btn btn-secondary" type="button">Поиск</button>
                    </div>
                </form>


            </div>
        </div>
    </header>

    <div class="row">
        <div class="col-md-3">
            <h4>Разделы каталога</h4>
            <p>Здесь будут корневые разделы</p>
            <h4>Популярные бренды</h4>
            <p>Здесь будут популярные бренды</p>
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>
    @vite(['resources/js/app.js'])
</body>
</html>
