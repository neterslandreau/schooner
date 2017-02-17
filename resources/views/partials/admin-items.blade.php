<table class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<td>Menu Type</td>
			<td>Name</td>
			<td>Description</td>
			<td>Price</td>
			<td>Featured</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>
		@foreach ($items as $item)
		<tr>
			<td>{{ $item->type->name }}</td>
			<td>{{ $item->name }}</td>
			<td>{{ $item->description }}</td>
			<td>${{ $item->price }}</td>
			<td>{{ ($item->featured) ? 'Yes' : 'No' }}</td>
            <td><a class="glyphicon glyphicon-pencil nav-link" href="/items/{{ $item->slug }}/edit" role="button"><span></span></a></td>
            <td><a class="glyphicon glyphicon-trash nav-link" href="/items/{{ $item->slug }}/delete" role="button"><span></span></a></td>
		</tr>
		@endforeach

		<tr>
			<td colspan=7 align=center>
				<a class="glyphicon glyphicon-plus nav-link" href="/items/create" role="button"><span>Add</span></a>
			</td>
		</tr>

	</tbody>

</table>
