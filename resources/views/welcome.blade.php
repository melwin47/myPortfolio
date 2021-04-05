<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <!-- Styles -->

    </head>
    <body class="antialiased">
        <div claphp ss="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        <header id="header" class="fixed-top" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
            <div class="container d-flex align-items-center justify-content-between">
            <h1><a href="main">MNS</a></h1>
                <nav class="nav-menu d-none d-lg-block">
                    <ul class="">
                        <li>
                            <a href="#main">Home</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#tools">Dev Tools & Skill</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="main" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        <img src="{{ asset('images/gradpic.png') }}" alt="gradpic" width="50%" height="70%" class="img-circle">
                    </div>
                    <div class="col-md-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        <strong class="intro" > Hi, I am </strong><h1><strong class="myName"> Melwin N. Sabales</strong></h1>

                        <div class="d-flex justify-content-center contactUs">
                            <a href="https://web.facebook.com/melwin.sabales/" target="_blank"><i class="ri-facebook-fill"></i></a>
                            <a href="https://www.instagram.com/melwin.sabales/" target="_blank"><i class="ri-instagram-line"></i></a>
                            <a href="https://twitter.com/MelwinLangToPre" target="_blank"><i class="ri-twitter-fill"></i></a>
                            <a href="https://www.linkedin.com/in/melwin-sabales-88a2a41ba/" target="_blank"><i class="ri-linkedin-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <main>
            <!-- About -->
            <section id="about" class="about">
                <div class="container">
                    <h1 data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">ABOUT</h1>
                    <p class="text-justify" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        An Junior Web Developer, creating responsive website design with good functionality and with a user friendly experience.
                        Almost two years of experience as a Junior Web Developer implementing Changes and Maintain its function to make a smooth interaction to the user.</p>
                    <div class="row">
                        <div class="col-md-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                            <img src="{{ asset('images/gradpic.jpg') }}" alt="gradpic1" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-md-9" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="ri-arrow-drop-right-fill"></i><strong>Birthday: </strong> December 07, 1995</li>
                                        <li><i class="ri-arrow-drop-right-fill"></i><strong>Gender:</strong> Male</li>
                                        <li><i class="ri-arrow-drop-right-fill"></i><strong>Degree:</strong> Bachelor Degree, Information Technology</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="ri-arrow-drop-right-fill"></i><strong>Age: </strong> 25</li>
                                        <li><i class="ri-arrow-drop-right-fill"></i><strong>Address:</strong> 492 Shoe. Ave. Sto. Niño Marikina City</li>
                                        <li><i class="ri-arrow-drop-right-fill"></i><strong>Country:</strong> Philippines</li>
                                    </ul>
                                </div>
                                <div class="col-md-12 myResume"> 
                                    <ul>
                                        <li><a target="_blank" href="https://drive.google.com/file/d/1M04XqLjVAylcLaz_G_5PZj3BxyN6ZkhK/view?usp=sharing">My Resume(pdf)..</a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- End About -->
            
            <section id="tools">
                <div class="container" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"data-aos-delay="300"data-aos-offset="0" data-aos-duration="1000">
                    <h1 class="text-center">Dev Tools</h1>
                    <div class="row align-items-center justify-content-center category">
                        <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{ asset('images/html.png') }}" alt="tools1" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{ asset('images/css.png') }}" alt="tools2" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{ asset('images/javascript.png') }}" alt="tools3" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{ asset('images/bootstrap.png') }}" alt="tools8" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{ asset('images/jquery.png') }}" alt="tools4" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{ asset('images/php.png') }}" alt="tools5" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{ asset('images/mysql.png') }}" alt="tools6" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{ asset('images/laravel.png') }}" alt="tools7" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section id="skills">
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="500">
                    <h1>SKILLS</h1>

                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="card" data-aos="fade-up" data-aos-duration="1000">
                                <div class="card-body" style="height:100px;">
                                    <span class="html"><img src="{{ asset('images/html.png') }}" alt="tools1" class="img-fluid"></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card" data-aos="fade-up" data-aos-duration="1500">
                                <div class="card-body" style="height:100px;">
                                    <span class="css"><span class="html"><img src="{{ asset('images/css.png') }}" alt="tools1" class="img-fluid"></span></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">60%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card" data-aos="fade-up" data-aos-duration="2000">
                                <div class="card-body" style="height:100px;">
                                    <span class="javascript"><img src="{{ asset('images/javascript.png') }}" alt="tools1" class="img-fluid"></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="card" data-aos="fade-up" data-aos-duration="2500">
                                <div class="card-body" style="height:100px;">
                                    <span class="jquery"><img src="{{ asset('images/jquery.png') }}" alt="tools1" class="img-fluid"></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">
                            <div class="card" data-aos="fade-up" data-aos-duration="2500">
                                <div class="card-body" style="height:100px;">
                                    <span class="php"><img src="{{ asset('images/php.png') }}" alt="tools1" class="img-fluid"></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card" data-aos="fade-up" data-aos-duration="2000">
                                <div class="card-body" style="height:100px;">
                                    <span class="bootstrap"><img src="{{ asset('images/bootstrap.png') }}" alt="tools1" class="img-fluid"></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card" data-aos="fade-up" data-aos-duration="1500">
                                <div class="card-body" style="height:100px;">
                                    <span class="mysql"><img src="{{ asset('images/mysql.png') }}" alt="tools1" class="img-fluid"></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="card" data-aos="fade-up" data-aos-duration="1000">
                                <div class="card-body" style="height:100px;">
                                    <span class="laravel"><img src="{{ asset('images/laravellogo.png') }}" alt="tools1" class="img-fluid"></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <h1>Contact</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 d-flex align-items-stretch">
                                    <div class="info">
                                        <div class="address">
                                            <i class="icofont-google-map"></i>
                                            <h4>Location:</h4>
                                            <p>492 Shoe ave. Sto. Niño Marikina City</p>
                                        </div>

                                        <div class="email">
                                            <i class="icofont-envelope"></i>
                                            <h4>Email:</h4>
                                            <p>melwinsabales@gmail.com</p>
                                        </div>

                                        <div class="phone">
                                            <i class="icofont-phone"></i>
                                            <h4>Call:</h4>
                                            <p>+63 966-355-0008</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 links1">
                                    <h4 class="d-flex justify-content-center">My Social Links</h4>
                                    <div class="d-flex justify-content-md-center social-links">
                                        <a href="https://web.facebook.com/melwin.sabales/" target="_blank"><i class="ri-facebook-fill"></i></a>
                                        <a href="https://www.instagram.com/melwin.sabales/" target="_blank"><i class="ri-instagram-line"></i></a>
                                        <a href="https://twitter.com/MelwinLangToPre" target="_blank"><i class="ri-twitter-fill"></i></a>
                                        <a href="https://www.linkedin.com/in/melwin-sabales-88a2a41ba/" target="_blank"><i class="ri-linkedin-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}" defer></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('assets/js/main.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js" defer></script>
    </body>
</html>
