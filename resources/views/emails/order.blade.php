Phone: {{ $phone }}

{{ $name }} placed this order:

@foreach ($items as $item)
{{ $item->qty }} - {{ $item->name }}
at a cost of ${{ $item->price }} each
@endforeach

The order total is ${{ $item->total }}
