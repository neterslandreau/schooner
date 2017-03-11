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
	@if (in_array($item->type->slug, ['lunch', 'breakfast']))
	<td>
		<label for "notes">How do you want that?</label>
		<input name="notes" id="notes_{{ $item->__raw_id }}" value="{{ $item->notes }}">
	</td>
	@endif
<!-- 	<td>
		<button id="update_{{ $item->__raw_id }}" class="btn btn-default" title="Update Quantity" type="button" value="update">
			<span class="glyphicon glyphicon-save"></span>
		</button>
	</td>
 -->	<td>
		<button id="remove_{{ $item->__raw_id }}" class="btn btn-default" title="Remove Item" type="button" value="remove">
			<span class="glyphicon glyphicon-remove"></span>
		</button>
	</td>
</tr>
