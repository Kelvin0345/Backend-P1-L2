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

    public function sp_GetAllLeverancier()
    {
        return DB::select('CALL SP_GetAllLeverancier');
    }

    public function sp_GetGeleverdeProductenByLeverancierId(int $id)
    {
        return DB::select('CALL SP_GetGeleverdeProductenByLeverancierId(:id)', [
            'id' => $id
        ]);
    }

    public function sp_NieuweLevering(
        int $productId,
        int $leverancierId,
        int $aantal,
        ?string $datumEerstVolgendeLevering
    ) {
        return DB::statement(
            'CALL SP_nieuweLevering(?, ?, ?, ?)', // <-- Added 4 placeholders here
            [
                $productId,
                $leverancierId,
                $aantal,
                $datumEerstVolgendeLevering
            ]
        );
    }
}
