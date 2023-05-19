<div class="w-full h-fit px-6 py-4 md:px-0">
  <h2 class="max-w-lg text-center m-auto text-lg break-words before:content-[attr(before)] after:content-[attr(before)]" before='&quot;'>
    This app is designed with the purpose of increasing customer
    convienence when using a gym, or in our case a chain of gyms,
    making it easier to arrange personal coaches, select courses
    and other quality of life functionalities such as a single
    membership for every gym of the same chain.
  </h2>
  <h1 class="pt-4 pb-1 text-2xl tracking-wide">Meet our staff</h1>
  <!-- Render some icons -->
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
    <div>
    <a href='https://github.com/{$values[$i]}' target='_blank'>{$keys[$i]}</h1>
  </div>
  ";
    }
  }
  displayDevs($devs);
  ?>
  <!-- Our developers -->
</div>
