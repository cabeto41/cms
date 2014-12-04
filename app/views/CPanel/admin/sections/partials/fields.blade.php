<div class="row">
    <div class="col-md-12">
        <div class="grid simple">
            <div class="grid-body no-border"> <br>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            {{ Form::Label('name',  'Name', array('class' => 'form-label')) }}
                            {{ $errors->first('name', '<span class="label label-important">:message</span>') }}
                            <div class="controls">
                                {{ Form::text('name', null ,array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::Label('slug_url','Slug URL', array('class' => 'form-label')) }}
                            <span class="help">e.g. "name-slug-url"</span>
                            {{ $errors->first('slug_url', '<span class="label label-important">:message</span>') }}
                            <div class="controls">
                                {{ Form::text('slug_url',null,array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::Label('type','Type', array('class' => 'form-label')) }}
                            {{ $errors->first('type', '<span class="label label-important">:message</span>') }}
                            <div class="controls">
                                {{ Form::select('type',[''=>'Select','page' => 'Page','blog'=>'Blog', 'gallery'=>'Gallery']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::Label('menu','Show in Menu', array('class' => 'form-label')) }}
                            {{ $errors->first('menu', '<span class="label label-important">:message</span>') }}
                            <div class="controls">
                                {{ Form::select('menu',[''=>'Select','0' => 'No','1'=>'Yes']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::Label('menu_order','Menu Order', array('class' => 'form-label')) }}
                            {{ $errors->first('menu_order', '<span class="label label-important">:message</span>') }}
                            <div class="controls">
                                {{ Form::text('menu_order') }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::Label('published','State', array('class' => 'form-label')) }}
                            {{ $errors->first('published', '<span class="label label-important">:message</span>') }}
                            <div class="controls">
                                {{ Form::select('published',[''=>'Select','0' => 'Draft','1'=>'Published']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
