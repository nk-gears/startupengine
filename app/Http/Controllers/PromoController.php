<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.promos.index');
    }

    public function view(Request $request, $id)
    {
        $item = \App\Promo::find($id);
        $options = [
            'id' => $item->id,
            'type' => 'promo',
            'index_uri' => '/admin/promos'
        ];

        return view('admin.components.resource_view')
            ->with('item', $item)
            ->with('options', $options);
    }
}