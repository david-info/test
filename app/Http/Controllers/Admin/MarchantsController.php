<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMarchantRequest;
use App\Http\Requests\StoreMarchantRequest;
use App\Http\Requests\UpdateMarchantRequest;
use App\Models\Marchant;
use App\Models\Role;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarchantsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('marchant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marchants = Marchant::with(['roles'])->get();

        return view('admin.marchants.index', compact('marchants'));
    }

    public function create()
    {
        abort_if(Gate::denies('marchant_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        return view('admin.marchants.create', compact('roles'));
    }

    public function store(StoreMarchantRequest $request)
    {
        $marchant = Marchant::create($request->all());
        $marchant->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.marchants.index');
    }

    public function edit(Marchant $marchant)
    {
        abort_if(Gate::denies('marchant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        $marchant->load('roles');

        return view('admin.marchants.edit', compact('marchant', 'roles'));
    }

    public function update(UpdateMarchantRequest $request, Marchant $marchant)
    {
        $marchant->update($request->all());
        $marchant->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.marchants.index');
    }

    public function show(Marchant $marchant)
    {
        abort_if(Gate::denies('marchant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marchant->load('roles');

        return view('admin.marchants.show', compact('marchant'));
    }

    public function destroy(Marchant $marchant)
    {
        abort_if(Gate::denies('marchant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marchant->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarchantRequest $request)
    {
        $marchants = Marchant::find(request('ids'));

        foreach ($marchants as $marchant) {
            $marchant->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
