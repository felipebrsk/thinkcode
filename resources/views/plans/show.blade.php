@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('sass/_buttons.scss.css') }}">
    <div class="text-center mt-4">
        <p>Serão cobrados R${{ number_format($plan->cost, 2) }} pelo {{ $plan->name }}.</p>
        <p>O plano é recorrente, ou seja, a cada {{ $plan->time }} o valor será debitado no cartão informado.</p>
    </div>
    <div class="leading-loose flex justify-center card">
        <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="{{ route('subscription.create') }}"
            method="post" id="payment-form">
            @csrf
            <p class="text-gray-800 font-medium">Informações do comprador</p>
            <div class>
                <label class="block text-sm text-gray-00" for="cus_name">Nome</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded focus:outline-none" id="cus_name"
                    name="name" type="text" required placeholder="Seu nome" aria-label="Name"
                    value="{{ Auth()->user()->username }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded focus:outline-none" name="email"
                    type="text" required placeholder="Seu email" aria-label="Email" value="{{ Auth()->user()->email }}">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="cus_email">Endereço</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none" name="address"
                    type="text" required placeholder="Endereço" aria-label="Email">
            </div>
            <div class="mt-2">
                <label class="text-sm block text-gray-600" for="cus_email">Cidade</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none" name="city" type="text"
                    required placeholder="Cidade" aria-label="Email">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="block text-sm text-gray-600" for="cus_email">País</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none" name="country"
                    type="text" required placeholder="País" aria-label="Email" value="Brasil">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-600" for="cus_email">CEP</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none" maxlength="11"
                    name="CEP" type="text" required placeholder="CEP" aria-label="Email">
            </div>
            <p class="mt-4 text-gray-800 font-medium">Informações de pagamento</p>
            <div class="mt-4">
                <div class="card-header">
                    <label for="card-element">
                        Insira suas informações de crédito.
                    </label>
                </div>
                <div class="card-body">
                    <div id="card-element" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                    <input type="hidden" name="plan" value="{{ $plan->id }}" />
                    <input type="hidden" name="plan_name" value="{{ $plan->name }}">
                    <input type="hidden" name="amount" value="{{ $plan->cost }}">
                </div>
                <div class="card-footer mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded card-disable"
                        type="submit" id="card-button"
                        data-secret="{{ $intent->client_secret }}">R${{ $plan->cost }}</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
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

        const stripe = Stripe('{{ env("STRIPE_KEY") }}', {
            locale: 'pt-BR'
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
@endsection
