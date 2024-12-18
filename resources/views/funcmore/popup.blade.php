@extends('layouts.app')

@section('content')

@if(Session::get('status'))
    <?php $status =   Session::get('status') ?>

    <script type="text/javascript">
        
        alert('{{$status}}');
    </script>

@endif

@if(Session::get('status-background'))
    <?php $status =   Session::get('status-background') ?>

    <script type="text/javascript">
        
        alert('{{$status}}');
    </script>

@endif

<style type="text/css">
    #meta .modal-content{

        width: 1200px;
    }
    .table, .table th, .table td {
      border:1px solid black;
    }


</style>

<div class="paddings">
    <div id="theme-edit-announcement" class="announcement box2 c">
        <p><b style="color:#F00">Chú ý</b>: Chức năng này chỉ áp dụng với các giao diện đã được cài đặt cho phép thay đổi 1 số thành phần của giao diện. Biến template sử dụng $settings (global)</p>
    </div>
    <style type="text/css">
        ul#tabnav {	text-align:left; margin:1em 0 1em 0;border-bottom:1px solid #999;list-style-type: none; padding: 4px 10px 5px 10px;	}
        ul#tabnav li {display:inline; margin:0}
        ul#tabnav li a {padding: 5px 6px; border:1px solid #999;background-color:#DDD;color:#000;margin-right:0px;text-decoration: none; border-bottom:none}
        ul#tabnav a:hover {background: #fff; color:#333}
        ul#tabnav li.tab-select {border-bottom: 1px solid #fff;	background-color:#fff;}
        ul#tabnav li.tab-select a {	background-color:#CF9;	color: #000;position:relative;top:1px; padding-top:6px;}
        .sub-section-header { font-weight:bold; margin-bottom:10px; padding:3px; background-color:#CFC}
        .tb-setup td{ padding:4px}
    </style>
    <!-- tabs -->
    <ul id="tabnav">
        <li id="tab_1" class="tab-select"><a href="?opt=system&amp;view=store-design&amp;section=header">Thẻ cate trang chủ</a></li>
        <li id="tab_2"><a href="?opt=system&amp;view=store-design&amp;section=popup">Banner Pop-Up</a></li>
        <li id="tab_3"><a href="#" onclick="imageCss()">Thay logo</a></li>
        <li id="tab_4"><a href="javascript:void(0)" onclick="muchSearch()">Tìm kiếm nhiều</a></li>
        <li id="tab_5"><a href="javascript:void(0)" onclick="meta()">Thẻ Meta trang Home</a></li>
        <!-- <li id="tab_7"><a href="javascript:void(0)" onclick="meta()">Thẻ cate trang chủ</a></li> -->
        
    </ul>
    <form method="post" enctype="multipart/form-data" action="{{route('add-popup')}}">
        @csrf
        <table class="tb-setup">
            <tbody>
                <tr>
                    <td>Link nhảy đến</td>
                    <td>
                        <input type="text" size="50" name="link" required>
                    </td>
                </tr>

                 <tr>
                    <td>title</td>

                   
                    <td>
                        <input type="text" size="50" name="title" required>
                    </td>
                </tr>

                <tr>
                    <td>File ảnh (yêu cầu ảnh kích thước cố định 90x90)</td>
                    <td>
                        <div style="max-height:600px; overflow:auto" id="show-image">
                            
                            <img border="0" src="">
                        </div>
                        <br>
                        <input type="file" name="file_image" size="50" id="file_image" onchange="encodeImageFileAsURL('file_image')">
                        <!-- <input type="hidden" name="popup_file_old" value="/media/banner/popup_5913_popup-mua-he-xanh-2021.png"> -->
                    </td>
                </tr>
                
               
            </tbody>
        </table>
        <div><button type="submit">xác nhận</button> </div>
       
    </form>
</div>

<br>

<?php 

    $data_cate_image  = DB::table('add_cate_image')->get();
?>

@if($data_cate_image->isNotEmpty())

<table style="width:100%" class="table">
    <tr>
        <th>Link</th>
        <th>title</th>
        <th>image</th>
        <th>active</th>

        <th>delete</th>
        
    </tr>


    @foreach($data_cate_image as $value)
    <tr>
        <td>{{ @$value->link }}</td>
        <td>{{ @$value->title }}</td>
        <td><img src="{{ asset($value->images) }}" width="90px" height="90px"> </td>
        <td>
            @if($value->active==0)  
                <a href="{{ route('active-cate-home') }}?id={{ $value->id }}&active=1">Hiển thị</a>
            @else
                <a href="{{ route('active-cate-home') }}?id={{ $value->id }}&active=0">Ẩn</a>
            @endif    

        </td>
        <td><a href="{{ route('delete-cate-home') }}?id={{ $value->id }}">Xóa</a></td>
    </tr>
    @endforeach
    
</table>

 @endif

<div class="modal fade" id="cssimageModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thay Ảnh logo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{ route('add-image-background') }}">
                    @csrf
                    <!-- <p class="sub-section-header">Thay Ảnh nền</p> -->
                    <p style="color:#F00; margin-bottom:20px">Bạn có thể thay nền website bằng màu hoặc hình ảnh. Với file ảnh, yêu cầu là  .jpg, .gif, hoặc .png và dung lượng tối đa 300KB.</p>
                    <table>
                        <tbody>
                            <?php 
                                $logo = DB::table('background')->select('background_image')->where('id', 1)->get()->first();
                            ?>
                            <img src="{{ asset($logo->background_image)}}" width="90px">

                            <tr>
                                 <td>logo (yêu cầu kích thước cố định 90 x35 px)</td>
                            </tr>
                           
                            <tr>
                             
                                <td>
                                    <input type="file" name="background_image" size="50">
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="cssimageModel" tabindex="7" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm cate quảng cáo trang chủ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="{{ route('add-image-background') }}">
                    @csrf
                    <!-- <p class="sub-section-header">Thay Ảnh nền</p> -->
                    <p style="color:#F00; margin-bottom:20px">Bạn có thể thay nền website bằng màu hoặc hình ảnh. Với file ảnh, yêu cầu là  .jpg, .gif, hoặc .png và dung lượng tối đa 300KB.</p>
                    <table>
                        <tbody>
                            <tr>
                                <td>Dùng màu nền: </td>
                                <td>
                                    <script type="text/javascript" src="/includes/js/jscolor/jscolor.js"></script>
                                    <input type="text" class="color" name="background_color" value="FFFFFF"> (&lt;- click chuột vào ô để chọn màu)
                                </td>
                            </tr>
                            <tr>
                                <td>Dùng file ảnh</td>
                                <td>
                                    <input type="file" name="background_image" size="50">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</div>


<div class="modal fade" id="much-search" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Link tìm kiếm nhiều</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('add-image-background') }}" id="form-search-link">
                    @csrf
                    
                    <table>
                        <tbody>

                            <tr>
                                <td>Title: </td>
                                <td>
                                    
                                    <input type="text" class="color" name="background_color" id="title" required> 
                                </td>
                            </tr>
                            <tr>
                                <td>Link</td>
                                <td>
                                    <input type="text" class="color" name="link" id="link" required> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="muchSearchs()">Save changes</button>
                </div>

                <hr>
                <div class="append-link">
                    <?php $link = DB::table('muchsearch')->get();  ?>

                    @if(isset($link))
                        @foreach($link as $links)
                            <a href="{{ $links->link }}">{{ $links->title }}</a>&nbsp &nbsp  <span class="delete" id="delete{{ $links->id }}" onclick="deleteLink('{{ $links->id }}')" style="cursor:pointer;">xóa</span> <br>
                        @endforeach
                    @endif
                </div>

            </div>


            
        </div>
    </div>
