<?php $items = \Cart::all(); ?>
<table class="table table-hover table-responsive">
<tbody id="cartBody">

@if (count($items))

    @foreach ($items as $item)

        @include('partials.cart.item')

    @endforeach

    <tr id="cartRow">
    	<td colspan="2">
    	<label>Cart total:</label>
    	</td>
    	<td colspan="1" id="cartTotal">
    		<label>${{ number_format(\Cart::total(), 2) }}</label>
    	</td>
    </tr>

@else

    <tr id="cartRow">
    	<td colspan="4">
    	Your cart is empty.
    	</td>
    </tr>

@endif

</tbody>
</table>
