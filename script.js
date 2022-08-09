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

function homeButtonHoverEffect() {

  if(!homeButton) {
    return; // checks if the home button is on the page before running
  }
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
  homeButton.addEventListener('mouseover', showHomeButtonHover);
  homeButton.addEventListener('mouseleave', hideHomeButtonHover);

}

homeButtonHoverEffect();

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

let navbarDistance = getDistanceBetweenElements(
  document.querySelector('.navbar__logo'),
  document.querySelector('.navbar')
);

console.log(`navbar: ${navbarDistance}`);

const size = window.innerWidth;

window.addEventListener('resize', function() {
  console.log(`window: ${size}`)
})

// IDEAS
// Track window width - when it adjusts, run this function again to set the size of the divder in the navbar
// OR somehow just update the variable directly


const ob = new ResizeObserver();

ob.observe(navbarDistance);
