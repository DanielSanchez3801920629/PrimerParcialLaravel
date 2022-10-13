<?php

namespace App\Http\Controllers;

use App\Http\Requests\FragranceRequest;
use App\Models\Fragrance;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class FragranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('fragrance.index', [
            'fragrances' => Fragrance::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fragrance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FragranceRequest $request)
    {
        $fragrance = new Fragrance;

        $fragrance->name = $request->input('name');
        $fragrance->ranking = $request->input('ranking');
        $fragrance->brand_name = $request->input('brand_name');
        $fragrance->is_original = $request->input('is_original');
        $fragrance->status = $request->input('status');
        $fragrance->price = $request->input('price');
        $fragrance->discount = $request->input('discount');
        $fragrance->saleend = $request->input('saleend');
        $fragrance->img_url = $request->input('img_url');

        $fragrance->save();

        return redirect('/fragrances', Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $fragrance = Fragrance::find($id);
        return view('fragrance.edit', [
            'fragrance' => $fragrance
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $fragrance = Fragrance::find($id);

        $fragrance->name = $request->input('name');
        $fragrance->ranking = $request->input('ranking');
        $fragrance->brand_name = $request->input('brand_name');
        $fragrance->is_original = $request->input('is_original');
        $fragrance->status = $request->input('status');
        $fragrance->price = $request->input('price');
        $fragrance->discount = $request->input('discount');
        $fragrance->saleend = $request->input('saleend');
        $fragrance->img_url = $request->input('img_url');

        $fragrance->save();

        return redirect('/fragrances');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fragrance $fragrance)
    {
        //
        $fragrance->delete();

        return back();
    }
}
