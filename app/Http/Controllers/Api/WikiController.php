<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Monster;
use App\Models\Shop;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class WikiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function buku()
    {
        $data = Buku::select('*')
            ->orderBy('Name', 'asc')
            ->get();

        return DataTables::of($data)
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     */
    public function pengarang()
    {
        $data = Pengarang::select('*')
            ->orderBy('Name', 'asc')
            ->get();

        return DataTables::of($data)
            ->make(true);
    }
}
