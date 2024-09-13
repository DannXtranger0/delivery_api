<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class EstablishmentsController extends Controller
{
    public function index(): LengthAwarePaginator{
        return Establishment::paginate(10);
    }
}
