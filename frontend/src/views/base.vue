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
                  <li>
                    <a href="mailto:info@example.com"
                      ><i class="far fa-envelopes"></i> {{ generalInfo.email }}</a
                    >
                  </li>
                  <li>
                    <a href="tel:+21236547898"
                      ><i class="far fa-phone-volume"></i> {{ generalInfo.phone }}</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="far fa-alarm-clock"></i> {{ generalInfo.working_hours }}</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="header-top-right">
              <div class="header-top-lang">
                <div class="dropdown">
                  <a
                    href="#"
                    class="top-lang dropdown-toggle"
                    data-bs-toggle="dropdown"
                  >
                    <i class="fal fa-globe"></i> {{ currentLangLabel }}
                  </a>

                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a
                        class="dropdown-item"
                        href="#"
                        @click.prevent="setLanguage('en')"
                      >
                        English
                      </a>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="#"
                        @click.prevent="setLanguage('sw')"
                      >
                        Swahili
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="header-top-social">
                <span>{{ t('follow_us') }}: </span>
                <a :href="generalInfo.facebook"><i class="fab fa-facebook"></i></a>
                <a :href="generalInfo.twitter"><i class="fab fa-x-twitter"></i></a>
                <a :href="generalInfo.instagram"><i class="fab fa-instagram"></i></a>
                <a :href="generalInfo.linkedin"><i class="fab fa-linkedin"></i></a>
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
              <img src="/assets/img/logo/abicelia-logo.png" alt="logo" />
            </a>
            <div class="mobile-menu-right">
              <div class="search-btn">
                <button type="button" class="nav-right-link search-box-outer">
                  <i class="far fa-search"></i>
                </button>
              </div>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#main_nav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-mobile-icon"
                  ><i class="far fa-bars"></i
                ></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="main_nav">
              <ul class="navbar-nav">
                <li v-for="menu in menus" :key="menu.id" class="nav-item">
                  <a class="nav-link" :href="menu.menu_path">{{ menu.name }}</a>
                </li>
              </ul>
              <div class="nav-right">
                
                <div class="call-wrap">
                  <div class="icon">
                    <i class="far fa-phone-volume"></i>
                  </div>
                  <div class="content">
                    <span>Call 24/7</span>
                    <h6><a :href="generalInfo.phone">{{ generalInfo.phone }}</a></h6>
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
          <input
            type="search"
            name="search-field"
            class="form-control"
            placeholder="Search Here..."
            required
          />
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
                    <img src="/assets/img/logo/abicelia-logo.png" alt="" />
                  </a>
                  <p class="mb-4">
                    {{ generalInfo.bio }}
                  </p>
                  
                </div>
              </div>
              <div class="col-md-6 col-lg-2">
                <div class="footer-widget-box list">
                  <h4 class="footer-widget-title">{{ t('company') }}</h4>
                  <ul class="footer-list">
                    <li v-for="menu in menus" :key="menu.id">
                        <a  :href="menu.menu_path"><i class="far fa-arrow-right"></i> {{ menu.name }}</a>                    
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-2">
                <div class="footer-widget-box list">
                  <h4 class="footer-widget-title">{{ t('services') }}</h4>
                  <ul class="footer-list">
                    <li v-for="service in our_service" :key="service">
                      <a href="#"
                        ><i class="far fa-arrow-right"></i>{{ service.header }}</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer-widget-box">
                  <h4 class="footer-widget-title">{{ t('get_intouch') }}</h4>
                  <ul class="footer-contact">
                    <li>
                      <div class="icon">
                        <i class="far fa-location-dot"></i>
                      </div>
                      <div class="content">
                        <h6>{{ t('our_address') }}</h6>
                        <p>{{ generalInfo.address }}</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <i class="far fa-phone"></i>
                      </div>
                      <div class="content">
                        <h6>{{ t('call_us') }}</h6>
                        <a href="tel:+21236547898">{{ generalInfo.phone }}</a>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <i class="far fa-envelope"></i>
                      </div>
                      <div class="content">
                        <h6>{{ t('mail_us') }}</h6>
                        <a href="mailto:info@example.com">{{ generalInfo.email }}</a>
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
                &copy; {{ t('copyright') }}
              </p>
            </div>
            <div class="col-md-6 align-self-center">
              <ul class="footer-social">
                <li>
                  <a :href="generalInfo.facebook"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a :href="generalInfo.twitter"><i class="fab fa-x-twitter"></i></a>
                </li>
                <li>
                  <a :href="generalInfo.linked"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a :href="generalInfo.instagram"><i class="fab fa-instagram"></i></a>
                </li>
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
import { ref, onMounted, computed } from "vue";
import { useI18n } from "vue-i18n";

const { t, locale } = useI18n()


const menus = ref([]);
const loading = ref(false);
const currentLang = ref(localStorage.getItem("lang") || "en");


/* ======================
   Load Menus
====================== */
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

const generalInfo = ref([]);
const generalInfoData = async () => {
  loading.value = true;
  try {
    const res = await api.get("/general");
    generalInfo.value = res.data;
  } catch (err) {
    console.error(err);
  } finally {
    loading.value = false;
  }
};

const our_service = ref([]);
const services = async () => {
  loading.value = true;
  try {
    const res = await api.get("/services");
    our_service.value = res.data;
  } catch (err) {
    console.error(err);
  } finally {
    loading.value = false;
  }
};


/* ======================
   Change Language
====================== */
const setLanguage = async (lang) => {
  currentLang.value = lang;

  // store in localStorage
  localStorage.setItem("lang", lang);

  // reload data without page refresh
  //await loadMenus();
  // Reload entire app
  window.location.reload();
};

/* ======================
   Computed Label
====================== */
const currentLangLabel = computed(() =>
  currentLang.value === "sw" ? "Swahili" : "English",
);

onMounted(loadMenus);
onMounted(generalInfoData);
onMounted(services);
</script>
