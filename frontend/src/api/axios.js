import axios from "axios";

const api = axios.create({
  baseURL: "https://engine.acgl.co.tz/api",
  headers: {
    Accept: "application/json",
  },
});

/**
 * Global request interceptor
 * Inject language automatically
 */
api.interceptors.request.use(
  (config) => {
    const lang = localStorage.getItem("lang") || "en";

    // ensure params object exists
    config.params = config.params || {};
    config.params.lang = lang;

    return config;
  },
  (error) => Promise.reject(error)
);

export default api;
