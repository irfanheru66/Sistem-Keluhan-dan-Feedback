<?= $this->extend('./template'); ?>
<?= $this->section('content'); ?>

<div class="container">
<div class="row">

<div class="col mt-5">



<div style="margin: auto;width: 50%;padding: 10px;background-color:#ffffff;  border-radius: 25px;border: 2px solid #ff381a;">

<h2>Judul keluhan: </h2>
<p>Dari : <?=  $pengirim[0] ;?></p>
<p> <?=  $detail['Judul'] ;?></p>
<br>
<h2>Isi keluhan: </h2>
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
<br>
<h2>Komentar anda:</h2>
<br>
<form method = "post" action = "/Warga/addKomen">
   <div class="form-group">
              <label for="id"> ID Keluhan: </label>
               <input type="num" class="form-control" id="id" name="id" value=<?=$detail['id']  ;?> readonly>
            <div class="form-group">
              <label for="komen">komentar: </label>
              <textarea rows="7" cols="50" class="form-control" id="komen" name="komen" >
              </textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
</div>
</div>

<br>
<br>

<div style="margin: auto;width: 50%;padding: 10px;background-color:#ffffff;  border-radius: 25px;border: 2px solid #28ff0a;">
<h2>Tanggapan:</h2>
<p><?php
if($detail['ditanggapi'] == 'N')
{
    echo "Belum ada tanggapan";
}
else
{
    echo $detail['tanggapan'];
}
?>

</p>
</div>
<br>
<br>



</div>

</div>

</div>

<?= $this->endSection();?>