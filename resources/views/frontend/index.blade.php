@extends('frontend.layouts.apps')
@section('content') 
@push('style')

<style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
            .fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
            .fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
            .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
            .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
            .fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}
                .swiper-slide, .swiper-wrapper{
                    height: auto !important;
                }

                .page-container{
                    width: auto !important;
                }
                .product-basic-info{
                    flex: 0 0 calc(20% - 20px);
                    width: calc(20%);
                }
        </style>
@endpush

<?php 

 $hots = Cache::rememberForever('hots', function(){

    $hots = App\Models\hotsProduct::select('product_id')->get()->pluck('product_id');

    return $hots;
});



$new_product = Cache::rememberForever('new_product', function(){

    $new_product = App\Models\newProduct::select('product_id')->get()->pluck('product_id');

    return $new_product;
});


$now  = Carbon\Carbon::now();


$date_string_flash_deal = DB::table('date_flash_deal')->where('id', 1)->first()->date;
$date_flashdeal = \Carbon\Carbon::create($date_string_flash_deal);

$deal = App\Models\deal::orderBy('order', 'desc')->take(5)->get();

if(!empty($deal)){

    $timeDeal_star =$deal->first()->start;

    $timeDeal_star =  \Carbon\Carbon::create($timeDeal_star);

    $timeDeal_end = $deal->first()->end;

    $timeDeal_end =  \Carbon\Carbon::create($timeDeal_end);

    $timestamp = $now->diffInSeconds($timeDeal_end);
}

 
    $banner_home =  App\Models\banners::where('option','=',0)->take(6)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->first();
    

?>


