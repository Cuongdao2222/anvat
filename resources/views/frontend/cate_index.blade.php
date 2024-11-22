<div class="promotion-box">

        @foreach($data as  $value)
        @if($value->active==1)

            <?php 

            $qualtity =  intval($value->Quantily);

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

            $margin = 190*($percent/100);    ?>

    <div class="product-basic-info ">

        <a class="link-absolute" title="{{ $value->Name }}" href="{{ route('details', $value->Link) }}"></a>
        <div class="cover-box">
            <img class="img-flash-sale" src="{{ asset($value->Image) }}" loading="lazy">
            <div class="promotion-photo">
                <div class="package-default"><img src="{{ asset($value->Image) }}" class="img-fit" loading="lazy"></div>
            </div>
        </div>
        <!-- sny52Q -->
        <div class="sny52Q">
            <div class="zs1fUu">
                <div class="UeJ6lG">{{ @$value->Name }}</div>
                <div class="fD85zn">
                    <div class="d6cl1K">
                        <div class="rUjRDX typo-r10">
                            <div class="A90KS0">
                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" role="img" class="stardust-icon stardust-icon-rating-solid t7jHjH">
                                    <path d="m7.5.8l2.2 4.6 4.8.5-3.8 3.2 1.1 5.1-4.3-2.6-4.3 2.6 1.1-5.1-3.8-3.2 4.8-.5z" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path>
                                </svg>
                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" role="img" class="stardust-icon stardust-icon-rating-solid t7jHjH">
                                    <path d="m7.5.8l2.2 4.6 4.8.5-3.8 3.2 1.1 5.1-4.3-2.6-4.3 2.6 1.1-5.1-3.8-3.2 4.8-.5z" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path>
                                </svg>
                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" role="img" class="stardust-icon stardust-icon-rating-solid t7jHjH">
                                    <path d="m7.5.8l2.2 4.6 4.8.5-3.8 3.2 1.1 5.1-4.3-2.6-4.3 2.6 1.1-5.1-3.8-3.2 4.8-.5z" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path>
                                </svg>
                                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" role="img" class="stardust-icon stardust-icon-rating-solid t7jHjH">
                                    <path d="m7.5.8l2.2 4.6 4.8.5-3.8 3.2 1.1 5.1-4.3-2.6-4.3 2.6 1.1-5.1-3.8-3.2 4.8-.5z" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path>
                                </svg>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_t8Iel">
                    <div class="iVyZmn">
                        <div class="y1PVWz">
                            <div class="I99cV_ hYuPX1 I9vX2T U0tMPz">
                                <div class="Gt3dn4"><span class="ZnuQ4w hYuPX1 I9vX2T">₫</span><strong class="Rgk_yn">419.000</strong></div>
                            </div>
                            <div class="hcYtZZ ph4Z1T">
                                <div class="DCjeTh a4s1bT">
                                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.23077 0H4.23077L0 7.82222L3.5 9.14286V16L10 5.68889L6.53846 4.62222L9.23077 0Z" fill="url(#paint0_linear_2216_10611)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_2216_10611" x1="0" y1="0" x2="0" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#EE4D2D"></stop>
                                                <stop offset="1" stop-color="#FF7337"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                -15%
                            </div>
                        </div>
                        <div>
                            <div class="I99cV_ zbggAt I9vX2T">
                                <div class="Gt3dn4"><span class="ZnuQ4w zbggAt I9vX2T">₫</span><strong class="Rgk_yn">{{  @str_replace(',' ,'.', number_format($value->Price))  }}đ</strong></div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- end sny52Q -->

        <div class="promotion-info">
           
            <div class="p-percent" style="width: {{ $percent  }}%;">
                <span>Đã bán 10</span>
                <img src="react/images/icons/cart-black-s11.svg" loading="lazy" style="margin-left: {{  $margin  }};">&nbsp;&nbsp;

                
            </div> 


        </div>
        <div class="btn btn-danger">Mua ngay</div>
       
        
    </div>
    @endif
    @endforeach

</div>