@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.person.title_singular') }}:
                    {{ trans('cruds.person.fields.id') }}
                    {{ $person->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('person.edit', [$person])
        </div>
    </div>
</div>
@endsection