<?php

namespace App\Http\Controllers;

use App\Services\UFService;
use Illuminate\Http\Request;

class UFController extends Controller
{
    protected $ufService;

    
    public function __construct(UFService $ufService)
    {
        $this->ufService = $ufService;
    }

   
    public function getUFValue()
    {
        
        $ufValue = $this->ufService->getUFValue();

        
        if ($ufValue !== null) {
            return response()->json(['UFValue' => $ufValue]);
        } else {
            return response()->json(['error' => 'No se pudo obtener el valor de la UF.'], 500);
        }
    }
}
