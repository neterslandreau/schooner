<nav class="navbar navbar-fixed-top navbar-inverse">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>

      <a class="navbar-brand" href="/">David's Diner</a>

    </div>

    <div id="navbar" class="collapse navbar-collapse">

      <ul class="nav navbar-nav">
        <li class="active"><a title="Home" href="/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a title="About" data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-info-sign"></span></a></li>
        <li><a title="Contact" data-toggle="modal" data-target="#contact"><span class="glyphicon glyphicon-phone"></span></a></li>
        <li><a title="Shopping Cart" data-toggle="modal" data-target="#cart"><span class="glyphicon glyphicon-shopping-cart"><span class="badge badge-notify"></span></span></a></li>
      </ul>

    </div>
  </div>
</nav>
@include('partials.about')

@include('partials.cart')

@include('partials.contact')

