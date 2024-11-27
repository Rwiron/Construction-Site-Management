@extends('layouts.child')
@section('title', 'Sign Up - TrendSculpt')

@section('content')

    <div
        class="relative flex flex-col w-full overflow-hidden xl:flex-row to-custom-800 bg-gradient-to-r from-custom-1 dark:to-custom-900 red:from-custom-950">
        <!-- Branding Tools Section (Now on Left) -->
        <div class="relative z-10 flex items-center justify-center min-h-screen px-10 grow py-14">
            <div>
                {{-- <a href="#!"><img src="assets/images/logo-light.png" alt="" class="block mx-auto mb-14 h-7"></a> --}}
                <img src="assets/images/auth-modern.png" alt=""
                    class="block object-cover mx-auto shadow-lg md:max-w-md rounded-xl shadow-custom-800">

            </div>
        </div>

        <!-- Signup Form Section (Now on Right) -->
        <div
            class="min-h-[calc(100vh_-_theme('spacing.4')_*_2)] mx-3 lg:w-[40rem] shrink-0 px-10 py-14 flex items-center justify-center m-4 bg-white rounded z-10 relative dark:bg-zink-700 dark:text-zink-100 md:mx-auto xl:mx-4">
            <div class="flex flex-col w-full h-full">
                <a href="#!">
                    <img src="assets/images/skyscraper.png" alt="" class="hidden h-28 w-auto mx-auto dark:block">

                    <img src="assets/images/skyscraper.png" alt="" class="block h-28 w-auto mx-auto dark:hidden">

                </a>

                <div class="mt-8 text-center">
                    <h4 class="mb-1 text-custom-500 dark:text-custom-500">Create an Account</h4>
                    <p class="text-slate-500 dark:text-zink-200">Sign up to join TrendSculpt.</p>
                </div>

                <form action="{{ route('register') }}" method="POST" class="mt-10" id="signUpForm">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="inline-block mb-2 text-base font-medium">Name</label>
                        <input type="text" name="name" id="name" class="form-input" placeholder="Enter your name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="inline-block mb-2 text-base font-medium">Email</label>
                        <input type="email" name="email" id="email" class="form-input"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="inline-block mb-2 text-base font-medium">Password</label>
                        <input type="password" name="password" id="password" class="form-input"
                            placeholder="Enter password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="inline-block mb-2 text-base font-medium">Confirm
                            Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-input"
                            placeholder="Confirm password" required>
                    </div>
                    <div class="mt-10">
                        <button type="submit" class="w-full text-white btn bg-custom-500">Sign Up</button>
                    </div>

                    <div
                        class="relative text-center my-9 before:absolute before:top-3 before:left-0 before:right-0 before:border-t before:border-t-slate-200 dark:before:border-t-zink-500">
                        <h5
                            class="inline-block px-2 py-0.5 text-sm bg-white text-slate-500 dark:bg-zink-600 dark:text-zink-200 rounded relative">
                            Log In</h5>
                    </div>

                    <div class="mt-10 text-center">
                        <p class="mb-0 text-slate-500 dark:text-zink-200">Already have an account?
                            <a href="{{ url('login') }}"
                                class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">
                                Log In</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
