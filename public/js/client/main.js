// Menu
const navMenu = document.getElementById('nav-menu');
const navToggle = document.getElementById('nav-toggle');
const navClose = document.getElementById('nav-close');

// Menu show
if (navToggle) {
  navToggle.addEventListener('click', () => {
    navMenu.classList.add('show-menu');
  });
}

// Menu close
if (navClose) {
  navClose.addEventListener('click', () => {
    navMenu.classList.remove('show-menu');
  });
}

// remove mobile menu
const navLink = document.querySelectorAll('.nav__link');

navLink.forEach((link) => {
  link.addEventListener('click', () => {
    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.remove('show-menu');
  });
});

// Scroll
const scrollUp = () => {
  const scrollUp = document.getElementById('scroll-up');
  if (this.scrollY >= 200) {
    scrollUp.classList.add('show-scroll');
  } else {
    scrollUp.classList.remove('show-scroll');
  }
};

window.addEventListener('scroll', scrollUp);

// dropdown button
const dropdownBtn = document.getElementById('nav-btn-dropdown');
const dropdownContent = document.getElementById('nav-dropdown-content');

dropdownBtn.addEventListener('click', (event) => {
  event.stopPropagation();
  event.preventDefault();
  dropdownContent.classList.toggle('open');
});
