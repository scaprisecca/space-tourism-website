const navToggle = document.querySelector('.navbar__toggle');
const navbar = document.querySelector('.navbar');
const navCloseIcon = document.querySelector('.navbar__close-icon');

console.log('loaded');

function showMobileNav() {
  console.log('i was clicked');
  navbar.classList.remove('hidden');
  navToggle.classList.add('hidden');
}

function hideMobileNav() {
  navbar.classList.add('hidden');
  navToggle.classList.remove('hidden');
}

navToggle.addEventListener('click', showMobileNav);
navCloseIcon.addEventListener('click', hideMobileNav);
