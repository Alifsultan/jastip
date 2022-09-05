<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Barang extends Model
{
    protected $fillable = [
    	'nama','no_hp','alamat_kirim','nama_barang','harga_barjas','pengiriman','total_harga','status',
    ];
}