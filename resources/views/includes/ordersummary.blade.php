<div class="col-lg-4">
    <div class="block mb-5">
        <div class="block-header">
            <h3 class="text-uppercase mb-0"><strong>Order Summary</strong></h3>
        </div>
        <div class="block-body bg-light pt-1">
            <p class="text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="order-summary mb-0 list-unstyled">
                <li class="order-summary-item">
                    <span>Order Subtotal</span><span>{{Cart::subtotal()}}</span></li>
                <li class="order-summary-item"><span>Shipping and handling</span><span>€0.00</span></li>
                <li class="order-summary-item"><span>Tax</span><span>{{Cart::tax()}}</span></li>
                <li class="order-summary-item border-0"><span>Total</span><strong
                        class="order-summary-total">{{Cart::total()}}</strong></li>
            </ul>
        </div>
    </div>
</div>
