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
        colors: {
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
  @layer utilities {
    .active {
      @apply border-b-2 border-b-white;
    }
    .login-email, .login-password {
      @apply w-full px-4 py-3 my-2;
      @apply inline-block border-slate-500 bg-slate-200 rounded-lg;
    }
    .login-button {
      @apply w-full bg-logo-orange text-slate-200;
      @apply px-2 py-4 my-2 border-none cursor-pointer rounded-md;
      @apply tracking-wide font-bold;
      @apply hover:bg-login-button-dark transition-colors duration-300;
    }
    .error{
      @apply text-red-700 mb-4;
    }
    .login-background {
  @apply;
}
  
  }
</style>
<!-- Include main.css file -->
<link rel="stylesheet" href="./css/main.css" />
<!-- Highlight the active path -->
<script src="./utils/navigation.js" defer></script>
<script src="./utils/button.js" defer></script>
<script src="./utils/slideshow.js" defer></script>
