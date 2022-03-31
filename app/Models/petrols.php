<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petrols extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public $timestamps = FALSE;

    protected $fillable = ['oil_value', 'pln_value', 'vat_value'];
}
