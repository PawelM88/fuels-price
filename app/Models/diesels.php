<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diesels extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public $timestamps = FALSE;

    protected $fillable = ['oil_value', 'pln_value', 'vat_value'];


    // Diesel price formula
    function dieselPrice()
    {
        $price = ((($this->oil_value / 159 + 0.47) * $this->pln_value) + 1.065 + 0.32912 + 0.08 + 0.37 + 0.1) * ($this->vat_value / 100 + 1);
              
        return number_format($price, 2, ',', ' ');
    }
}
