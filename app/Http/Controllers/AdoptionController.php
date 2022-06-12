<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;

class AdoptionController extends Controller
{
    public function adoptPet(Request $request) {

        $request->validate([
            'email' => ['required', 'email'],
            'value' => ['required', 'numeric', 'between:10,100'],
            'pet_id' => ['required', 'int', 'exists:pets,id']
        ]);
        $adoptionDatas = $request->all();
        return Adoption::create($adoptionDatas);
    }
}
