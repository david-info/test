@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.agent.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.id') }}
                        </th>
                        <td>
                            {{ $agent->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.name') }}
                        </th>
                        <td>
                            {{ $agent->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.email') }}
                        </th>
                        <td>
                            {{ $agent->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.email_verified_at') }}
                        </th>
                        <td>
                            {{ $agent->email_verified_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.agent.fields.roles') }}
                        </th>
                        <td>
                            @foreach($agent->roles as $key => $roles)
                                <span class="label label-info">{{ $roles->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.agents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection