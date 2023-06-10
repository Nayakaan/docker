export class FixedNav {
  constructor() {
    this.events();
  }

  events() {
    window.addEventListener('load', this.fixedMenu)
    window.addEventListener('scroll', this.fixedMenu)
  }

  fixedMenu() {
    const navigation = document.querySelector('.site-header__nav')
    const menu = document.querySelector('.menu-main-menu-container')

    if (navigation) {
      const slideInAt = window.scrollY;      
      const elementTop = window.scrollY + navigation.getBoundingClientRect().top;
      const isShown = slideInAt >= elementTop;

      if (isShown) {
        menu.classList.add('nav--fixed')
      } else {
        menu.classList.remove('nav--fixed')
      }
    }
  }
}
