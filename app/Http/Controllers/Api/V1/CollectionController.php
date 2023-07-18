<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Collection\CollectionResource;
use App\Models\Collection;
use App\Repositories\Api\V1\CollectionRepository;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    
    use Sortable, Paginatable;
    protected $collectionRepo;

    public function __construct(CollectionRepository $collectionRepo)
    {
        $this->collectionRepo = $collectionRepo;
    }

    public function index(Request $request)
    {
        $search = $request->search ?? null;
        $sortBy = $this->sortBy;
        $sortDirection = $this->sortDirection;
        $perPage = $this->perPage;

        $collections = $this->collectionRepo->getCollections($search, $sortBy, $sortDirection, $perPage);

        return response()->json($collections);
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
    public function show(Collection $collection)
    {
        return new CollectionResource($collection);
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
