export default {
  init() {
    const navMenu = document.querySelector(".navigation__menu-toggle");

    navMenu.addEventListener("click", navHandler);

    function navHandler() {
      navMenu.classList.toggle("active");
    }
  },
  finalize() {},
};
