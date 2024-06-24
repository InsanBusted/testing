<?php

namespace App\Models;

use App\Models\Position;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $fillable = ['nama', 'email', 'nohp', 'alamat', 'position_id'];
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}