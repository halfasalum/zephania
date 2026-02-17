import { createI18n } from 'vue-i18n'

const messages = {
  en: {
    about_us: "About Us",
    home: "Home",
    trusted: "Trusted by more than 10+ companies worldwide",
    our_service: "Our Services",
    what_we_offer: "What We Offers To Our Customers",
    what_us: "Why Choose Us",
    our_team: "Our Team",
    our_expert: "Meet With Our Experts",
    our_updates: "Our Updates",
    latest_news: "Latest News",
    project_done: "Projects Done",
    happy_clients: "Happy Clients",
    experts_staff: "Experts Staff",
    win_awards: "Win Awards",
    follow_us: "Follow Us",
    company: "Company",
    services: "Services",
    get_intouch: "Get In Touch",
    our_address: "Our Address",
    call_us: "Call Us",
    mail_us: "Mail Us",
    copyright: " Copyright Abecilia All Rights Reserved.",
    opening: "Open Time",
    contact_us: "Contact Us"
  },
  sw: {
    about_us: "Kuhusu sisi",
    home: "Mwanzo",
    trusted: "Inaaminiwa na zaidi ya kampuni 10 duniani kote",
    our_service: "Huduma zetu",
    what_we_offer: "Tunachowapa Wateja Wetu",
    what_us: "Kwa Nini Utuchague",
    our_team: "Timu Yetu",
    our_expert: "Kutana na Wataalamu Wetu",
    our_updates: "Taarifa Zetu Mpya",
    latest_news: "Habari Mpya",
    project_done: "Miradi Iliyokamilika",
    happy_clients: "Wateja Wetu",
    experts_staff: "Timu ya Wataalamu",
    win_awards: "Tuzo Tulizoshinda",
    follow_us: "Tufuatilie ",
    company: "Kampuni",
    services: "Huduma",
    get_intouch: "Mawasiliano",
    our_address: "Anuani yetu",
    call_us: "Tupigie",
    mail_us: "Wasiliana nasi",
    copyright: " Abicelia Haki Zote Zimehifadhiwa.",
    opening: "Ofisi kuwa wazi",
    contact_us: "Wasiliana Nasi"
  }
}

// ✅ Read saved language
const savedLang = localStorage.getItem("lang") || "en"

const i18n = createI18n({
  legacy: false,
  locale: savedLang,
  fallbackLocale: 'en',
  messages
})

export default i18n
