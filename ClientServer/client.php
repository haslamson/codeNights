<?php
  $data = http_build_query(
    array(
      'dude' => 'man',
      'car' => 'plane'
    )
  );

  $opts = array('http' =>
    array(
      'method' => 'GET',
      //'header' => 'Authorization: Basic '. abcdefg,
      //'header' => 'NetworkId: Money',
      // 'content' => $data
    )
  );

  $context = stream_context_create($opts);

  //$solution = file_get_contents('http://www.alexdenttest.com/test/postTest.php', false, $context);
  $solution = file_get_contents('https://www.google.com', false, $context);

  echo $solution;

  $file = fopen('google.txt', 'w');
  fwrite($file, $solution);
  fclose($file);
 ?>
