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


    // Petrol price formula

    function petrolPrice()
    {
        $price = ((($this->oil_value / 159 + 0.26) * $this->pln_value) + 1.369 + 0.15261 + 0.08 + 0.37 + 0.1) * ($this->vat_value / 100 + 1);
              
        return number_format($price, 2, ',', ' ');
    }
}
