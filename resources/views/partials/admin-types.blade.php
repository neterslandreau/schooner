<table class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<td>Name</td>
			<td>Description</td>
			<td>Edit</td>
			<!-- <td>Delete</td> -->
		</tr>
	</thead>
	<tbody>

	@foreach ($types as $type)

		<tr>
			<td>{{ $type->name }}</td>
			<td>{{ $type->description }}</td>
            <td><a class="glyphicon glyphicon-pencil nav-link" href="/types/{{ $type->slug }}/edit" role="button"><span></span></a></td>
            <!-- <td><a class="glyphicon glyphicon-trash nav-link" href="/types/{{ $type->slug }}/delete" role="button"><span></span></a></td> -->
		</tr>

	@endforeach

		<tr>
			<td colspan=4 align=center>
				<a class="glyphicon glyphicon-plus nav-link" href="/types/create" role="button"><span>Add</span></a>
			</td>
		</tr>

	</tbody>

</table>
