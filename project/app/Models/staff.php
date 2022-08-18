<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class staff extends Model
{
    protected $fillable = [
    	'nama','no_hp','alamat_kirim','nama_makanan','harga_barjas','pengiriman','total_harga',
    ];
}