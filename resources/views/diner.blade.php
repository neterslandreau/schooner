@extends('layouts.diner-layout')

@section('content')

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">

          <p class="pull-right visible-xs">

            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle Menu</button>

          </p>

          @include('partials.jumbotron')

          <div class="row">

          <?php for($x = 0; $x < 3; $x++) : ?>

            @include('partials.featured-dish')

          <?php endfor; ?>
 
          </div>

        </div>

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

        @include('partials.sidebar')

        </div>

      </div>

      <hr>
@endsection