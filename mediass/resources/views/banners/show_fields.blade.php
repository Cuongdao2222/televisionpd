<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $banner->id }}</p>
</div>

<!-- Banner Image Field -->
<div class="col-sm-12">
    {!! Form::label('banner_image', 'Banner Image:') !!}
    <p>{{ $banner->banner_image }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $banner->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $banner->updated_at }}</p>
</div>

