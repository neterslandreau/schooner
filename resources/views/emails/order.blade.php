<div>
Phone: {{ $phone }}
</div>

<div>
{{ $name }} placed this order:
</div>

@foreach ($items as $item)
<div>
{{ $item->qty }} - {{ $item->name }}<br>
{{ $item->notes['comments'] }}<br>
{{ $item->notes['extras'] }}
</div>
<br>
@endforeach

<div>
The order total is ${{ number_format(\Cart::total(), 2) }}
</div>
