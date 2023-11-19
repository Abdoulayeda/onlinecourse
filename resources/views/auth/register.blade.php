 {{-- <x-guest-layout>
     <form method="POST" action="{{ route('register') }}">
         @csrf

         <!-- Name -->
         <div>
             <x-input-label for="name" :value="__('Name')" />
             <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                 autofocus autocomplete="name" />
             <x-input-error :messages="$errors->get('name')" class="mt-2" />
         </div>

         <!-- Email Address -->
         <div class="mt-4">
             <x-input-label for="email" :value="__('Email')" />
             <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                 required autocomplete="username" />
             <x-input-error :messages="$errors->get('email')" class="mt-2" />
         </div>
         <div>
             <x-input-label for="phone" :value="__('Phone')" />
             <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                 required autofocus autocomplete="phone" />
             <x-input-error :messages="$errors->get('name')" class="mt-2" />
         </div>


         <!-- Password -->
         <div class="mt-4">
             <x-input-label for="password" :value="__('Password')" />

             <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                 autocomplete="new-password" />

             <x-input-error :messages="$errors->get('password')" class="mt-2" />
         </div>

         <!-- Confirm Password -->
         <div class="mt-4">
             <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

             <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                 name="password_confirmation" required autocomplete="new-password" />

             <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
         </div>

         <div class="flex items-center justify-end mt-4">
             <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                 href="{{ route('login') }}">
                 {{ __('Already registered?') }}
             </a>

             <x-primary-button class="ml-4">
                 {{ __('Register') }}
             </x-primary-button>
         </div>
     </form>
 </x-guest-layout>
 --}}

 @extends('app.master')

 @section('content')
     <section class="bg-gray-50 dark:bg-gray-900">
         <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

             <div
                 class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                 <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                     <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                         Créer un compte
                     </h1>
                     <form method="POST" action="{{ route('register') }}" class="space-y-4 md:space-y-6">
                         @csrf
                         <div>
                             <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                 Votre nom
                             </label>
                             <input type="text" name="name"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="votre nom complete">
                         </div>
                         <div>
                             <label class="block mb-2 text-sm font-medium text-gray-900 ">
                                 votre email
                             </label>
                             <input type="email" name="email"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Entrer votre email">
                         </div>
                         <div>
                             <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                 Numéro de télépone
                             </label>
                             <input type="text" name="phone"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 placeholder="Votre numéro de téléphone">
                         </div>
                         <div>
                             <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot
                                 de passe</label>
                             <input type="password" name="password" id="password" placeholder="******************"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 required="">
                         </div>
                         <div>
                             <label for="confirm-password"
                                 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                 Confirmer votre mot de passe
                             </label>
                             <input type="password" name="password_confirmation" id="password_confirmation"
                                 placeholder="******************"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 required="">
                         </div>

                         <button
                             class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                             Enregistrer
                         </button>
                         <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                             Si vous avez un compte? <a href="#"
                                 class="font-medium text-primary-600 hover:underline dark:text-primary-500">Connecter</a>
                         </p>
                     </form>
                 </div>
             </div>
         </div>
     </section>
 @endsection
