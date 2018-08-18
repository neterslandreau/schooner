<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cart">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="">Cart</h4>

			</div>

			<div class="modal-body">


			@include('partials.cart.body')


			</div>

			<div class="modal-footer">

			<form id="post-process" method="post" action="/process">

				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				@if (\Cart::total())
				<button id="checkoutButton" type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#checkout">Pay in Store</button>

				<button id="payByCard" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#checkoutcc">Pay by Card</button>

				</script>

				@endif

			</form>

			</div>

		</div>

	</div>

</div>
<div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="">Checkout</h4>

			</div>

		<!-- @include ('layouts.errors') -->
		<form method="post" action="/checkout">

			<div class="modal-body">

				{{ csrf_field() }}

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control required" id="name" name="name">
				</div>

				<div class="form-group">
					<label for="phone">Phone</label>
					<div class="tel">
					<input id="phone" name="phone" class="form-control required">
					</div>
				</div>

			</div>

			<div class="modal-footer">

				<button type="submit" class="btn btn-primary">Place Order</button>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-target="#cart" data-toggle="modal">Return to Cart</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>

		</form>

		</div>

	</div>

</div>
<div class="modal fade" id="checkoutcc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="">Checkout</h4>

			</div>

		<!-- @include ('layouts.errors') -->
		<form method="post" action="/process">

			<div class="modal-body">

				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control required" id="name" name="name">
				</div>

				<div class="form-group">
					<label for="phone">Phone</label>
					<div class="tel">
					<input id="phone" name="phone" class="form-control required">
					</div>
				</div>

<!-- 
				<div class="form-group">
                    <label for="cnumber">Card Number</label>
                    <input type="text" class="form-control" id="cnumber" name="cnumber" placeholder="Enter Card Number">
                </div>

                <div class="form-group">
                  <label for="card-expiry-month">Expiration Month</label>
                  {{ Form::selectMonth(null, null, ['name' => 'card_expiry_month', 'class' => 'form-control', 'required']) }}
                </div>

                <div class="form-group">
                  <label for="card-expiry-year">Expiration Year</label>
                  {{ Form::selectYear(null, date('Y'), date('Y') + 10, null, ['name' => 'card_expiry_year', 'class' => 'form-control', 'required']) }}
                </div>

                <div class="form-group">
                    <label for="ccode">Card Code</label>
                    <input type="text" class="form-control" id="ccode" name="ccode" placeholder="Enter Card Code">
                </div>

                <div class="form-group">
                    <label for="camount">Amount</label>
                    <input type="text" class="form-control" id="camount" name="camount" placeholder="Enter Amount" >
                </div>
 -->
 			<div style="text-align:right">
				<script
					src="https://checkout.stripe.com/checkout.js" class="stripe-button"
					data-key="pk_test_L78ulCkylxUyYs8sshJtdrww"
					data-amount="999"
					data-name="dev"
					data-zip-code="true"
					data-description="Example charge"
					data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
					data-locale="auto">
				</script>
			</div>

			</div>

			<div class="modal-footer">

				<!-- <button type="submit" class="btn btn-primary">Place Order</button> -->
				<button type="button" class="btn btn-default" data-dismiss="modal" data-target="#cart" data-toggle="modal">Return to Cart</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>

		</form>

		</div>

	</div>

</div>
