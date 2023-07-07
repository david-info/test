<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyActiveUserRequest;
use App\Http\Requests\StoreActiveUserRequest;
use App\Http\Requests\UpdateActiveUserRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveUsersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('active_user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeUsers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('active_user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeUsers.create');
    }

    public function store(StoreActiveUserRequest $request)
    {
        $activeUser = ActiveUser::create($request->all());

        return redirect()->route('admin.active-users.index');
    }

    public function edit(ActiveUser $activeUser)
    {
        abort_if(Gate::denies('active_user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeUsers.edit', compact('activeUser'));
    }

    public function update(UpdateActiveUserRequest $request, ActiveUser $activeUser)
    {
        $activeUser->update($request->all());

        return redirect()->route('admin.active-users.index');
    }

    public function show(ActiveUser $activeUser)
    {
        abort_if(Gate::denies('active_user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activeUsers.show', compact('activeUser'));
    }

    public function destroy(ActiveUser $activeUser)
    {
        abort_if(Gate::denies('active_user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activeUser->delete();

        return back();
    }

    public function massDestroy(MassDestroyActiveUserRequest $request)
    {
        $activeUsers = ActiveUser::find(request('ids'));

        foreach ($activeUsers as $activeUser) {
            $activeUser->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
