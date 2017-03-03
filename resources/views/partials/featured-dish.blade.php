<div class="col-xs-8 col-lg-4 col-md-4 text-center">

	<h2>{{ $item->name }}</h2>

    @if (\Storage::disk('s3')->exists('items/' . $item->slug . '.png'))

        <img src="//{{ env('AWS_BUCKET') }}.s3.amazonaws.com/items/{{ $item->slug }}.png" width="200">

    @endif

    <p>
		{{ $item->description }}
	</p>

	<p>
		<a class="btn btn-default" role="button" data-toggle="modal" data-target="#{{ $item->slug }}">Order now for just ${{ $item->price }} &raquo;</a>
	</p>

</div>
@include('partials.modal')