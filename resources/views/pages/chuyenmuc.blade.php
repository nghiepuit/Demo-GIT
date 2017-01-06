@extends('layout.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <div class="banner">
      <img src="upload/cate/{{$cate1->cate_img}}" alt="">
    </div>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
				      @foreach($subcate as $sc)
                <!-- start single blog archive -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog_archive wow fadeInUp">
                    <div class="blogimg_container">
                      <a href="canhan/{{$cate1->cate_namekd}}/{{$sc->subcate_namekd}}" class="blog_img">
                        <img alt="img" src="upload/subcate/{{$sc->subcate_img}}">
                      </a>
                    </div>
                    <h2 class="blog_title"><a href="canhan/{{$cate1->cate_namekd}}/{{$sc->subcate_namekd}}"> {{$sc->subcate_name}}</a></h2>
                    <div class="blog_commentbox">
                      <p>Danh sách {{$sc->subcate_name}}</p>
                      <p><i class="fa fa-calendar"></i>15 March 2015</p>
                      <a href="#"><i class="fa fa-comments"></i>6 Bài viết</a>
                    </div>
                    <p class="blog_summary">{{$sc->subcate_sum}}</p>
                    <a class="blog_readmore" href="canhan/{{$cate1->cate_namekd}}/{{$sc->subcate_namekd}}">CHI TIẾT</a>
                  </div>
                </div>
                <!-- end single blog archive -->
				      @endforeach
              </div>
              
              <!-- end blog archive  -->
              <!-- <nav>
                <ul class="pagination wow fadeInLeft">
                  <li><a href="#"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                </ul>
              </nav> -->
            </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Tin tức nổi bật <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab">
                @foreach($nb as $n)
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="upload/post/{{$n->post_img}}" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">{{$n->post_title}}</a>
                       <span class="feed_date">{{$n->created_at}}</span>
                      </div>
                    </div>
                  </li>
                @endforeach               
                </ul>
              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <!-- <div class="single_sidebar">
                <h2>Sponsor Add <span class="fa fa-angle-double-right"></span></h2>
                <a class="side_add" href="#"><img src="img/side-add.jpg" alt="img"></a>
              </div> -->
              <!-- End single sidebar -->
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

@endsection