<?php  ob_start(); 
?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">id_conducteur</th>
      <th scope="col">Prenom</th>
      <th scope="col">nom</th>
      <th scope="col">modification</th>
      <th scope="col" colspan="2">suppression</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($conducteurs as $conducteur) :?>
        <tr>
          <td><?=$conducteur->getprenom() ?></td>
          <td><?= $conducteur->getnom() ?></td>
          <td><a href="<?= URL ?>conducteurs/edit/<?= $conducteur->getId() ?>"><i class="fa-solid fa-edit"></i></a></td>
          <td><a href="<?= URL ?>conducteurs/delete"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
      <?php endforeach; ?> 

  </tbody>
</table>

<a class="btn btn-success w-25 d-block m-auto" href="<?=URL ?>conducteur/add">Ajouter un conducteur</a>

<?php

$content =ob_get_clean();
$title = "Conducteurs";
require_once "base.html.php";

?>


