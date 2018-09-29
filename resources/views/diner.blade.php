@extends('layouts.diner-layout')

@section('content')
<div id="diner">
	<div class="row row-offcanvas row-offcanvas-right">

		<div class="col-xs-12 col-sm-9 col-md-9">

			<p class="pull-right visible-xs">

			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle Menu</button>

			</p>

				@include('partials.jumbotron')
			
			<h3 class="text-center">Today's Specials</h3>

			<div class="row">

				<div class="col-xs-3"></div>

				<div class="col-xs-6">

					@include('partials.specials-carousel')

				</div>

				<div class="col-xs-3"></div>

			</div>

		</div>

	<div class="col-xs-8 col-sm-3 col-md-3 sidebar-offcanvas" id="sidebar">

		@include('partials.sidebar')

	</div>

	</div>

<hr>

</div>

@endsection