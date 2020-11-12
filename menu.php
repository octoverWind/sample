<?php
class Menu {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.10);
  }
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
}


$ramen = new Menu('らーめん', 646, 'https://tabelog.com/imgview/original?id=r08706136783405');
$ramen2 = new Menu('ライス', 100, 'https://tabelog.com/imgview/original?id=r10065126417567');
$topping = new Menu('野菜畑', 82, 'https://tabelog.com/imgview/original?id=r3630188740770');
$topping2 = new Menu('卓上トッピング', 0, 'https://tabelog.com/imgview/original?id=r54005105169944');
$drink = new Menu('グラスビール', 273, 'https://tabelog.com/imgview/original?id=r28810135469923');

$menus = array($ramen, $ramen2, $topping, $topping2, $drink);

?>
