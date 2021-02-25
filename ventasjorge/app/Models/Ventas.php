<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Ventas
 * @package App\Models
 * @version February 19, 2021, 9:17 pm UTC
 *
 * @property number $precio
 * @property integer $productos
 */
class Ventas extends Model
{
    use HasFactory;
    public function productos()
    {
        return $this->belongsTo('App\Models\Productos', 'producto_id');
    }
}
