const navToggle = document.querySelector('.navbar__toggle');
const navbar = document.querySelector('.navbar');
const navCloseIcon = document.querySelector('.navbar__close-icon');
const homeButtonHover = document.querySelector('.home__button--hover');
const homeButton = document.querySelector('.home__button');

// Toggle to show mobile navbar
function showMobileNav() {
  console.log('i was clicked');
  navbar.classList.remove('hidden');
  navToggle.classList.add('hidden');
}

// Toggle to hide mobile navbar
function hideMobileNav() {
  navbar.classList.add('hidden');
  navToggle.classList.remove('hidden');
}

navToggle.addEventListener('click', showMobileNav);
navCloseIcon.addEventListener('click', hideMobileNav);

// Shows hover effect for home page button
function showHomeButtonHover() {
  homeButtonHover.classList.remove('hidden');
  homeButtonHover.classList.add('visible');
}

// Hides hover effect for home page button
function hideHomeButtonHover() {
  homeButtonHover.classList.remove('visible');
  homeButtonHover.classList.add('hidden');
}

homeButton.addEventListener('mouseover', showHomeButtonHover);
homeButton.addEventListener('mouseleave', hideHomeButtonHover);

