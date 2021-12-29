<?= $this->extend('./template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="column mt-5" style="margin: auto;width: 50%;padding: 10px; background-color:#ffffff;  border-radius: 25px;border: 2px solid #ff381a;">
        <form method = "post" action = "/Admin/editK">
   <div class="form-group">
   <label for="id"> ID Keluhan: </label>
               <input type="num" class="form-control" id="id" name="id" value=<?=$detail['id']  ;?> readonly>
              <label for="judul">Judul Keluhan Warga</label>
              <input type="text" class="form-control" id="judul" name="judul" value="<?=  $detail['Judul'] ;?>">
            </div>

            
            <div class="form-group">
              <label for="isi">Isi Keluhan Warga</label>
              <textarea rows="7" cols="50" class="form-control" id="isi" name="isi">
              <?=  $detail['Isi'] ;?>
              </textarea>
            </div>

            <label for="penganggap">email penanggap</label>
              <input type="text" class="form-control" id="penanggap" name="penanggap" value="<?=  $detail['penanggap'] ;?>">

            <div class="form-group">
              <label for="tangapan">Tanggapan Pemerintah</label>
              <textarea rows="7" cols="50" class="form-control" id="tanggapan" name="tanggapan">
              <?=  $detail['tanggapan'] ;?>
              </textarea>
            </div>
            
          
<br>

            <button type="submit" class="btn btn-primary" style="border-radius: 25px; background-color:#ff381a; border: 1px solid #ff381a;">Submit</button>
          </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>