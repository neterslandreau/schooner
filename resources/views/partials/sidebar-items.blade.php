<div class="list-group">

	@foreach ($menuItem as $mi => $item)

    <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">

        <div class="col-xs-10 col-md-12">

        @if (Storage::disk('local')->exists('public/items/' . $item->slug . '.png'))

            <!-- <img class="img-rounded center-block" src="/img/small/{{ $item->slug }}.png"> -->

        @endif

        </div>
        {{ $item->name }} <span class="pull-right">${{ $item->price }}</span>

    </a>

    @include('partials.modal')

	@endforeach

</div>