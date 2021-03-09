@extends('layouts.main')

<aside class="hidden sm:flex sm:flex-col">
    <a href="{{ route('all-courses') }}"
        class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
        <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
            <title>ThinkCode logo</title>
            <path
                d="M32 14.2c-8 0-12.9 4-14.9 11.9 3-4 6.4-5.6 10.4-4.5 2.3.6 4 2.3 5.7 4 2.9 3 6.3 6.4 13.7 6.4 7.9 0 12.9-4 14.8-11.9-3 4-6.4 5.5-10.3 4.4-2.3-.5-4-2.2-5.7-4-3-3-6.3-6.3-13.7-6.3zM17.1 32C9.2 32 4.2 36 2.3 43.9c3-4 6.4-5.5 10.3-4.4 2.3.5 4 2.2 5.7 4 3 3 6.3 6.3 13.7 6.3 8 0 12.9-4 14.9-11.9-3 4-6.4 5.6-10.4 4.5-2.3-.6-4-2.3-5.7-4-2.9-3-6.3-6.4-13.7-6.4z"
                fill="#fff" />
        </svg>
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
        <nav class="flex flex-col mx-4 my-6 space-y-4">
            <a href="{{ route('my-courses') }}"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">My Courses</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                </svg>
            </a>
            <a href="{{ route('home') }}"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Dashboard</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
            </a>
            <a href="{{ route('mail.trap') }}"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Messages</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </a>
            <a href="#"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Documents</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
            </a>
            @if(auth()->user()->role_id === 1)
                <a href="{{ route('plans.index') }}"
                    class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                    <span class="sr-only">Plans Control</span>
                    <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </a>
            @endif
        </nav>
        <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
            <button class="p-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Settings</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>
        </div>
    </div>
</aside>

@section('content')
<link rel="stylesheet" href="{{ asset('sass/_buttons.scss.css') }}">
    <div class="text-center">
        <p>Serão cobrados R${{ number_format($plan->cost, 2) }} pelo {{ $plan->name }}.</p>
        <p>O plano é recorrente, ou seja, a cada {{ $plan->time }} o valor será debitado no cartão informado.</p>
    </div>
    <div class="leading-loose flex justify-center card">
        <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="{{ route('subscription.create') }}" method="post" id="payment-form">
            @csrf
            <p class="text-gray-800 font-medium">Customer information</p>
            <div class>
                <label class="block text-sm text-gray-00" for="cus_name">Nome</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded focus:outline-none" id="cus_name" name="name" type="text"
                    required placeholder="Seu nome" aria-label="Name" value="{{ Auth()->user()->username }}">
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
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none" name="city"
                    type="text" required placeholder="Cidade" aria-label="Email">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="block text-sm text-gray-600" for="cus_email">País</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none" name="country"
                    type="text" required placeholder="País" aria-label="Email" value="Brasil">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-600" for="cus_email">CEP</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none" maxlength="11" name="CEP"
                    type="text" required placeholder="CEP" aria-label="Email">
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
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded card-disable" type="submit" id="card-button"
                    data-secret="{{ $intent->client_secret }}">R${{$plan->cost}}</button>
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
@endsection
