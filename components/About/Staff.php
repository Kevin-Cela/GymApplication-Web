<div class="w-full h-fit px-6 py-4 md:px-0">
  <h2 class="w-9/10 md:max-w-lg lg:max-w-3xl text-justify mx-auto text-base md:text-xl break-words before:content-[attr(before)] after:content-[attr(before)]" before='&quot;'>
    This app is designed with the purpose of increasing customer
    convienence when using a gym, or in our case a chain of gyms,
    making it easier to arrange personal coaches, select courses
    and other quality of life functionalities such as a single
    membership for every gym of the same chain.
  </h2>
  <h1 class="py-8 my-4 mx-auto w-fit text-2xl md:text-5xl tracking-wide">Meet our staff</h1>
  <!-- Render some icons -->
  <div class='w-full h-fit grid md:grid-cols-2 lg:grid-cols-3 items-center content-center justify-evenly'>
    <?php
    $devs = array(
      'Alvi Dervishaj' => 'AlviDervishaj',
      'Kevin Cela' => 'Kevin-Cela',
      'Geri Xhaho' => 'GeriXhaho',
      'Henri Hoxha' => 'HoxhaHenri',
      'Klajdi Kopani' => 'klajdikopani',
      'Henri Hatija' => 'HatijaHenri',
    );
    function displayDevs($devs)
    {
      $keys = array_keys($devs);
      $values = array_values($devs);
      $length = count($devs);
      for ($i = 0; $i < $length; $i++) {
        echo "
    <div class='w-full h-full pb-12 flex items-center content-center justify-evenly gap-1 flex-col'>
  <a
  class='text-lg w-full transition-colors duration-300  hover:bg-gray-50 md:max-w-md md:text-2xl text-center tracking-wide'
  href='https://github.com/{$values[$i]}' 
  target='_blank'
  >
  <img 
  class='w-9/10 md:max-w-md lg:max-w-sm'
  loading='lazy'
  src='/assets/users/margelo_faces_{$i}.svg' 
  alt='{$values[$i]}'>
  {$keys[$i]}
  </a>
  </div>
  ";
      }
    }
    displayDevs($devs);
    ?>
  </div>
  <!-- Our developers -->
</div>
