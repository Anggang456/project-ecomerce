@extends('layouts.header') 
@section('content')
<section>
        <div class="container py-5">
            <div class="row mx-auto">
                <div class="col">
                    <div data-reflow-type="shopping-cart">
                        <div class="reflow-shopping-cart" style="display: block;">
                            <div class="ref-loading-overlay"></div>
                            <div class="ref-message" style="display: none;"></div>
                            <div class="ref-cart" style="display: block;">
                                <div class="ref-heading">Shopping Cart</div>
                                <div class="ref-th">
                                    <div class="ref-product-col">Product</div>
                                    <div class="ref-price-col">Price</div>
                                    <div class="ref-quantity-col">Quantity</div>
                                    <div class="ref-total-col">Total</div>
                                </div>
                                <div class="ref-cart-table">
                                @foreach($pesanan_details as $details)
                                    <div class="ref-product" data-id="494001057" data-quantity="1" data-variant_id="199976733_s">
                                        <div class="ref-product-col">
                                            <div class="ref-product-wrapper"><img class="ref-product-photo" src="{{ $details->produk->gambar }}" alt="..." />
                                                <div class="ref-product-data">
                                                    <div class="ref-product-info">
                                                        <div>
                                                            <div class="ref-product-name">{{ $details->produk->nama }}</div>
                                                            <div class="ref-product-category">{{ $details->produk->jenis }}</div>
                                                            <div class="ref-product-variants">
                                                                <div class="ref-product-variant">Size: -</div>
                                                            </div>
                                                            <div class="ref-product-personalization-holder"></div>
                                                        </div>
                                                        <div class="ref-product-price ref-mobile-product-price">Rp. {{number_format($details->produk->harga) }}</div>
                                                    </div>
                                                    <!--Mobile responsive remove-->
                                                    <div class="ref-product-controls ref-mobile-product-controls">
                                                        <div class="ref-product-quantity">
                                                            <div class="ref-quantity-container" data-reflow-variant="199976733_m" data-reflow-product="494001057" data-reflow-max-qty="999" data-reflow-quantity="1">
                                                                <div class="ref-quantity-widget">
                                                                    <input type="text" value="1" />
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="ref-product-qty-message"></div>
                                                        </div>
                                                        <div class="ref-product-remove"><svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" viewBox="0 0 48 48">
                                                                <path fill="currentColor" d="M13.05 42q-1.2 0-2.1-.9-.9-.9-.9-2.1V10.5H8v-3h9.4V6h13.2v1.5H40v3h-2.05V39q0 1.2-.9 2.1-.9.9-2.1.9Zm21.9-31.5h-21.9V39h21.9Zm-16.6 24.2h3V14.75h-3Zm8.3 0h3V14.75h-3Zm-13.6-24.2V39Z"></path>
                                                            </svg></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ref-price-col">
                                            <div class="ref-product-price">Rp. {{number_format($details->produk->harga) }}</div>
                                        </div>
                                        <div class="ref-price-col mx-auto">
                                            <div class="ref-product-price">{{number_format($details->jumlah) }}x</div>
                                        </div>
                                        <div class="ref-total-col">
                                            <div class="ref-product-total">
                                                <div class="ref-product-total-sum">Rp. {{number_format($details->produk->harga) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                                <div class="ref-footer">
                                    <div class="ref-links"><a href="https://google.com" target="_blank">Terms &amp; Conditions</a><a href="https://google.com" target="_blank">Privacy Policy</a><a href="https://google.com" target="_blank">Refund Policy</a></div>
                                    <div class="ref-totals">
                                        <div class="ref-subtotal">Subtotal: Rp. {{number_format($details->jumlah_harga ?? '0') }}</div>
                                        <form class="ref-accept-terms" style="display: block;"><label>
                                            <input id="ref-terms-agreement" type="checkbox" data-state-src="accept-terms" required />
                                            <span class="ref-terms-agreement-text">
                                                <span>I agree to the </span>
                                                <a href="https://google.com">Terms &amp; Conditions</a>
                                                <span>, </span><a href="https://google.com">Privacy Policy</a>
                                                <span> and </span><a href="https://google.com">Refund Policy</a>
                                            </span>
                                        </label>
                                        </form>
                                        <div class="ref-row ref-checkout-buttons">
                                            <a class="btn btn-outline-primary" id="pay-button" href="#">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-d8KKygIlxas7LqVb"></script>
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

      
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
         console.log(result);
          send_response_to_form(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
          console.log(result);
          send_response_to_form(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
        console.log(result);
          send_response_to_form(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
    
    function send_response_to_form(result) {
        document.getElementById('json_callback').value = JSON.stringify(result);
        $('#submit_form').submit();
    }
</script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@endsection