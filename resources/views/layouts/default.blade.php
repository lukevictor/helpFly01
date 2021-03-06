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
    <?php $pagina = $_SERVER['REQUEST_URI'];?>
    <?php $pagina = explode('/', $pagina);?>

    @if(in_array("compras", $pagina))
      @include('partials.compras.menu')
      @include('partials.compras.sidebar')
    @elseif(in_array('estoque', $pagina))
      @include('partials.estoque.menu')
      @include('partials.estoque.sidebar')
    @elseif(in_array('financeiro', $pagina) )
      @include('partials.financeiro.menu')
      @include('partials.financeiro.sidebar')
    @elseif(in_array('faturamento', $pagina) )
      @include('partials.faturamento.menu')
      @include('partials.faturamento.sidebar')
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
