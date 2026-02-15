<template>
  <main class="main">
    <!-- hero area -->
    <div class="hero-section hs-1">
      <div class="hero-single">
        <div class="hero-shape">
          <img src="/assets/img/shape/02.png" alt="" />
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
              <div class="hero-content">
                
                <h1
                  class="hero-title"
                  data-animation="fadeInRight"
                  data-delay=".50s"
                >
                  {{ welcome_note.title }}
                </h1>
                <p data-animation="fadeInLeft" data-delay=".75s">
                  {{ welcome_note.content }}
                </p>
                
              </div>
              <div class="partner-area pa-1 mt-50">
                <div class="partner-content">
                  <h6>
                    Trusted by more than <span>300+</span> companies worldwide
                  </h6>
                  
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="hero-img-wrap">
                <div class="hero-img">
                  <img :src="PUBLIC_API_PATH + 'storage/' + welcome_note.image" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hero area end -->

    <!-- about area -->
    <div class="about-area py-120">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
              <div class="about-img">
                <img class="img-1" src="/assets/img/about/01.jpg" alt="" />
                <img class="img-2" src="/assets/img/about/02.jpg" alt="" />
                <div class="about-img-shape">
                  <img src="/assets/img/shape/06.png" alt="" />
                </div>
              </div>
              <div class="about-experience">
                <span>30</span>
                <h5>
                  Years Of <br />
                  Experience
                </h5>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-right wow fadeInUp" data-wow-delay=".25s">
              <div class="site-heading mb-3">
                <span class="site-title-tagline"
                  ><i class="fas fa-percent"></i> About Us</span
                >
                <h2 class="site-title">
                  Maximize your tax and savings with us
                </h2>
              </div>
              <p class="about-text">
                There are many variations of passages available but the majority
                have suffered alteration in some form, by injected humour, or
                randomised words which don't look even slightly believable.
              </p>
              <div class="about-list-wrap">
                <ul class="about-list">
                  <li>
                    <div class="icon">
                      <img src="/assets/img/icon/rating-2.svg" alt="" />
                    </div>
                    <div class="content">
                      <h4>Clients Satisfaction</h4>
                      <p>Take a look at our round up of the best shows.</p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="/assets/img/icon/team.svg" alt="" />
                    </div>
                    <div class="content">
                      <h4>Professional Team</h4>
                      <p>
                        It has survived words which not only five centuries.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
              <a href="#" class="theme-btn"
                >Discover More<i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- about area end -->

    <!-- service-area -->
        <div class="service-area bg py-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline light"><i class="fas fa-percent"></i> Our Services</span>
                            <h2 class="site-title">What We Offers To Our <span>Customers</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div v-for="service in our_service" :key="service.id" class="col-md-6 col-lg-3">
                        <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="service-shape">
                                <img src="/assets/img/shape/07.png" alt="">
                            </div>
                            <div class="service-icon">
                                <img src="/assets/img/icon/tax-planning.svg" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">
                                    <a href="service-single.html">{{ service.header }}</a>
                                </h3>
                                <p class="service-text">
                                    {{ service.subheader }}
                                </p>
                                <div class="service-arrow">
                                    <a href="service-single.html" class="theme-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                  
                </div>
                <div class="text-center mt-60 wow fadeInUp" data-wow-delay=".25s">
                    <a href="service.html" class="theme-btn">View All Services<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    <!-- service-area -->

    <!-- choose area -->
    <div class="choose-area py-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
              <div class="site-heading mb-0">
                <span class="site-title-tagline"
                  ><i class="fas fa-percent"></i> Why Choose Us</span
                >
                <h2 class="site-title">
                  {{ whyUs.header }}
                </h2>
                <p>
                 {{whyUs.subheader}}
                </p>
              </div>
              <div class="choose-content-wrap">
                <div class="choose-item">
                  <div class="choose-item-icon">
                    <img src="/assets/img/icon/money.svg" alt="" />
                  </div>
                  <div class="choose-item-info">
                    <h4>{{ whyUs.item1_header }}</h4>
                    <p>
                     {{ whyUs.item1_subheader }}
                    </p>
                  </div>
                </div>
                <div class="choose-item">
                  <div class="choose-item-icon">
                    <img src="/assets/img/icon/investment.svg" alt="" />
                  </div>
                  <div class="choose-item-info">
                    <h4>{{ whyUs.item2_header }}</h4>
                    <p>
                      {{ whyUs.item2_subheader }}
                    </p>
                  </div>
                </div>
                <div class="choose-item">
                  <div class="choose-item-icon">
                    <img src="/assets/img/icon/money-2.svg" alt="" />
                  </div>
                  <div class="choose-item-info">
                    <h4>{{ whyUs.item3_header }}</h4>
                    <p>
                      {{ whyUs.item3_subheader }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
              <img class="img-1" :src="PUBLIC_API_PATH+'storage/'+ whyUs.image_back" alt="" />
              <img class="img-2" :src="PUBLIC_API_PATH+'storage/'+ whyUs.image_front" alt="" />
              <img class="img-shape" src="/assets/img/shape/10.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- choose area end -->

    <!-- counter area -->
    <div class="counter-area pt-40 pb-40">
      <div class="counter-shape">
        <img class="img-1" src="/assets/img/shape/04.png" alt="" />
        <img class="img-2" src="/assets/img/shape/05.png" alt="" />
      </div>
      <div class="container">
        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
              <div class="icon">
                <img src="/assets/img/icon/tax.svg" alt="" />
              </div>
              <div class="content">
                <div class="info">
                  <span
                    class="counter"
                    data-count="+"
                    data-to="150"
                    data-speed="3000"
                    >{{ stats.project_done ?? 0 }}</span
                  >
                  <span class="unit">+</span>
                </div>
                <h6 class="title">Projects Done</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="counter-box wow fadeInDown" data-wow-delay=".25s">
              <div class="icon">
                <img src="/assets/img/icon/rating.svg" alt="" />
              </div>
              <div class="content">
                <div class="info">
                  <span
                    class="counter"
                    data-count="+"
                    data-to="25"
                    data-speed="3000"
                    >{{ stats.happy_clients ?? 0 }}</span
                  >
                  <span class="unit">+</span>
                </div>
                <h6 class="title">Happy Clients</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
              <div class="icon">
                <img src="/assets/img/icon/staff.svg" alt="" />
              </div>
              <div class="content">
                <div class="info">
                  <span
                    class="counter"
                    data-count="+"
                    data-to="120"
                    data-speed="3000"
                    >{{ stats.expert_staff ?? 0 }}</span
                  >
                  <span class="unit">+</span>
                </div>
                <h6 class="title">Experts Staff</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="counter-box wow fadeInDown" data-wow-delay=".25s">
              <div class="icon">
                <img src="/assets/img/icon/award.svg" alt="" />
              </div>
              <div class="content">
                <div class="info">
                  <span
                    class="counter"
                    data-count="+"
                    data-to="50"
                    data-speed="3000"
                    >{{ stats.win_awards ?? 0 }}</span
                  >
                  <span class="unit">+</span>
                </div>
                <h6 class="title">Win Awards</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- counter area end -->

    <!-- team-area -->
    <div class="team-area py-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <div
              class="site-heading text-center wow fadeInDown"
              data-wow-delay=".25s"
            >
              <span class="site-title-tagline"
                ><i class="fas fa-percent"></i> Our Team</span
              >
              <h2 class="site-title">Meet With Our <span>Experts</span></h2>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3" v-for="expert in experts" :key="expert.id">
            <div class="team-item wow fadeInUp" data-wow-delay=".25s">
              <div class="team-img">
                <img :src="PUBLIC_API_PATH + 'storage/' + expert.image_path" alt="thumb" />
                <div class="team-social-wrap">
                  <div class="team-social-btn">
                    <button type="button">
                      <i class="far fa-share-alt"></i>
                    </button>
                  </div>
                  <div class="team-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4><a href="#">{{ expert.name }}</a></h4>
                <span>{{ expert.designation }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- team-area end -->

    <!-- blog-area -->
    <div class="blog-area py-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <div
              class="site-heading text-center wow fadeInDown"
              data-wow-delay=".25s"
            >
              <span class="site-title-tagline"
                ><i class="fas fa-percent"></i> Our Updates</span
              >
              <h2 class="site-title"> Latest News </h2>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4" v-for="item in news" :key="item.date">
            <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
              <div class="blog-item-img">
                <img :src="PUBLIC_API_PATH + 'uploads/news/'+item.image" alt="Thumb" />
                <div class="blog-date">
                  <strong>{{ getDay(item.date) }}</strong>
                  <span>{{getMonthShort(item.date)}}</span>
                </div>
              </div>
              <div class="blog-item-info">
                <h4 class="blog-title">
                  <a href="blog-single.html"
                    >{{item.title}}</a
                  >
                </h4>
                <p>
                  {{item.content}}
                </p>
                <a class="theme-btn" href="blog-single.html"
                  >Read More<i class="fas fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- blog-area end -->
  </main>
</template>
<script setup>
import api from "@/api/axios";
import { ref, onMounted } from "vue";
import { PUBLIC_API_PATH } from "../config";


const welcome_note = ref([]);
const loading = ref(false);

// Date helpers — NO export!
const getDay = (dateString) => {
  const date = new Date(dateString);
  return date.getDate(); // returns 1–31
};

const getMonthShort = (dateString) => {
  const date = new Date(dateString);
  return date.toLocaleString("en-US", { month: "short" }); // "Jan", "Feb", ...
};

const getMonthNumber = (dateString) => {
  const date = new Date(dateString);
  return date.getMonth() + 1; // 1–12
};

const getMonthLong = (dateString) => {
  const date = new Date(dateString);
  return date.toLocaleString("en-US", { month: "long" }); // "January", "February"
};


const welcomeNote = async () => {
  loading.value = true;
  try {
    const res = await api.get("/welcome-note");
    welcome_note.value = res.data;  
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

const testimonials = ref([]);
const testimonialsData = async () => {
  loading.value = true;
  try {
    const res = await api.get("/testimonials");
    testimonials.value = res.data;  
  } catch (err) {
    console.error(err);
  } finally {
    loading.value = false;
  }
};

const news = ref([]);
const newsData = async () => {
  loading.value = true;
  try {
    const res = await api.get("/news");
    news.value = res.data;  
  } catch (err) {
    console.error(err);
  } finally {
    loading.value = false;
  }
};

const stats = ref([]);
const statsData = async () => {
  loading.value = true;
  try {
    const res = await api.get("/stats");
    stats.value = res.data;  
  } catch (err) {
    console.error(err);
  } finally {
    loading.value = false;
  }
};

const experts = ref([]);
const expertsData = async () => {
  loading.value = true;
  try {
    const res = await api.get("/experts");
    experts.value = res.data;  
  } catch (err) {
    console.error(err);
  } finally {
    loading.value = false;
  }
};

const whyUs = ref([]);
const whyUsData = async () => {
  loading.value = true;
  try {
    const res = await api.get("/why-us");
    whyUs.value = res.data;  
  } catch (err) {
    console.error(err);
  } finally {
    loading.value = false;
  }
};

onMounted(welcomeNote);
onMounted(services);
onMounted(newsData);
onMounted(statsData);
onMounted(expertsData);
onMounted(whyUsData);

</script>

