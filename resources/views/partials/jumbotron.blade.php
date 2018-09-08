<div id="jumbotron">

	@if (!$agent->isMobile())

		<div class="col-md-5">

	@else

		<div class="col-md-3">

	@endif

		<img class="img-rounded block-center" src="/img/schooner.jpg" style="width: 100%;">

	</div>

	@if (!$agent->isMobile())

		<div class="col-md-7">

		<!-- @include('partials.info.contact') -->

	@else

		<div class="col-md-9">

	@endif

		<div id="map_canvas" style="width: 100%; height: 170px;"></div>

	</div>

</div>
