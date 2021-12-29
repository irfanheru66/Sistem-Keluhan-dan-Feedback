<?= $this->extend('./template'); ?>
<?= $this->section('content'); ?>

<div class="container">
<div class="row">

<div class="col">

<h1>halo <?=  $_SESSION['user_email'] ;?> !</h1>

<br>
<br>
<br>

<table class="table"  style="background-color:#ffffff;  border-radius: 20px; ">
  <thead style="background-color:#ff7f76;">
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Status</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
<?php  foreach($keluhan as $r) :?>
    <tr>
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
	   <a href="/Pemerintah/Detail/<?=$r['id'];?>" class="btn btn-primary" style="border-radius: 25px; background-color:#ff381a; border: 1px solid #ff381a;">Detail</a>
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
