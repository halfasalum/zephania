<template>
<body class="home-4">

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <header class="header">
        <!-- top header -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="mailto:info@example.com"><i class="far fa-envelopes"></i>
                                        info@example.com</a></li>
                                <li><a href="tel:+21236547898"><i class="far fa-phone-volume"></i> +2 123 654 7898</a>
                                </li>
                                <li><a href="#"><i class="far fa-alarm-clock"></i> Sun - Fri (08AM - 10PM)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-lang">
                            <div class="dropdown">
                                <a href="#" class="top-lang dropdown-toggle" data-bs-toggle="dropdown"><i class="fal fa-globe"></i> Language</a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                  <li><a class="dropdown-item" href="#">English</a></li>
                                  <li><a class="dropdown-item" href="#">German</a></li>
                                  <li><a class="dropdown-item" href="#">Russian</a></li>
                                  <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-top-social">
                            <span>Follow Us: </span>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top header end -->

        <!-- navbar -->
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="index.html">
                        <img src="/assets/img/logo/logo.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link search-box-outer"><i class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li v-for="menu in menus" :key="menu.id" class="nav-item">
                                <a class="nav-link" :href="menu.menu_path">{{ menu.name }}</a>
                            </li>
                            
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                          
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Case Study</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="case-study.html">Case Study</a></li>
                                    <li><a class="dropdown-item" href="case-study-single.html">Case Study Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <div class="nav-right">
                            <div class="search-btn">
                                <button type="button" class="nav-right-link search-box-outer"><i class="far fa-search"></i></button>
                            </div>
                            <div class="call-wrap">
                                <div class="icon">
                                    <i class="far fa-phone-volume"></i>
                                </div>
                                <div class="content">
                                    <span>Call 24/7</span>
                                    <h6><a href="tel:+21236547898">+2 44 555 666</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end -->
    </header>
    <!-- header area end -->


    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" class="form-control" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->


    <router-view />


    <!-- footer area -->
    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="footer-widget-wrap pt-100 pb-70">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-5">
                            <div class="footer-widget-box about-us">
                                <a href="#" class="footer-logo">
                                    <img src="/assets/img/logo/logo-light.png" alt="">
                                </a>
                                <p class="mb-4">
                                    We are many variations of passages available but the majority have suffered alteration
                                    in some form by injected humour words believable.
                                </p>
                                <div class="footer-newsletter">
                                    <h6>Subscribe Our Newsletter</h6>
                                    <div class="subscribe-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email">
                                                <button class="theme-btn" type="submit">
                                                    Subscribe <i class="far fa-paper-plane"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Company</h4>
                                <ul class="footer-list">
                                    <li><a href="about.html"><i class="far fa-arrow-right"></i>About Us</a></li>
                                    <li><a href="blog.html"><i class="far fa-arrow-right"></i>Update News</a></li>
                                    <li><a href="contact.html"><i class="far fa-arrow-right"></i>Contact Us</a></li>
                                    <li><a href="testimonial.html"><i class="far fa-arrow-right"></i>Testimonials</a></li>
                                    <li><a href="terms.html"><i class="far fa-arrow-right"></i>Terms Of Service</a></li>
                                    <li><a href="privacy.html"><i class="far fa-arrow-right"></i>Privacy policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Services</h4>
                                <ul class="footer-list">
                                    <li><a href="service.html"><i class="far fa-arrow-right"></i>Tax Planning</a></li>
                                    <li><a href="service.html"><i class="far fa-arrow-right"></i>Personal Tax</a></li>
                                    <li><a href="service.html"><i class="far fa-arrow-right"></i>Insurance Tax</a></li>
                                    <li><a href="service.html"><i class="far fa-arrow-right"></i>Tax Audit Support</a></li>
                                    <li><a href="service.html"><i class="far fa-arrow-right"></i>Corporate Tax</a></li>
                                    <li><a href="service.html"><i class="far fa-arrow-right"></i>Tax Advisory</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-widget-box">
                                <h4 class="footer-widget-title">Get In Touch</h4>
                                <ul class="footer-contact">
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Our Address</h6>
                                            <p>25/B Milford Road, New York, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Call Us</h6>
                                            <a href="tel:+21236547898">+2 123 654 7898</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Mail Us</h6>
                                            <a href="mailto:info@example.com">info@example.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> Taxrio </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
    <!-- scroll-top end -->




</body>
</template>
<script setup>
import api from "@/api/axios";
import { ref, onMounted } from "vue";
const menus = ref([]);
const loading = ref(false);

const loadMenus = async () => {
  loading.value = true;
  try {
    const res = await api.get("/menus");
    menus.value = res.data;
  } catch (err) {
    console.error(err);
  } finally {
    loading.value = false;
  }
};

onMounted(loadMenus);
</script>