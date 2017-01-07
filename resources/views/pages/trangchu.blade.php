@extends('layout.index')
@section('content')

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">                          
                <li>
                  <img src="img/slider/s4.jpg" alt="img">
                   <div class="slider_caption">
                    <h2>TẦM NHÌN</h2>
                    <p>Với những thay đổi mang tính chiến lược, tầm nhìn 2015-2020 của MobiFone được thể hiện rõ nét trong thông điệp “Kết nối giá trị, khơi dậy tiềm năng”.</p>
                    <a class="slider_btn" href="canhan/gioi-thieu/gioi-thieu-chung/tam-nhin-va-su-menh">Chi tiết</a>
                  </div>
                  </li>
                <!-- Start single slider-->
                <li>
                  <img src="img/slider/s2.jpg" alt="img">
                   <div class="slider_caption">
                    <h2>SỨ MỆNH</h2>
                    <p>Với MobiFone, sứ mệnh của chúng tôi là đem lại những sản phẩm và dịch vụ kết nối mỗi người dân, gia đình, doanh nghiệp trong một hệ sinh thái, nơi những nhu cầu trong cuộc sống, công việc, học tập và giải trí được phát hiện, đánh thức và thỏa mãn nhằm đạt được sự  hài lòng, phát triển và hạnh phúc.</p>
                    <a class="slider_btn" href="canhan/gioi-thieu/gioi-thieu-chung/tam-nhin-va-su-menh">Chi tiết</a>
                  </div>
                </li>
                <!-- Start single slider-->
                <li>
                  <img src="img/slider/s3.jpg" alt="img">
                   <div class="slider_caption">
                    <h2>Cam kết khách hàng</h2>
                    <p>Mỗi khi gặp khách hàng, chúng ta sẽ:
                    Đón tiếp mỗi khách hàng với lời chào, cử chỉ, nụ cười, ánh mắt thân thiện. 
                    Nếu có thể, gọi tên khách hàng;
                    Lắng nghe và phục vụ khách hàng với thái độ tôn trọng;
                    Cố gắng tìm hiểu và dự đoán nhu cầu của khách hàng nhằm đáp ứng hơn những mong đợi của khách hàng;
                    Cung cấp thông tin đúng về tất cả các dịch vụ, sản phẩm của MobiFone và trả lời nhanh chóng, chính xác các câu hỏi của khách hàng;</p>
                    <a class="slider_btn" href="canhan/ho-tro-khach-hang/cham-soc-khach-hang/ket-noi-dai-lau">Chi tiết</a>
                  </div>
                </li>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">Lịch sử hình thành</h2>
            <p>MobiFone được thành lập ngày 16/04/1993 với tên gọi ban đầu là Công ty thông tin di động. Ngày 01/12/2014, Công ty được chuyển đổi thành Tổng công ty Viễn thông MobiFone, trực thuộc Bộ Thông tin và Truyền thông, kinh doanh trong các lĩnh vực: dịch vụ viễn thông truyền thống, VAS, Data, Internet & truyền hình IPTV/cable TV, sản phẩm khách hàng doanh nghiệp, dịch vụ công nghệ thông tin, bán lẻ và phân phối và đầu tư nước ngoài.</br>
              </br>
            Tại Việt Nam, MobiFone là một trong ba mạng di động lớn nhất với hơn 30% thị phần. Chúng tôi cũng là nhà cung cấp mạng thông tin di động đầu tiên và duy nhất tại Việt Nam được bình chọn là thương hiệu được khách hàng yêu thích trong 6 năm liền.</br>

            Hiện nay, MobiFone có gần 50 triệu thuê bao với gần 30.000 trạm 2G và 20.000 trạm 3G. Tổng doanh thu năm 2014 của MobiFone đạt xấp xỉ 2 tỷ đô la Mỹ. </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">Tin tức</a></li>
              <li><a href="#events" data-toggle="tab">Sự kiện</a></li>         
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">
                @foreach($news as $n)
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="news/{{$n->id}}">
                          <img class="media-object" src="upload/news/{{$n->img}}" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="news/{{$n->id}}">{{$n->title}}</a>
                       <span class="feed_date">{{$n->updated_at}}</span>
                      </div>
                    </div>                    
                  </li>
                @endforeach
                </ul>                
                <a class="see_all" href="news">Xem tất cả</a>
              </div>

              <div class="tab-pane fade " id="events">
                <ul class="news_tab">
                @foreach($events as $e)
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="events/{{$e->id}}">
                          <img class="media-object" src="upload/events/{{$e->img}}" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="events/{{$e->id}}">{{$e->title}}</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>
                  </li>
                @endforeach
                </ul>
                <a class="see_all" href="events">Xem tất cả</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 

    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
      <!-- Start why us top -->
      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">
              <!-- Why us top titile -->
              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  <div class="title_area">
                    <h2 class="title_two">Về CHÚNG TÔI</h2>
                    <span></span> 
                  </div>
                </div>
              </div>
              <!-- End Why us top titile -->
              <!-- Start Why us top content  -->
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-desktop"></span>
                    </div>
                    <h3>Công nghệ</h3>
                    <p>Mobifone luôn dẫn đầu trong triển khai công nghệ tại Việt Nam</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-users"></span>
                    </div>
                    <h3>Tuyển dụng</h3>
                    <p>Hàng ngàn cơ hội việc làm cho sinh viên mới ra trường mỗi năm</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-flask"></span>
                    </div>
                    <h3>Phân tích dữ liệu</h3>
                    <p>Trung tâm nghiên cứu không ngừng phân tích nhu cầu của người dùng</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-support"></span>
                    </div>
                    <h3>Hỗ trợ</h3>
                    <p>Mobifone luôn cố gắng phục vụ hỗ trợ khách hàng chuyên nghiệp nhất</p>
                  </div>
                </div>
              </div>
              <!-- End Why us top content  -->
            </div>
          </div>
        </div>        
      </div>
      <!-- End why us top -->

    </section>
    <!--=========== END WHY US SECTION ================-->

    <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">GÓI CƯỚC CÁ NHÂN</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->
        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">
              <ul class="course_nav">
              @foreach($post as $p)
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="upload/post/{{$p->post_img}}" />
                      <div class="mask">                         
                        <a href="canhan/di-dong/goi-cuoc/{{$p->post_titlekd}}" class="course_more">XEM THÊM</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="canhan/di-dong/goi-cuoc/{{$p->post_titlekd}}">{{$p->post_title}}</a></h3>
                    <p>{!!$p->post_sum!!}</p>
                    </div>
                  </div>
                </li>
              @endforeach
            
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->  

    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <!-- <section id="ourTutors">
      <div class="container">
       Our courses titile
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Our Tutors</h2>
              <span></span> 
            </div>
          </div>
        </div>
        End Our courses titile
    
        Start Our courses content
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourTutors_content">
              Start Tutors nav
              <ul class="tutors_nav">
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/author.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/course-1.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/author.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/course-1.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/author.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/course-1.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>                                             
              </ul>
            </div>
          </div>
        </div>
        End Our courses content
      </div>
    </section> -->
    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <section id="studentsTestimonial">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">QUẢN LÝ CẤP CAO</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="studentsTestimonial_content">              
              <div class="row">
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <!-- <div class="stsTestimonial_msgbox">
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div> -->
                    <img class="stsTesti_img" src="img/a1.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Nguyễn Xuân Nghĩa</h3>                      
                      <span>Kỹ sư phần mềm</span>
                      <p>Giám đốc Trung tâm Đo lường viễn thông</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <!-- <div class="stsTestimonial_msgbox">
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.scrambled it to make a type specimen book</p>
                    </div> -->
                    <img class="stsTesti_img" src="img/a2.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Lê Nam Trà</h3>                      
                      <span>Quản lý</span>
                      <p>Tổng Giám đốc Mobifone</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <!-- <div class="stsTestimonial_msgbox">
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div> -->
                    <img class="stsTesti_img" src="img/a3.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Phạm Nhật Vũ</h3>                      
                      <span>Quản lý</span>
                      <p>Chủ tịch Hội đồng Quản trị AVG</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->  

@endsection