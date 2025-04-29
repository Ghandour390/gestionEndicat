<?php

namespace App\Http\Controllers;
use App\Models\Role;


use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Repositories\IRoleRepository;


class RoleController extends Controller
{
    protected IRoleRepository $iRoleRepositiry;


    public function __construct(IRoleRepository $iRoleRepositiry)
    {
        $this->iRoleRepositiry=$iRoleRepositiry;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->iRoleRepositiry->getAllRoles();
        $title = "gestion Role";
        $thead = ['name', 'description'];
        $column=[
            'name'=>'text',
            'description'=>'text'
        ];
        return view('dashboard.admin', compact('data', 'title', 'thead','column'));
       
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
    public function store(StoreRoleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->iRoleRepositiry->deleteRole($id);
        return $this->index()->with('suceess','le role suprimie avec success');
    }
}
