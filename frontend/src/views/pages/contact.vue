<template>
  <main class="main">
    <!-- breadcrumb -->
    <div
      class="site-breadcrumb"
      style="background: url(assets/img/breadcrumb/background-1.png)"
    >
      <div class="container">
        <h2 class="breadcrumb-title">{{ t("contact_us") }}</h2>
        <ul class="breadcrumb-menu">
          <li>
            <a href="/">{{ t("home") }}</a>
          </li>
          <li class="active">{{ t("contact_us") }}</li>
        </ul>
      </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact area -->
    <div class="contact-area py-120">
      <div class="container">
        <div class="contact-content">
          <div class="row">
            <div class="col-md-3">
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-map-location-dot"></i>
                </div>
                <div class="contact-info-content">
                  <h5>{{ t('our_address') }}</h5>
                  <p>{{ generalInfo.address }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-phone-volume"></i>
                </div>
                <div class="contact-info-content">
                  <h5>{{ t('call_us') }}</h5>
                  <p>{{ generalInfo.phone }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-envelopes"></i>
                </div>
                <div class="contact-info-content">
                  <h5>{{ t('mail_us') }}</h5>
                  <p>{{ generalInfo.email }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-alarm-clock"></i>
                </div>
                <div class="contact-info-content">
                  <h5>{{ t('opening') }}</h5>
                  <p>{{ generalInfo.working_hours }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <!-- end contact area -->

  </main>
</template>
<script setup>
import api from "@/api/axios";
import { ref, onMounted } from "vue";
import { PUBLIC_API_PATH } from "@/config";
import { useI18n } from "vue-i18n";

const { t } = useI18n();
const loading = ref(false);

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

const generalInfo = ref([]);
const generalInfoData = () => fetchWithCache("/general", generalInfo);


onMounted(generalInfoData);
</script>
