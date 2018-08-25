<aside id="sidebar-offcanvas">
<h6><b>Breakfasts</b></h6>
<div class="list-group">
@foreach ($breakfastItems as $item)

    <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">

        <div class="col-xs-10 col-md-12">

        @if (Storage::disk('local')->exists('public/items/' . $item->slug . '.png'))

            <img class="img-rounded center-block" src="/img/small/{{ $item->slug }}.png">

        @endif

        </div>
        {{ $item->name }} {{ $item->price }}

    </a>

    @include('partials.modal')

@endforeach
</div>

<h6><b>Lunches</b></h6>
<div class="list-group">
@foreach ($lunchItems as $item)

    <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">

        <div class="col-xs-10 col-md-12">

        @if (Storage::disk('local')->exists('public/items/' . $item->slug . '.png'))

            <img class="img-rounded center-block" src="/img/small/{{ $item->slug }}.png">

        @endif

        </div>
        {{ $item->name }} {{ $item->price }}

    </a>

    @include('partials.modal')

@endforeach

</div>

<h6><b>Smoothies</b></h6>
<div class="list-group">

@foreach ($smoothies as $item)

    <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">

        <div class="col-xs-15 col-md-12">

        @if (Storage::disk('local')->exists('public/items/' . $item->slug . '.png'))

            <img class="img-rounded center-block" src="/img/small/{{ $item->slug }}.png">

        @endif

        </div>

        {{ $item->name }} {{ $item->price }}

    </a>

    @include('partials.modal')

@endforeach

</div>

<h6><b>Beverages</b></h6>
<div class="list-group">

@foreach ($drinks as $item)

    <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">

        <div class="col-xs-10 col-md-12">

        @if (Storage::disk('local')->exists('public/items/' . $item->slug . '.png'))

            <img class="img-rounded center-block" src="/img/small/{{ $item->slug }}.png">

        @endif

        </div>
       {{ $item->name }} {{ $item->price }}

    </a>

    @include('partials.modal')

@endforeach

</div>
</aside>
