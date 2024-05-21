@include('includes.auth.header')

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Register as</strong></label>
                                            <div class="form-group">
                                                <select name="register_as" class="form-control form-control-md">
                                                    <option value="2">Trainee</option>
                                                    <option value="3">Trainer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Confirm Password</strong></label>
                                            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                        <div class="text-center mt-4">
                                            <!-- <button type="submit" class="btn btn-primary btn-block">{{ __('Sign me up') }}</button> -->
                                            <x-primary-button class="btn btn-primary btn-block">
                                                {{ __('Register') }}
                                            </x-primary-button>
                                        </div>

                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('includes.auth.footer')