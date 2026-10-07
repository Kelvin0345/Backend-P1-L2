<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AllergeenModel extends Model
{
    public function sp_GetAllergeenById(int $id)
    {
        return DB::select('CALL SP_GetAllergeenById(:id)', [
            'id' => $id
        ]);
    }

    public function sp_GetAllLeverancier()
    {
        return DB::select('CALL SP_GetAllLeverancier');
    }
}
