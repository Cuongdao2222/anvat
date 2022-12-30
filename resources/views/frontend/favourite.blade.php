 

 @foreach($data as $datas)

 
      

    <div class="js-item-row product_list_cart" data-variant_id="0" data-item_id="5804" data-item_type="product">

        <div class="cart_col_1">
            <a href="{{ route('details', $datas['Link']) }}"><img src="{{ asset($datas['Image']) }}" style="width: 85px;"></a>
           
        </div>
        <div class="cart_col_2">
            <a href="{{ route('details', $datas['Link']) }}"><span class="name">{{ $datas['name'] }}</span></a>
            <!--//Kiem tra khuyen mai co lua chon-->
            <ul style="list-style-type: disc;color: #888888;margin-left: 15px;">
            </ul>
            
        </div>
       

        <a href="javascript:void(0)" class="delete-from-cart" ><i class="fa fa-times-circle"></i> Xóa</a>
    </div>
    @endforeach