<header class="gradient-bg text-white text-xs py-2 px-4 d-flex justify-content-between align-items-center position-relative" style="z-index: 99;">
    <p class="mb-0 small text-white">Lorem Ipsum has been the industry's standard dummy text ever
        <a href="#" class="text-white fw-semibold text-decoration-underline">Learn more &gt;</a>
    </p>
    <button class="header-close">✖</button>
</header>

<!-- Navigation Bar -->
<nav class="text-white py-3 px-4 d-flex align-items-center w-100 position-relative border-bottom" style="z-index: 99;">

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