<div class="page-container">
    <div class="page-wrapper">
        <div class="home-page-container">
            <div class="slick-slider header-banner slick-initialized" dir="ltr">
                <div class="slick-list" style="height: 353px;">
                    <div class="slick-track" style="width: 23457px; opacity: 1; transform: translate3d(-7819px, 0px, 0px); transition: -webkit-transform 500ms ease 0s;">
                        <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;"></div>
                        <div data-index="0" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14934" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/0780af53-17f7-43f7-848c-496f36b70b5f.png" alt="Nhâm Nhi Mùa World Cup" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14398" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/47bb82fd-026c-4b46-9d05-67f760d1a161.png" alt="SIGNATURE COOKY 19K" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/blog/doi-tui-giay-lay-cooky-coins-bao-ve-moi-truong-cung-cooky-5536?" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/ea6f03bb-1744-418d-993e-11ff08941494.png" alt="ĐỔI TÚI GIẤY COOKY" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=11868" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/10083d93-54d7-42af-98b4-94e2db7ced09.png" alt="SIÊU DEAL - GIẢM GIÁ 50%" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14429" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/c95c6e04-d59d-4686-b1c5-7f3b76d545de.png" alt="Giảm 10% Cooky Mời Bạn Món Mới - BANNER" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14427" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/6210fcae-7450-4cbf-a6bb-6b2d3fb1d32a.png" alt="Mua 1 tặng 1" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="6" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="{{ $banner_home->link }}" target="_blank">

                                        <img src="{{ asset($banner_home->image) }}" alt="{{$banner_home->title}}" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;"></div>
                        <div data-index="8" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;"></div>
                        <div data-index="9" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;"></div>
                        <div data-index="10" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14934" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/0780af53-17f7-43f7-848c-496f36b70b5f.png" alt="Nhâm Nhi Mùa World Cup" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="11" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14398" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/47bb82fd-026c-4b46-9d05-67f760d1a161.png" alt="SIGNATURE COOKY 19K" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="12" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/blog/doi-tui-giay-lay-cooky-coins-bao-ve-moi-truong-cung-cooky-5536?" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/ea6f03bb-1744-418d-993e-11ff08941494.png" alt="ĐỔI TÚI GIẤY COOKY" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="13" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=11868" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/10083d93-54d7-42af-98b4-94e2db7ced09.png" alt="SIÊU DEAL - GIẢM GIÁ 50%" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="14" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14429" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/c95c6e04-d59d-4686-b1c5-7f3b76d545de.png" alt="Giảm 10% Cooky Mời Bạn Món Mới - BANNER" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="15" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14427" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/6210fcae-7450-4cbf-a6bb-6b2d3fb1d32a.png" alt="Mua 1 tặng 1" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="16" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14417" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/d7026cf2-fae0-4e97-b0fb-50989002c469.png" alt="Quà Tặng Từ MAGGI" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="17" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;"></div>
                        <div data-index="18" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;"></div>
                        <div data-index="19" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;"></div>
                    </div>
                </div>
                <ul class="slick-dots" style="display: block;">
                    <li class=""><button>1</button></li>
                    <li class=""><button>2</button></li>
                    <li class=""><button>3</button></li>
                    <li class=""><button>4</button></li>
                    <li class=""><button>5</button></li>
                    <li class=""><button>6</button></li>
                    <li class="slick-active"><button>7</button></li>
                    <li class=""><button>8</button></li>
                    <li class=""><button>9</button></li>
                    <li class=""><button>10</button></li>
                </ul>
            </div>
            <div class="short-link-list">
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" style="width: 1117px;">
                            <div class="category-slider">
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/9e71675b-dc0e-4a10-b6bc-dfd2c44c9945.png" alt="Đồng Giá 19K" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Đồng Giá 19K</div>
                                    <a class="overlay" target="_blank" title="Đồng Giá 19K" href="https://www.cooky.vn/ho-chi-minh/market/tim-kiem?collectionId=14398"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/7263b4ed-d311-4622-843b-5310c9e8d334.png" alt="Giảm 50%" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Giảm 50%</div>
                                    <a class="overlay" target="_blank" title="Giảm 50%" href="https://www.cooky.vn/ho-chi-minh/market/tim-kiem?collectionId=11868"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/7bc10222-6625-4801-963d-223e9e3cd987.png" alt="Set Cơm Nhà" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Set Cơm Nhà</div>
                                    <a class="overlay" target="_blank" title="Set Cơm Nhà" href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=13402"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/53f5c3c7-d5b6-43a6-85f6-a57815c2382e.png" alt="Mua Nhiều Giảm Nhiều" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Mua Nhiều Giảm Nhiều</div>
                                    <a class="overlay" target="_blank" title="Mua Nhiều Giảm Nhiều" href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=12953"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/fcff564a-40ff-4120-b018-1dda10ede71e.gif" alt="Nhâm Nhi Mùa World Cup" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Nhâm Nhi Mùa World Cup</div>
                                    <a class="overlay" target="_blank" title="Nhâm Nhi Mùa World Cup" href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14934"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/022067db-85af-450d-b162-62329e0b005d.png" alt="Pack Ướp Sẵn" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Pack Ướp Sẵn</div>
                                    <a class="overlay" target="_blank" title="Pack Ướp Sẵn" href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=7640"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/304a44c9-ec42-4972-ada5-2738f1227c53.png" alt="Món Kho" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Món Kho</div>
                                    <a class="overlay" target="_blank" title="Món Kho" href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=10801"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/b55d356e-0537-4f6c-b6df-5ce8e0a6e805.png" alt="Lẩu" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Lẩu</div>
                                    <a class="overlay" target="_blank" title="Lẩu" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=22"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/fc02c548-5cc6-401b-ae0b-f451afd818ec.png" alt="Món Canh" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Món Canh</div>
                                    <a class="overlay" target="_blank" title="Món Canh" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=39"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/125dbe9d-353f-4d08-8a4a-acbceec8ee91.png" alt="Món Nướng - BBQ" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Món Nướng - BBQ</div>
                                    <a class="overlay" target="_blank" title="Món Nướng - BBQ" href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=14310"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/fbb8fc36-4147-4b0d-affb-0d06602e8b3f.png" alt="Rau Củ" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Rau Củ</div>
                                    <a class="overlay" target="_blank" title="Rau Củ" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=7"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/fa977daa-29c8-4574-bbe8-57e5f50a36ac.png" alt="Trái Cây" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Trái Cây</div>
                                    <a class="overlay" target="_blank" title="Trái Cây" href="https://www.cooky.vn/ho-chi-minh/market/tim-kiem?categoryIds=1"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="width: 1117px;">
                            <div class="category-slider">
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/5aee691e-d002-48be-a926-816f2a7a8d42.png" alt="Thịt Heo" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Thịt Heo</div>
                                    <a class="overlay" target="_blank" title="Thịt Heo" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=4"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/d6c11e8a-fc6f-406e-9af9-2a2a69933cb8.png" alt="Gà &amp; Vịt" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Gà &amp; Vịt</div>
                                    <a class="overlay" target="_blank" title="Gà &amp; Vịt" href="https://www.cooky.vn/ho-chi-minh/market/tim-kiem?categoryIds=2"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/34bd2f8e-f9b1-4755-8f42-de7edb2c70d2.png" alt="Hải Sản" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Hải Sản</div>
                                    <a class="overlay" target="_blank" title="Hải Sản" href="https://www.cooky.vn/ho-chi-minh/market/tim-kiem?categoryIds=3"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/e53955c0-304a-43c7-b47b-d353938239e8.png" alt="Bò Dê" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Bò Dê</div>
                                    <a class="overlay" target="_blank" title="Bò Dê" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=5"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/50d90fff-415d-470c-9ba7-650e16e5da4c.png" alt="Combo" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Combo</div>
                                    <a class="overlay" target="_blank" title="Combo" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=38"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/06246ca6-b90d-4039-b5cc-e701888d847f.png" alt="Trứng &amp; Đậu" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Trứng &amp; Đậu</div>
                                    <a class="overlay" target="_blank" title="Trứng &amp; Đậu" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=6"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/615239e3-c537-40c5-9e09-f027055aa0c9.png" alt="Lương Thực" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Lương Thực</div>
                                    <a class="overlay" target="_blank" title="Lương Thực" href="https://www.cooky.vn/ho-chi-minh/market/tim-kiem?categoryIds=13"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/94639de1-5d0c-49ae-bee0-895404e68589.png" alt="Món Chay" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Món Chay</div>
                                    <a class="overlay" target="_blank" title="Món Chay" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=24"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/c0fd247d-6598-47e4-96c5-a3b323cb4479.png" alt="Sữa &amp; Phô Mai" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Sữa &amp; Phô Mai</div>
                                    <a class="overlay" target="_blank" title="Sữa &amp; Phô Mai" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=77"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/0c9823fa-2264-4d31-9de0-ce9abce9e4c3.png" alt="Gia Vị" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Gia Vị</div>
                                    <a class="overlay" target="_blank" title="Gia Vị" href="https://www.cooky.vn/ho-chi-minh/market/tim-kiem?categoryIds=12"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/a14f3cab-a3bd-45ce-8d8b-50bb2da389af.png" alt="Nhà Cửa" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Nhà Cửa</div>
                                    <a class="overlay" target="_blank" title="Nhà Cửa" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=18"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/49a963df-00f2-41a7-b532-f03403f4d5cb.png" alt="Đồ Uống" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Đồ Uống</div>
                                    <a class="overlay" target="_blank" title="Đồ Uống" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=10"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 1117px;">
                            <div class="category-slider">
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/ad0bfc36-2053-4f5e-ad04-32256a2d6179.png" alt="Ăn Vặt" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Ăn Vặt</div>
                                    <a class="overlay" target="_blank" title="Ăn Vặt" href="https://www.cooky.vn/ho-chi-minh/market/search?type=collection&amp;id=10204"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/14f3b752-ab28-4652-b349-4ba52b9dbfe1.png" alt="Bánh Kẹo" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Bánh Kẹo</div>
                                    <a class="overlay" target="_blank" title="Bánh Kẹo" href="https://www.cooky.vn/ho-chi-minh/market/search?type=category&amp;id=11"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/b62c254d-ea96-4b3f-a613-a9683f0e644f.png" alt="Công Thức" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Công Thức</div>
                                    <a class="overlay" target="_blank" title="Công Thức" href="https://www.cooky.vn/cong-thuc"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/15b61352-2fed-4e10-a101-eda8f8fee0ec.png" alt="Video" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Video</div>
                                    <a class="overlay" target="_blank" title="Video" href="https://www.cooky.vn/video"></a>
                                </div>
                                <div class="category-item">
                                    <div class="icon"><img class="img-fit" src="https://image.cooky.vn/ads/s320/e3690479-35d6-4cdd-8abf-56383179c325.png" alt="Chuyên Đề" loading="lazy"></div>
                                    <div class="label text-ellipsis-two-lines">Chuyên Đề</div>
                                    <a class="overlay" target="_blank" title="Chuyên Đề" href="https://www.cooky.vn/blog"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if(!empty($deal_check) && $deal_check->count()>0 && $now->between($deal_check[0]->start, $deal_check[0]->end))
            <div class="promotion-container">
                <div class="title">
                    Today's Special
                    <div class="see-more" style="cursor: default;">4/11</div>
                </div>
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                        <div class="swiper-slide swiper-slide-active" style="width: 1117px; margin-right: 20px;">
                            <div class="promotion-box" style="margin-left: -10px; margin-right: -10px;">
                                @foreach($deal as $key => $value)

                                <div class="product-basic-info flex-25">
                                    <a class="link-absolute" title="Gà Vườn Xốt Muối Ớt Nướng Than (Dùng Ngay)" href="https://cooky.vn/market/ga-vuon-xot-muoi-ot-nuong-than-dung-ngay-19726"></a>
                                    <div class="cover-box">
                                        <img class="video-play" src="./public/react/Images/Icons/video-play.svg"><img class="top-left-tag" src="https://image.cooky.vn/icon/s320x320/c982e85b-04a1-4c79-a485-8e4c70ea06ac.png">
                                        <div class="promotion-photo">
                                            <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/19726/s1124x1124/6f344d09-1614-42a3-a5fa-5c523af90850.jpeg" class="img-fit" loading="lazy"></div>
                                        </div>
                                    </div>
                                    <div class="promotion-name two-lines">{{ $value->name }}</div>
                                    <div class="d-flex-center-middle">
                                        <div class="price p-g-v ">
                                            <div class="weight-serving">2 người</div>
                                            <div class="price-container">
                                                <div class="sale-price">89,000đ</div>
                                                <div class="unit-price">159k</div>
                                            </div>
                                        </div>
                                        <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                            <div style="position: relative; z-index: 3;"><img src="react/images/icons/plus-filled-red.svg"></div>
                                        </button>
                                    </div>
                                </div>
                                @endforeach

                                
                            </div>
                        </div>
                        <!-- <div class="swiper-slide swiper-slide-next" style="width: 1117px; margin-right: 20px;">
                            <div class="promotion-box" style="margin-left: -10px; margin-right: -10px;">
                                <div class="product-basic-info flex-25">
                                    <a class="link-absolute" title="Thăn Ngoại Bò Hokubee Xốt Tiêu Xanh - Striploin Steak" href="https://cooky.vn/market/than-ngoai-bo-hokubee-xot-tieu-xanh-striploin-steak-14304"></a>
                                    <div class="cover-box">
                                        <div class="promotion-photo">
                                            <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/14304/s1124x1124/f3e0dcac-c634-4221-93dd-489f75119c97.jpeg" class="img-fit" loading="lazy"></div>
                                        </div>
                                    </div>
                                    <div class="promotion-name two-lines">Thăn Ngoại Bò Hokubee Xốt Tiêu Xanh - Striploin Steak</div>
                                    <div class="d-flex-center-middle">
                                        <div class="price p-g-v ">
                                            <div class="weight-serving">1 người</div>
                                            <div class="price-container">
                                                <div class="sale-price">159,000đ</div>
                                                <div class="unit-price">238k</div>
                                            </div>
                                        </div>
                                        <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                            <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-basic-info flex-25">
                                    <a class="link-absolute" title="Bánh Canh Mọc Viên" href="https://cooky.vn/market/banh-canh-moc-vien-19561"></a>
                                    <div class="cover-box">
                                        <div class="promotion-photo">
                                            <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/19561/s1124x1124/4ec67195-3f4a-45b9-ae3e-4b7208ee47fe.jpeg" class="img-fit" loading="lazy"></div>
                                        </div>
                                    </div>
                                    <div class="promotion-name two-lines">Bánh Canh Mọc Viên</div>
                                    <div class="d-flex-center-middle">
                                        <div class="price p-g-v ">
                                            <div class="weight-serving">3 người</div>
                                            <div class="price-container">
                                                <div class="sale-price">59,000đ</div>
                                                <div class="unit-price">92k</div>
                                            </div>
                                        </div>
                                        <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                            <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-basic-info flex-25">
                                    <a class="link-absolute" title="Mì Ý Bò Áp Chảo Xốt Pesto" href="https://cooky.vn/market/mi-y-bo-ap-chao-xot-pesto-19334"></a>
                                    <div class="cover-box">
                                        <div class="promotion-photo">
                                            <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/19334/s1124x1124/9a98d376-4fb8-48bd-9c8b-07ef25692635.jpeg" class="img-fit" loading="lazy"></div>
                                        </div>
                                    </div>
                                    <div class="promotion-name two-lines">Mì Ý Bò Áp Chảo Xốt Pesto</div>
                                    <div class="d-flex-center-middle">
                                        <div class="price p-g-v ">
                                            <div class="weight-serving">2 người</div>
                                            <div class="price-container">
                                                <div class="sale-price">119,000đ</div>
                                                <div class="unit-price">189k</div>
                                            </div>
                                        </div>
                                        <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                            <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-basic-info flex-25">
                                    <a class="link-absolute" title="Set Cơm Việt K" href="https://cooky.vn/market/set-com-viet-k-17282"></a>
                                    <div class="cover-box">
                                        <div class="promotion-photo">
                                            <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/17282/s1124x1124/2b0e0d7f-82b9-4c98-8f7a-68ed0d02cb0d.jpeg" class="img-fit" loading="lazy"></div>
                                        </div>
                                    </div>
                                    <div class="promotion-name two-lines">Set Cơm Việt K</div>
                                    <div class="d-flex-center-middle">
                                        <div class="price p-g-v ">
                                            <div class="weight-serving">3 món/2 người</div>
                                            <div class="price-container">
                                                <div class="sale-price">99,000đ</div>
                                                <div class="unit-price">145k</div>
                                            </div>
                                        </div>
                                        <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                            <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 1117px; margin-right: 20px;">
                            <div class="promotion-box" style="margin-left: -10px; margin-right: -10px;">
                                <div class="product-basic-info flex-25">
                                    <a class="link-absolute" title="Gà Ta Hấp Mắm Nhĩ" href="https://cooky.vn/market/ga-ta-hap-mam-nhi-29"></a>
                                    <div class="cover-box">
                                        <img class="video-play" src="./public/react/Images/Icons/video-play.svg">
                                        <div class="promotion-photo">
                                            <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/29/s1124x1124/63da1a8e-994e-4e8a-80e6-970a6401b391.jpeg" class="img-fit" loading="lazy"></div>
                                        </div>
                                    </div>
                                    <div class="promotion-name two-lines">Gà Ta Hấp Mắm Nhĩ</div>
                                    <div class="d-flex-center-middle">
                                        <div class="price p-g-v ">
                                            <div class="weight-serving">2 người</div>
                                            <div class="price-container">
                                                <div class="sale-price">79,000đ</div>
                                                <div class="unit-price">132k</div>
                                            </div>
                                        </div>
                                        <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                            <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-basic-info flex-25">
                                    <a class="link-absolute" title="Nạc Vai Bò Mỹ (Top Blade) Cắt BBQ" href="https://cooky.vn/market/nac-vai-bo-my-top-blade-cat-bbq-16447"></a>
                                    <div class="cover-box">
                                        <div class="promotion-photo">
                                            <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/16447/s1124x1124/427a4852-1a74-49d0-85ef-3277f3377b94.jpeg" class="img-fit" loading="lazy"></div>
                                        </div>
                                    </div>
                                    <div class="promotion-name two-lines">Nạc Vai Bò Mỹ (Top Blade) Cắt BBQ</div>
                                    <div class="d-flex-center-middle">
                                        <div class="price p-g-v ">
                                            <div class="weight-serving">200-220g</div>
                                            <div class="price-container">
                                                <div class="sale-price">79,000đ</div>
                                                <div class="unit-price">88k</div>
                                            </div>
                                        </div>
                                        <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                            <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-basic-info flex-25">
                                    <a class="link-absolute" title="Dẻ Sườn Heo Borrowdale" href="https://cooky.vn/market/de-suon-heo-borrowdale-17994"></a>
                                    <div class="cover-box">
                                        <div class="promotion-photo">
                                            <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/17994/s1124x1124/44360901-842f-4aba-bb9d-8ed51de69687.jpeg" class="img-fit" loading="lazy"></div>
                                        </div>
                                    </div>
                                    <div class="promotion-name two-lines">Dẻ Sườn Heo Borrowdale</div>
                                    <div class="d-flex-center-middle">
                                        <div class="price p-g-v ">
                                            <div class="weight-serving">250-300g</div>
                                            <div class="price-container">
                                                <div class="sale-price">139,000đ</div>
                                                <div class="unit-price">189k</div>
                                            </div>
                                        </div>
                                        <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                            <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            @endif

            @if(!empty($product_sale)&&$product_sale->count()>0)
            <div class="group-product-content">
                <div class="title" style="cursor: default;">Ưu đãi giới hạn</div>
                <div class="cooky-tabs">
                    <div class="tabs-nav">
                        <!-- <ul>
                            <li class="is-active"><span>Flash Sale</span></li>
                            <li class=""><span>Giảm 50%</span></li>
                            <li class=""><span>Mua nhiều giảm nhiều</span></li>
                            <li class=""><span>Sale</span></li>
                        </ul> -->
                    </div>
                    <section class="tab-content is-active">
                        <div class="content-product-container" style="margin: 0px;">
                            <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-bullets-dynamic" style="width: 80px;"><span class="swiper-pagination-bullet swiper-pagination-bullet-active swiper-pagination-bullet-active-main" style="left: 8px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next" style="left: 8px;"></span></div>
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active" style="width: 1117px; margin-right: 20px;">
                                        <div class="promotion-box" style="margin: 0px -10px;">


                                            @foreach($product_sale as  $value)
                                            @if($value->active==1)

                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="{{ $value->Name }}" href="{{ route('details', $value->Link) }}"></a>
                                                <div class="cover-box">
                                                    <img class="img-flash-sale" src="{{ asset($value->Image) }}" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="{{ asset($value->Image) }}" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">{{ $value->Name }}</div>
                                                <!-- <div class="promotion-info">
                                                    <div class="p-percent" style="width: 0%;">
                                                        <img src="./public/react/images/icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 10 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <!-- <div class="weight-serving">1Kg</div> -->
                                                        <div class="price-container">
                                                            <div class="sale-price">{{  @str_replace(',' ,'.', number_format($value->Price))  }}đ</div>
                                                            <!-- <div class="unit-price">159k</div> -->
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng" onclick="addToCart({{ $value->product_id }})">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/images/icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach

                                        </div>
                                    </div>
                                    <!-- <div class="swiper-slide swiper-slide-next" style="width: 1117px; margin-right: 20px;">
                                        <div class="promotion-box" style="margin: 0px -10px;">
                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="Salad Bắp Cải Xốt Chua Ngọt" href="https://cooky.vn/market/salad-bap-cai-xot-chua-ngot-19811"></a>
                                                <div class="cover-box">
                                                    <img class="img-flash-sale" src="https://image.cooky.vn/promotion/s50/61861311-be6d-4ade-8c4c-685fb2845db7.png" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/19811/s200x200/599fa884-dc89-4de6-ad1f-dc62d19811a0.jpeg" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">Salad Bắp Cải Xốt Chua Ngọt</div>
                                                <div class="promotion-info">
                                                    <div class="p-percent" style="width: 40%;">
                                                        <img src="./public/react/Images/Icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 3 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <div class="weight-serving">2 người</div>
                                                        <div class="price-container">
                                                            <div class="sale-price">25,000đ</div>
                                                            <div class="unit-price">31k</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="Canh Chua Cá Hú Bông Súng" href="https://cooky.vn/market/canh-chua-ca-hu-bong-sung-2418"></a>
                                                <div class="cover-box">
                                                    <img class="img-flash-sale" src="https://image.cooky.vn/promotion/s50/61861311-be6d-4ade-8c4c-685fb2845db7.png" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/2418/s200x200/0385868a-505e-45cc-b977-d2217d3bc748.jpeg" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">Canh Chua Cá Hú Bông Súng</div>
                                                <div class="promotion-info">
                                                    <div class="p-percent" style="width: 60%;">
                                                        <img src="./public/react/Images/Icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 2 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <div class="weight-serving">2 người</div>
                                                        <div class="price-container">
                                                            <div class="sale-price">49,000đ</div>
                                                            <div class="unit-price">66k</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="Canh Tôm Thẻ Nấu Khoai Mỡ" href="https://cooky.vn/market/canh-tom-the-nau-khoai-mo-147"></a>
                                                <div class="cover-box">
                                                    <img class="img-flash-sale" src="https://image.cooky.vn/promotion/s50/61861311-be6d-4ade-8c4c-685fb2845db7.png" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/147/s200x200/a32feaf6-a6e7-4bee-b7f7-d484962fd47f.jpeg" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">Canh Tôm Thẻ Nấu Khoai Mỡ</div>
                                                <div class="promotion-info">
                                                    <div class="p-percent" style="width: 90%;">
                                                        <img src="./public/react/Images/Icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 1 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <div class="weight-serving">2 người</div>
                                                        <div class="price-container">
                                                            <div class="sale-price">49,000đ</div>
                                                            <div class="unit-price">59k</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="Sườn Non Heo Chiên Sả Ớt (Ướp Sẵn)" href="https://cooky.vn/market/suon-non-heo-chien-sa-ot-uop-san-10362"></a>
                                                <div class="cover-box">
                                                    <img class="top-left-tag" src="https://image.cooky.vn/icon/s50x50/a63bc020-0695-4b50-b74c-144329242e39.png"><img class="img-flash-sale" src="https://image.cooky.vn/promotion/s50/61861311-be6d-4ade-8c4c-685fb2845db7.png" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/10362/s200x200/fdb981ca-a896-452b-89f0-9f21d34ce4b6.jpeg" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">Sườn Non Heo Chiên Sả Ớt (Ướp Sẵn)</div>
                                                <div class="promotion-info">
                                                    <div class="p-percent" style="width: 20%;">
                                                        <img src="./public/react/Images/Icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 4 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <div class="weight-serving">300g</div>
                                                        <div class="price-container">
                                                            <div class="sale-price">59,000đ</div>
                                                            <div class="unit-price">69k</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="Salad Thanh Cua Rong Nho Hỗn Hợp" href="https://cooky.vn/market/salad-thanh-cua-rong-nho-hon-hop-7090"></a>
                                                <div class="cover-box">
                                                    <img class="img-flash-sale" src="https://image.cooky.vn/promotion/s50/61861311-be6d-4ade-8c4c-685fb2845db7.png" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/7090/s200x200/17a48588-f8f6-4708-b102-0c7a3e75e349.jpeg" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">Salad Thanh Cua Rong Nho Hỗn Hợp</div>
                                                <div class="promotion-info">
                                                    <div class="p-percent" style="width: 40%;">
                                                        <img src="./public/react/Images/Icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 3 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <div class="weight-serving">2 người</div>
                                                        <div class="price-container">
                                                            <div class="sale-price">49,000đ</div>
                                                            <div class="unit-price">51k</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="Sườn Non Heo Xào Chua Ngọt" href="https://cooky.vn/market/suon-non-heo-xao-chua-ngot-258"></a>
                                                <div class="cover-box">
                                                    <img class="video-play" src="./public/react/Images/Icons/video-play.svg"><img class="img-flash-sale" src="https://image.cooky.vn/promotion/s50/61861311-be6d-4ade-8c4c-685fb2845db7.png" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/258/s200x200/78310905-6968-46f7-8c67-6e49cb5bbe29.jpeg" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">Sườn Non Heo Xào Chua Ngọt</div>
                                                <div class="promotion-info">
                                                    <div class="p-percent" style="width: 40%;">
                                                        <img src="./public/react/Images/Icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 6 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <div class="weight-serving">2 người</div>
                                                        <div class="price-container">
                                                            <div class="sale-price">69,000đ</div>
                                                            <div class="unit-price">82k</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="Nạc Dăm Heo (Thịt Tươi) Kho Tiêu (Ướp Sẵn)" href="https://cooky.vn/market/nac-dam-heo-thit-tuoi-kho-tieu-uop-san-12962"></a>
                                                <div class="cover-box">
                                                    <img class="top-left-tag" src="https://image.cooky.vn/icon/s50x50/a63bc020-0695-4b50-b74c-144329242e39.png"><img class="img-flash-sale" src="https://image.cooky.vn/promotion/s50/61861311-be6d-4ade-8c4c-685fb2845db7.png" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/12962/s200x200/c03886c9-669e-4c10-9143-842345cf0a7b.jpeg" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">Nạc Dăm Heo (Thịt Tươi) Kho Tiêu (Ướp Sẵn)</div>
                                                <div class="promotion-info">
                                                    <div class="p-percent" style="width: 50%;">
                                                        <img src="./public/react/Images/Icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 5 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <div class="weight-serving">300g</div>
                                                        <div class="price-container">
                                                            <div class="sale-price">59,000đ</div>
                                                            <div class="unit-price">76k</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="Thăn Ngoại Bò Hokubee (Striploin) Cắt Steak" href="https://cooky.vn/market/than-ngoai-bo-hokubee-striploin-cat-steak-17274"></a>
                                                <div class="cover-box">
                                                    <img class="img-flash-sale" src="https://image.cooky.vn/promotion/s50/c793989b-ac38-4673-854d-1d8f598e1d05.png" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/17274/s200x200/e126ec78-bc1c-428a-bbdb-37b9444cb33b.jpeg" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">Thăn Ngoại Bò Hokubee (Striploin) Cắt Steak</div>
                                                <div class="promotion-info">
                                                    <div class="p-percent" style="width: 23.0769%;">
                                                        <img src="./public/react/Images/Icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 10 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <div class="weight-serving">200-220g</div>
                                                        <div class="price-container">
                                                            <div class="sale-price">139,000đ</div>
                                                            <div class="unit-price">152k</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-basic-info ">
                                                <a class="link-absolute" title="Hộp Hâm Nóng ArirangLife EL-ALS263 (Hồng)" href="https://cooky.vn/market/hop-ham-nong-ariranglife-el-als263-hong-16807"></a>
                                                <div class="cover-box">
                                                    <img class="img-flash-sale" src="https://image.cooky.vn/promotion/s50/31ab5a69-eb7d-4217-b488-89f9be743a6b.png" loading="lazy">
                                                    <div class="promotion-photo">
                                                        <div class="package-default"><img src="https://image.cooky.vn/posproduct/g0/16807/s200x200/d85b9d40-d205-4c3c-8dba-0da5defba4b4.jpeg" class="img-fit" loading="lazy"></div>
                                                    </div>
                                                </div>
                                                <div class="promotion-name two-lines">Hộp Hâm Nóng ArirangLife EL-ALS263 (Hồng)</div>
                                                <div class="promotion-info">
                                                    <div class="p-percent" style="width: 60%;">
                                                        <img src="./public/react/Images/Icons/cart-black-s11.svg" loading="lazy">&nbsp;&nbsp;
                                                        <div class="countdown-wrapper">
                                                            <div class="countdown-item">Còn 2 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex-center-middle">
                                                    <div class="price p-g-v ">
                                                        <div class="weight-serving">Cái</div>
                                                        <div class="price-container">
                                                            <div class="sale-price">450,000đ</div>
                                                            <div class="unit-price">519k</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng">
                                                        <div style="position: relative; z-index: 3;"><img src="./public/react/Images/Icons/plus-filled-red.svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            @if($product_sale->count()>=10)
                            <a class="view-more one-line" href="{{ route('details', 'sale') }}">Xem thêm Flash Sale</a>
                            @endif
                        </div>
                    </section>
                   
                </div>
            </div>

            @endif

            <?php 
                $dem = 0;
            ?>
            @foreach($group as $key => $groups)

            <?php
               
                

                $hot = DB::table('hot')->select('product_id')->where('group_id', $groups->id)->orderBy('orders', 'asc')->get()->pluck('product_id');

                   


                $data = App\Models\product::whereIn('id', $hot->toArray())->orderBy('orders_hot', 'desc')->get();

            ?>

            @if(!empty($data) && $data->count()>0)
                <?php 
                    $dem++;
                ?>
                @if($dem==6)

                <div class="promotion-container">
                    <div class="title" style="cursor: default;">
                        Nổi bật
                        <div class="see-more" style="cursor: default;">4/10</div>
                    </div>
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" style="width: 1117px; margin-right: 20px;">
                                <div class="promotion-box">
                                    <div class="feature">
                                        <div class="feature-item"><img class="img-fit" src="https://image.cooky.vn/abn/s640x640/2d9d2de7-9829-483b-bc0a-023519ec8162.png"><a class="link-absolute" href="#"></a></div>
                                        <div class="info">
                                            <div class="title two-lines">Nhâm Nhi Mùa World Cup</div>
                                            <a class="link-absolute" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="feature">
                                        <div class="feature-item"><img class="img-fit" src="https://image.cooky.vn/abn/s640x640/1aec72c0-959d-4e61-8b7e-9cee58a87840.png"><a class="link-absolute" href="#"></a></div>
                                        <div class="info">
                                            <div class="title two-lines">Signature Cooky 19K</div>
                                            <a class="link-absolute" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="feature">
                                        <div class="feature-item"><img class="img-fit" src="https://image.cooky.vn/abn/s640x640/ff482561-3005-4b0e-9c5b-2c89d557b99a.png"><a class="link-absolute" href="#"></a></div>
                                        <div class="info">
                                            <div class="title two-lines">Mua 1 Được 2</div>
                                            <a class="link-absolute" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="feature">
                                        <div class="feature-item"><img class="img-fit" src="https://image.cooky.vn/abn/s640x640/45f59aa4-a532-4994-b529-33294c903575.png"><a class="link-absolute" href="#"></a></div>
                                        <div class="info">
                                            <div class="title two-lines">Món Ngon Dễ Nấu - Giảm 50%</div>
                                            <a class="link-absolute" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                @endif
                <div class="group-product-content">
                    <div class="title" style="cursor: default;">{{  @$groups->name }}</div>
                    <div class="content-product-container" style="padding: 0px;">
                        <div class="promotion-box">
                            @foreach($data as $datas)
                            @if($datas->active==1)
                            <div class="product-basic-info ">
                                <a class="link-absolute" title="{{ $datas->Name }}" href="{{ route('details', $datas->Link) }}"></a>
                                <div class="cover-box">
                                    <img class="top-left-tag" src="{{ asset($datas->Image) }}">
                                    <div class="promotion-photo">
                                        <div class="package-default"><img src="{{ asset($datas->Image) }}" class="img-fit" loading="lazy"></div>
                                    </div>
                                </div>
                                <div class="promotion-name two-lines">{{ $datas->Name }}</div>
                                <div class="promotion-info">

                                    <?php 

                                        $qualtity =  intval($datas->Quantily);

                                        $per = [100,75,25, 0];

                                        if($qualtity>10){

                                            $percent =  $per[0];

                                        }
                                        elseif($qualtity>5 && $qualtity<=10){
                                            $percent =  $per[1];
                                        }

                                        elseif($qualtity<5 && $qualtity>0){
                                            $percent =  $per[2];
                                        }
                                        else{
                                            $percent =  $per[3];
                                        }

                                        $margin = 190*($percent/100);
                                        


                                    ?>


                                    <div class="p-percent" style="width: {{ $percent  }}%;">
                                        <img src="react/images/icons/cart-black-s11.svg" loading="lazy" style="margin-left: {{  $margin  }};">&nbsp;&nbsp;
                                        
                                       
                                    </div>

                                    <br>

                                   
                                </div>
                                <div class="d-flex-center-middle">
                                    <div class="price p-g-v ">
                                        <!-- <div class="weight-serving">300g</div> -->
                                        <div class="price-container">
                                            <div class="sale-price">{{  @str_replace(',' ,'.', number_format($datas->Price))  }}</div>
                                            <!-- <div class="unit-price">64k</div> -->
                                        </div>
                                    </div>
                                    <button class="btn-add-to-cart n-btn " title="Bấm để thêm vào giỏ hàng" onclick="addToCart({{ $datas->id }})">
                                        <div style="position: relative; z-index: 3;"><img src="react/images/icons/plus-filled-red.svg"></div>
                                    </button>
                                </div>
                            </div>
                            @endif
                            @endforeach


                    
                        </div>
                    </div>
                </div>
            @endif    
           
            @endforeach

            
            
        </div>
    </div>
</div>
@endsection