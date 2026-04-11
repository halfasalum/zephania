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
                    {{ t("trusted") }}
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="hero-img-wrap">
                <div class="hero-img">
                  <img
                    :src="PUBLIC_API_PATH + 'storage/' + welcome_note.image"
                    alt=""
                  />
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
              <div class="xabout-img choose-img">
                <img
                  class="img-1"
                  :src="PUBLIC_API_PATH + 'storage/' + aboutUs.image_back"
                  alt=""
                />
                <img
                  class="img-2"
                  :src="PUBLIC_API_PATH + 'storage/' + aboutUs.image_front"
                  alt=""
                />
                <div class="about-img-shape">
                  <img src="/assets/img/shape/06.png" alt="" />
                </div>
              </div>
              <div class="about-experience">
                <span>{{ aboutUs.experience }}</span>
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
                  ><i class="fas fa-percent"></i> {{ t('about_us') }}</span
                >
                <h2 class="site-title">
                  {{ aboutUs.header }}
                </h2>
              </div>
              <p class="about-text">
                {{ aboutUs.contents }}
              </p>
              <div class="about-list-wrap">
                <ul class="about-list">
                  <li>
                    <div class="icon">
                      <img src="/assets/img/icon/rating-2.svg" alt="" />
                    </div>
                    <div class="content">
                      <h4>{{ aboutUs.item1_header }}</h4>
                      <p>{{ aboutUs.item1_subheader }}</p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="/assets/img/icon/team.svg" alt="" />
                    </div>
                    <div class="content">
                      <h4>{{ aboutUs.item2_header }}</h4>
                      <p>
                        {{ aboutUs.item2_subheader }}
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
            <div
              class="site-heading text-center wow fadeInDown"
              data-wow-delay=".25s"
            >
              <span class="site-title-tagline light"
                ><i class="fas fa-percent"></i> {{  t('our_service') }}</span
              >
              <h2 class="site-title">
                {{ t('what_we_offer') }}
              </h2>
              <div class="heading-divider"></div>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div
            v-for="service in our_service"
            :key="service.id"
            class="col-md-6 col-lg-3"
          >
            <div class="service-item wow fadeInUp" data-wow-delay=".25s">
              <div class="service-shape">
                <img src="/assets/img/shape/07.png" alt="" />
              </div>
              <div class="service-icon">
                <img src="/assets/img/icon/tax-planning.svg" alt="" />
              </div>
              <div class="service-content">
                <h3 class="service-title">
                  <a href="service-single.html">{{ service.header }}</a>
                </h3>
                <p class="service-text">
                  {{ service.subheader }}
                </p>
                <div class="service-arrow">
                  <a href="service-single.html" class="theme-btn"
                    >Read More<i class="fas fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-60 wow fadeInUp" data-wow-delay=".25s">
          <a href="service.html" class="theme-btn"
            >View All Services<i class="fas fa-arrow-right"></i
          ></a>
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
                  ><i class="fas fa-percent"></i> {{ t('what_us') }}</span
                >
                <h2 class="site-title">
                  {{ whyUs.header }}
                </h2>
                <p>
                  {{ whyUs.subheader }}
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
              <img
                class="img-1"
                :src="PUBLIC_API_PATH + 'storage/' + whyUs.image_back"
                alt=""
              />
              <img
                class="img-2"
                :src="PUBLIC_API_PATH + 'storage/' + whyUs.image_front"
                alt=""
              />
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
                    class="counter text-black"
                    data-count="+"
                    data-to="150"
                    data-speed="3000"
                    >{{ stats.project_done ?? 0 }}</span
                  >
                  <span class="unit">+</span>
                </div>
                <h6 class="title text-black">{{ t('project_done') }}</h6>
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
                <h6 class="title">{{ t('happy_clients') }}</h6>
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
                <h6 class="title">{{ t('experts_staff') }}</h6>
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
                <h6 class="title">{{ t('win_awards') }}</h6>
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
                ><i class="fas fa-percent"></i> {{ t('our_team') }}</span
              >
              <h2 class="site-title">{{ t('our_expert') }}</h2>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div
            class="col-md-6 col-lg-3"
            v-for="expert in experts"
            :key="expert.id"
          >
            <div class="team-item wow fadeInUp" data-wow-delay=".25s">
              <div class="team-img">
                <img
                  :src="PUBLIC_API_PATH + 'storage/' + expert.image_path"
                  alt="thumb"
                />
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
                <h4>
                  <a href="#">{{ expert.name }}</a>
                </h4>
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
                ><i class="fas fa-percent"></i> {{ t('our_updates') }}</span
              >
              <h2 class="site-title">{{ t('latest_news') }}</h2>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4" v-for="item in news" :key="item.date">
            <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
              <div class="blog-item-img">
                <img
                  :src="PUBLIC_API_PATH + 'uploads/news/' + item.image"
                  alt="Thumb"
                />
                <div class="blog-date">
                  <strong>{{ getDay(item.date) }}</strong>
                  <span>{{ getMonthShort(item.date) }}</span>
                </div>
              </div>
              <div class="blog-item-info">
                <h4 class="blog-title">
                  <a href="blog-single.html">{{ item.title }}</a>
                </h4>
                <p>
                  {{ item.content }}
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
import { useI18n } from 'vue-i18n'

const { t } = useI18n();

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

const CACHE_MINUTES = 5;

