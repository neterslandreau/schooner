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

      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>

    </div>

    <div id="navbar" class="collapse navbar-collapse">

      <ul class="nav navbar-nav">

        <li class="active">
            <a title="Home" href="/">
                <span class="glyphicon glyphicon-home col-sm-1"></span>
                <span class="col-sm-2">Home</span>
            </a>
        </li>

        <li>
            <a title="About" data-toggle="modal" data-target="#about">
                <span class="glyphicon glyphicon-info-sign col-sm-1"></span>
                <span class="col-sm-2">About</span>
            </a>
        </li>

        <li>
            <a title="Contact" data-toggle="modal" data-target="#contact">
                <span class="glyphicon glyphicon-phone col-sm-1"></span>
                <span class="col-sm-2">Contact</span>
            </a>
        </li>

        <li>
            <a title="Shopping Cart" data-toggle="modal" data-target="#cart">
                <span class="glyphicon glyphicon-shopping-cart col-sm-1">
                    <span class="badge badge-notify"></span>
                </span>
                <span class="col-sm-2">Cart</span>
            </a>
        </li>

      </ul>

    </div>
  </div>
</nav>
@include('partials.about')

@include('partials.cart')

@include('partials.contact')

