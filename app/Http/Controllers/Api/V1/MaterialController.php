<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Material\MaterialResource;
use App\Models\Material;
use App\Repositories\Api\V1\MaterialRepository;
use App\Utils\Paginatable;
use App\Utils\Sortable;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    use Sortable, Paginatable;
    protected $materialRepository;

    public function __construct(MaterialRepository $materialRepository)
    {
        $this->materialRepository = $materialRepository;
    }

    public function index(Request $request)
    {
        $search = $request->search ?? null;
        $sortBy = $this->sortBy;
        $sortDirection = $this->sortDirection;
        $perPage = $this->perPage;

        $materials = $this->materialRepository->getMaterails($search, $sortBy, $sortDirection, $perPage);

        return response()->json($materials);
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
    public function show(Material $material)
    {
        return new MaterialResource($material);
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
