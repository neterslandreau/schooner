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

	 			<div style="text-align:right">
					<script
						src="https://checkout.stripe.com/checkout.js" class="stripe-button"
						data-key="pk_test_L78ulCkylxUyYs8sshJtdrww"
						data-amount="{{ \Cart::total() * 100 }}"
						data-name="dev"
						data-zip-code="true"
						data-description="Restaurant Food"
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
