<?php namespace App\Models;

use CodeIgniter\Model;

class ProdukKategoriModel extends Model
{
	protected $table = 'product_category'; 
	protected $primaryKey = 'id';
	protected $allowedFields = ['name', 'description'];
	protected $useTimestamps = true;
}
