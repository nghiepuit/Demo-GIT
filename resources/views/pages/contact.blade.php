@extends('layout.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Contact</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Mobifone Thái Nguyên</h2>
              <span></span> 
              <p>MOBIFONE TỈNH THÁI NGUYÊN - CÔNG TY DỊCH VỤ MOBIFONE KHU VỰC 5 - CHI NHÁNH TỔNG CÔNG TY VIỄN THÔNG MOBIFONE</p>
            </div>
          </div>
       </div>
       <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
           <div class="contact_form wow fadeInLeft">
              <form class="submitphoto_form">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Tên của bạn">
                <input type="mail" class="wp-form-control wpcf7-email" placeholder="Địa chỉ email">          
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Tiêu đề">
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Nội dung cần gửi"></textarea>
                <input type="submit" value="Gửi yêu cầu" class="wpcf7-submit">
              </form>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
           <div class="contact_address wow fadeInRight">
             <h3>Địa chỉ</h3>
             <div class="address_group">
               <p>135A, đường Cách mạng tháng tám, Phường Trưng Vương, Thành phố Thái Nguyên, Thái Nguyên </p>
               <p>Điện thoại liên hệ: 84 43 78 31 733</p>
               <p>Email:webmaster@mobifone.com.vn</p>
             </div>
             <div class="address_group">
              <ul class="footer_social">
                <li><a href="https://www.facebook.com/mobifone" target="_blank" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com/user/VMSMobiFone" target="_blank" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                </ul>
             </div>
           </div>
         </div>
       </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGIN GOOGLE MAP SECTION ================-->
    <section id="googleMap">
      <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2337.0952137273503!2d105.84592976420763!3d21.58953833179714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x58ee09805e165db2!2zQ-G7rWEgaMOgbmcgZ2lhbyBk4buLY2ggTW9iaWZvbmUgVGjDoWkgTmd1ecOqbg!5e0!3m2!1svi!2s!4v1483714485362"></iframe>
    </section>

    <!--=========== END GOOGLE MAP SECTION ================-->
    
@endsection