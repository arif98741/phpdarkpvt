<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url(); ?>assets/front/image/logo.png" type="image/x-icon" />

    <?php if ($meta_description != '') : ?>
    <meta name="description" content="<?php echo substr($meta_description, 0, 280); ?>" />
    <?php else : ?>
    <meta name="description" content="PHPDark is a php related tutorial site where basic, advanced, oop can be learned. PHPDark provides project related support and guidelines.PHPDark is a php related tutorial site where basic, advanced, oop can be learned. PHPDark provides project related support and guidelines" />
    <?php endif; ?>

    <!-- facebook og meta -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PHPDark.com - Your Ultimate PHP Guide" />
    <meta property="og:description" content="PHPDark is a php related tutorial site where basic, advanced, oop can be learned. PHPDark provides project related support and guidelines.PHPDark is a php related tutorial site where basic, advanced, oop can be learned. PHPDark provides project related support and guidelines" />
    <meta property="og:url" content="https://phpdark.com/" />
    <meta property="og:site_name" content="Phpdark" />
    <meta property="og:image" content="<?php echo base_url(); ?>assets/front/image/logo.png" />
    <meta property="og:image:secure_url" content="<?php echo base_url(); ?>assets/front/image/logo.png" />
    <!-- faceboo k og meta -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/style.css">
    <!--  <link rel="stylesheet"  href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/styles/default.min.css"> -->
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/front/plugins/hightlight/styles/<?php echo $this->session->h_css; ?>">

    <?php if ($title != '') : ?>
    <title><?php echo $title; ?> - PHPDark.com</title>

    <?php else : ?>
    <title>PHPDark.com - Your Ultimate PHP Guide</title>
    <?php endif; ?>

    <!-- google tag manager for analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106256366-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-106256366-1');
    </script>

</head>

<body>
    <!-- navigation start -->
    <div id="navbar">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/front/image/logo.png" alt="logo-phpdark.com"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">-</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PHP
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>post/view/basic-php/41">Basic PHP</a>
                        <a class="dropdown-item" href="<?php echo base_url();  ?>post/view/php-advanced/42">PHP
                            Advanced</a>
                        <!--   <a class="dropdown-item" href="#">PHP Arrays</a> -->
                        <a class="dropdown-item"
                            href="<?php echo base_url();  ?>post/view/oop-oriented-programming-introduction/47">PHP
                            OOP</a>

                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>blog">All Blogs</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>post/view/basic-php/41">Blog
                            Category</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Project
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Free Project
                        </a>
                        <a class="dropdown-item" href="#">Paid Project</a>


                    </div>
                </li>


            </ul>
            <?php echo form_open('search_hit', array('class' => 'form-inline search-form my-10 my-lg-0')); ?>

            <input class="form-control mr-sm-2" name="key" type="text" placeholder="Search here..." aria-label="Search">
            <button class="btn btn-outline-success search-btn my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
    </nav>
</div>
    <!-- navigation end -->
    <!-- below nav start -->
    <section id="below-nav">
        <div class="navigation-item">
            <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>&nbsp;Home</a>
            <a href="<?php echo base_url();  ?>post/view/html-first-post/39">HTML</a>
            <a href="<?php echo base_url();  ?>post/view/css-introduction-/48">CSS</a>
            <a href="<?php echo base_url();  ?>post/view/javascript-introduction/49">Javascript</a>
            <a href="<?php echo base_url();  ?>post/view/basic-php/41">PHP</a>
            <a href="<?php echo base_url(); ?>post/view/codeigniter/40">Codeigniter</a>
            <a href="<?php echo base_url(); ?>post/view/laravel/38">Laravel</a>
            <a href="<?php echo base_url(); ?>about-us">About Us</a>
            <a href="<?php echo base_url(); ?>contact-us">Contact Us</a>
            <a href="<?php echo base_url(); ?>blog">Blog</a>
        </div>
    </section>

    <!-- below nav end -->