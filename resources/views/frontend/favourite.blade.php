 



@foreach($data as $datas)

<tr>
    <td width="45%">
        <div class="display-flex align-center">
            <div class="img-product">

               <img src="{{ asset($datas['Image']) }}" alt="" class="mCS_img_loaded">
                
            </div>
            <div class="name-product">
                {{ $datas['Name'] }}
            </div>
        </div>
    </td>
    <td width="15%" class="price">{{ $datas['Price'] }}đ</td>
    <td width="15%"><span class="in-stock-box">In Stock</span></td>
    <td width="15%"><button class="round-black-btn small-btn" onclick="addToCart({{ $datas['id'] }})">Add to Cart</button></td>
    <td width="10%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>
</tr>


@endforeach