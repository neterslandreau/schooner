<div id="menuItems">

@php

	$x = 1;

@endphp

@foreach ($menuItems as $mi => $menuItem)

	<div class="card" style="margin: -11px">

		<div id="heading{{ $x }}">

			<a href="#{{ $menuItems[$mi]->typeSlug }}" data-parent="#menuItems" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="{{ $menuItems[$mi]->typeSlug }}" class="btn btn-success collapsed" style="width: 100%;">{{ $menuItems[$mi]->typeName }}</a>

		</div>

	</div>

	<div class="panel" style="margin: 11px">

		<div id="{{ $menuItems[$mi]->typeSlug }}" class="item collapse" aria-labelledby="heading{{ $x }}" data-parent="#menuItems">

		@include('partials.sidebar-items')

		</div>

	</div>

@php

	$x++;

@endphp

@endforeach

</div>
