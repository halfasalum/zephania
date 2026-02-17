<template>
  <main class="main">
    <!-- breadcrumb -->
    <div
      class="site-breadcrumb"
      style="background: url(assets/img/breadcrumb/background-1.png)"
    >
      <div class="container">
        <h2 class="breadcrumb-title">{{ t('our_service') }}</h2>
        <ul class="breadcrumb-menu">
          <li><a href="/">{{ t('home') }}</a></li>
          <li class="active">{{ t('our_service') }}</li>
        </ul>
      </div>
    </div>
    <!-- breadcrumb end -->

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
       
      </div>
    </div>
    <!-- service-area -->

   
  </main>
</template>
<script setup>
import api from "@/api/axios";
import { ref, onMounted } from "vue";
import { PUBLIC_API_PATH } from "@/config";
import { useI18n } from "vue-i18n";

const { t } = useI18n();
const loading = ref(false);

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

onMounted(services);
</script>
