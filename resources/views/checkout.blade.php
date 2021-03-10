<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagamento</title>
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
</head>

<body>
    <div class="container">
        <div class="checkout-section">
            <form action="{{ route('course.bought') }}" method="POST" id="payment-form">
                @csrf
                <h2>Detalhes de faturamento</h2>
                <h6 style=font-size:15px;bottom:24px;position:relative;>Por favor, certifique-se de preencher tudo
                    de acordo com as devidas exigências!</h6>
                <input type="hidden" class="form-control" id="course_bought" name="course_bought"
                    value="{{ $buy }}" required>
                <div class="form-group">
                    <label for="email">Endereço de e-mail*</label>
                    <label for="username">Nome de usuário*</label>
                    @if (Auth::user())
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ Auth::user()->email }}" readonly>
                        <input type="hidden" class="form-control" id="username" name="username"
                            value="{{ Auth::user()->username }}" readonly>
                    @else
                        <input type="text" class="form-control" id="username" name="username"
                            value="{{ old('username') }}" required>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                            required>
                    @endif
                </div>
                <div class="form-group">
                    <label for="username">Nome*</label>
                    <input type="text" class="form-control" id="username" name="username"
                        value="{{ old('username') }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Endereço*</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}"
                        required>
                </div>

                <div class="half-form">
                    <div class="form-group">
                        <label for="city">Cidade*</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}"
                            required>
                    </div>
                </div> <!-- end half-form -->

                <div class="half-form">
                    <div class="form-group">
                        <label for="CEP">CEP (sem hífen)*</label>
                        <input type="text" class="form-control" id="CEP" name="CEP" value="{{ old('CEP') }}"
                            required maxlength="11">
                    </div>
                    <div class="form-group">
                        <label for="country">País*</label>
                        <input type="text" class="form-control" id="country" name="country"
                            value="{{ old('country') }}" required>
                    </div>
                </div> <!-- end half-form -->

                <div class="spacer"></div>

                <h2>Detalhes do pagamento</h2>

                <div class="form-group">
                    <label for="name_on_card">Nome do Titular</label>
                    <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                </div>

                <div class="form-group">
                    <label for="card-element">
                        Cartão de crédito ou débito
                    </label>
                    <div id="card-element">
                        <!-- a Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors -->
                    <div id="card-errors" role="alert"></div>
                </div>
                <div class="spacer"></div>

                <button type="submit" id="complete-order" class="button-primary full-width">Finalizar
                    pedido</button>


            </form>

            <div class="checkout-table-container">
                <h2>Seu pedido</h2>
    
                <div class="checkout-table">
                        <div class="checkout-table-row">
                            <div class="checkout-table-row-left">
                                <img src="{{ asset('/images/' . $buy->picture) }}" alt="item"
                                    class="checkout-table-img">
                                <div class="checkout-item-details">
                                    <div class="checkout-table-item" align="right">{{ $buy->name }}</div>
                                    <div class="checkout-table-price" align="right">R$ {{ $buy->price }} X
                                        1</div>
                                </div>
                            </div> <!-- end checkout-table -->
    
                            <div class="checkout-table-row-right">
                                <div class="checkout-table-quantity">1</div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="tax" name="tax" value="">
                            </div>
                        </div> <!-- end checkout-table-row -->
    
                </div> <!-- end checkout-table -->
    
                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal: <br>
                        Conditional coupon
                    </div>
    
                    <div class="checkout-totals-right">
                        R${{ $buy->price }} <br>
                        Conditional coupon
                    </div>
    
                </div> <!-- end checkout-section -->
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: 'rgba(55, 65, 81, var(--tw-text-opacity))',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        const stripe = Stripe('{{ env('STRIPE_KEY') }}', {
            locale: 'en'
        }); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const cardElement = elements.create('card', {
            style: style
        }); // Create an instance of the card Element.
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            document.getElementById('card-button').disabled = true;

            stripe
                .handleCardSetup(clientSecret, cardElement, {
                    payment_method_data: {
                        //billing_details: { name: cardHolderName.value }
                    }
                })
                .then(function(result) {
                    console.log(result);
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;

                        document.getElementById('card-button').disabled = false;
                    } else {
                        console.log(result);
                        // Send the token to your server.
                        stripeTokenHandler(result.setupIntent.payment_method);
                    }
                });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(paymentMethod) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', paymentMethod);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }

    </script>
</body>

</html>
