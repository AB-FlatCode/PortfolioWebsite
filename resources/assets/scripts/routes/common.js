import AOS from "aos";
import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const mainBody = document.querySelector("body");
const homeBodyClass = document.querySelector(".home");
const navMenu = document.querySelector(".navigation__menu-toggle");
const fullMenu = document.querySelector(".navigation__full");
const fullMenuItems = fullMenu.querySelectorAll(".menu-item");

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
    AOS.init();

    navMenu.addEventListener("click", navHandler);
    function navHandler() {
      navMenu.classList.toggle("active");
      mainBody.classList.toggle("menu-active");
      fullMenu.classList.toggle("active");
      fullMenuItems.forEach((item) => {
        item.classList.toggle("active");
      });
    }

    portfolioColorChange();
    faqColorChange();
  },
  finalize() {
    console.log("fired second");
  },
};
