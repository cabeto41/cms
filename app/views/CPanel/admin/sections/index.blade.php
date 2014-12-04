@extends('_layouts/master')


@section('title')
    Manager - CMS Caboose Lake
@stop


@section('content')
<div class="page-title">
    <a href="{{ route('CPanel.index') }}" class="active"><i class="icon-custom-left"></i></a>
    <h3>List of <span class="semi-bold">Sections</span></h3>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-title">
                @include('CPanel/admin/sections/partials/filters')
            </div>
            <div class="grid-body ">
            <div class="form-group">
                <a href="{{ url('CPanel/admin/sections/create') }}" class="btn btn-info btn-cons" >
                    <i class="fa fa-plus"></i>&nbsp;Add a new section
                </a>
            </div>
            @if($sections->getTotal())
                <p>
                    There are <b>{{ $sections->getTotal() }}</b> sections, showing page <b>{{ $sections->getCurrentPage() }}</b> of <b>{{ $sections->getLastPage() }}</b>
                </p>
                @include('CPanel/admin/sections/partials/table')
                {{ $sections->links() }}
            </div>
            @else
            <div class="alert alert-error">
                <i class="fa fa-warning"></i>
                <b>There are no sections</b>
            </div>
            @endif
        </div>
    </div>
</div>

@stop



