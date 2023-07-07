<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInterfacepaneRequest;
use App\Http\Requests\StoreInterfacepaneRequest;
use App\Http\Requests\UpdateInterfacepaneRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InterfacepaneController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('interfacepane_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.interfacepanes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('interfacepane_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.interfacepanes.create');
    }

    public function store(StoreInterfacepaneRequest $request)
    {
        $interfacepane = Interfacepane::create($request->all());

        return redirect()->route('admin.interfacepanes.index');
    }

    public function edit(Interfacepane $interfacepane)
    {
        abort_if(Gate::denies('interfacepane_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.interfacepanes.edit', compact('interfacepane'));
    }

    public function update(UpdateInterfacepaneRequest $request, Interfacepane $interfacepane)
    {
        $interfacepane->update($request->all());

        return redirect()->route('admin.interfacepanes.index');
    }

    public function show(Interfacepane $interfacepane)
    {
        abort_if(Gate::denies('interfacepane_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.interfacepanes.show', compact('interfacepane'));
    }

    public function destroy(Interfacepane $interfacepane)
    {
        abort_if(Gate::denies('interfacepane_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $interfacepane->delete();

        return back();
    }

    public function massDestroy(MassDestroyInterfacepaneRequest $request)
    {
        $interfacepanes = Interfacepane::find(request('ids'));

        foreach ($interfacepanes as $interfacepane) {
            $interfacepane->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
