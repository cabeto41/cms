{{ Form::model(Input::all(),['route'=>'CPanel.admin.sections.index','method'=>'GET','class' => 'form-inline','role' => 'form']) }}
<h4>Filter <span class="semi-bold">Options</span></h4><br>
<div class="form-group">
    {{ Form::Label('type','Type') }}
    {{ Form::select('type',[''=>'All','page' => 'Page','blog'=>'Blog', 'gallery'=>'Gallery']) }}
</div>
<div class="form-group">
    {{ Form::Label('published','State') }}
    {{ Form::select('published',[''=>'All','0' => 'Draft','1'=>'Published']) }}
</div>
<div class="form-group">
    {{ Form::Label('menu','Show in Menu') }}
    {{ Form::select('menu',[''=>'All','0' => 'No','1'=>'Yes']) }}
</div>
<div class="form-group">
    {{ Form::Label('search','Name') }}
    {{ Form::text('search') }}
</div>
<div class="form-group">
    {{ Form::Label('button','&nbsp;') }}
    <button class="btn btn-warning" type="submit">
        <i class="fa fa-filter"></i>&nbsp;Filter sections
    </button>
</div>
<hr/>
<h4>Sort <span class="semi-bold">Options</span></h4><br>
<div class="form-group">
    {{ Form::select('order_by',['created_at' => 'Created At','name'=>'Name']) }}
</div>
<div class="form-group">
    {{ Form::select('order_direction',['DESC' => 'Desc','ASC'=>'Asc']) }}
</div>
<div class="form-group">
    <button class="btn btn-success" type="submit">
        <i class="fa fa-sort"></i>&nbsp;Sort sections
    </button>
</div>

{{ Form::close() }}