<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">

		@for ($x = 0; $x < count($featuredItems); $x++)

			<li data-target="#myCarousel" data-slide-to="{{ $x }}" @if (!$x) class="active" @endif></li>

		@endfor

	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">

		@foreach ($featuredItems as $i => $item)

		<div class="item @if(!$i) active @endif">

		@if (Storage::disk('local')->exists('public/items/' . $item->slug . '.png'))

			<img class="img-rounded center-block" src="/img/large/{{ $item->slug }}.png">

	    @else

	    	<img class="img-rounded center-block" src="/img/empty.png" style="width: 100%; height: 360px;">

	    @endif


			<div class="carousel-caption">

				<h4><b>{{ $item->name }}</b></h4>

				{!! $item->description !!}

				<p>
					<a class="btn btn-default" role="button" data-toggle="modal" data-target="#{{ $item->slug }}">Order now! &raquo;</a>
				</p>

			</div>


		</div>

		@endforeach

	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</div>
@include('partials.modal')