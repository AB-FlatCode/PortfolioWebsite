import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const homeBodyClass = document.querySelector(".home");

const bodyColorChange = () => {
  if (homeBodyClass) {
    ScrollTrigger.create({
      trigger: ".portfolio-wrapp",
      start: "top top+=150",
      end: "top top",
      onEnter: () => homeBodyClass.classList.add("white-bg"),
      onEnterBack: () => homeBodyClass.classList.remove("white-bg"),
      onLeaveBack: () => homeBodyClass.classList.remove("white-bg"),
    });
  }
};

export default {
  init() {
    const navMenu = document.querySelector(".navigation__menu-toggle");

    navMenu.addEventListener("click", navHandler);

    function navHandler() {
      navMenu.classList.toggle("active");
    }

    bodyColorChange();
  },
  finalize() {},
};