const fetchWithCache = async (endpoint, refVar) => {
  loading.value = true;
  const cacheKey = `cache_${endpoint}`;
  const cachedData = localStorage.getItem(cacheKey);
  const cacheTimestamp = localStorage.getItem(`${cacheKey}_timestamp`);

  if (cachedData && cacheTimestamp) {
    const now = new Date().getTime();
    if (now - parseInt(cacheTimestamp) < CACHE_MINUTES * 60 * 1000) {
      refVar.value = JSON.parse(cachedData);
      loading.value = false;
      return;
    }
  }

  try {
    const res = await api.get(endpoint);
    refVar.value = res.data;
    localStorage.setItem(cacheKey, JSON.stringify(res.data));
    localStorage.setItem(`${cacheKey}_timestamp`, new Date().getTime().toString());
  } catch (err) {
    console.error(err);
  } finally {
    loading.value = false;
  }
};

const welcomeNote = () => fetchWithCache("/welcome-note", welcome_note);

const our_service = ref([]);
const services = () => fetchWithCache("/services", our_service);

const news = ref([]);
const newsData = () => fetchWithCache("/news", news);

const stats = ref([]);
const statsData = () => fetchWithCache("/stats", stats);

const experts = ref([]);
const expertsData = () => fetchWithCache("/experts", experts);

const whyUs = ref([]);
const whyUsData = () => fetchWithCache("/why-us", whyUs);

const aboutUs = ref([]);
const aboutUsData = () => fetchWithCache("/about-us", aboutUs);

onMounted(welcomeNote);
onMounted(services);
onMounted(newsData);
onMounted(statsData);
onMounted(expertsData);
onMounted(whyUsData);
onMounted(aboutUsData);
</script>

<style scoped>
/* =========================================
   PREMIUM MODERN UI OVERRIDES
   ========================================= */

/* Hero Section Refinements */
.hero-section {
  position: relative;
  overflow: hidden;
}
.hero-section::before {
  content: '';
  position: absolute;
  top: -20%; left: -20%; width: 140%; height: 140%;
  background: radial-gradient(circle at top right, rgba(99, 102, 241, 0.15) 0%, transparent 40%),
              radial-gradient(circle at bottom left, rgba(236, 72, 153, 0.15) 0%, transparent 40%);
  animation: pulse-bg 15s ease-in-out infinite alternate;
  z-index: 0;
  pointer-events: none;
}
.hero-content, .hero-img-wrap, .container {
  position: relative;
  z-index: 1;
}

.hero-img img {
  border-radius: 24px;
  box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
  animation: float 6s ease-in-out infinite;
  transition: transform 0.3s ease;
}

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}
@keyframes pulse-bg {
  0% { transform: scale(1); opacity: 0.8; }
  100% { transform: scale(1.1); opacity: 1; }
}

/* Service & Generic Cards */
.service-item, .choose-item, .about-right {
  background: rgba(255, 255, 255, 0.85) !important;
  backdrop-filter: blur(12px) !important;
  -webkit-backdrop-filter: blur(12px) !important;
  border-radius: 24px !important;
  border: 1px solid rgba(255, 255, 255, 0.6) !important;
  box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.05) !important;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
}

.service-item:hover, .choose-item:hover {
  transform: translateY(-12px) scale(1.02) !important;
  box-shadow: 0 20px 40px -5px rgba(100, 116, 139, 0.15) !important;
  border-color: rgba(99, 102, 241, 0.3) !important;
}

/* About Items */
.about-img.choose-img img {
  border-radius: 24px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* Team Items */
.team-item {
  border-radius: 24px !important;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08) !important;
  background: white;
  transition: all 0.4s ease !important;
}
.team-item:hover {
  transform: translateY(-10px) !important;
  box-shadow: 0 25px 45px rgba(0,0,0,0.12) !important;
}
.team-item .team-img img {
  transition: transform 0.6s ease !important;
}
.team-item:hover .team-img img {
  transform: scale(1.08) !important;
}

/* Blog Items */
.blog-item {
  border-radius: 24px !important;
  overflow: hidden;
  background: #ffffff;
  box-shadow: 0 10px 30px rgba(0,0,0,0.06) !important;
  border: 1px solid rgba(0,0,0,0.03);
  transition: all 0.4s ease !important;
}
.blog-item:hover {
  transform: translateY(-10px) !important;
  box-shadow: 0 25px 50px rgba(0,0,0,0.1) !important;
}
.blog-item-img img {
  transition: transform 0.6s ease !important;
}
.blog-item:hover .blog-item-img img {
  transform: scale(1.1) !important;
}

/* Stats Counter */
.counter-box {
  background: linear-gradient(145deg, #ffffff, #f9fafb) !important;
  border-radius: 24px !important;
  padding: 40px 20px !important;
  box-shadow: 0 10px 25px rgba(0,0,0,0.05) !important;
  border: 1px solid rgba(255, 255, 255, 0.8) !important;
  transition: transform 0.4s ease, box-shadow 0.4s ease !important;
  position: relative;
  overflow: hidden;
}
.counter-box::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; height: 4px;
  background: linear-gradient(90deg, #6366f1, #ec4899);
  opacity: 0;
  transition: opacity 0.4s ease;
}
.counter-box:hover {
  transform: translateY(-8px) !important;
  box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
}
.counter-box:hover::before {
  opacity: 1;
}

/* Premium Buttons */
.theme-btn {
  background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%) !important;
  border: none !important;
  border-radius: 30px !important;
  color: white !important;
  box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3) !important;
  transition: all 0.3s ease !important;
  position: relative;
  overflow: hidden;
}
.theme-btn::after {
  content: '';
  position: absolute;
  top: 0; left: -100%; width: 100%; height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: left 0.5s ease;
}
.theme-btn:hover {
  transform: translateY(-3px) !important;
  box-shadow: 0 15px 25px rgba(99, 102, 241, 0.4) !important;
  color: #fff !important;
}
.theme-btn:hover::after {
  left: 100%;
}

/* Headings Upgrade */
.site-title {
  font-weight: 800;
  background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  letter-spacing: -0.5px;
}
</style>
