<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {


        $deal = new Deal();
        $deal->user1_id = $request->user1_id;
        $deal->book1_id = $request->book1_id;
        $deal->user2_id = $request->user2_id;
        $deal->book2_id = $request->book2_id;
        $deal->date = now();
        $deal->status = 'pending';

        if ($deal->save()) {
            return redirect()->route('book.index')->with('insertDealok', 'success');
        } else {
            return redirect()->route('book.index')->with('insertDealerror', 'error');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Deal $deal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deal $deal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deal $deal)
    {
        // Validar que el status enviado sea válido
        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);

        // Actualizar el estado del deal
        $deal->update([
            'status' => $request->status,
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', 'El trato ha sido ' . ($request->status == 'accepted' ? 'aceptado' : 'rechazado') . ' correctamente.');
    }

    public function pendingDeals(Request $request) {
        $userId = $request->user()->id; // Obtener el ID del usuario autenticado

        $deals = Deal::where('user2_id', $userId)
                    ->where('status', 'pending')
                    ->with(['user1', 'book1', 'book2'])
                    ->get();
                    return view('books.misSolicitudes')->with('deals', $deals);

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deal $deal)
    {
        //
    }
}
