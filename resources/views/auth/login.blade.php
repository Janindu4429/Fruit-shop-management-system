<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow-sm" style="width: 100%; max-width: 400px;">
            <h3 class="text-center text-success mb-4">Fruit Shop Login</h3>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Username/Email -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" class="form-label" />
                <x-text-input id="email" class="form-control"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" class="form-label" />
                    <x-text-input id="password" class="form-control"
                                type="password"
                                name="password"
                                placeholder="Enter password"
                                required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mb-3">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="d-grid mb-3">
                    <x-primary-button class="btn btn-success">
                        {{ __('Login') }}
                    </x-primary-button>
                </div>

                @if (Route::has('password.request'))
                    <div class="text-center"> 
    <a class="text-sm text-gray-600 hover:text-gray-900 me-3" href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
    <a class="text-sm text-muted" href="{{ route('register') }}">
        {{ __('Create new account') }}
    </a>          
</div>
                @endif
            </form>
        </div>
    </div>
</x-guest-layout>