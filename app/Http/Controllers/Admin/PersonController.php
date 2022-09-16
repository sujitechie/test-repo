<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('person_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.person.index');
    }

    public function create()
    {
        abort_if(Gate::denies('person_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.person.create');
    }

    public function edit(Person $person)
    {
        abort_if(Gate::denies('person_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.person.edit', compact('person'));
    }

    public function show(Person $person)
    {
        abort_if(Gate::denies('person_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $person->load('team');

        return view('admin.person.show', compact('person'));
    }
}
