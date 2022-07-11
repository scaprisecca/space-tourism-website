const navToggle = document.querySelector('.navbar__toggle');
const navbar = document.querySelector('.navbar');
const navCloseIcon = document.querySelector('.navbar__close-icon');
const homeButtonHover = document.querySelector('.home__button--hover');
// const homeButton = document.getElementsByClassName('home__button');
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

// homeButton.addEventListener('mouseover', showHomeButtonHover);
console.log(homeButton);
homeButton.addEventListener('mouseover', showHomeButtonHover);
homeButton.addEventListener('mouseleave', hideHomeButtonHover);

// Calculate distance between nav-logo and nav-links to determine
// the length for the divider on desktop and tablet devices

function getPositionAtCenter(element) {
  const {top, left, width, height} = element.getBoundingClientRect();
  return {
    x: left + width / 2,
    y: top + height / 2
  };
}

function getDistanceBetweenElements(a, b) {
  const aPosition = getPositionAtCenter(a);
  const bPosition = getPositionAtCenter(b);

  return Math.hypot(aPosition.x - bPosition.x, aPosition.y - bPosition.y);
}

const navbarDistance = getDistanceBetweenElements(
  document.querySelector('.navbar__logo'),
  document.querySelector('.navbar')
);

console.log(navbarDistance);