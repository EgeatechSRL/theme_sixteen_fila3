@section('title','')

<div style="background-color:#18181B;" class="flex justify-center align-center w-full gap-x-6">
    <div class="flex flex-col justify-center align-bottom max-w-sm">
        <div class="text-4xl py-4 pr-4 pl-6 font-semibold text-left bg-white w-sm welcome-div-cut">
            Portale Idoteca
        </div>
        <div class="mt-6 text-5xl text-left text-white text-wrap welcome-line-height w-sm">
            Ti diamo il <b>benvenuto</b> nel portale unico Siram Veolia per
        </div>
        <div class="mt-6 text-3xl text-left text-white text-wrap w-sm">
            La ricerca e il caricamento <br> di nuove idee
        </div>
    </div>
    <div class="login-box-width">

        <div style="background-color: #FFFFFF;" class="mx-auto rounded-t-lg">
            <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                <a href="{{ route('home') }}">
                <x-filament-panels::logo class="max-h-full max-w-full mx-auto" />
                </a>
            </h2>
        </div>

        <div class="mx-auto w-full">
            <div class="px-4 pb-8 bg-white rounded-b-lg sm:px-10">
                <div class="mb-4 text-xl font-extrabold text-center text-gray-900 leading-9 ">Accedi</div>
                <form wire:submit.prevent="authenticate">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('user::auth.Email address') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                            {{ __('user::auth.Password') }}
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-orange-600 transition duration-150 ease-in-out" />
                            <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                                {{ __('user::auth.Remember') }}
                            </label>
                        </div>

                        <div class="text-sm leading-5">
                            <a href="{{ route('password.request') }}" class="font-medium text-orange-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                {{ __('user::auth.Forgot your password?') }}
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-orange-500 border border-transparent rounded-md focus:outline-none focus:border-orange-700 focus:ring-orange active:bg-orange-700 transition duration-150 ease-in-out">
                                {{ __('user::auth.Sign in') }}
                            </button>
                        </span>
                    </div>

                    @livewire('socialite.buttons')

                </form>
            </div>
        </div>
    </div>
    <style>
        .bg-orange-500 {
            background-color: #D97706;
        }
        .bg-orange-500:hover {
            transition: 250ms;
            background-color: #F59E0B;
        }
        .text-orange-500 {
            color: #D97706;
        }
        .text-orange-500:hover {
            transition: 250ms;
            color: #F59E0B;
        }
        .login-box-width {
            min-width: 350px;
            width: 420px;
        }
        .welcome-line-height {
            line-height: 60px;
        }
        .welcome-div-cut {
            clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%, 0 0);
        }
    </style>
</div>
