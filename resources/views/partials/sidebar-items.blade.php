<div class="list-group">

	@foreach ($menuItem as $mi => $item)

    <a href="#" class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">{{ $item->name }} <span class="pull-right">${{ $item->price }}</span></a>

    @include('partials.modal')

	@endforeach

</div>