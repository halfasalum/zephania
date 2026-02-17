<template>
  <main class="main">
    <!-- breadcrumb -->
    <div
      class="site-breadcrumb"
      style="background: url(assets/img/breadcrumb/background-1.png)"
    >
      <div class="container">
        <h2 class="breadcrumb-title">{{ t('about_us') }}</h2>
        <ul class="breadcrumb-menu">
          <li><a href="/">{{ t('home') }}</a></li>
          <li class="active">{{ t('about_us') }}</li>
        </ul>
      </div>
    </div>
    <!-- breadcrumb end -->

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
                  ><i class="fas fa-percent"></i> {{ t("about_us") }}</span
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
                <h6 class="title">{{ t("project_done") }}</h6>
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
                <h6 class="title">{{ t("happy_clients") }}</h6>
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
                <h6 class="title">{{ t("experts_staff") }}</h6>
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
                <h6 class="title">{{ t("win_awards") }}</h6>
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
                ><i class="fas fa-percent"></i> {{ t("our_team") }}</span
              >
              <h2 class="site-title">{{ t("our_expert") }}</h2>
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

   
  </main>
</template>
<script setup>
import api from "@/api/axios";
import { ref, onMounted } from "vue";
import { PUBLIC_API_PATH } from "@/config";
import { useI18n } from "vue-i18n";

const { t } = useI18n();
const loading = ref(false);

const aboutUs = ref([]);
const aboutUsData = async () => {
  loading.value = true;
  try {
    const res = await api.get("/about-us");
    aboutUs.value = res.data;
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

onMounted(aboutUsData);
onMounted(statsData);
onMounted(expertsData);
</script>
