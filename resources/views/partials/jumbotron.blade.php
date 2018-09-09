<div id="jumbotron" class="jumbotron" style="background-color: inherit; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">

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

	<hr style="border: 1px solid #e0e0e0;">

</div>
