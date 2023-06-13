<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Informe seu nome completo"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Endereço')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Neighborhood -->
        <div class="mt-4">
            <x-input-label for="neighborhood" :value="__('Bairro')" />
            <x-text-input id="neighborhood" class="block mt-1 w-full" type="text" name="neighborhood" :value="old('neighborhood')" required autocomplete="neighborhood" />
            <x-input-error :messages="$errors->get('neighborhood')" class="mt-2" />
        </div>

        <!-- Zip code -->
        <div class="mt-4">
            <x-input-label for="zipcode" :value="__('CEP')" />
            <x-text-input id="zipcode" class="block mt-1 w-full" type="text" name="zipcode"  :value="old('zipcode')" required autocomplete="zipcode" placeholder="00000-000"/>
            <x-input-error :messages="$errors->get('zipcode')" class="mt-2" />
            
            <script>
            $(document).ready(function() {
            $('#zipcode').mask('00000-000');
            });
            </script>

        </div>

        <!-- City -->
        <div class="mt-4">
            <x-input-label for="city" :value="__('Cidade')" />
            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autocomplete="city" />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>

        <!-- State -->
        <div class="mt-4">
            <x-input-label for="state" :value="__('Estado')" />
            <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required autocomplete="state" placeholder="Infome a sigla (Ex.: SP)" />
            <x-input-error :messages="$errors->get('state')" class="mt-2" />

            <script>
            $(document).ready(function() {
            $('#state').mask('AA');
            });
            </script>

        </div>

        <!-- Cell Phone -->
        <div class="mt-4">
            <x-input-label for="cellphone" :value="__('Celular')" />
            <x-text-input id="cellphone" class="block mt-1 w-full" type="text" name="cellphone" :value="old('cellphone')" required autocomplete="cellphone" placeholder="(00) 00000-0000"/>
            <x-input-error :messages="$errors->get('cellphone')" class="mt-2" />

            <script>
            $(document).ready(function() {
            $('#cellphone').mask('(00) 00000-0000');
            });
            </script>

        </div>

        <!-- Telephone -->
        <div class="mt-4">
            <x-input-label for="telephone" :value="__('Telefone')" />
            <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autocomplete="telephone" placeholder="(00) 0000-0000" />
            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />

            <script>
            $(document).ready(function() {
            $('#telephone').mask('(00) 0000-0000');
            });
            </script>

        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>



        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
