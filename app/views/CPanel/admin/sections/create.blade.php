@extends('_layouts/master')

@section('title')
    New Section - CMS Caboose Lake
@stop

@section('content')
    <div class="page-title"> <a href="{{ route('CPanel.admin.sections.index') }}"><i class="icon-custom-left"></i></a>
        <h3>New <span class="semi-bold">Section</span></h3>
    </div>
    {{ Form::open(['url'=>'CPanel/admin/sections', 'method'=>'POST']) }}

      @include('CPanel/admin/sections/partials/fields')

    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;Save section
    </button>

    {{ Form::close() }}
@stop
