@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.person.title_singular') }}:
                    {{ trans('cruds.person.fields.id') }}
                    {{ $person->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.person.fields.id') }}
                            </th>
                            <td>
                                {{ $person->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.person.fields.name') }}
                            </th>
                            <td>
                                {{ $person->name }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('person_edit')
                    <a href="{{ route('admin.people.edit', $person) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.people.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection