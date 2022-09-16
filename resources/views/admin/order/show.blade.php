@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.order.title_singular') }}:
                    {{ trans('cruds.order.fields.id') }}
                    {{ $order->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.order.fields.id') }}
                            </th>
                            <td>
                                {{ $order->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.order.fields.somedetails') }}
                            </th>
                            <td>
                                {{ $order->somedetails }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.order.fields.product') }}
                            </th>
                            <td>
                                @foreach($order->product as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('order_edit')
                    <a href="{{ route('admin.orders.edit', $order) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection