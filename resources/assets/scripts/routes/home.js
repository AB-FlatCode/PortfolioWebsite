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

    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
      const itemToggle = this.getAttribute("aria-expanded");

      for (let i = 0; i < items.length; i++) {
        items[i].setAttribute("aria-expanded", "false");
      }

      if (itemToggle == "false") {
        this.setAttribute("aria-expanded", "true");
      }
    }

    items.forEach((item) => item.addEventListener("click", toggleAccordion));
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
