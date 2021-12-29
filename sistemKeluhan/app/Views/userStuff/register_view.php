<?= $this->extend('./template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="column mt-5" style="margin: auto;width: 50%;padding: 10px; background-color:#ffffff;  border-radius: 25px;border: 2px solid #ff381a;"">
        <p>Sudah Punya akun? <a href="/Login">masuk disini</a></p>
        <form method = "post" action = "/Register/save">
   <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">Kami akan merahasiakan Email anda.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="password" name="password" >
            </div>
            
            <div class="form-group">
              <label for="Nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" >
            </div>
            
            <div class="form-group">
              <label for="nik">Nomor Induk Siswa</label>
              <input type="text" class="form-control" id="nik" name="nik" aria-describedby="emailHelp" >
              </div>

            
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" >
             </div>

             <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="divisi" id="C" value="C">
  <label class="form-check-label" for="C">Orang Tua Murid</label>
</div>
<br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="divisi" id="G" value="G">
  <label class="form-check-label" for="G">Staff Sekolah</label>
</div>
<br>
<br>
<br>
<br>
            <button type="submit" class="btn btn-primary" style="border-radius: 25px; background-color:#ff381a; border: 1px solid #ff381a;">Submit</button>
          </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>