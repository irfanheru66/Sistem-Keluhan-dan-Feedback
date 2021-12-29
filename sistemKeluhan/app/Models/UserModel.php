<?php namespace app\Models;

 use CodeIgniter\Model;

 class UserModel extends Model
 {
    protected $table = 'user';
    protected $allowedFields = ['NIK','Nama','Password','Divisi','Alamat','Email'];
 }
