<?php 
    if(empty($pageTitle)){
      $pageTitle = 'Restaurant';
    }
    if(empty($headerImg)){
      $headerImg = 'images/pexels-rachel-claire-4577740.jpg';
    }
    // if(){

    // }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/simple.css" />
  <link rel="stylesheet" href="./styles/custom.css" />
  <title>Culinary Cove &bull; <?php echo $pageTitle; ?></title>
</head>

<body>

  <header class="header-with-background" style="background-image: url('<?php echo $headerImg ?>')">
    <h1>
      Culinary Cove
    </h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <a class="<?php echo (!empty($pagekey) && $pagekey==='mission')?'active':'' ?>" href="our-mission.php">Our mission</a>
      <a class="<?php echo (!empty($pagekey) &&$pagekey==='ingredients')?'active':'' ?>" href="ingredients.php">Ingredients</a>
      <a class="<?php echo (!empty($pagekey) &&$pagekey==='menu')?'active':'' ?>" href="menu.php">Menu</a>

    </nav>
  </header>

  <main>