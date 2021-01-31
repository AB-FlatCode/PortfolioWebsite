import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const homeBodyClass = document.querySelector(".home");

const portfolioColorChange = () => {
  if (homeBodyClass) {
    ScrollTrigger.create({
      trigger: ".portfolio-wrapp",
      start: "top top+=120",
      end: "top top",
      onEnter: () => homeBodyClass.classList.add("white-bg"),
      onEnterBack: () => homeBodyClass.classList.remove("white-bg"),
      //onLeaveBack: () => homeBodyClass.classList.remove("white-bg"),
    });
  }
};

const faqColorChange = () => {
  if (homeBodyClass) {
    ScrollTrigger.create({
      trigger: ".home-services",
      start: "top top+=250",
      end: "top top",
      onEnter: () => homeBodyClass.classList.remove("white-bg"),
      onEnterBack: () => homeBodyClass.classList.add("white-bg"),
      onLeaveBack: () => homeBodyClass.classList.add("white-bg"),
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

    portfolioColorChange();
    faqColorChange();
  },
  finalize() {},
};
