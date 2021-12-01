<?php
require "data/info.php";
include "Template/Header.php";
?>
<h2>Choisissez un article</h2>

<ul class="list-group">
  <li class="list-group-item">
      <a class="btn btn-success" href="details.php?id=1">Article 1</a>
  </li>
  <li class="list-group-item">
    <a class="btn btn-success" href="details.php?id=2">Article 2</a>
  </li>
  <li class="list-group-item">
    <a class="btn btn-success" href="details.php?id=3">Article 3</a>
  </li>
</ul>


<?php include("Template/Footer.php"); ?>