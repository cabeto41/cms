<table class="table table-hover table-condensed" id="grdSections">
    <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>State</th>
        <th>Menu</th>
        <th>Slug URL</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sections as $section)
    <tr>
        <td class="name">{{ $section->name }}</td>
        <td>{{ $section->type }}</td>
        <td>{{ $section->published ? "Published":"Draft" }}</td>
        <td>{{ $section->menu ? "Show in menu":"Don't show in menu" }}</td>
        <td>{{ $section->slug_url }}</td>
        <td>
            <button onclick="ShowModal('{{ route('CPanel.admin.sections.show',$section->id) }}','QuickViewModal');" class="btn btn-primary btn-xs btn-mini tip" title="" data-toggle="tooltip" data-original-title="Show">
                <i class="fa fa-file-text"></i>
            </button>
            <a href = "{{ route('CPanel.admin.sections.edit',$section->id) }}" class="btn btn-primary btn-xs btn-mini tip" title="" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
            <button onclick="ShowModal('{{ route('CPanel.admin.sections.delete',$section->id) }}','DeleteModal');" class="btn btn-primary btn-xs btn-mini tip" title="" data-toggle="tooltip" data-original-title="Delete">
                <i class="fa fa-trash-o"></i>
            </button>
        </td>
    </tr>
    @endforeach
    </tbody>
    <div class="modal fade" id="QuickViewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
                    <div class="alert alert-info">
                        <i class="fa fa-file-text fa-7x"></i>
                        <h4 id="myModalLabel" class="p-t-10 semi-bold">Detailed information</h4>
                        <p class="no-margin">Detailed information section</p>
                    </div>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>

    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
                    <div class="alert alert-error">
                        <i class="fa fa-trash-o fa-7x"></i>
                        <br>
                        <h4 id="myModalLabel" class="p-t-10 semi-bold">Do you want to delete this record?</h4>
                        <p class="no-margin">When doing this all other elements related to this record could be eliminated automatically.</p>
                    </div>
                </div>
                <div class="modal-body">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>


</table>

