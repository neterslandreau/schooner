<tr id="row_{{ $item->__raw_id }}">
	<td>
		<label>{{ $item->name }}</label>
	</td>
	<td>
	<label for "qty">Qty</label>
        <select id="qty_{{ $item->__raw_id }}">
        @for ($x = 1; $x <= 10; $x++)
            <option value="{{ $x }}" @if ($item->qty == $x) selected @endif>{{ $x }}</option>
        @endfor
        </select>
	</td>
	<td>
		@if (!empty($item->notes['extras']))
		{{ $item->notes['extras'] }}
		@endif
	</td>
	<td>
		{{ $item->notes['comments'] }}
	</td>

	

	


	<td>
		<button id="remove_{{ $item->__raw_id }}" class="btn btn-default" title="Remove Item" type="button" value="remove">
			<span class="glyphicon glyphicon-remove"></span>
		</button>
	</td>
</tr>
