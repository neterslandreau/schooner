@if( 
	in_array(
	$item->slug, [
		'daily-special-7-days-a-week-until-2-00-pm',
		'2-2-2',
		'4-x-2'
	])
	||
	in_array(
	$item->type->slug, [
		{{-- 'daily-special-7-days-a-week-until-2-00-pm',--}}
		'breakfast'
	]) )

<div class="form-group">
	<label for="notes">How would like your order cooked?</label> {{-- $item->type->slug --}} {{-- $item->slug --}}

	<input id="{{ $item->slug }}_notes" name="{{ $item->slug }}_notes">

</div>

@endif
