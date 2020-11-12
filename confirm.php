<!-- "注文内容ページ" -->
<?php require_once('menu.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>sample</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
<body>
  <div class="order-back">
  <div class="order">
    <h2>注文内容確認</h2> 
    <?php $totalPayment = 0  ?>
    
    <?php foreach ($menus as $menu): ?>
      <?php 
        $orderCount = $_POST[$menu->getName()];
        $menu->setOrderCount($orderCount);
        
        $totalPayment += $menu->getTotalPrice();
        
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
        個
      </p>
      <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
    <?php endforeach ?>
     
    <h3>合計金額: <?php echo $totalPayment ?>円</h3>
  </div>
  </div>
</body>
</html>
