<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{ route('home') }}"><img id="logo" src="https://www.mopar.com/etc/designs/mopar/images/header/logos/header_mopar_logo_text.png" alt=""></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text">PartsShop</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="#">Conocenos</a></li>
        <li><a href="#">Contacto</a></li>
        @include('store.partials.menu-user')
      </ul>
    </div>
  </div>
</nav>