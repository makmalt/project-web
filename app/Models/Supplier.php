<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primaryKey='id';
    protected $fillable = ['nama', 'alamat']; 
    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_supplier');
    }
}