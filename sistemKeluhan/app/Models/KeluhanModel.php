<?php namespace app\Models;

 use CodeIgniter\Model;

 class KeluhanModel extends Model
 {
    protected $table = 'keluhan';
    protected $allowedFields = ['Judul','Isi','tujuan','pengirim','tanggapan','penanggap','ditanggapi'];
 }
