@extends($theme.'layouts.login_register')
@section('title',trans('Login'))
@section('content')
    @if(isset($template['login-register']) && $loginRegister = $template['login-register'][0])
        <style>
            .login-signup-page .login-signup-thums {
                background-image: url({{getFile(@$loginRegister->content->media->login_page_image->driver,@$loginRegister->content->media->login_page_image->path)}});
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    @endif


    <header class="gradient-bg text-white text-xs py-2 px-4 d-flex justify-content-between align-items-center position-relative">
    <p class="mb-0 small text-white">Lorem Ipsum has been the industry's standard dummy text ever
        <a href="#" class="text-white fw-semibold text-decoration-underline">Learn more &gt;</a>
    </p>
    <button class="header-close">✖</button>
</header>

<!-- Navigation Bar -->
<nav class="text-white py-3 px-4 d-flex align-items-center w-100 position-relative border-bottom">

    <!-- Buy Anonymously Button (Left Side) -->
    <div class="position-relative">
        <button class="btn btn-outline-light d-flex align-items-center px-4 py-2 rounded-pill">
            <img src="http://localhost/simbco/project/assets/themes/light/img/buybutton.png" alt="Icon" class="me-2" width="24" height="24"> Buy Anonymously
        </button>
    </div>

    <!-- Centered Logo -->
    <div class="position-absolute top-50 start-50 translate-middle d-flex align-items-center">
    <a href="{{url('/')}}" class="logo d-flex align-items-center text-decoration-none text-white">
        <img src="http://localhost/simbco/project/assets/themes/light/img/buybutton.png" alt="SIMB Logo" width="32" height="32">
        <span class="ms-2 fs-5">SIMB</span>
    </a>
</div>



    <!-- Login & Signup Buttons (Right Side) -->
    <div class="ms-auto d-flex align-items-center gap-3">
    <a class="nav-link " href="{{ route('login') }}">
       Login</a>
       <a class="nav-link" href="{{ route('register') }}">
        <button class="btn btn-light text-primary rounded-pill px-4 py-2">Sign Up</button></a>
    </div>

</nav>

    <!-- New Section -->
    <section class="login-signup-page" style="background-size: cover;background-attachment: fixed;background-image: url('http://localhost/simbco/project/assets/themes/light/img/background/signin.png');margin-top: -125px;">


            <!-- Right Section (Login Form) -->
            <div class=" d-flex justify-content-center align-items-center">
                <div class="login-signup-form rounded-4 shadow-lg p-5" style="width: 90%; max-width: 649px; border: 1px solid #894EF6; background: rgba(255, 255, 255, 0.1); margin-top: 106px !important;">
                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="section-header text-center mb-4">
                            <h3 class="text-white">Sign In To Your Account</h3>
                            <p class="text-muted">Enter your credentials below to continue</p>
                        </div>

                        <div class="row g-4">
                            <!-- Email Field -->
                            <div class="col-12">
                                <input type="text" name="username" value="{{ old('username', config('demo.IS_DEMO') ? (request()->username ?? 'demouser') : '') }}"
                                       class="form-control p-3 rounded-3 border-0" id="exampleInputEmail1" placeholder="Your email">
                                @error('username')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="col-12">
                                <div class="password-box position-relative">
                                    <input type="password" name="password" value="{{ old('password', config('demo.IS_DEMO') ? (request()->password ?? 'demouser') : '') }}"
                                           class="form-control p-3 rounded-3 border-0" id="exampleInputPassword1" placeholder="Password">
                                    <i class="password-icon fa-regular fa-eye position-absolute" style="right: 15px; top: 15px; color: white;"></i>
                                </div>
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <!-- Remember Me and Forgot Password -->
                            <div class="col-12 d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label text-white" for="exampleCheck1">Remember me</label>
                                </div>
                                <div class="forgot">
                                    <a href="{{ route('password.request') }}" class="text-white text-decoration-none">Forgot password?</a>
                                </div>
                            </div>
                        </div>

                        <!-- Log In Button -->
                        <button type="submit" class="cmn-btn mt-3 w-100 text-white p-3 rounded-3" style="background-color: #894EF6; border: none;">Log In</button>

                        <!-- Social Logins -->


                        <p class="p-3 text-center text-white"> Or login with</p>

                        <div class="cmn-btn-group text-center">
                            <div class="row g-2">
                                <div class="col-4">
                                    <a href="{{route('socialiteLogin','google')}}" class="btn cmn-btn3 w-100 social-btn rounded-3">
                                        <img src="{{$themeTrue.'img/google.png'}}" alt="Google" class="me-2"> Google
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="{{route('socialiteLogin','facebook')}}" class="btn cmn-btn3 w-100 social-btn rounded-3">
                                        <img src="{{$themeTrue.'img/facebook.png'}}" alt="Facebook" class="me-2"> Facebook
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="{{route('socialiteLogin','github')}}" class="btn cmn-btn3 w-100 social-btn rounded-3">
                                        <img src="{{$themeTrue.'img/github.png'}}" alt="GitHub" class="me-2"> GitHub
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Account Creation Link -->
                        <div class="pt-3 text-center text-white">
                            Don't have an account? <a href="{{ route('register') }}" class="highlight text-decoration-none">Create an account</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<footer class="bg-purple-600 text-white py-5 text-center">
    <div class="container">
        <img src="http://localhost/simbco/project/assets/themes/light/img/logo.png" alt="Logo" class="mx-auto mb-3" style="width: 124.93px; height: 40px;">
        <h2 class="h4 text-white">Join the SIMB Community</h2>
        <div class="mt-3 d-flex justify-content-center">
            <input type="email" class="form-control w-auto me-2" placeholder="Enter Your Gmail">
            <button class="btn btn-primary">Join Us</button>
        </div>
        <div class="mt-4 d-flex justify-content-center gap-3">
            <a href="#"><img src="http://localhost/simbco/project/assets/themes/light/img/insta.png" alt="Instagram" class="" style="width: 30px; height: 30px;"></a>
            <a href="#"><img src="http://localhost/simbco/project/assets/themes/light/img/linkedin.png" alt="LinkedIn" class="" style="width: 30px; height: 30px;"></a>
            <a href="#"><img src="http://localhost/simbco/project/assets/themes/light/img/fb.png" alt="Facebook" class="" style="width: 30px; height: 30px;"></a>
        </div>
    </div>
    <hr class="border-light my-4">
    <div class="container text-sm d-flex justify-content-between">
        <p class="mb-0 text-white">Copyright &copy; 2025 SIMB. All rights reserved.</p>
        <div>
            <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
            <a href="#" class="text-white text-decoration-none me-3">Terms & Conditions</a>
            <a href="#" class="text-white text-decoration-none">Support</a>
        </div>
    </div>
</footer>





    <!-- login-signup section start -->
    <!-- <section class="login-signup-page pt-0 pb-0 min-vh-100 h-100">
        <div class="container-fluid h-100">
            <div class="row min-vh-100">

                <div class="col-md-6 p-0 d-none d-md-block">
                    <div class="login-signup-thums h-100">
                        <div class="content-area">
                            <div class="logo-area mb-30">
                                <a href="{{url('/')}}">
                                    <img class="logo"
                                         src="{{getFile(basicControl()->dark_logo_driver,basicControl()->dark_logo)}}"
                                         alt="...">
                                </a>
                            </div>
                            @if(isset($template['login-register']) && $loginRegister = $template['login-register'][0])
                                <div class="middle-content">
                                    <h3 class="section-title">{{@$loginRegister->description->login_heading}}</h3>
                                    <p>{{@$loginRegister->description->login_sub_heading}}</p>
                                </div>
                            @endif

                            @if(isset($template['social']) && count($template['social']) > 0)
                                <div class="bottom-content">
                                    <div class="social-area mt-50">
                                        <ul class="d-flex">
                                            @foreach($template['social'] as $social)
                                                <li><a href="{{@$social->content->media->my_link}}"><i
                                                            class="{{@$social->content->media->icon}}"></i></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-6 p-0 d-flex justify-content-center flex-column">
                    <div class="login-signup-form">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            @if(isset($template['login-register']) && $loginRegister = $template['login-register'][0])
                                <div class="section-header">
                                    <h3>{{@$loginRegister->description->login_heading}}</h3>
                                    <div class="description">{{@$loginRegister->description->login_sub_heading}}</div>
                                </div>
                            @endif
                            <div class="row g-4">
                                <div class="col-12">
                                    <input type="text" name="username" value="{{ old('username', config('demo.IS_DEMO') ? (request()->username ?? 'demouser') : '') }}" class="form-control" id="exampleInputEmail1"
                                           placeholder="@lang("Email or Username")">
                                    @error('username')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="password-box">
                                        <input type="password" name="password"  value="{{ old('password', config('demo.IS_DEMO') ? (request()->password ?? 'demouser') : '') }}"
                                               class="form-control password" id="exampleInputPassword1"
                                               placeholder="@lang('Password')">
                                        <i class="password-icon fa-regular fa-eye"></i>
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                @if((basicControl()->google_recaptcha == 1) && (basicControl()->google_reCaptcha_status_login))

                                    <div class="form-group">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @error('g-recaptcha-response')
                                        <div class="text-danger">@lang($message)</div>
                                        @enderror
                                    </div>
                                @endif
                                @if(basicControl()->manual_recaptcha &&  basicControl()->reCaptcha_status_login)
                                    <div class="input-box mb-4">
                                        <input type="text" tabindex="2"
                                               class="form-control @error('captcha') is-invalid @enderror"
                                               name="captcha" id="captcha" autocomplete="off"
                                               placeholder="@lang('Enter captcha code')">

                                        @error('captcha')
                                        <div class="text-danger">@lang($message)</div>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <div
                                            class="input-group input-group-merge d-flex justify-content-between"
                                            data-hs-validation-validate-class>
                                            <img src="{{route('captcha').'?rand='. rand()}}"
                                                 id='captcha_image2'>
                                            <a class="input-group-append input-group-text"
                                               href='javascript: refreshCaptcha2();'>
                                                <i class="fal fa-sync"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-12">
                                    <div class="form-check d-flex justify-content-between">
                                        <div class="check">
                                            <input type="checkbox" name="remember" class="form-check-input"
                                                   id="exampleCheck1" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label"
                                                   for="exampleCheck1">@lang('Remember me')</label>
                                        </div>
                                        <div class="forgot highlight">
                                            <a href="{{ route('password.request') }}">@lang('Forgot password?')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="cmn-btn mt-30 w-100">@lang('Log In')</button>

                            @if(config('socialite.google_status') && config('socialite.facebook_status') && config('socialite.github_status'))
                                <hr class="divider">
                            @endif

                            <div class="cmn-btn-group">
                                <div class="row g-2">
                                    @if(config('socialite.google_status'))
                                        <div class="col-4">
                                            <a href="{{route('socialiteLogin','google')}}"
                                               class="btn cmn-btn3 w-100 social-btn"><img
                                                    src="{{$themeTrue.'img/google.png'}}"
                                                    alt="...">@lang('Google')
                                            </a>
                                        </div>
                                    @endif
                                    @if(config('socialite.facebook_status'))
                                        <div class="col-4">
                                            <a href="{{route('socialiteLogin','facebook')}}"
                                               class="btn cmn-btn3 w-100 social-btn"><img
                                                    src="{{$themeTrue.'img/facebook.png'}}"
                                                    alt="...">@lang('Facebook')
                                            </a>
                                        </div>
                                    @endif
                                    @if(config('socialite.github_status'))
                                        <div class="col-4">
                                            <a href="{{route('socialiteLogin','github')}}"
                                               class="btn cmn-btn3 w-100 social-btn"><img
                                                    src="{{$themeTrue.'img/github.png'}}"
                                                    alt="...">@lang('Github')
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="pt-20 text-center">
                                @lang("Don't have an account?")
                                <p class="mb-0 highlight"><a
                                        href="{{ route('register') }}">@lang('Create an account')</a></p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!-- login-signup section end -->
@endsection

@push('js-lib')
    @if((basicControl()->google_recaptcha == 1) && (basicControl()->google_reCaptcha_status_login == 1))
        <script async src="https://www.google.com/recaptcha/api.js"></script>
    @endif
@endpush

@push('extra_scripts')
    <script>
        'use strict';
        // input field show hide password start
        const password = document.querySelector('.password');
        const passwordIcon = document.querySelector('.password-icon');

        passwordIcon.addEventListener("click", function () {
            if (password.type == 'password') {
                password.type = 'text';
                passwordIcon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                passwordIcon.classList.remove('fa-eye-slash');
            }
        })

        function refreshCaptcha() {
            let img = document.images['captcha_image'];
            img.src = img.src.substring(
                0, img.src.lastIndexOf("?")
            ) + "?rand=" + Math.random() * 1000;
        }

        function refreshCaptcha2() {
            let img = document.images['captcha_image2'];
            img.src = img.src.substring(
                0, img.src.lastIndexOf("?")
            ) + "?rand=" + Math.random() * 1000;
        }
    </script>
@endpush

