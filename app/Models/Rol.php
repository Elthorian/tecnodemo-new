<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = ['codigo','nombre'];
    public $timestamps = false;
    
    public const ADMIN = 'ADM';
    public const OPERARIO = 'OPE';

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'rolId');
    }
}
