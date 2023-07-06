<?php
  include_once("./templates/header.php");
?>

<div class="categories">
  <h3 id="categoriesPage">Categorias</h3>
    <ul id="categoriesPageList">
      <?php foreach($categories as $category): ?>
        <li><a href=""><?= $category ?></a></li>
      <?php endforeach; ?> 
    </ul>   
</div>

<?php
  include_once("./templates/footer.php");
?>
