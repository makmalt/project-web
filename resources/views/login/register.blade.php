<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- SEO Meta Tags -->
        <meta
            name="description"
            content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users."
        />
        <meta name="author" content="Inovatik" />

        <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
        <meta property="og:site_name" content="" />
        <!-- website name -->
        <meta property="og:site" content="" />
        <!-- website link -->
        <meta property="og:title" content="" />
        <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" />
        <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" />
        <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" />
        <!-- where do you want your post to link to -->
        <meta property="og:type" content="article" />

        <!-- Website Title -->
        <title>Sign Up - Tivo - SaaS App HTML Landing Page Template</title>

        <!-- Styles -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
            rel="stylesheet"
        />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png" />
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        <!-- Preloader -->
        <div class="spinner-wrapper">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <!-- end of preloader -->

        <!-- Navigation -->
        <nav
            class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top"
        >
            <div class="container">
                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

                <!-- Image Logo -->
                <a href="{{route('index')}}"><img src="images/logo2.png" style="width: 100px; height: 65px" alt="logo"></a>

                <!-- Mobile Menu Toggle Button -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-awesome fas fa-bars"></span>
                    <span class="navbar-toggler-awesome fas fa-times"></span>
                </button>
                <!-- end of mobile menu toggle button -->

                <div
                    class="collapse navbar-collapse"
                    id="navbarsExampleDefault"
                >
                    <span class="nav-item ml-auto">
                        <a class="btn-outline-sm" href="log-in.html">LOG IN</a>
                    </span>
                </div>
            </div>
            <!-- end of container -->
        </nav>
        <!-- end of navbar -->
        <!-- end of navigation -->

        <!-- Header -->
        <header id="header" class="ex-2-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Sign Up</h1>
                        <p>
                            Isi form di bawah ini. Sudah punya akun? Silahkan
                            <a class="white" href="{{route('login')}}"> Log In</a>
                        </p>
                        <!-- Sign Up Form -->
                        <div class="form-container">
                            <form
                                method="post"
                                action="{{route('actionRegistrasi')}}"
                            >
                            @csrf
                                <div class="form-group">
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control-input"
                                        id="semail"
                                        required
                                    />
                                    <label class="label-control" for="semail"
                                        >Email</label
                                    >
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control-input"
                                        id="name"
                                        name="name"
                                        required
                                    />
                                    <label class="label-control" for="sname"
                                        >Nama</label
                                    >
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control-input"
                                        name="password"
                                        id="spassword"
                                        required
                                    />
                                    <label class="label-control" for="spassword"
                                        >Password</label
                                    >
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group checkbox">
                                    <input
                                        type="checkbox"
                                        id="sterms"
                                        value="Agreed-to-Terms"
                                        required
                                    />Saya setuju dengan Kebijakan Privasi dan Ketentuan 
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <button
                                        type="submit"
                                        class="form-control-submit-button"
                                    >
                                        SIGN UP
                                    </button>
                                </div>
                                <div class="form-message">
                                    <div
                                        id="smsgSubmit"
                                        class="h3 text-center hidden"
                                    ></div>
                                </div>
                            </form>
                        </div>
                        <!-- end of form container -->
                        <!-- end of sign up form -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </header>
        <!-- end of ex-header -->
        <!-- end of header -->

        <!-- Scripts -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="js/popper.min.js"></script>
        <!-- Popper tooltip library for Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Bootstrap framework -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script>
        <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script>
        <!-- Magnific Popup for lightboxes -->
        <script src="js/validator.min.js"></script>
        <!-- Validator.js - Bootstrap plugin that validates forms -->
        <script src="js/scripts.js"></script>
        <!-- Custom scripts -->
    </body>
</html>
