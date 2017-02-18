  <h2>Breakfasts</h2>
  <div class="list-group">
    @foreach ($breakfastItems as $item)
        <a href="#" class="list-group-item">{{ $item->name }} ${{ $item->price }}</a>
    @endforeach
  </div>

  <h2>Lunches</h2>
  <div class="list-group">
    @foreach ($lunchItems as $item)
        <a href="#" class="list-group-item">{{ $item->name }} ${{ $item->price }}</a>
    @endforeach
  </div>

  <h2>Smoothies</h2>
  <div class="list-group">
    @foreach ($smoothies as $item)
        <a href="#" class="list-group-item">{{ $item->name }} ${{ $item->price }}</a>
    @endforeach
  </div>

  <h2>Drinks</h2>
  <div class="list-group">
    @foreach ($drinks as $item)
        <a href="#" class="list-group-item">{{ $item->name }} ${{ $item->price }}</a>
    @endforeach
  </div>

