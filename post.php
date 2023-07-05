<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }
  }

?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <div class="post-content">
      <p id="text-container">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure recusandae non eum officia praesentium eligendi quidem similique ut beatae ab quibusdam provident, corporis maiores nam cumque, cum, possimus rerum exercitationem.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure recusandae non eum officia praesentium eligendi quidem similique ut beatae ab quibusdam provident, corporis maiores nam cumque, cum, possimus rerum exercitationem.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure recusandae non eum officia praesentium eligendi quidem similique ut beatae ab quibusdam provident, corporis maiores nam cumque, cum, possimus rerum exercitationem.
      </p>
    </div>
  </div>
    <aside id="nav-container">
      <h3 id="tag-title">Tags</h3>
        <ul id="tag-list">
          <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href=""><?= $tag ?></a></li>
          <?php endforeach; ?> 
        </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href=""><?= $category ?></a></li>
        <?php endforeach; ?> 
      </ul>   
    </aside>
</main>
<?php
  include_once("templates/footer.php")
?>