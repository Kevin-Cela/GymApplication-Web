const navigationLinks = document.querySelectorAll('nav ul li a');

// Toggle the "active" class on the links when route from href attribute
// matches current route href
navigationLinks.forEach(link => {
  if (link.href === window.location.href) {
    link.classList.add('active');
  }
});

