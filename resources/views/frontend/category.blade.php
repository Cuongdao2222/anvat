@extends('frontend.layouts.apps')
@section('content') 

<?php 
    $name_cate = (DB::table('group_product')->where('id', $data['id_cate'])->first())->name; 
    $data = $data['data'];

?>
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
                    width: 100% !important;
                }
                .product-basic-info{
                    flex: 0 0 calc(20% - 20px);
                    width: calc(20%);
                }
                .promotion-box{
                    margin-left: -10px; 
                    margin-right: -10px;
                }

                @media screen and (max-width: 776px) {

                    .page-container{
                        min-width: auto !important;
                        margin-top: 25px;
                    }

                    .slick-slider {
                        display: none;
                    }

                    .group-product-content{
                        padding: 0 10px;
                    }

                    .product-basic-info{

                        flex: 0 0 calc(50% - 20px);
                        width: calc(50%);
                    }

                    .short-link-list .category-item {
                        flex: 0 0 calc(100% / 3);
                        width: calc(100% / 3);
                        position: relative;
                    }  

                    .navigation-bar .logo{
                        top: 50%;
                        transform: translateY(-50%);
                    }
                    .group-product-content{
                        width: 100%;
                    }

                    .page-wrapper{
                        padding: 0;
                        width: 100%;
                    }
                    .promotion-box{
                        margin:0;
                    }
                    
                } 
        </style>
@endpush

<?php 

 


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


?>


<div class="page-container">
    <div class="page-wrapper">
        <div class="home-page-container">
            <!-- <div class="slick-slider header-banner slick-initialized" dir="ltr">
                <div class="slick-list" style="height: 353px;">
                    <div class="slick-track" style="width: 23457px; opacity: 1; transform: translate3d(-7819px, 0px, 0px); transition: -webkit-transform 500ms ease 0s;">
                        <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;"></div>
                        <div data-index="0" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/0780af53-17f7-43f7-848c-496f36b70b5f.png" alt="Nhâm Nhi Mùa World Cup" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/47bb82fd-026c-4b46-9d05-67f760d1a161.png" alt="SIGNATURE COOKY 19K" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#blog/doi-tui-giay-lay-cooky-coins-bao-ve-moi-truong-cung-cooky-5536?" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/ea6f03bb-1744-418d-993e-11ff08941494.png" alt="ĐỔI TÚI GIẤY COOKY" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/10083d93-54d7-42af-98b4-94e2db7ced09.png" alt="SIÊU DEAL - GIẢM GIÁ 50%" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/c95c6e04-d59d-4686-b1c5-7f3b76d545de.png" alt="Giảm 10% Cooky Mời Bạn Món Mới - BANNER" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/6210fcae-7450-4cbf-a6bb-6b2d3fb1d32a.png" alt="Mua 1 tặng 1" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        
                        <div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;"></div>
                        <div data-index="8" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;"></div>
                        <div data-index="9" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 1117px;"></div>
                        <div data-index="10" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/0780af53-17f7-43f7-848c-496f36b70b5f.png" alt="Nhâm Nhi Mùa World Cup" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="11" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/47bb82fd-026c-4b46-9d05-67f760d1a161.png" alt="SIGNATURE COOKY 19K" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="12" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#blog/doi-tui-giay-lay-cooky-coins-bao-ve-moi-truong-cung-cooky-5536?" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/ea6f03bb-1744-418d-993e-11ff08941494.png" alt="ĐỔI TÚI GIẤY COOKY" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="13" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/10083d93-54d7-42af-98b4-94e2db7ced09.png" alt="SIÊU DEAL - GIẢM GIÁ 50%" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="14" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/c95c6e04-d59d-4686-b1c5-7f3b76d545de.png" alt="Giảm 10% Cooky Mời Bạn Món Mới - BANNER" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="15" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/6210fcae-7450-4cbf-a6bb-6b2d3fb1d32a.png" alt="Mua 1 tặng 1" loading="lazy" class="embed-responsive-item"></a></div>
                                </div>
                            </div>
                        </div>
                        <div data-index="16" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 1117px;">
                            <div>
                                <div class="banner-item" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="embed-responsive embed-responsive-16by9"><a href="#" target="_blank"><img src="https://image.cooky.vn/abn/s1065x333/d7026cf2-fae0-4e97-b0fb-50989002c469.png" alt="Quà Tặng Từ MAGGI" loading="lazy" class="embed-responsive-item"></a></div>
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
            </div> -->
            

            @if(!empty($data)&& $data->count()>0)
            <div class="group-product-content">
                <div class="title" style="cursor: default;">{{ $name_cate }}</div>
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
                                    <div class="swiper-slide swiper-slide-active" style="margin-right: 20px;">
                                        <div class="promotion-box">


                                            @foreach($data as  $value)
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
                                    
                                </div>
                            </div>
                           
                        </div>
                    </section>
                   
                </div>
            </div>

            @endif

           
            
        </div>
    </div>
</div>
@endsection