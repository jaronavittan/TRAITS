<?php

class Iphone {
  public $feature1;
  public $feature2;
}

class Sony {
  public $feature3;
  public $feature4;
}

class Nokia {
  public $feature5;
  public $feature6;
}

class NewPhone extends Sony {
  
}



$phone = new NewPhone();

echo '<pre>'; print_r($phone); echo '</pre>';



?>
