@extends('frontend.layouts.apps')
@section('content') 
@push('style')

<link href="{{ asset('css/market.detail.min.css') }}" rel="stylesheet">
<style type="text/css">
    .link-order{
        background: red !important;
        
    }

    .link-order .text{
        color: #fff !important;
    }
</style>




<style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
            .fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
            .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
            .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
            .fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}
                .save{
                    margin-left: 20px;
                }
        </style>
        <style type="text/css">
            .content{
                padding: 0 !important;
            }

            
            @media screen and (max-width: 776px) {

                .page-container{
                    min-width: fit-content;
                }

                .related-package .package-list .package{
                    flex: 0 0 calc(50% - 30px);
                }
                .product-common{
                    grid-template-columns: none;
                }
                
            }    
        </style>
@endpush
<div class="page-container">
    <div class="page-wrapper">
        <div class="breadcrumb">
            <ul>
                <li class=""><a href="/">Trang chủ</a></li>
                <!-- <li class=""><a href="{{ route('details', $groupLink??'') }}">{{ @$groupName }}</a></li> -->
                <li class="active"><span>{{ $data->Name }}</span></li>
            </ul>
        </div>
        <div class="product-detail-container">
            <div class="product-common">
                <div class="photo-container">
                    <div class="photo-box">
                        <div class="main-photo">
                            <img class="top-left-tag" src="https://image.cooky.vn/icon/s320x320/a63bc020-0695-4b50-b74c-144329242e39.png">
                            <div class="designer" style="background-color: rgb(255, 255, 255);">
                                <div class="designer-container">
                                    <div class="avatar"><img src="https://image.cooky.vn/usr/g1/51/avt/s200x200/bb639d86-c210-464f-85bd-db7e2b051f66.jpeg"></div>
                                    <!-- <div class="designer-content">
                                        <div class="title">Được thiết kế bởi</div>
                                        <div class="description two-lines">Cooky Vietnamese Cuisine Chef</div>
                                    </div>
                                    <div class="statistic">793 sản phẩm</div> -->
                                </div>
                            </div>

                            <?php 

                                $images_products = Cache::remember('image_product_'.$data->id, 100, function() use ($data) {

                                    $images = App\Models\image::where('product_id', $data->id)->select('image')->get()??'';

                                    return $images;
                                
                                });


                            ?>
                            <div class="avaBox"><img src="{{ asset($data->Image) }}" width="100%" class="img-fit" loading="lazy"></div>
                        </div>
                        <div class="side">
                            @if(isset($images_products))
                       
                            @foreach( $images_products as $image)

                            <div class="side-item is-main"><img class="img-fit" src="{{ asset($image->image) }}"></div>

                            @endforeach
                            @endif
                           
                        </div>
                    </div>
                </div>
                <div class="package-info">
                    <div class="basic-info-box">


                        <h1 class="name">{{ $data->Name }}</h1>
                        
                        <div class="price-x">
                            <div class="price ">
                                
                                <div><span class="sale-info">{{  @number_format($data->Price)  }} đ</div>
                            </div>
                        </div>
                    </div>
                    <div class="extra-info-box">
                        <div class="display-flex btn-cart-box">
                            <!-- <button class="btn-add-to-cart n-btn btn-add-to-cart " title="Bấm để thêm vào giỏ hàng">
                                <div style="position: relative; z-index: 3;">
                                    <span class="row-1">
                                        <div class="icon-total-save">
                                            <img class="icon" src="https://www.cooky.vn/react/images/icons/cart.svg">
                                            <div class="badge-cart"></div>
                                        </div>
                                        <span class="text display-block" onclick="addToCart({{ $data->id }})">Thêm vào giỏ</span>
                                    </span>
                                </div>
                            </button> -->
                            
                            <button class="add-item-wrapper n-btn btn-add-to-cart btn-add-to-collection ">
                                <span class="row-1">
                                    <div class="icon-total-save"><img class="icon" src="https://img.icons8.com/material-outlined/2x/sell-stock.png"></div>
                                    <!-- <span class="text display-block" style="color: rgb(172, 172, 172);" onclick="addToCartRedirect({{ $data->id }})">Mua ngay</span> -->
                                </span>
                                <span class="row-2"></span>
                            </button>

                            @if(!empty($data->Link_order))

                             <button class="add-item-wrapper n-btn btn-add-to-cart btn-add-to-collection link-order">
                                <a href="{{ $data->Link_order }}">
                                    <span class="row-1">
                                        <div class="icon-total-save"><img class="icon" src="https://img.icons8.com/material-outlined/2x/sell-stock.png"></div>
                                        <span class="text display-block" style="color: rgb(172, 172, 172);">Đến nơi bán</span>
                                    </span>
                                    <span class="row-2"></span>
                                </a>
                                
                            </button>
                            @endif


                            <button class="add-item-wrapper n-btn btn-add-to-cart btn-add-to-collection save">
                                <span class="row-1">
                                    
                                    
                                    <span class="text display-block favourite" style="color: rgb(172, 172, 172);" data-id="{{ $data->id }}">
                                    <img class="icon" style="margin-bottom: -4px;" src="https://www.cooky.vn/react/images/icons/heart-gray.svg">    
                                    Lưu</span>
                                </span>
                                <span class="row-2"></span>
                            </button>
                           
                            
                        </div>
                        @if(!empty($data->promotion))
                        <div class="promo-desc-box">
                            <img src="react/images/icons/info-yellow.svg">
                            <div>Ưu đãi áp dụng cho đơn:
                                 {!! @$data->promotion !!}
                            </div>
                        </div>
                        @endif
                        <!-- <div class="promo popup-promo-app ">
                            <div class="popup-wrapper desc-wrapper">
                                <div class="popup-header"><button class="btn-close-popup"><img src="react/images/icons/close.svg"></button></div>
                                <div class="popup-body">
                                    <div>
                                        <h4>Mô tả ưu đãi</h4>
                                        <div class="desc-content"><span>Ưu đãi áp dụng cho đơn:
                                            - Tối thiểu 250k
                                            - Nhận hàng từ 6h-20h ngày 28/11/2022
                                            - Tối đa 1 phần / 1 đơn</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="brand-info-box">
                            <div class="brand-info-item">
                                <div class="brand-into-title">Định lượng</div>
                                <div class="brand-into-content">300g</div>
                            </div>
                            <div class="brand-info-item" style="position: relative;">
                                <div class="brand-into-title">Thương hiệu</div>
                                <div class="brand-into-content"><a href="https://cooky.vn/brand/cookymade-17">CookyMADE</a></div>
                            </div>
                            <div class="brand-info-item">
                                <div class="brand-into-title">Xuất xứ</div>
                                <div class="brand-into-content">Việt Nam</div>
                            </div>
                        </div>
                        <div class="overview">
                            <label class="title"><b>Thành phần</b></label>
                            <div class="container">
                                <div class="option"> 1. Ba Rọi Heo Nướng BBQ (Ướp Sẵn) 300g</div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="product-desc">
                <div class="title-box">
                    <div class="title-boxs active" data-id="3">Mô tả</div>
                    <div class="title-boxs" data-id="1">Hướng dẫn chế biến</div>
                    <div class="title-boxs" data-id="2">Hướng dẫn bảo quản</div>
                </div>
                <div class="content-box">
                    <div class="">
                        <div class="content-x">Ba Rọi Nướng BBQ là một món ăn được rất nhiều người yêu thích. Thịt mềm, thơm, thấm gia vị ướp thịt khi nướng lên sẽ có hương vị vô cùng thơm ngon, độc đáo và hương thơm sẽ khiến bạn không thể chối từ được.</div>
                        <div class="btn-desc-box">
                            <button>Xem toàn bộ mô tả</button>
                            <div class="popup-promo-app ">
                                <div class="popup-wrapper desc-wrapper">
                                    <div class="popup-header"><button class="btn-close-popup"><img src="react/images/icons/close.svg"></button></div>
                                    <div class="popup-body">
                                        <div>
                                            <h4>Mô tả</h4>
                                            <div class="desc-content">
                                                <span>
                                                    <p>Ba Rọi Nướng BBQ là một món ăn được rất nhiều người yêu thích. Thịt mềm, thơm, thấm gia vị ướp thịt khi nướng lên sẽ có hương vị vô cùng thơm ngon, độc đáo và hương thơm sẽ khiến bạn không thể chối từ được.<br>
                                                        * Đặt ngay tại Cooky nhé, gia vị nêm nếm Cooky đã làm sẵn hết rồi, bạn chỉ cần mua về nướng lên dùng ngay thôi !
                                                    </p>
                                                    <p><br>
                                                        <strong>Pack đóng gói cẩn thận gồm những nguyên liệu:</strong>
                                                    </p>
                                                    <table border="0" cellpadding="10px" cellspacing="0" data-mce-style="border: 0.5px solid #aaa; height: 211px;" height="492" width="100%">
                                                        <tbody>
                                                            <tr data-mce-style="background-color: #eeeeee;">
                                                                <td><strong data-mce-style="font-family: arial, helvetica, sans-serif; font-size: 11pt;">Thành phần Pack</strong></td>
                                                                <td><strong data-mce-style="font-family: arial, helvetica, sans-serif; font-size: 11pt;">Lượng</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1. Ba Rọi Heo Nướng BBQ (Ướp Sẵn)</td>
                                                                <td>
                                                                    <p>&nbsp;300g</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2. Xốt Nướng BBQ CookyMADE</td>
                                                                <td>
                                                                    <p>1 gói</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p><strong>Hướng dẫn chế biến :</strong></p>
                                                    <p><strong>Bước 1 :</strong>&nbsp;Rã đông thực phẩm&nbsp;ở nhiệt độ phòng</p>
                                                    <p><strong>Bước 2 :</strong> Nướng chín (có thể nướng bằng nồi chiên không dầu, bếp than, bếp nướng điện, lò nướng)</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="active">
                        
                            {!!   html_entity_decode($data->Detail)  !!}
                       
                    </div>
                    <div class="">
                        <ul class="preservation-box">
                            <li>2 tháng kể từ ngày sản xuất</li>
                            <li>Tủ đông &lt;2 tháng</li>
                            <li><b>Lưu ý:</b>- Không cấp đông lại thực phẩm khi đã rã đông
                                - Không sử dụng khi sản phẩm có dấu hiệu hư hỏng
                            </li>
                        </ul>
                    </div>
                    <div class=""></div>
                </div>
            </div>
       
            
            <div class="related-package">
                <label class="title"><span class="flex-align-center">Sản phẩm liên quan</span></label>
                <div class="package-list">

                    @if(isset($other_product))
                     @foreach($other_product as  $value)
                    @if($value->active==1 && $value->id != $data->id)
                    <div class="package undefined">
                        <div class="cover-photo">
                            
                            <div class="promotion-photo">
                                <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/3384/s200x200/fffff45c-7ad2-41ac-a152-4723aa3d46c5.jpeg" class="img-fit" loading="lazy"></div>
                            </div>
                            
                        </div>
                        <div class="overview">
                            <div class="name two-lines"><a class="link-absolute" target="_self" href="{{ route('details', $value->Link) }}"></a>{{ $value->Name }}</div>
                            <div class="d-flex-center-middle">
                                <div class="price p-g-v ">
                                    <!-- <div class="weight-serving">2 người</div> -->
                                    <div class="price-container">
                                        <div class="sale-price">{{  @number_format($value->Price)  }}</div>
                                        <div class="unit-price"></div>
                                    </div>
                                </div>
                                <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                    <div style="position: relative; z-index: 3;"><img src="react/images/icons/plus-filled-red.svg"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $('.title-boxs').click(function(){

        $('.title-boxs').removeClass('active');

        val = $(this).attr('data-id');

        $(this).addClass('active');

        if(val==1){
            content = '{!! $data->Specifications !!}';
        }
        else if(val==2){
            content = '{!! $data->Salient_Features !!}';
        }
        else{
            content = '{!! $data->Detail !!}';
        }
        $('.content-box .active').html();
        $('.content-box .active').html(content);

    });

    function addToCartRedirect(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('cart') }}",
            data: {
                product_id: id,
                gift_check:''
                   
            },
            beforeSend: function() {
               
                $('.loader').show();

            },
            success: function(result){

                window.location.href= "{{ route('cart-anvat') }}";
                
            }
        });
        
    }

    $('.favourite').click(function() {
        
        data_id = $(this).attr('data-id');

        data =  JSON.parse(localStorage.getItem('like'))??[];

        data.push(data_id);

        data = [...new Set(data)];

        localStorage.setItem('like', JSON.stringify(data));

        $(this).text('Đã Lưu');


    })


   
</script>
@endsection