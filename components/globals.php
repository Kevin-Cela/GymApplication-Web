<!-- website Logo -->
<link rel="icon" type="image/svg+xml" href="/assets/logo/svg/logo-color.svg">
<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  // Customize colors
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          logoOrange: 'var(--logo-orange)',
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
    .active{
      @apply border-b-2 border-b-white;
    }
}
</style>
<!-- Include main.css file -->
<link rel="stylesheet" href="./css/main.css" />
<!-- Highlight the active path -->
<script src="./utils/navigation.js" defer></script>
