<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <!-- HEADER -->
  <header class="header">
    <!-- BRAND -->
    <a href="/"><img class="header-brand" src="/img/hdcevents_logo.svg" alt="HDC Events logo"></a>

    <!-- NAV -->
    <nav class="main-nav">
      <!-- NAV LIST -->
      <ul class="main-nav-list">
        <li><a class="main-nav-link" href="/">Eventos</a></li>
        <li><a class="main-nav-link" href="/events/create">Criar Eventos</a></li>
        @auth
        <li><a class="main-nav-link" href="/dashboard">Meus Eventos</a></li>
        <li>
          <form action="/logout" method="POST">
            @csrf
            <a class="main-nav-link" href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
          </form>
        </li>
        @endauth
        @guest
        <li><a class="main-nav-link" href="/login">Entrar</a></li>
        <li><a class="main-nav-link" href="/register">Cadastrar</a></li>
        @endguest
      </ul>
    </nav>
  </header>

  <!-- VIEW CONTENT -->
  <main>
    @if(session("msg"))
      <p class="flash-message">{{ session("msg") }}</p>
    @endif
    @yield('content')
  </main>

  <!-- FOOTER -->
  <footer class="footer">HDC Events &copy; 2022</footer>
</body>
</html>