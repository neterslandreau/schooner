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
                <button id="checkoutButton" type="button" class="btn btn-primary" data-dismiss="modal">Checkout</button>

            </div>

        </div>

    </div>

</div>
