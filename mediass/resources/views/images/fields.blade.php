<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', 'Stt:') !!}
    {!! Form::text('order', null, ['class' => 'form-control']) !!}
</div>

<?php  
    $start = stripos($_SERVER['REQUEST_URI'],'?');
    
    $result = substr($_SERVER['REQUEST_URI'], $start);

    $product_id = str_replace('?', '', $result);

?>
<div class="form-group col-sm-6" style="display:none">
    {!! Form::label('product_id', 'Product_id:') !!}
    {!! Form::text('product_id', $product_id, ['class' => 'form-control']) !!}
</div>


