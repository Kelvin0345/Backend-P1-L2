<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    public function sp_GetAllProduct()
    {
        return DB::select('CALL SP_GetAllProduct');
    }
}
