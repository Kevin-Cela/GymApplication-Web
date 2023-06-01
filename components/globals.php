<!-- website Logo -->
<link rel="icon" type="image/svg+xml" href="/assets/logo/svg/logo-color.svg">
<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  // Customize colors
  tailwind.config = {
    theme: {
      extend: {
        height: {
          'slideshow': '16.625rem',
          'slideshowLg': '37.5rem',
          'slideshowXl': '61.71875rem'
        },
        backgroundImage: {
          'login-background': "url('/assets/images/gym/GymPhoto1.jpeg')",
          'header-background': "url('/assets/logo/png/logo-color.png')",
        },
        colors: {
          body: {
            light: "#e4e4e7",
          },
          nav: {
            standart: "#e5e7eb",
          },
          logo: {
            orange: 'var(--logo-orange)',
          },
          login: {
            button: {
              dark: '#f77f00',
            },
          },
          footer: {
            dark: '#333333',
          },
        }
      }
    }
  }
</script>
<style type="text/tailwindcss">
  @layer base {
    html {
      font-family: Inter, system-ui, sans-serif;
    }
    body {
      @apply bg-body-light;
    }
    nav {
      @apply bg-nav-standart;
    }
  }
  @layer utilities {
    .active {
      @apply border-b-2 border-b-white;
    }
    .login-email, .login-password {
      @apply w-full px-4 py-3 my-2;
      @apply inline-block border-b border-b-slate-900;
      @apply bg-transparent placeholder:text-center outline-none;
    }
    .login-button {
      @apply w-full bg-footer-dark text-slate-200;
      @apply px-2 py-4 my-2 border-none cursor-pointer rounded-md;
      @apply tracking-wider font-normal;
      @apply hover:bg-logo-orange  transition-colors duration-300;
    }
    .error{
      @apply text-red-700 mb-4;
    }
    .gymify-header {
      @apply w-full h-52;
      @apply bg-logo-orange;
      @apply bg-header-background bg-no-repeat bg-contain bg-center;
    }
    .login-background {
      @apply bg-login-background;
      @apply w-screen h-screen;
      @apply backdrop-blur;
    }
  }
</style>
<!-- Include main.css file -->
<link rel="stylesheet" href="./css/main.css" />
<!-- Highlight the active path -->
<script src="./utils/navigation.js" defer></script>
<script src="./utils/button.js" defer></script>
<script src="./utils/slideshow.js" defer></script>
