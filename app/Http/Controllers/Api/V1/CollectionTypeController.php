<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CollectionType\CollectionTypeResource;
use App\Models\CollectionType;
use App\Repositories\Api\V1\CollectionTypeRepository;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Illuminate\Http\Request;

class CollectionTypeController extends Controller
{
    use Sortable, Paginatable;
    protected $colectionTypeRepo;

    public function __construct(CollectionTypeRepository $colectionTypeRepo)
    {
        $this->colectionTypeRepo = $colectionTypeRepo;
    }

    public function index(Request $request)
    {
        $search = $request->search ?? null;
        $sortBy = $this->sortBy;
        $sortDirection = $this->sortDirection;
        $perPage = $this->perPage;

        $colectionTypes = $this->colectionTypeRepo->getCollectionTypes($search, $sortBy, $sortDirection, $perPage);

        return response()->json($colectionTypes);
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
    public function show(CollectionType $collectionType)
    {
        return new CollectionTypeResource($collectionType);
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
