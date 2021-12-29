<?= $this->extend('./template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="column mt-5" style="margin: auto;width: 50%;padding: 10px; background-color:#ffffff;  border-radius: 25px;border: 2px solid #ff381a;">

        <form method = "post" action = "/Admin/editU">
        
   <label for="id"> ID Pengguna: </label>
               <input type="num" class="form-control" id="id" name="id" value=<?=$detail['id']  ;?> readonly>
   <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?=  $detail['Email'] ;?>"  > 
              <small id="emailHelp" class="form-text text-muted">Kami akan merahasiakan Email anda.</small>
            </div>

            
            <div class="form-group">
              <label for="Nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?=  $detail['Nama'] ;?>">
            </div>
            
            <div class="form-group">
              <label for="nik">Nomor Induk Kependudukan</label>
              <input type="text" class="form-control" id="nik" name="nik" aria-describedby="emailHelp" value="<?=  $detail['NIK'] ;?>">
              </div>

            
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" value="<?=  $detail['Alamat'] ;?>">
             </div>
<br>
<br>
<br>
            <button type="submit" class="btn btn-primary" style="border-radius: 25px; background-color:#ff381a; border: 1px solid #ff381a;">Submit</button>
          </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>