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

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                @if (\Cart::total())
                <button id="checkoutButton" type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#checkout">Checkout</button>
                @endif

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
