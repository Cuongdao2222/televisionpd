
<li class="nav-item">
    <a href="{{ route('banners.index') }}"
       class="nav-link {{ Request::is('banners*') ? 'active' : '' }}">
        <p>Banners</p>
    </a>
</li>


<li class="nav-item" style="display: flex; height:44px;"  >

    <a href="{{ route('groupProducts.index') }}"
       class="nav-link {{ Request::is('groupProducts*') ? 'active' : '' }}" style="width: 68%;">
        <p>Group Products</p>
        
    </a>

    <?php
        $listGroup = App\Models\groupProduct::select('name','id')->get();

    ?>

    @if(count($listGroup)>0)
     <span class="btn btn-link open" style="width: 32%;">+</span>
     @endif 
    
    
</li>

<ul style="width: 68%;">
    @if(count($listGroup)>0)
    @foreach($listGroup as $value)
    <li class="child-nav">
        <a href="{{ route('select-category',[$value->id]) }}"
           class="nav-link">
            <p>{{ $value->name }}</p>
        </a>
    </li>
    @endforeach
    @endif
</ul>


<li class="nav-item">
    <a href="{{ route('makers.index') }}"
       class="nav-link {{ Request::is('makers*') ? 'active' : '' }}">
        <p>Hãng phân phối</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>

<style type="text/css">
    
    .child-nav a{
        width: 100%;
    }
</style>

<script type="text/javascript">
    $('.child-nav').hide();

    $(".open").bind("click", function(){

        var acction = $(".open").text();

        if(acction =='+'){
            $('.child-nav').show();
            $('.open').text('-');
        }
        else{
            $('.child-nav').hide();
            $('.open').text('+');
        }
    });
    
</script>



