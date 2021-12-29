<?= $this->extend('./template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="column mt-5" style="margin: auto;width: 50%;padding: 10px; background-color:#ffffff;  border-radius: 25px;border: 2px solid #ff381a;">
        <form method = "post" action = "/Warga/add">
   <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" >
            </div>

            
            <div class="form-group">
              <label for="isi">Isi</label>
              <textarea rows="7" cols="50" class="form-control" id="isi" name="isi" >
              </textarea>
            </div>
            
          
             <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Pilih Tujuan Keluhan:</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="divisi" id="pem" value="G" checked>
          <label class="form-check-label" for="pem">
            Staff Sekolah
          </label>
        </div>

      </div>
    </div>
  </fieldset>
<br>

            <button type="submit" class="btn btn-primary" style="border-radius: 25px; background-color:#ff381a; border: 1px solid #ff381a;">Submit</button>
          </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>