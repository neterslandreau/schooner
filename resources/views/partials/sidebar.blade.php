  <h2>Breakfasts</h2>
  <div class="list-group">
    @foreach ($breakfastItems as $item)

        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">


    @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

        <?php $item->image = '/storage/items/'.$item->slug.'.png'; ?>

        <img height="25" src="{{ $item->image }}"> {{ $item->name }} ${{ $item->price }}

    @else

    {{ $item->name }} {{ $item->price }}

    @endif


    @endforeach

        </a>

  </div>

  <h2>Lunches</h2>
  <div class="list-group">
    @foreach ($lunchItems as $item)

        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">


    @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

        <?php $item->image = '/storage/items/'.$item->slug.'.png'; ?>

        <img height="25" src="{{ $item->image }}"> {{ $item->name }} ${{ $item->price }}

    @else

    {{ $item->name }} {{ $item->price }}

    @endif


    @endforeach

        </a>
  </div>

  <h2>Smoothies</h2>
  <div class="list-group">
    @foreach ($smoothies as $item)
        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">


    @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

        <?php $item->image = '/storage/items/'.$item->slug.'.png'; ?>

        <img height="25" src="{{ $item->image }}"> {{ $item->name }} ${{ $item->price }}

    @else

    {{ $item->name }} {{ $item->price }}

    @endif


    @endforeach

        </a>
  </div>

  <h2>Beverages</h2>
  <div class="list-group">
    @foreach ($drinks as $item)
        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">


    @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

        <?php $item->image = '/storage/items/'.$item->slug.'.png'; ?>

        <img height="25" src="{{ $item->image }}"> {{ $item->name }} ${{ $item->price }}

    @else

    {{ $item->name }} {{ $item->price }}

    @endif


    @endforeach

        </a>
  </div>

