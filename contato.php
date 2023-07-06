<?php
  include_once("./templates/header.php");
?>
<div class="contacts-container">
  <h3>Contatos</h3>
  <div class="contact">
    <a href="https://www.linkedin.com/in/ivan-roveda-952827b8/"><input type="image" src="<?= $BASE_URL ?>./img/icons/linkedin.svg" alt="Linkedin"></a>
    <a href="https://wa.me/5548996601102"><input type="image" src="<?= $BASE_URL ?>./img/icons/whatsapp.svg" alt="WhatsApp"></a>
    <a href="https://github.com/rovedabr/rovedabr"><input type="image" src="<?= $BASE_URL ?>./img/icons/github.svg" alt="Github"></a>
  </div>
</div>

<div class="course-container">
  <h3>Curso PHP</h3>
  <div class="contact2">
    <a href="https://www.udemy.com/course/php-do-zero-a-maestria-com-projetos-incriveis/"><input type="image" src="<?= $BASE_URL ?>./img/icons/udemy.svg" alt="Curso PHP"></a>
  </div>
  <h3>Ícones Utilizados</h3>
  <div class="contact2">
    <a href="https://freeicons.io/"><input id="icon" type="image" src="<?= $BASE_URL ?>./img/icons/freeicons.svg" alt="Curso PHP"></a>
  </div>
</div>

<?php
  include_once("./templates/footer.php");
?>