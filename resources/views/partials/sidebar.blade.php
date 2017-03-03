<h2>Breakfasts</h2>
<div class="list-group">
@foreach ($breakfastItems as $item)

    <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">

        @if (\Storage::disk('s3')->exists('items/' . $item->slug . '.png'))

        <div class="col-md-12">
            <img src="//diner.think-knot.com.s3.amazonaws.com/items/{{ $item->slug }}.png" width="175">
        </div>

        @endif

        {{ $item->name }} {{ $item->price }}

    </a>

@endforeach
</div>

<h2>Lunches</h2>
<div class="list-group">
@foreach ($lunchItems as $item)

    <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">

        @if (\Storage::disk('s3')->exists('items/' . $item->slug . '.png'))

        <div class="col-md-12">
            <img src="//diner.think-knot.com.s3.amazonaws.com/items/{{ $item->slug }}.png" width="175">
        </div>

        @endif

        {{ $item->name }} {{ $item->price }}

    </a>

@endforeach

</div>

<h2>Smoothies</h2>
<div class="list-group">

@foreach ($smoothies as $item)

    <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">

        @if (\Storage::disk('s3')->exists('items/' . $item->slug . '.png'))

        <div class="col-md-12">
            <img src="//diner.think-knot.com.s3.amazonaws.com/items/{{ $item->slug }}.png" width="175">
        </div>

        @endif

        {{ $item->name }} {{ $item->price }}

    </a>

@endforeach

</div>

<h2>Beverages</h2>
<div class="list-group">

@foreach ($drinks as $item)

    <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">

        @if (\Storage::disk('s3')->exists('items/' . $item->slug . '.png'))

        <div class="col-md-12">
            <img src="//diner.think-knot.com.s3.amazonaws.com/items/{{ $item->slug }}.png" width="175">
        </div>

        @endif

       {{ $item->name }} {{ $item->price }}

    </a>

@endforeach

</div>

