<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;

    protected $table = "positions";

    protected $fillable = ['nama'];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'position_id');
    }
}