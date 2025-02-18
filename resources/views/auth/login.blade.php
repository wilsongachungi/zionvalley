@section('css')
    <style>
        p {
            color: antiquewhite;
        }

        .intro-container {
            position: relative;
            color: antiquewhite;
        }

        .green-tint {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 50, 0, 0.5);
            /* Green with 50% opacity */
        }

        @media screen and (max-width: 600px) {
            h3 {
                font-size: 13px;
            }

        }

        .custom-carousel-item {
            position: absolute;
            text-align: center;
            background-color: rgba(3, 79, 3, 0.5);
            padding: 20px;
        }

        .custom-carousel-text {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        /* Default styles for .welcome-text */
        .welcome-text {
            display: none;
            color: antiquewhite;
            text-align: center;
            position: fixed;
            top: 20px;
            left: 59%;
            transform: translateX(-50%);
            z-index: 1000;
        }


        @media (max-width: 767px) {
            .welcome-text {
                display: block;
            }
        }

        @media (min-width: 768px) {
            .welcome-text {
                display: none;
            }
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

    </style>
@endsection

<x-base-layout>
<x-guest-layout>
    <x-authentication-card >
        <x-slot name="logo">
            <img src="../assets/img/logo1-removebg-preview.png" style="width:200;height:100px" alt="">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}" >
            @csrf

			<div>
				<x-label for="login" value="{{ __('Phone Number') }}" class="text-gray-900 font-bold" />
				<x-input id="login" class="block mt-1 w-full text-gray-900" type="number" name="login"
					:value="old('login')" required autofocus maxlength="10" />
			</div>


            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-gray-900 font-bold" />
                <x-input id="password" class="block mt-1 w-full  text-gray-900" type="password" name="password" required />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-900">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-900 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
                @if (Route::has('password.request'))
                <a class="ml-6 underline text-sm text-gray-900 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
</x-base-layout>
