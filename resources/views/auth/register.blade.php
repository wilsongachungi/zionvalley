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
		<x-authentication-card style="background-color: #006400;">
			<x-slot name="logo">
				<img src="../assets/img/logo1-removebg-preview.png" style="width:200;height:100px" alt="">
			</x-slot>

			<x-validation-errors class="mb-4" />

			<form method="POST" action="{{ route('register') }}">
				@csrf

				<div>
					<x-label for="name" value="{{ __('Name') }}" />
					<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
						required autofocus autocomplete="name" />
				</div>
				<div>
					<x-label for="country_code" value="Select Country Code" />
					<select id="countryDropdown" name="country_code" class="block mt-1 w-full border-gray-300 rounded-md" onchange="updatePhoneCode()">
						<!-- Countries will be loaded dynamically -->
					</select>
				</div>

				<div class="mt-2">
					<x-label for="phone" value="Phone Number" />
					<div class="flex">
						<span id="selectedCode" class="px-3 py-2 bg-gray-200 border rounded-l-md">+254</span>
						<input id="phone" class="block w-full border-gray-300 rounded-r-md" type="number" name="phone" placeholder="Enter phone number" required autofocus>
					</div>
				</div>
				<!-- <div class="mt-4">
					<x-label for="email" value="{{ __('Email') }}" />
					<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
						 autocomplete="username" />
				</div> -->


				<!--

				<div>
					<x-label for="country" value="{{ __('Country') }}" />
					<x-input id="phone" class="block mt-1 w-full" type="text" name="country" :value="old('country')"
						required autofocus autocomplete="country" />
				</div>

				<div>
					<x-label for="area_of_residence" value="{{ __('Residence') }}" />
					<x-input id="area_of_residence" class="block mt-1 w-full" type="text" name="area_of_residence" :value="old('area_of_residence')"
						required autofocus autocomplete="area_of_residence" />
				</div>
				<div>
					<x-label for="date_of_birth" value="{{ __('Date of Birth') }}" />
					<x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')"
						required autofocus autocomplete="date_of_birth" />
				</div> -->

				<div class="mt-4">
					<x-label for="password" value="{{ __('Password') }}" />
					<x-input id="password" class="block mt-1 w-full" type="password" name="password" required
						autocomplete="new-password" />
				</div>

				<div class="mt-4">
					<x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
					<x-input id="password_confirmation" class="block mt-1 w-full" type="password"
						name="password_confirmation" required autocomplete="new-password" />
				</div>

				@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
					<div class="mt-4">
						<x-label for="terms">
							<div class="flex items-center">
								<x-checkbox name="terms" id="terms" required />

								<div class="ml-2">
									{!! __('I agree to the :terms_of_service and :privacy_policy', [
										'terms_of_service' =>
											'<a target="_blank" href="' .
											route('terms.show') .
											'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
											__('Terms of Service') .
											'</a>',
										'privacy_policy' =>
											'<a target="_blank" href="' .
											route('policy.show') .
											'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
											__('Privacy Policy') .
											'</a>',
									]) !!}
								</div>
							</div>
						</x-label>
					</div>
				@endif

				<div class="flex items-center justify-end mt-4">
					<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
						href="{{ route('login') }}">
						{{ __('Already registered?') }}
					</a>

					<x-button class="ml-4">
						{{ __('Register') }}
					</x-button>
				</div>
			</form>
		</x-authentication-card>

		<script>
			document.addEventListener("DOMContentLoaded", function() {
				fetchCountries();
			});

			function fetchCountries() {
				fetch('/api/countries')
					.then(response => response.json())
					.then(data => {
						let dropdown = document.getElementById('countryDropdown');
						dropdown.innerHTML = ''; // Clear existing options

						data.forEach(country => {
							if (country.code) {
								let option = document.createElement('option');
								option.value = country.code;
								option.textContent = `${country.name} (${country.code})`;
								dropdown.appendChild(option);
							}
						});

						// Set default to Kenya
						dropdown.value = "+254";
						document.getElementById("selectedCode").textContent = "+254";
					})
					.catch(error => console.error("Error fetching countries:", error));
			}

			function filterCountries() {
				let input = document.getElementById('countrySearch').value.toLowerCase();
				let dropdown = document.getElementById('countryDropdown');
				let options = dropdown.getElementsByTagName('option');

				for (let i = 0; i < options.length; i++) {
					let text = options[i].textContent.toLowerCase();
					options[i].style.display = text.includes(input) ? '' : 'none';
				}
			}

			function updatePhoneCode() {
				let selectedOption = document.getElementById('countryDropdown').value;
				document.getElementById('selectedCode').textContent = selectedOption;
			}
			</script>
	</x-guest-layout>



</x-base-layout>

