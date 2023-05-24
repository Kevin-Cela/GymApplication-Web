// Scroll to heading when button 'I am a client'
const clientButton = document.getElementById('scroll-to-client');
if (clientButton) {
  clientButton.addEventListener('click', function() {
    const clientHeading = document.getElementById('client-heading');
    clientHeading.scrollIntoView({ behavior: 'smooth' });
  });
}
