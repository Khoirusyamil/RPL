<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>ReminderTA</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{asset('landing_page/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('landing_page/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('landing_page/css/templatemo-ebook-landing.css')}}" rel="stylesheet">
<!--

TemplateMo 588 ebook landing

https://templatemo.com/tm-588-ebook-landing

-->
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <!-- <i class="navbar-brand-icon bi-book me-2"></i> -->
                        <span>Study Buddy</span>
                    </a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Author</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                            </li> -->

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>
                        

                        @auth
                        <li class="nav-item"><form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{route('logout')}}" class="nav-link"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                        @endauth
                        </ul>
                        
                        @guest
                        <div class="d-none d-lg-block m-1">
                            <a href="{{ route('login')}}" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <!-- <i class="btn-icon bi-cloud-download"></i> -->
                                <span>Login</span>
                            </a>
                        </div>

                        <div class="d-none d-lg-block m-1">
                            <a href="{{route('register')}}" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <!-- <i class="btn-icon bi-cloud-download"></i> -->
                                <span>Register</span>
                            </a>
                        </div>
                        @endguest
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mb-5 pb-lg-5 mb-lg-5">

                            <!-- <h6>Study Buddy</h6> -->

                            <!-- <h1 class="text-white mb-5">ReminderTA Group Fox</h1> -->

                            <!-- <a href="#section_2" class="btn custom-btn smoothscroll me-3">Discover More</a>

                            <a href="#section_3" class="link link--kale smoothscroll">Meet the Author</a> -->
                        </div>

                        <div class="hero-image-wrap col-lg-5 col-8 mt-1 mt-lg-1 right">
                            <img src="{{asset('landing_page/images/android.png')}}" class="hero-image img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <!-- <div class="avatar-group d-flex flex-wrap align-items-center">
                                <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt="">

                                <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="images/avatar/studio-portrait-emotional-happy-funny-smiling-boyfriend.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <div class="reviews-group mt-3 mt-lg-0">
                                    <strong>4.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>

                                    <small class="ms-3">2,564 reviews</small>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-lg-5"></section>


            <section class="book-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{asset('landing_page/images/laptop.png')}}" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="book-section-info">
                                <h6>Visi &amp; Misi</h6>


                                <h2 class="mb-4">About The Study Buddy</h2>

                                <p>Mewujudkan sistem manajemen kepada setiap mahasiswa terutama mahasiswa tingkat akhir atau semester 7-8, sehingga mereka dapat mengerjakan Tugas Akhir (TA) mereka dengan efisien.</p>

                                <p>Meningkatkan Efisiensi: Menyediakan alat dan fitur yang memudahkan mahasiswa dalam mengelola waktu dan tugas mereka.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h6>What's inside Study Buddy</h6>

                            <h2 class="mb-5">Our Feature</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <nav id="navbar-example3" class="h-100 flex-column align-items-stretch">
                                <nav class="nav nav-pills flex-column">
                                    <!-- <a class="nav-link smoothscroll" href="#item-1">Introduction</a> -->

                                    <a class="nav-link smoothscroll" href="#item-2">1: <strong>Calendar</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-3">2: <strong>Note</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-4">3: <strong>Submit Task</strong></a>

                                    <!-- <a class="nav-link smoothscroll" href="#item-5">Chapter 4: <strong>Habits</strong></a> -->
                                </nav>
                            </nav>
                        </div>

                        <div class="col-lg-8 col-12">
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                                <!-- <div class="scrollspy-example-item" id="item-1">
                                    <h5>Introducing </h5>

                                    <p>This ebook landing page is good to use for any purpose. This layout is based on Bootstrap 5 CSS framework.</p>

                                    <p><strong>What is Content Marketing?</strong> If you are wondering what content marketing is all about, this is the place to start.</p>

                                    <blockquote class="blockquote">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</blockquote>

                                    <p>When you need free HTML CSS templates, please visit Templatemo website which provides a variety of templates.</p>
                                </div> -->

                                <div class="scrollspy-example-item" id="item-2">
                                    <h5>Calendar</h5>

                                    <p>Kalender untuk menandakan tenggat waktu dan jadwal tugas yang harus diselesaikan </p>

                                    <p>Dengan menggunakan kalender, kita dapat dengan mudah mengatur prioritas, mengingat deadline penting, dan memastikan bahwa semua kegiatan berjalan sesuai rencana.</p>

                                    <p>Selain itu, kalender juga membantu kita untuk mengalokasikan waktu dengan lebih efisien, sehingga kita dapat menghindari penumpukan pekerjaan di saat-saat terakhir.</p>

                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-3">
                                            <a href="{{ route('kalender.index') }}" class="btn custom-btn custom-border-btn btn-naira btn-inverted ">
                                                <!-- <i class="btn-icon bi-cloud-download"></i> -->
                                                <span>Calendar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="scrollspy-example-item" id="item-3">
                                    <h5>Note</h5>

                                    <p>Note untuk mencatat materi yang didapatkan<p>

                                    <p>Catatan ini akan menjadi referensi berharga bagi mahasiswa, sehingga mahasiswa dapat mengulang kembali materi yang telah dipelajari dan memperdalam pemahaman.</p>

                                    <p>Dengan mencatat poin-poin penting, ide-ide utama, serta referensi yang relevan, mahasiswa dapat lebih mudah mengorganisir pemikiran dan mengintegrasikan pengetahuan yang telah mahasiswa peroleh selama masa studi.</p>

                                    <!-- <div class="row align-items-center">
                                        <div class="col-lg-6 col-12">
                                            <img src="images/tablet-screen-contents.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <p>Modern ebook ever</p>

                                            <p><strong>Lorem ipsum dolor sit amet, consive adipisicing elit, sed do eiusmod. tempor incididunt.</strong></p>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-3">
                                            <a href="{{ route('note.index') }}" class="btn custom-btn custom-border-btn btn-naira btn-inverted ">
                                                <!-- <i class="btn-icon bi-cloud-download"></i> -->
                                                <span>Note</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="scrollspy-example-item" id="item-4">
                                    <h5>Submit Task</h5>

                                    <p>Form untuk mengumpulkan file Tugas atau Tugas Akhir
                                    </p>
                                    <hr>

                                    <form class="custom-form ebook-download-form bg-white shadow" action="{{ route('task.create') }}" method="post" role="form" enctype="multipart/form-data">
                                    @csrf

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                        <!-- <div class="text-center mb-5">
                                            <h2 class="mb-1">Get your free ebook</h2>
                                        </div> -->

                                        <div class="ebook-download-form-body">
                                            <label style="margin-bottom: 10px; margin-left: 5px;" for="">Name :</label>
                                            <div class="input-group mb-4">
                                                <input type="text" name="name" id="name" class="form-control" aria-label="name" aria-describedby="basic-addon1" placeholder="Your Name" required>

                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="custom-form-icon bi-person"></i>
                                                </span>
                                            </div>

                                            <label style="margin-bottom: 10px; margin-left: 5px;" for="">Email :</label>
                                            <div class="input-group mb-4">
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" aria-label="email" aria-describedby="basic-addon2" required="">

                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="custom-form-icon bi-envelope"></i>
                                                </span>
                                            </div>

                                            <label style="margin-bottom: 10px; margin-left: 5px;" for="">NIM :</label>
                                            <div class="input-group mb-4">
                                                <input type="number" name="nim" id="nim" class="form-control" aria-label="nim" aria-describedby="basic-addon1" placeholder="Your NIM" required>

                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="custom-form-icon bi-person"></i>
                                                </span>
                                            </div>

                                            <label style="margin-bottom: 10px; margin-left: 5px;" for="">Class :</label>
                                            <div class="input-group mb-4">
                                                <input type="text" name="rombel" id="rombel" class="form-control" aria-label="rombel" aria-describedby="basic-addon1" placeholder="Your class" required>

                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="custom-form-icon bi-person"></i>
                                                </span>
                                            </div>

                                            <label style="margin-bottom: 10px; margin-left: 5px;" for="">File :</label>
                                            <div class="input-group mb-4">
                                                <input type="file" name="dokumen" id="dokumen" class="form-control" aria-label="dokumen" aria-describedby="basic-addon1" required>

                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="custom-form-icon bi-gear"></i>
                                                </span>
                                            </div>

                                            <label style="margin-bottom: 10px; margin-left: 5px;" for="">Keterangan :</label>
                                            <div class="input-group mb-4">
                                                <input type="text" name="keterangan" id="keterangan" class="form-control" aria-label="keterangan" aria-describedby="basic-addon1" placeholder="ex: Revisi Tugas / Skripsi" required>

                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="custom-form-icon bi-person"></i>
                                                </span>
                                            </div>

                                            <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                                <button type="submit" class="form-control">Submit Task</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- <img src="images/portrait-mature-smiling-authoress-sitting-desk.jpg" class="scrollspy-example-item-image img-fluid mb-3" alt=""> -->

                                    <!-- <p>You may want to contact us for more information about this template.</p> -->
                                </div>

                                <!-- <div class="scrollspy-example-item" id="item-5">
                                    <h5>Habits</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <p>You are not allowed to redistribute this template ZIP file on any other template collection website. Please contact TemplateMo for more information.</p>

                                    <p><strong>What is Free CSS Templates?</strong> Free CSS Templates are a variety of ready-made web pages designed for different kinds of websites.</p>

                                    <blockquote class="blockquote">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</blockquote>

                                    <p>You may browse TemplateMo website for more CSS templates. Thank you for visiting our website.</p>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="author-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{asset('landing_page/images/fox.png')}}" class="author-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <h6>Author</h6>

                            <h2 class="mb-4">Group Fox</h2>

                            <p>Berbagai mahasiswa terutama mahasiswa tingkat akhir tidak dapat memanajemen waktu mereka dengan baik, seringkali mereka tidak peduli atau tidak sempat mengerjakan tugas-tugas yang sudah diberikan apalagi Tugas Akhir (TA).</p>

                            <p>Itu semua membuat kesulitan mahasiswa untuk lulus dengan lancar, akan selalu ada revisi atau keterlambatan dalam mengerjakan tugas-tugas tersebut dan cukup memakan waktu yang sangat banyak dan tidak efektif.</p>
                        </div>

                    </div>
                </div>
            </section>


            <!-- <section class="reviews-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h6>Reviews</h6>

                            <h2>What people saying...</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">Sandy</span>

                                        <strong class="d-block text-white">Artist</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                        <strong>4.5</strong>

                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 my-5 my-lg-0">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">John</span>

                                        <strong class="d-block text-white">Producer</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                        <strong>3.5</strong>

                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="mb-0">If you need some specific CSS templates, you can Google with keywords such as templatemo one-page, templatemo portfolio, etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">Candy</span>

                                        <strong class="d-block text-white">VP, Design</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                        <strong>5</strong>

                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <p class="mb-0">Please tell your friends about our website that we provide 100% free CSS templates for everyone. Thank you for using our templates.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-6 mx-auto">
                            
                        </div>

                        <div class="col-lg-6 col-12">
                            <h6 class="mt-5">Say hi and talk to us</h6>

                            <h2 class="mb-4">Contact</h2>

                            <p class="mb-3">
                                <i class="bi-geo-alt me-2"></i>
                                Depok, Indonesia
                            </p>

                            <p class="mb-2">
                                <a href="#" class="contact-link">
                                    +62800-0000-0000
                                </a>
                            </p>

                            <p>
                                <a href="#" class="contact-link">
                                    studybuddy@gmail.com
                                </a>
                            </p>

                            <h6 class="site-footer-title mt-5 mb-3">Social</h6>

                            <ul class="social-icon mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>
                                
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                            <p class="copyright-text">Copyright © 2024 Study Buddy
                            <br><br><a rel="nofollow" href="#" target="_blank">designed by Group Fox</a></p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('landing_page/js/jquery.min.js')}}"></script>
        <script src="{{asset('landing_page/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('landing_page/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('landing_page/js/click-scroll.js')}}"></script>
        <script src="{{asset('landing_page/js/custom.js')}}"></script>

    </body>
</html>