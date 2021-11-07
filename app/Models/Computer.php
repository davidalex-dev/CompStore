<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $table = 'computer';
    protected $fillable = ['name', 'chassis', 'motherboard', 'cpu', 'gpu', 'ram', 'storage', 'os', 'power', 'total_price'];

    public function pc_chassis(){
        return $this->belongsTo(SparePart::class, 'chassis', 'id');
    }

    public function pc_cpu(){
        return $this->belongsTo(SparePart::class, 'cpu', 'id');
    }

    public function pc_gpu(){
        return $this->belongsTo(SparePart::class, 'gpu', 'id');
    }

    public function pc_motherboard(){
        return $this->belongsTo(SparePart::class, 'motherboard', 'id');
    }

    public function pc_ram(){
        return $this->belongsTo(SparePart::class, 'ram', 'id');
    }

    public function pc_storage(){
        return $this->belongsTo(SparePart::class, 'storage', 'id');
    }

    public function pc_power(){
        return $this->belongsTo(SparePart::class, 'power', 'id');
    }

}
