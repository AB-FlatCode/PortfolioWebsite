// import Swiper JS
import Swiper from "swiper/bundle";

export default {
  init() {
    /* eslint-disable */
    const swiperServices = new Swiper(".swiper-services", {
      slidesPerView: "auto",
      spaceBetween: 10,
    });
    /* eslint-enable */
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
