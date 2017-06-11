<?php

namespace App\Http\Controllers\Api;

use App\Models\Establishment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Establishment $establishment
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Establishment $establishment)
    {
        /**
         * @var Builder $establishmentWithContact
         */
        $establishmentWithContact = $establishment->with('contact');

        return response($establishmentWithContact->paginate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Establishment  $establishment
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Establishment $establishment)
    {
        $id = $request->segment(count($request->segments()));

        /**
         * @var Builder $establishmentWithContact
         */
        $establishmentWithContact = $establishment->with('contact');

        return response($establishmentWithContact->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function edit(Establishment $establishment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Establishment $establishment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establishment $establishment)
    {
        //
    }
}
