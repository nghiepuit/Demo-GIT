  <script type="text/javascript">
   $(window).load(function() {
       $('#slider').nivoSlider();
   });
   $('#slider').nivoSlider({
       effect: 'random',                 // Specify sets like: 'fold,fade,sliceDown'
       slices: 15,                     // For slice animations
       boxCols: 8,                     // For box animations
       boxRows: 4,                     // For box animations
       animSpeed: 500,                 // Slide transition speed
       pauseTime: 100,                 // How long each slide will show
       startSlide: 0,                     // Set starting Slide (0 index)
       directionNav: true,             // Next and Prev navigation
       controlNav: true,                 // 1,2,3... navigation
       controlNavThumbs: false,         // Use thumbnails for Control Nav
       pauseOnHover: true,             // Stop animation while hovering
       manualAdvance: false,             // Force manual transitions
       prevText: 'Prev',                 // Prev directionNav text
       nextText: 'Next',                 // Next directionNav text
       randomStart: false,             // Start on a random slide
       beforeChange: function(){},     // Triggers before a slide transition
       afterChange: function(){},         // Triggers after a slide transition
       slideshowEnd: function(){},     // Triggers after all slides have been shown
       lastSlide: function(){},         // Triggers when last slide is shown
       afterLoad: function(){}         // Triggers when slider has loaded
   });
</script>
<div id="menu">
   <div class="header3">
         <ul>
            <li class="danhmuc">
               <a href="">DANH MỤC SẢN PHẨM</a>
            </li>
            <li class="khuyenmai">
               <a href="" target="_blank">
                  <img src="template_asset/images/site/flyout/khuyenmai.png" alt="">
               </a>
            </li>
            <li class="baohanh">
               <a href="" target="_blank">
                  <img src="template_asset/images/site/flyout/baohanh.png" alt="">
               </a>
            </li>
            <li class="tuyendung">
               <a href="" target="_blank">
                  <img src="template_asset/images/site/flyout/tuyendung.png" alt="">
               </a>
            </li>
         </ul>
      </div>
  <div style="clear: both;"></div>
   <ul class="ul1">
         @foreach ($cate as $c)
            <li class="sub1">
              <a class='a1' href='{{$c->cate_namekd}}'>
                <img src='template_asset/images/site/flyout/{{$c->cate_name}}.png' alt=''>
                <span class=''>{{$c->cate_name}}</span>
                <img class="arow" src="template_asset/images/site/flyout/forward2.png" alt="">
              </a>
              <ul class="ul2">
              @foreach($c->subcate as $sc)
                  <li class="sub2">
                    <a class='a2' href='{{$c->cate_namekd}}/{{$sc->subcate_namekd}}'>
                      <span>{{$sc->subcate_name}}</span>
                    </a>
                    <ul class='ul3'>
                    @foreach($sc->nsx as $nsx)
                    <li class='sub3'>
                      <a class='a3' href='{{$c->cate_namekd}}/{{$sc->subcate_namekd}}/{{$nsx->nsx_namekd}}'>
                        <span>{{$nsx->nsx_name}}<span>
                      </a>
                    </li>
                    @endforeach
                    </ul>
                  </li>
              @endforeach
              </ul>





            </li>
          @endforeach



   </ul>


   <div class="slider theme-default">
     <div id="slider" class="nivoSlider">
         <img src="template_asset/images/site/slide/b1.jpg"/>
         <a href="fb.com/profile.php?id=100001243054025"><img class="img-slide" src="template_asset/images/site/slide/b2.jpg" /></a>
         <a href="fb.com/profile.php?id=100001243054025"><img class="img-slide" src="template_asset/images/site/slide/b3.jpg"/></a>
         <a href="fb.com/profile.php?id=100001243054025"><img class="img-slide" src="template_asset/images/site/slide/b4.jpg"/></a>
      </div>
   </div>
   <div class="baner-fly">
      <a href=""><img src="template_asset/images/site/baner/baner.png" alt=""></a>
   </div>
   <div class="video-news">
    <iframe width="300" height="216" src="https://www.youtube.com/embed/99DlqDCeuIw" frameborder="0" allowfullscreen></iframe>
  </div>
</div>
<div style="clear: both;"></div>



