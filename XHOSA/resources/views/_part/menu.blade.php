<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation" style="background-color: #fff">
<div class="container" ng-app="commentApp" ng-controller="mainController">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
    <i class="fa fa-bars"></i>
    </button>

    <a class="navbar-brand page-scroll" id="Logo" href="#" style="padding:1px">
      <img src="{{ asset('img/xhosa.png') }}" alt="" height="45" width="200">
    </a>

  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    <ul class="nav navbar-nav">
      <li>
      <a href="{{ route('noticias.index') }}" >Home</a>
      </li>
      <li>
      <a href="page-sample.html">Nosotros</a>
      </li>
      <li>
      <a href="contact.html">Contacto</a>
      </li>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>