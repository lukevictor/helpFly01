
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    @include('partials.styles')
    @yield('extrastyle')

</head>

<body>
  <header>
    <?php $pagina = $_SERVER['PHP_SELF'];?>

    @if(strpos($pagina, 'index.php/financeiro'))
      @include('partials.financeiro.menu')
      @include('partials.financeiro.sidebar')
    @elseif(strpos($pagina, 'index.php/faturamento'))
      @include('partials.faturamento.menu')
      @include('partials.faturamento.sidebar')
    @elseif(strpos($pagina, 'index.php/compras'))
      @include('partials.compras.menu')
      @include('partials.compras.sidebar')
    @elseif(strpos($pagina, 'index.php/estoque'))
      @include('partials.estoque.menu')
      @include('partials.estoque.sidebar')
    @endif
  </header>
  <main style="height: 1500px;">
        @yield('content')
  </main>

@include('partials.modal')

  <footer>
    @include('partials.footer')
    @include('partials.scripts')
    @yield('extrascript')
    @yield('footer')
  </footer>
</body>

</html>
