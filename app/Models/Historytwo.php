<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historytwo extends Model
{
    use HasFactory;
    
    protected $guarted = array('id');
    
    public static $rules = array(
        'profile_id' => 'required',
        'edited_at'  => 'required',
    );
    
    protected $table = 'historietwos';
}
