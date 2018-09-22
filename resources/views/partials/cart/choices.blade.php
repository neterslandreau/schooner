	@if(
	in_array($item->slug, [
		'daily-special-7-days-a-week-until-2-00-pm',
		'bagel',
		'bagel-w-cream-cheese',
		'2-2-2',
		'4-x-2',
		'western',
		'half-order-with-meat',
		'steak-or-chicken',
	])
	||
	in_array($item->type->slug, [
		'breakfast',
		'smoothies',
		'chicken-wings',
		'lunch-sandwiches',
	])
	)

	<label for "notes">Select your choices</label> {{-- $item->type->slug --}} {{-- $item->slug --}}

	@endif

	@if ($item->slug === 'daily-special-7-days-a-week-until-2-00-pm' || $item->slug === '2-2-2' || $item->slug === '4-x-2' || $item->type->slug === 'breakfast')
	{{-- Breakfast Egg Platters --}}

		@if ($item->slug == 'w-bacon-sausage-links-or-ham')

			<div class="form-group"><span style="padding:right: 5px;"><b>Meat:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_sausage" name="meats" value="suasage">Sausage Links</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_ham" name="meats" value="ham">Ham</label>

			</div>

		@elseif ($item->slug === '2-2-2')

			<div class="form-group"><span style="padding:right: 5px;"><b>Meat:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_sausage" name="meats" value="suasage">Sausage Links</label>

			</div>

		@endif

			<div class="form-group"><span style="padding:right: 5px;"><b>Side:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_hashbrowns" name="sides" value="hashbrown">Hash Browns</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_homefries" name="sides" value="homefries">Home Fries</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_grits" name="sides" value="grits">Grits</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_tomatoes" name="sides" value="tomatoes">Sliced Tomatoes</label>

			</div>

			<div class="form-group"><span style="padding:right: 5px;"><b>Bread:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_toast" name="bread" value="toast">Toast</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_biscuit" name="bread" value="biscuit">Biscuit</label>

			</div>

	@elseif ($item->slug === 'bagel-w-cream-cheese' || $item->slug === 'bagel')

		<div class="form-group">

			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_plain" name="bread" value="plain">Plain</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_everything" name="bread" value="everything">Everything</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_garlic" name="bread" value="garlic">Garlic</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_cinnamonraison" name="bread" value="cinnamonraison">Cinnamon Raison</label>

		</div>

	@elseif ($item->type->slug === 'smoothies') {{-- Breakfast Omlettes --}}

			<div class="form-group"><span style="padding:right: 5px;"><b>Side:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_hashbrowns" name="sides" value="hashbrown">Hash Browns</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_pickles" name="sides" value="grits">Grits</label>

			</div>

			<div class="form-group"><span style="padding:right: 5px;"><b>Bread:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_toast" name="bread" value="toast">Toast</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_biscuit" name="bread" value="biscuit">Biscuit</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_english-muffin" name="bread" value="english-muffin">English Muffin</label>

			</div>

			@if ($item->slug === 'ham-bacon-or-sausage-cheese')

			<div class="form-group"><span style="padding:right: 5px;"><b>Meat:</b></span>

				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_sausage" name="meats" value="suasage">Sausage Links</label>
				<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_ham" name="meats" value="ham">Ham</label>

			</div>

			@endif

	@endif

	@if ($item->type->slug === 'sandwiches')

	<div class="form-group"><span style="padding:right: 5px;"><b>Extras:</b></span>

		<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_bagel" name="meats" value="bagel">Bagel</label>
		<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_cheese" name="meats" value="cheese">Cheese</label>

	</div>

	@endif

	@if ($item->type->slug === 'chicken-wings')

		<div class="form-group" style="padding-left: 10px;">

			@php

				$cwtypes = [
					'mild',
					'medium',
					'hot',
					'bbq',
					'teriyaki',
					'mango habanero',
					'garlic',
					'garlic parmesan',
				];

			@endphp

			@foreach ($cwtypes as $cw => $typ)

			@if (!($cw % 4 ))

			<div class="row">

			@endif

			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_{{ $typ }}" name="{{ $item->type->slug }}" value="{{ $typ }}">{{ ucfirst($typ) }}</label>

			@if ($cw % 4 == 3)

			</div>

			@endif

			@endforeach



		</div>

	@endif

	@if ($item->slug === 'half-order-with-meat' || $item->slug === 'half-order-with-eggs-and-meat' || $item->slug === 'meat')

		<div class="form-group"><span style="padding:right: 5px;"><b>Meat:</b></span>

			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_sausage" name="meats" value="suasage">Sausage Links</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_ham" name="meats" value="ham">Ham</label>

		</div>

	@endif

	@if ($item->slug === 'breakfast-egg-platter')

		<div class="form-group"><span style="padding:right: 5px;"><b>Meat:</b></span>

			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_sausage" name="meats" value="suasage">Sausage Links</label>

		</div>

	@endif

	@if ($item->type->slug === 'lunch-sandwiches')

		@if ($item->slug === 'grilled-cheese-1')

			<div class="form-group"><span style="padding:right: 5px;"><b>Extras:</b></span>

				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_tomato" name="meats" value="tomato">Tomato</label>

			</div>

		@elseif ($item->slug === 'chicken-sandwich')

			<div class="form-group"><span style="padding:right: 5px;"><b>Extras:</b></span>

				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_bacon" name="meats" value="bacon">Bacon</label>
				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_cheese" name="meats" value="cheese">Cheese</label>

			</div>

		@endif

		<div class="form-group"><span style="padding:right: 5px;"><b>Side:</b></span>

			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_frenchfries" name="sides" value="french-fries">French Fries</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_onionrings" name="sides" value="onion-rings">Onion Rings</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_coleslaw" name="sides" value="cole-slaw">Cole Slaw</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_beansalad" name="sides" value="bean-salad">Bean Salad</label>

		</div>

	@endif

	@if ($item->type->slug === 'dinner-entrees')

		<div class="form-group"><span style="padding:right: 5px;"><b>Side:</b></span>

			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_frenchfries" name="sides" value="french-fries">French Fries</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_onionrings" name="sides" value="onion-rings">Onion Rings</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_coleslaw" name="sides" value="cole-slaw">Cole Slaw</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_beansalad" name="sides" value="bean-salad">Bean Salad</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_greenbeans" name="sides" value="green-beans">Green Beans</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_redsmashedpotatoes" name="sides" value="red-smashed-potatoes">Red Smashed Potatoes</label>

		</div>

		<div class="form-group"><span style="padding:right: 5px;"><b>Extras:</b></span>

			<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_redsmashedpotatoes_loaded" name="meats" value="bacon">Red Smahed Potatoes Loaded</label>
			<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_salad" name="meats" value="side-salad">Side Salad</label>
			<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_soup" name="meats" value="cheese">Soup</label>

		</div>

	@endif

	@if ($item->slug === 'steak-or-chicken')

		<div class="form-group"><span style="padding:right: 5px;"><b>Choice:</b></span>

			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_steak" name="sides" value="steak">Steak</label>
			<label class="radio-inline"><input type="radio" id="{{ $item->slug }}_extra_chicken" name="sides" value="chicken">Chicken</label>

		</div>

	@endif

	@if ($item->slug === 'sampler')

		<div class="form-group"><span style="padding:right: 5px;"><b>Select 4:</b></span>

			<form id="sampler" name="sampler">
				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_friedmozzarella_sampler" name="meats" value="fried-mozzarella">Fried Mozzarella</label>
				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_chipssalsa_sampler" name="meats" value="chips-salsa">Chips & Salsa</label>
				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_calamari_sampler" name="meats" value="calamari">Calamari</label>
				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_conchfritters_sampler" name="meats" value="conch-fritters">Conch Fritters</label>
				<label class="checkbox-inline"><input type="checkbox" id="{{ $item->slug }}_extra_potatoskins_sampler" name="meats" value="potato-skins">Potato Skins</label>
			</form>

		</div>

	@endif