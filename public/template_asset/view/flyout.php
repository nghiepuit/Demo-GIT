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
                  <img src="public/images/site/flyout/khuyenmai.png" alt="">
               </a>
            </li>
            <li class="baohanh">
               <a href="" target="_blank">
                  <img src="public/images/site/flyout/baohanh.png" alt="">
               </a>
            </li>
            <li class="tuyendung">
               <a href="" target="_blank">
                  <img src="public/images/site/flyout/tuyendung.png" alt="">
               </a>
            </li>
         </ul>
      </div>
   <ul class="ul1">
      <?php 
         $mcate= new cate;
         $mloai=new loai;
         $mproduct= new product;
         $data_cate=$mcate->listall();
         foreach ($data_cate as $item_cate) {
            echo '<li class="sub1">';
            echo "<a class='a1' href='index.php?cate=$item_cate[product_cate]'>";
            echo "<img src='public/images/site/flyout/$item_cate[product_cate].png' alt=''>";
            echo "<span class=''>$item_cate[product_cate]</span>";
            echo '<img class="arow" src="public/images/site/flyout/forward2.png" alt="">';
            echo "</a>";
            echo '<ul class="ul2">';
            $data_loai=$mloai->filter_cate($item_cate['product_cate']);
            foreach ($data_loai as $item_loai) {
               echo '<li class="sub2">';
               echo "<a class='a2' href='index.php?cate=$item_loai[product_cate]&loai=$item_loai[product_loai]'>";
               echo "<span>$item_loai[product_loai]</span>";
               echo "</a>";
               echo "<ul class='ul3'>";
               $data_nsx=$mproduct->filter_cl($item_cate['product_cate'],$item_loai['product_loai']);
               foreach ($data_nsx as $item_nsx) {
                  echo "<li class='sub3'>";
                  echo "<a class='a3' href='index.php?cate=$item_cate[product_cate]&loai=$item_loai[product_loai]&nsx=$item_nsx[product_nsx]'>";
                  echo "<span>$item_nsx[product_nsx]<span>";
                  echo "</a>";
               }
               echo "</ul>";
               echo "</li>";
            }
            echo "</ul>";
            echo "</li>";
         }
       ?>
   </ul>


   <div class="slider theme-default">
     <div id="slider" class="nivoSlider">
         <img src="upload/slide/slide1.png"/>
         <a href="fb.com/profile.php?id=100001243054025"><img src="upload/slide/slide2.png" /></a>
         <a href="fb.com/profile.php?id=100001243054025"><img src="upload/slide/slide3.png"/></a>
         <a href="fb.com/profile.php?id=100001243054025"><img src="upload/slide/slide4.png"/></a>
      </div>
   </div>
   <div class="baner-fly">
      <a href=""><img src="upload/baner/baner.png" alt=""></a>
   </div>
</div>
<div style="clear: both;"></div>