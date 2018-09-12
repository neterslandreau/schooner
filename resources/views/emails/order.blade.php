<div>
Phone: {{ $phone }}
</div>

<div>
{{ $name }} placed this order:
</div>

@foreach ($items as $item)
<div>
{{ $item->qty }} - {{ $item->name }}<br>
With: {{ $item->notes[1] }}<br>
Comments: {{ $item->notes[0] }}
</div>
<br>
@endforeach

<div>
The order total is ${{ number_format(\Cart::total(), 2) }}
</div>
