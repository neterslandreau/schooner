  <h2>Breakfasts</h2>
  <div class="list-group">
    @foreach ($breakfastItems as $item)

    @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

        <?php $item->image = '/storage/items/'.$item->slug.'.png'; ?>

    @endif

        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">
            <img height="25" src="{{ $item->image }}"> {{ $item->name }} ${{ $item->price }}
        </a>

    @endforeach

  </div>

  <h2>Lunches</h2>
  <div class="list-group">
    @foreach ($lunchItems as $item)

    @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

        <?php $item->image = '/storage/items/'.$item->slug.'.png'; ?>

    @endif

        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">
            <img height="25" src="{{ $item->image }}"> {{ $item->name }} ${{ $item->price }}
        </a>

    @endforeach
  </div>

  <h2>Smoothies</h2>
  <div class="list-group">
    @foreach ($smoothies as $item)
    @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

        <?php $item->image = '/storage/items/'.$item->slug.'.png'; ?>

    @endif

        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">
            <img height="25" src="{{ $item->image }}"> {{ $item->name }} ${{ $item->price }}
        </a>

        @include('partials.modal')
    @endforeach
  </div>

  <h2>Beverages</h2>
  <div class="list-group">
    @foreach ($drinks as $item)
    @if (\File::exists(public_path().'/storage/items/'.$item->slug.'.png'))

        <?php $item->image = '/storage/items/'.$item->slug.'.png'; ?>

    @endif

        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">
            <img height="25" src="{{ $item->image }}"> {{ $item->name }} ${{ $item->price }}
        </a>

        @include('partials.modal')
    @endforeach
  </div>

