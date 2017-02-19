  <h2>Breakfasts</h2>
  <div class="list-group">
    @foreach ($breakfastItems as $item)
        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">{{ $item->name }} ${{ $item->price }}</a>
    @endforeach
  </div>

  <h2>Lunches</h2>
  <div class="list-group">
    @foreach ($lunchItems as $item)
        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">{{ $item->name }} ${{ $item->price }}</a>
    @endforeach
  </div>

  <h2>Smoothies</h2>
  <div class="list-group">
    @foreach ($smoothies as $item)
        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">{{ $item->name }} ${{ $item->price }}</a>
        @include('partials.modal')
    @endforeach
  </div>

  <h2>Beverages</h2>
  <div class="list-group">
    @foreach ($drinks as $item)
        <a class="list-group-item" data-toggle="modal" data-target="#{{ $item->slug }}">{{ $item->name }} ${{ $item->price }}</a>
        @include('partials.modal')
    @endforeach
  </div>

