<template>
  <main class="main">
    <!-- breadcrumb -->
    <div
      class="site-breadcrumb"
      style="background: url(assets/img/breadcrumb/background-1.png)"
    >
      <div class="container">
        <h2 class="breadcrumb-title">{{ t("news") }}</h2>
        <ul class="breadcrumb-menu">
          <li>
            <a href="/">{{ t("home") }}</a>
          </li>
          <li class="active">{{ t("news") }}</li>
        </ul>
      </div>
    </div>
    <!-- breadcrumb end -->

    <!-- blog single -->
        <div class="blog-single py-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content" v-if="newsSingle">
                                <div class="blog-thumb-img" v-if="newsSingle.image">
                                    <img :src="PUBLIC_API_PATH +'uploads/news/' + newsSingle.image"  alt="thumb">
                                </div>
                                <div class="blog-info">
                                    
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">{{ newsSingle.title }}</h3>
                                        <div class="mb-10" v-html="newsSingle.content"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">
                           
                            
                            <!-- recent post -->
                            <div class="widget recent-post">
                                <h5 class="widget-title">{{ t("recent_post") }}</h5>
                                <div class="recent-post-single" v-for="recent in newsAll.slice(0,3)" :key="recent.id">
                                    <div class="recent-post-img" v-if="recent.image">
                                        <a href="#" @click.prevent="openNewsDetails(recent.id)">
                                            <img :src="PUBLIC_API_PATH +'uploads/news/' + recent.image" alt="thumb">
                                        </a>
                                    </div>
                                    <div class="recent-post-bio">
                                        <h6><a href="#" @click.prevent="openNewsDetails(recent.id)">{{ recent.title }}</a></h6>
                                    </div>
                                </div>
                            </div>
                            <!-- social share -->
                            <div class="widget social-share">
                                <h5 class="widget-title">{{ t("follow_us") }}</h5>
                                <div class="social-share-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog single end --> 

  </main>
</template>
<script setup>
import api from "@/api/axios";
import { ref, onMounted } from "vue";
import { PUBLIC_API_PATH } from "@/config";
import { useI18n } from "vue-i18n";
import { useRouter } from "vue-router";

const { t } = useI18n();
const router = useRouter();
const loading = ref(false);

const newsSingle = ref(null);
const fetchNewsSingle = async () => {
    loading.value = true;
    try {
        const id = localStorage.getItem('selected_news_id'); 
        if (!id) {
            // Fall back to news list if landed without ID (e.g. direct url access)
            return;
        }
        const res = await api.get(`/news/${id}?news_id=${id}`);
        newsSingle.value = res.data;
    } catch (err) {
        console.error(err);
    } finally {
        loading.value = false;
    }
};

const openNewsDetails = (id) => {
    localStorage.setItem('selected_news_id', id);
    fetchNewsSingle();
    window.scrollTo({ top: 0, behavior: 'smooth' });
};

const newsAll = ref([]);
const fetchNewsAll = async () => {
    loading.value = true;
    try {
        const res = await api.get("/news"); 
        newsAll.value = res.data;
    } catch (err) {
        console.error(err);
    } finally {
        loading.value = false;
    }
};

onMounted(() => {
    fetchNewsSingle();
    fetchNewsAll();
});
</script>
