<?php namespace app\Models;

 use CodeIgniter\Model;

 class tanggapanModel extends Model
 {
    protected $table = 'keluhan';
    protected $allowedFields = ['tanggapan','penanggap','ditanggapi'];
 }
