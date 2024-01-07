<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CompaniesController extends Controller
{
    public function __invoke()
    {
        return view('companies-list', [
            'companies' => Company::all(),
        ]);
    }
}
