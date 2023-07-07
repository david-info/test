@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('marchant_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.marchants.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.marchant.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.marchant.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Marchant">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.marchant.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marchant.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marchant.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marchant.fields.email_verified_at') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marchant.fields.roles') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($marchants as $key => $marchant)
                                    <tr data-entry-id="{{ $marchant->id }}">
                                        <td>
                                            {{ $marchant->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $marchant->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $marchant->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $marchant->email_verified_at ?? '' }}
                                        </td>
                                        <td>
                                            @foreach($marchant->roles as $key => $item)
                                                <span>{{ $item->title }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @can('marchant_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.marchants.show', $marchant->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('marchant_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.marchants.edit', $marchant->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('marchant_delete')
                                                <form action="{{ route('frontend.marchants.destroy', $marchant->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('marchant_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.marchants.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Marchant:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection