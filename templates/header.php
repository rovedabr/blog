<?php
  include_once("./helpers/url.php");
  include_once("./data/posts.php");
  include_once("./data/categories.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Codar</title>
  <link rel="stylesheet" href="<?= $BASE_URL ?>./css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?> " class="nav_link">Home</a></li>
        <li><a href="<?= $BASE_URL ?>categorias.php">Categorias</a  class="nav_link"></li>
        <li><a href="<?= $BASE_URL ?>sobre.php">Sobre</a  class="nav_link"></li>
        <li><a href="<?= $BASE_URL ?>contato.php"  class="nav_link">Contatos</a></li>
      </ul>  </nav>
  </header>
  
