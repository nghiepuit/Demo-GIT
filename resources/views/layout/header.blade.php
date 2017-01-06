    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO phan--> 
              <!-- <a class="navbar-brand" href="trangchu">Mobifone</a>        -->       
              <!-- IMG BASED LOGO  -->
               <a class="navbar-brand " href="trangchu"><img class="logo_mobifone" src="img/mobifone_logo.png" alt="logo"></a>  
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                            @foreach($cate as $c)
              @if($c->customer_id == 1)
                  <li class="dropdown">
<a href="canhan/{{$c->cate_namekd}}" class="dropdown-toggle"  role="button" aria-expanded="false">{{$c->cate_name}}
@if(count($c->subcate) > 0)<span class="caret"></span>@endif</a>

                    @if(count($c->subcate) > 0)
                      <ul class="dropdown-menu" role="menu">
                        @foreach($c->subcate as $sc)
                          <li><a href="canhan/{{$c->cate_namekd}}/{{$sc->subcate_namekd}}">{{$sc->subcate_name}}</a></li>
                        @endforeach           
                      </ul>
                    @endif
                  </li>
              @endif
              @endforeach
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <div style="clear: both;"></div>