<!-- Banner Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner_image', 'Banner Image:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('banner_image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('banner_image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
