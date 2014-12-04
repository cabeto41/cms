@extends('_layouts/master')

@section('title')
    Edit Section "{{ $section->name }}"
@stop

@section('content')
    <div class="page-title"> <a href="{{ route('CPanel.admin.sections.index') }}"><i class="icon-custom-left"></i></a>
        <h3>Edit Section <span class="semi-bold">"{{ $section->name }}"</span></h3>
    </div>

    {{ Form::model($section,['route'=>['CPanel.admin.sections.update', $section->id], 'method'=>'PUT']) }}

    @include('CPanel/admin/sections/partials/fields')

    <button class="btn btn-primary" type="submit">
        <i class="fa fa-edit"></i>&nbsp;Edit section
    </button>

    {{ Form::close() }}
@stop