</div>


<div class="modal fade" id="meta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thay Meta trang Home</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="content px-3">

                    <?php $metaSeo = App\Models\metaSeo::find(5959); ?>

                    @include('adminlte-templates::common.errors')

                    <div class="card seo">

                        {!! Form::model($metaSeo, ['route' => ['metaSeos.update', $metaSeo->id], 'method' => 'patch']) !!}

                        <div class="card-body">
                            <div class="row">
                                @include('meta_seos.fields')
                            </div>
                        </div>

                        <div class="card-footer">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('metaSeos.index') }}" class="btn btn-default">Cancel</a>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


<script type="text/javascript">

    function deleteLink(id){
        $.ajax({
           
            type: 'Get',
            url: "{{ route('delete-link-add') }}",
            data: {
                id:id
                
                   
            },
            success: function(result){
                window.location.reload();
            }
        });
    }

    function muchSearchs() {
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
           
            type: 'POST',
            url: "{{ route('muchSearch') }}",
            data: {
                title: $('#title').val(),
                link:$('#link').val()
                   
            },
            success: function(result){
                $('.append-link').append(result);
            }
        });
    }

    function meta(){

         $('#meta').modal('show');
    }
    



    function imageCss() {
        $('#cssimageModel').modal('show');
    }

    function muchSearch() {
        $('#much-search').modal('show');
    }

    function findBaseName(url) {
        var fileName = url.substring(url.lastIndexOf('/') + 1);
        var dot = fileName.lastIndexOf('.');
        return dot == -1 ? fileName : fileName.substring(0, dot);
    }


    function encodeImageFileAsURL(id_file) {
        var filesSelected = document.getElementById(id_file).files;
        if (filesSelected.length > 0) {
            var fileToLoad = filesSelected[0];

            var fileReader = new FileReader();

            fileReader.onload = function(fileLoadedEvent) {
            var srcData = fileLoadedEvent.target.result; // <--- data: base64

            var newImage = document.createElement('img');
            newImage.src = srcData;

            document.getElementById("show-image").innerHTML = newImage.outerHTML;
           
            }
            fileReader.readAsDataURL(fileToLoad);
        }
    }

    
</script>

@endsection