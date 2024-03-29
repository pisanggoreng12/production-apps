<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterdps extends Model
{
    use HasFactory;
    protected $table = 'master_dps';
    protected $guarded =[];
    protected $primaryKey = 'tag_rfid';
    protected $keyType = 'string';
    protected $fillable = [
        'dps',
        'species_code',
        'species_description',
        'size_code',
        'size_description',
        'fish_lot',
        'input_dps',
        'planning_date',
    ];
    public $timestamps = false;
    
}
