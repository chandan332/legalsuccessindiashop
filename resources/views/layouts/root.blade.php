<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Legal Success India</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/png">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap css-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <!-- custom css -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/home/styles.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- bootstrap script-->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    {{-- custom script --}}
    <script src="/js/home/index.js" defer></script>
    @yield('head')


</head>

@empty($route)
@php
    $route = '';
@endphp
@endempty

<body>
  <div class="container">
      {{-- NavBar --}}
      <nav class="navbar navbar-expand-lg">
            <div class="container-fluid ">
                    <a class="navbar-brand" href="/">
                    <img src="/images/logo.png" alt="" width="60" height="60" />
                    </a>
                    <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    >
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item me-2">
                        <a class="nav-link @if ($route == '/')
                            active
                        @endif " aria-current="page" href="/"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li class="nav-item me-2">
                        <a class="nav-link @if ($route == '/services')
                            active
                        @endif" aria-current="page" href="/services"
                            ><i class="fa-solid fa-gear"></i> Services</a
                        >
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link 
                            @if ($route == '/about')
                                active
                            @endif" aria-current="page" href="/about"
                            >
                                <i class="fa-solid fa-user"></i> About
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link 
                            @if ($route == '/contact')
                                active
                            @endif" aria-current="page" href="/contact"
                            >
                                <i class="fa-solid fa-address-book"></i> Contact Us
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link 
                            @if ($route == '/application')
                                active
                            @endif" aria-current="page" href="/application"
                            >
                                <i class="fa-solid fa-file"></i> File&Drafting
                            </a>
                        </li>
                    </ul>
                    </div>
            </div>
      </nav>

      {{-- Content --}}
      @yield('content')
      
      {{-- Footer --}}
      <footer class="p-4 " style="background-color:hsl(60, 50%, 90%);">
            <div class="p-3 rounded row align-items-baseline " style="background-color:hsl(60, 50%, 70%);">
                <div class="mt-2 col-12 col-md ms-md-4 " >
                    <p><i class="fa-solid fa-envelope fa-beat"></i> info@legalsuccessindia.com</p>
                    <p><i class="fa-solid fa-phone fa-beat"></i> (+91) 6290634766</p>
                </div>
                <div class="mt-2 col-12 col-md ms-md-4 ">
                    <h3>Services</h3>
                    <div>
                    <ul>
                        <li>
                            <i class="fa-solid fa-file"></i> 
                            <a href="/pricing">File & Drafting</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-copy"></i> 
                            <a href="/copypricing">Copy Writing</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-file"></i> 
                            <a href="/pricing">Renewal</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="mt-2 col-12 col-md ms-md-4 ">
                    <h3>Menu</h3>
                    <div>
                    <ul>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="/terms&conditions">Terms & Conditions</a> 
                        </li>
                        <li>
                            <i class="fa-solid fa-handshake-angle"></i>
                            <a href="/privacypolicy">Privacy Policy</a> 
                        </li>
                        <li>
                            <i class="fa-solid fa-money-check"></i>
                            <a href="/refundpolicy">Refund</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
      </footer>
      @yield('script')
  </div>
</body>
</html>
