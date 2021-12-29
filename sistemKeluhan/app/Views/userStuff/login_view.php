<?= $this->extend('./template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="column mt-5" style="margin: auto;width: 50%;padding: 10px;background-color:#ffffff;  border-radius: 25px;border: 2px solid #ff381a;">
        <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
        <form method = "post" action = "/Login/in">
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name='email' aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="password" name="password" >
            </div>

             <p>belum punya akun? <a href="/Register">daftar disini</a></p>           

            <button type="submit" class="btn btn-primary" style="border-radius: 25px; background-color:#ff381a; border: 1px solid #ff381a;">Submit</button>
          </form>
        </div>
    </div>
</div>


<?= $this->endSection();?>