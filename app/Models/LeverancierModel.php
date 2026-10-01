<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class LeverancierModel extends Model
{
    public function sp_GetLeverantieById(int $id)
    {
        return DB::select('CALL SP_GetLeverantieById(:id)', [
            'id' => $id
        ]);
    }
}
