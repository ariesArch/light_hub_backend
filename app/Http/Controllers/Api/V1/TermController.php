<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Term\TermResource;
use App\Models\Term;
use App\Repositories\Api\V1\TermRepository;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Illuminate\Http\Request;

class TermController extends Controller
{
    use Sortable, Paginatable;
    protected $termRepo;

    public function __construct(TermRepository $termRepo)
    {
        $this->termRepo = $termRepo;
    }

    public function index(Request $request)
    {
        $search = $request->search ?? null;
        $sortBy = $this->sortBy;
        $sortDirection = $this->sortDirection;
        $perPage = $this->perPage;

        $artists = $this->termRepo->getTerms($search, $sortBy, $sortDirection, $perPage);

        return response()->json($artists);
    }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {
        return new TermResource($term);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
