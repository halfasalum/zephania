<template>
  <main class="main">
    <!-- breadcrumb -->
    <div
      class="site-breadcrumb"
      style="background: url(assets/img/breadcrumb/background-1.png)"
    >
      <div class="container">
        <h2 class="breadcrumb-title">{{ t("our_service") }}</h2>
        <ul class="breadcrumb-menu">
          <li>
            <a href="/">{{ t("home") }}</a>
          </li>
          <li class="active">{{ t("our_service") }}</li>
        </ul>
      </div>
    </div>
    <!-- breadcrumb end -->

    <!-- service single -->
        <div class="service-single py-120">
            <div class="container">
                <div class="service-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="service-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">All Services</h4>
                                    <div class="category-list">
                                        <a href="#" v-for="category in serviceAll" :key="category.id" @click.prevent="openServiceDetails(category.id)">
                                            <i class="far fa-long-arrow-right"></i>{{ category.header }}
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8" v-if="serviceSingle">
                            <div class="service-details">
                                <div class="service-details">
                                    <h3 class="mb-30">{{ serviceSingle.header }}</h3>
                                    <div class="mb-20" v-html="serviceSingle.description"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service single end-->

  </main>
</template>
<script setup>
import api from "@/api/axios";
import { ref, onMounted } from "vue";
import { PUBLIC_API_PATH } from "@/config";
import { useI18n } from "vue-i18n";

const { t } = useI18n();
const loading = ref(false);

const serviceSingle = ref(null);
const fetchServiceSingle = async () => {
    loading.value = true;
    try {
        const id = localStorage.getItem('selected_service_id');
        if (!id) return;
        const res = await api.get(`/service/${id}?service_id=${id}`);
        serviceSingle.value = res.data;
    } catch(err) {
        console.error(err);
    } finally {
        loading.value = false;
    }
}

const serviceAll = ref([]);
const fetchServiceAll = async () => {
    loading.value = true;
    try {
        const res = await api.get("/services");
        serviceAll.value = res.data;
    } catch(err) {
        console.error(err);
    } finally {
        loading.value = false;
    }
}

const openServiceDetails = (id) => {
    localStorage.setItem('selected_service_id', id);
    fetchServiceSingle();
    window.scrollTo({ top: 0, behavior: 'smooth' });
};

onMounted(() => {
    fetchServiceSingle();
    fetchServiceAll();
});
</script>
