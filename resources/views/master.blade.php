
<!doctype html>
<html lang="ru" class="h-100" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header>
        <div class="icon" id="burger"><i class='fa fa-bars' style='color:#ffffff'></i></div>
        <nav class="navbar">
            <ul>
            @auth
                <li><a href="{{route('index')}}">Лиды</a></li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Выход</a></li>
                </form>
            @endauth
            @guest
                <li><a href="{{route('index')}}">Форма</a></li>
                <li><a href="{{route('registration')}}">Регистрация</a></li>
                <li><a href="{{route('authorization')}}">Авторизация</a></li>
            @endguest
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Анна Спирина</p>
    </footer>
    </body>
    <script src="/js/script.js"></script>
</html>