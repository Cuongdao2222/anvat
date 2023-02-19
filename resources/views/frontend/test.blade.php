<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<head>
  <!-- Add jQuery library -->
  <script type="text/javascript" src="{{ asset('lib/jquery-1.10.1.min.js')}}"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="{{ asset('lib/jquery.mousewheel-3.0.6.pack.js')}}"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="{{ asset('source/jquery.fancybox.js?v=2.1.5')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('source/jquery.fancybox.css?v=2.1.5')}}" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="{{ asset('source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}" />
  <script type="text/javascript" src="{{ asset('source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="{{ asset('source/helpers/jquery.fancybox-thumbs.css?v=1.0.7')}}" />
  <script type="text/javascript" src="{{ asset('source/helpers/jquery.fancybox-thumbs.js?v=1.0.7')}}"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="{{ asset('source/helpers/jquery.fancybox-media.js?v=1.0.6')}}"></script>

</head>

<div class="owl-carousel">
  <a href="https://icdn.dantri.com.vn/thumb_w/680/2023/02/17/8-edited-1676649448283.jpeg" data-fancybox="gallery"><img src="https://icdn.dantri.com.vn/thumb_w/680/2023/02/17/8-edited-1676649448283.jpeg" alt="Image 1"></a>
  <a href="https://icdn.dantri.com.vn/thumb_w/680/2023/02/17/4-edited-1676649568416.jpeg" data-fancybox="gallery"><img src="https://icdn.dantri.com.vn/thumb_w/680/2023/02/17/4-edited-1676649568416.jpeg" alt="Image 2"></a>
  <a href="https://icdn.dantri.com.vn/thumb_w/680/2023/02/17/7-edited-1676650536146.jpeg" data-fancybox="gallery"><img src="https://icdn.dantri.com.vn/thumb_w/680/2023/02/17/7-edited-1676650536146.jpeg" alt="Image 3"></a>
  <a href="https://icdn.dantri.com.vn/thumb_w/680/2023/02/17/7-edited-1676650536146.jpeg" data-fancybox="gallery"><img src="https://icdn.dantri.com.vn/thumb_w/680/2023/02/17/7-edited-1676650536146.jpeg" alt="Image 4"></a>
</div>

<script type="text/javascript">
  $(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  });
});

</script>

  
</body>
</html>







