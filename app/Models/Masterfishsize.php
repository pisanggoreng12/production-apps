<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterfishsize extends Model
{
    use HasFactory;

    protected $table = 'master_fish_size';
    protected $guarded =[];
    protected $primaryKey = 'size_code';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'size_description',
        'species_code',
    ];
    public $timestamps = false;

}
