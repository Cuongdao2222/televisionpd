<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
        <tr>
            <th>Image</th>
        <th>Tên sản phẩm</th>
        <th>Productsku</th>
        <th>Link</th>
         <th>Nhóm sản phẩm</th>
        <th>Số lượng trong kho</th>
        <th>Sản phẩm Hot</th>
        <th>Sản phẩm Sale</th>
        
        <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
            //cắt chuỗi khi dài quá
            function substrwords($text, $maxchar, $end='...') {
                if (strlen($text) > $maxchar || $text == '') {
                    $words = preg_split('/\s/', $text);      
                    $output = '';
                    $i      = 0;
                    while (1) {
                        $length = strlen($output)+strlen($words[$i]);
                        if ($length > $maxchar) {
                            break;
                        } 
                        else {
                            $output .= " " . $words[$i];
                            ++$i;
                        }
                    }
                    $output .= $end;
                } 
                else {
                    $output = $text;
                }
                return $output;
            }
        
        ?>    

        <?php  

            $list_hot = App\Models\hotProduct::select('product_id')->get();
            $list_sale = App\Models\saleProduct::select('product_id')->get();

            function convertListToArray($list)
            {   
                $ar_list = [];

                if(count($list)){
                    foreach($list as $value){
                        array_push($ar_list, $value['product_id']);
                    }    
                }
                
                return $ar_list;
            }

            $list_hot = convertListToArray($list_hot);
            $list_sales = convertListToArray($list_sale);
            
            
           
        ?>


        
        @foreach($products as $product)

            <tr>
                <td><img src="/{{ $product->Image }}" width="150px" height="150px"></td>
            <td>{{ $product->Name }}</td>
            <td>{{ $product->ProductSku }}</td>
            <td>/{{ $product->Link }}</td>
            <td>{{ $product->Group_id }}</td>
            <td>{{ $product->Quantily }}</td>


            <td><input type="checkbox" id="hot{{ $product->id }}" name="hot"  onclick='handleClick({{ $product->id }});' data-id ="{{ $product->Group_id }}" {{ in_array($product->id, $list_hot)?'checked':'' }}></td>
            <td><input type="checkbox" id="sale{{ $product->id }}" name="sale"  onclick='saleClick({{ $product->id }});' data-id ="{{ $product->Group_id }}" {{ in_array($product->id, $list_sales)?'checked':'' }}></td>
            
                <td width="120">
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('products.edit', [$product->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>

                         <a href="{{ route('images.create', [$product->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="fas fa-image"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script type="text/javascript">

    function handleClick(id) {

        var checked = $('#hot'+id).is(':checked'); 

        const group_id = $('#hot'+id).attr('data-id');

        

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if(checked == true)
        $.ajax({
           
            type: 'POST',
            url: "{{ route('add-hot-product') }}",
            data: {
                product_id: id,
                group_id: group_id,
                   
            },
            success: function(result){
                console.log(result);
            }
        });
        else
        $.ajax({
           
            type: 'POST',
            url: "{{ route('remove-hot-product') }}",
            data: {
                product_id: id,
                group_id: group_id,
                   
            },
            success: function(result){
                console.log(result);
            }
        });

        
    }

    function saleClick(id) {

         var checked = $('#sale'+id).is(':checked'); 

        const group_id = $('#sale'+id).attr('data-id');


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if(checked == true)
        $.ajax({
           
            type: 'POST',
            url: "{{ route('add-sale-product') }}",
            data: {
                product_id: id,
                group_id: group_id,
                   
            },
            success: function(result){
                console.log(result);
            }
        });
        else
        $.ajax({
           
            type: 'POST',
            url: "{{ route('remove-sale-product') }}",
            data: {
                product_id: id,
                group_id: group_id,
                   
            },
            success: function(result){
                console.log(result);
            }
        });


    }     
    
</script>
