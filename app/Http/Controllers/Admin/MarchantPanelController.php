<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMarchantPanelRequest;
use App\Http\Requests\StoreMarchantPanelRequest;
use App\Http\Requests\UpdateMarchantPanelRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarchantPanelController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('marchant_panel_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.marchantPanels.index');
    }

    public function create()
    {
        abort_if(Gate::denies('marchant_panel_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.marchantPanels.create');
    }

    public function store(StoreMarchantPanelRequest $request)
    {
        $marchantPanel = MarchantPanel::create($request->all());

        return redirect()->route('admin.marchant-panels.index');
    }

    public function edit(MarchantPanel $marchantPanel)
    {
        abort_if(Gate::denies('marchant_panel_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.marchantPanels.edit', compact('marchantPanel'));
    }

    public function update(UpdateMarchantPanelRequest $request, MarchantPanel $marchantPanel)
    {
        $marchantPanel->update($request->all());

        return redirect()->route('admin.marchant-panels.index');
    }

    public function show(MarchantPanel $marchantPanel)
    {
        abort_if(Gate::denies('marchant_panel_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.marchantPanels.show', compact('marchantPanel'));
    }

    public function destroy(MarchantPanel $marchantPanel)
    {
        abort_if(Gate::denies('marchant_panel_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marchantPanel->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarchantPanelRequest $request)
    {
        $marchantPanels = MarchantPanel::find(request('ids'));

        foreach ($marchantPanels as $marchantPanel) {
            $marchantPanel->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
