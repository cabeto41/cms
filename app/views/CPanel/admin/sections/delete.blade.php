{{ Form::open(['route'=>['CPanel.admin.sections.destroy',$section->id],'method'=>'DELETE'   ]) }}

@include('CPanel/admin/sections/partials/quickView')

<div class="modal-footer">
    <button class="btn btn-danger" type="submit">
        <i class="fa fa-trash-o"></i>&nbsp;Delete section
    </button>
</div>

{{ Form::close() }}