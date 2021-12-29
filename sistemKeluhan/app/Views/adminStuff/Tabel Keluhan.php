<?= $this->extend('./template'); ?>
<?= $this->section('content'); ?>

<div class="container">
<div class="row">

<div class="col">
<br>
<br>

<h1>halo <?=  $_SESSION['user_email'] ;?> !</h1>

<br>
<br>


<br>
<br>
<table class="table" style="background-color:#ffffff;  border-radius: 20px; ">
  <thead style="background-color:#ff7f76;">
    <tr>
    
      <th scope="col">Id</th>
      <th scope="col">Judul</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php  foreach($keluhan as $r) :?>

	    <td><?=  $r['id'] ;?></td>
	    <td><?=  $r['Judul'] ;?></td>
      <td><?php  
      if($r['ditanggapi'] == "Y"){
        echo "Sudah Ditanggapi";
      }
      else{
        echo "Belum Ditanggapi";
      }

      ?></td>
      <td>
	   <a href="/admin/detailK/<?=$r['id'];?>" class="btn btn-primary" style="border-radius: 25px;">Detail</a>
     <a href="/admin/delK/<?=$r['id'];?>" class="btn btn-danger" style="border-radius: 25px;">Delete</a>
	  </td>

    </tr>
	<?php 
	 endforeach;
	?>
    </tbody>
</table>

</div>

</div>

</div>

<?= $this->endSection();?>
