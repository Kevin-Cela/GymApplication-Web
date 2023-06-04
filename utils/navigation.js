const navigationLinks = document.querySelectorAll('nav + ul a');
const navigationButton = document.querySelector('nav button#toggle-navigation');

// Toggle the data-toggled property on the navigation button
navigationButton.addEventListener('click', () => {
  navigationButton.dataset.toggled = navigationButton.dataset.toggled === 'true' ? 'false' : 'true';
  // toggle navigation ul visibility
  const navUl = document.querySelector('ul#navigation-slide-in');
  console.log(navigationButton.dataset.toggled);
  if (navigationButton.dataset.toggled === 'true') {
    navUl.classList.replace('-translate-x-full', 'translate-x-0');
  }
  else {
    navUl.classList.replace('translate-x-0', '-translate-x-full');
  }
})

// Toggle the "active" class on the links when route from href attribute
// matches current route href
navigationLinks.forEach(link => {
  if (link.href === window.location.href) {
    link.classList.add('active');
  }
});

