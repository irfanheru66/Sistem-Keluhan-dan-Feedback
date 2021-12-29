<?php namespace app\Models;

 use CodeIgniter\Model;

 class KomenModel extends Model
 {
    protected $table = 'Komen';
    protected $allowedFields = ['komen','keluhan','pengirim'];
 }
