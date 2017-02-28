<div class="col-xs-8 col-lg-4 col-md-4 text-center">

	<h2>{{ $item->name }}</h2>

    @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

            <img height="125" src="/storage/items/{{ $item->slug }}.png">

    @endif

    <p>
		{{ $item->description }}
	</p>

	<p>
		<a class="btn btn-default" role="button" data-toggle="modal" data-target="#{{ $item->slug }}">Order now for just ${{ $item->price }} &raquo;</a>
	</p>

</div>
@include('partials.modal')