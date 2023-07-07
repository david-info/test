<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyActiveAgentRequest;
use App\Http\Requests\StoreActiveAgentRequest;
use App\Http\Requests\UpdateActiveAgentRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveAgentsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('active_agent_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeAgents.index');
    }

    public function create()
    {
        abort_if(Gate::denies('active_agent_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeAgents.create');
    }

    public function store(StoreActiveAgentRequest $request)
    {
        $activeAgent = ActiveAgent::create($request->all());

        return redirect()->route('admin.active-agents.index');
    }

    public function edit(ActiveAgent $activeAgent)
    {
        abort_if(Gate::denies('active_agent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeAgents.edit', compact('activeAgent'));
    }

    public function update(UpdateActiveAgentRequest $request, ActiveAgent $activeAgent)
    {
        $activeAgent->update($request->all());

        return redirect()->route('admin.active-agents.index');
    }

    public function show(ActiveAgent $activeAgent)
    {
        abort_if(Gate::denies('active_agent_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeAgents.show', compact('activeAgent'));
    }

    public function destroy(ActiveAgent $activeAgent)
    {
        abort_if(Gate::denies('active_agent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activeAgent->delete();

        return back();
    }

    public function massDestroy(MassDestroyActiveAgentRequest $request)
    {
        $activeAgents = ActiveAgent::find(request('ids'));

        foreach ($activeAgents as $activeAgent) {
            $activeAgent->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
