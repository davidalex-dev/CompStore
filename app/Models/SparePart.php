<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    use HasFactory;

    protected $table = 'spare_part';
    protected $fillable = ['id', 'name', 'model', 'manufacturer', 'type', 'price', 'stock'];
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    public function chassis_used(){
        return $this->hasMany(Computer::class, 'chassis', 'id');
    }

    public function motherboard_used(){
        return $this->hasMany(Computer::class, 'motherboard', 'id');
    }

    public function cpu_used(){
        return $this->hasMany(Computer::class, 'cpu', 'id');
    }

    public function gpu_used(){
        return $this->hasMany(Computer::class, 'gpu', 'id');
    }

    public function ram_used(){
        return $this->hasMany(Computer::class, 'ram', 'id');
    }

    public function storage_used(){
        return $this->hasMany(Computer::class, 'storage', 'id');
    }   

    public function psu_used(){
        return $this->hasMany(Computer::class, 'power', 'id');
    }



}
