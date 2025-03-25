@extends($theme.'layouts.login_register')
@section('title',trans('Register'))
@push('css-lib')
    <link rel="stylesheet" href="{{ asset($themeTrue . 'css/intlTelInput.min.css')}}"/>
@endpush
@section('content')
    @if(isset($template['login-register']) && $loginRegister = $template['login-register'][0])
        <style>
            .login-signup-page .login-signup-thums {
                background-image: url({{getFile(@$loginRegister->content->media->register_page_image->driver,@$loginRegister->content->media->register_page_image->path)}});
            }
        </style>
    @endif
    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background: radial-gradient(circle, #4c1d95, #1a1a2e);
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .signup-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.1);
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .btn-primary {
            background: #9333ea;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 25px;
        }
        .social-btn {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .social-btn img {
            width: 20px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h3>Create An Account</h3>
        <p>Join our community and start your journey.</p>
        <form>
            <input type="text" class="form-control mb-3" placeholder="Full Name">
            <input type="email" class="form-control mb-3" placeholder="Your Email">
            <input type="password" class="form-control mb-3" placeholder="Password">
            <button class="btn btn-primary w-100">Sign Up</button>
        </form>
        <p class="mt-3">Or Sign up with</p>
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
        <p class="mt-3">Already have an account? <a href="#" class="text-light">Login</a></p>
    </div>
</body>
</html> -->
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


    <section class="login-signup-page" style="background-size: cover;background-attachment: fixed;background-image: url('http://localhost/simbco/project/assets/themes/light/img/background/signin.png');margin-top: -125px;">

        <!-- <div class="container-fluid h-100">
            <div class="row min-vh-100">
                <div class="col-md-6 p-0 d-none d-md-block">
                    <div class="login-signup-thums h-100">
                        <div class="content-area">
                            <div class="logo-area mb-30">
                                <a href="{{url('/')}}">
                                    <img class="logo"
                                         src="{{getFile(basicControl()->dark_logo_driver,basicControl()->dark_logo)}}" alt="...">
                                </a>
                            </div>
                            @if(isset($template['login-register']) && $loginRegister = $template['login-register'][0])
                                <div class="middle-content">
                                    <h3 class="section-title">{{@$loginRegister->description->register_heading}}</h3>
                                    <p>{{@$loginRegister->description->register_sub_heading}}</p>
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
                </div> -->
                <section class="login-signup-page" style="background-size: cover;background-attachment: fixed;background-image: url('http://localhost/simbco/project/assets/themes/light/img/background/signin.png');margin-top: -125px;">


            <!-- Right Section (Login Form) -->
            <div class=" d-flex justify-content-center align-items-center">
                <div class="login-signup-form rounded-4 shadow-lg p-5" style="width: 90%; max-width: 649px; border: 1px solid #894EF6; background: rgba(255, 255, 255, 0.1); margin-top: 130px !important;">

                        <form action="{{ route('register') }}" method="post" class="php-email-form">
                            @csrf
                            @if(isset($template['login-register']) && $loginRegister = $template['login-register'][0])
                                <div class="section-header text-white text-center">
                                    <h3>Create An Account</h3>
                                    <div
                                        class="description text-muted text-start" style="padding-left: 55px;">Donec in lacus ante. Etiam non elementum eros, in veatis nulla. Maecenas vitae commodo nunc, tempus suscipit.</div>
                                </div>
                            @endif
                            <div class="row g-4">
                                <div class="col-12">
                                    <input type="text" name="first_name" value="{{old('first_name')}}"
                                           class="form-control" id="exampleInputEmail0"
                                           placeholder="@lang('First Name')">
                                    @error('first_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="text" name="last_name" value="{{old('last_name')}}"
                                           class="form-control" id="exampleInputEmail2"
                                           placeholder="@lang('Last Name')">
                                    @error('last_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                           id="exampleInputEmail4"
                                           placeholder="@lang('Email')">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="text" name="username" value="{{old('username')}}" class="form-control"
                                           id="exampleInputEmail3"
                                           placeholder="@lang('Username')">
                                    @error('username')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="hidden" id="country" name="phone_code" value="+1">
                                    <input id="telephone" class="form-control" name="phone" type="tel">
                                    <div class="text-danger">@error('phone') @lang($message) @enderror</div>
                                    <div class="text-danger">@error('phone_code') @lang($message) @enderror</div>
                                </div>
                                <div class="col-12">
                                    <div class="password-box">
                                        <input type="password" name="password" value="{{ old('password') }}"
                                               class="form-control password" id="exampleInputPassword1"
                                               placeholder="@lang('Password')">
                                        <i class="password-icon fa-regular fa-eye"></i>
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password_confirmation"
                                           value="{{ old('password_confirmation') }}" class="form-control password"
                                           id="exampleInputPassword2"
                                           placeholder="@lang('Confirm Password')">
                                </div>
                                @if((basicControl()->google_recaptcha == 1) && (basicControl()->google_reCaptcha_status_registration))

                                    <div class="form-group">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @error('g-recaptcha-response')
                                        <div class="text-danger">@lang($message)</div>
                                        @enderror
                                    </div>
                                @endif
                                @if(basicControl()->manual_recaptcha &&  basicControl()->reCaptcha_status_registration)
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
                            </div>
                            <button type="submit" class="btn cmn-btn mt-30 w-100">@lang('signup')</button>
                        </form>
                        <div class="pt-20 text-center">
                            @lang("Already have an account?")
                            <p class="mb-0 highlight"><a
                                    href="{{ route('login') }}">@lang('Login here')</a></p>
                        </div>
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

@endsection

@push('js-lib')
    <script src="{{ asset($themeTrue . 'js/intlTelInput.min.js')}}"></script>
    @if((basicControl()->google_recaptcha == 1) && (basicControl()->google_reCaptcha_status_login == 1))
        <script async src="https://www.google.com/recaptcha/api.js"></script>
    @endif
@endpush

@push('extra_scripts')
    <script>
        const input = document.querySelector("#telephone");
        window.intlTelInput(input, {
            initialCountry: "us",
            separateDialCode: true,
        });

        $('.iti__country-list li').on('click', function () {
            $("#country").val($(this).data('dial-code'));
        })

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

        $(document).on('click', '.btn-custom', function () {
            $('.text-danger').html('');
            refreshCaptcha();
        })

    </script>
@endpush
