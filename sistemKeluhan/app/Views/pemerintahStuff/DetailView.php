<?= $this->extend('./template'); ?>
<?= $this->section('content'); ?>

<div class="container">
<div class="row">

<div class="col">
<br>
<br>
<br>
<div style="margin: auto;width: 50%;padding: 10px;background-color:#ffffff;  border-radius: 25px;border: 2px solid #ff381a;">
<h2>Judul Keluhan:</h2>
<p>Dari : <?=  $pengirim ;?></p>
<p> <?=  $detail['Judul'] ;?></p>
<br>

<h2>Isi Keluhan:</h2>
<p><?=  $detail['Isi'] ;?></p>
<br>
</div>
<br>
<br>


<div style="margin: auto;width: 50%;padding: 10px;background-color:#ffffff;  border-radius: 25px;border: 2px solid #ff381a;">
<br>

<h2>Komentar Warga lain:</h2>
<?php 
  if(count($komen) ==  0):
?>
<br>
<h3>Belum ada Komentar</h3>
<br>
<?php 
 endif;
?>

<?php 
  if(count($komen) !=  0):
?>
<?php  foreach($komen as $r) :?>
    <div style="background-color: #ffb3b3;border-radius: 10px;">
<p> Dari: <?=  $r['pengirim'] ;?></p>
<p><?=  $r['komen'] ;?></p>
<br>

</div>

<br>
	<?php 
	 endforeach;
	?>
<?php 
 endif;
?>

</div>

<?php if($detail['ditanggapi'] == 'N'):?>
<br>
<div style="margin: auto;width: 50%;padding: 10px;background-color:#ffffff;  border-radius: 25px;border: 2px solid #ff381a;">
<br>
<h2>Tanggapi Keluhan:</h2>
<br>

<form method = "post" action = "/Pemerintah/edit">
   <div class="form-group">
              <label for="id"> ID Keluhan: </label>
               <input type="num" class="form-control" id="id" name="id" value=<?=$detail['id']  ;?> readonly>
            <div class="form-group">
              <label for="Tanggapi">Tanggapi: </label>
              <textarea rows="7" cols="50" class="form-control" id="Tanggapi" name="Tanggapi" >
              </textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
</div>
</div>
<br>
<?php endif;?>

<?php if($detail['ditanggapi'] == 'Y'):?>
<br>
<br>
<div style="margin: auto;width: 50%;padding: 10px;background-color:#ffffff;  border-radius: 25px;border: 2px solid #28ff0a;">
<h2>Tanggapan:</h2>

<p><?=  $detail['tanggapan'] ;?></p>
<br>
</div>
<?php endif;?>
        




</div>

</div>

<?= $this->endSection();?>