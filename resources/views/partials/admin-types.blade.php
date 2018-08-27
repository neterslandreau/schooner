<?php
	$requiredTypes = ['breakfast', 'lunch', 'drinks', 'smoothies'];
?>
<table class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<td>Name</td>
			<td>Description</td>
			<td>Order</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>

	@foreach ($types as $type)

		<tr>
			<td>{{ $type->name }}</td>
			<td>{{ $type->description }}</td>
			<td>{{ $type->order }}</td>
            <td><a class="glyphicon glyphicon-pencil nav-link" href="/types/{{ $type->slug }}/edit" role="button"><span></span></a></td>
            @if (in_array($type->slug, $requiredTypes))
	            <td><a class="glyphicon glyphicon-trash nav-link" href="/types/{{ $type->slug }}/delete" role="button" onClick="return confirm('Are you absolutely sure? The site will break if this is deleted!')"><span></span></a></td>
	         @else
	            <td><a class="glyphicon glyphicon-trash nav-link" href="/types/{{ $type->slug }}/delete" role="button" onClick="return confirm('Are you absolutely sure?')"><span></span></a></td>
            @endif
		</tr>

	@endforeach

		<tr>
			<td colspan=5 align=center>
				<a class="glyphicon glyphicon-plus nav-link" href="/types/create" role="button"><span>Add</span></a>
			</td>
		</tr>

	</tbody>

</table>
