<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" class="no-js">
      <head>
        <title>زيت</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
        <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" href="css/etlinefont.css">
        <link href="css/style.css" type="text/css"  rel="stylesheet"/>
      </head>
<!--header -->
 <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
      <div class="container-fluid"> 
        <a class="navbar-brand" id="brand-color" href="/index">
            زيت
        </a>
        <a class="navbar-brand" href="/index">
            <img src="img/lOgO.png" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" id="b" href="http://zayt.herokuapp.com/services">  خدمتنا  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="c" href="http://zayt.herokuapp.com/customers">  عملاؤنا  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="d" href="http://zayt.herokuapp.com/bill/create"> لطلب مندوب</a>
            </li>
            <li class="nav-item">
              <div>
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/Asks/create') }}" class="nav-link" id="f" style="margin-top: 8px !important;">الرئيسية</a>
                            
                          </li>
                        
                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav-new"  style="color:#fff;float:l" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item nav-new" style="color:#095f45;" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                  تسجيل الخروج
                                </a>
                                <a class="dropdown-item nav-new" style="color:#095f45;" href="{{ route('Asks.store') }}">
                                    {{ __('حسابك') }}
                                </a>
                             
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
          <li class="nav-item">

            @else
        </li>

        <li class="nav-item">

                            @if (Route::has('register'))
                            <a href="{{ route('login') }}" class="nav-link " id="g">سجل معانا</a>
                            @endif
                       @endauth
                  </div>
                @endif
            </div>  
      </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </header>
  <!-- header -->
  <!-- main -->
    <main>
        @yield('content')
    </main>
  <!-- main --> 


  <!-- Start Slider  -->
  <section id="home" class="home">
    <div class="overlay"></div>

    {{-- <div class="slider-overlay"></div> --}}
   <div class="flexslider" >
       <ul class="slides scroll" >
           <li class="first" >
               <div class="slider-text-wrapper">  
                   <div class="container">
                       <div class="big">زيت  </div>          
                       <div class="small">اول موقع مصرى وعربى لاعاده تدوير زيت الطعام المستهلك</div>
                       <a href="/services" class="middle btn btn-white">انظر خدمتنا</a>
                   </div>       
               </div>
               <img src="img/oil33.jpg" alt="">
           </li>
           
           <li class="secondary">
               <div class="slider-text-wrapper"> 
                   <div class="container">                       
                       <div class="big"> ما الذى يجعلك تختارنا</div>          
                       <div class="small">موقع زيت يقدم افضل خدمة تجميع الزيت المستهلك</div>
                       <a href="/customers" class=" middle btn btn-white">تعرف على عملائنا</a>
                   </div>
                </div>
               <img src="img/oil11.jpg" alt="">
           </li>
           
           <li class="third">
               <div class="slider-text-wrapper"> 
                   <div class="container">                              
                       <div class="big">ما الذى تنتظره</div>          
                       <div class="small">فلتجرب الان خدمتنا وتبدا بتسجيل حسابك الشخصى معانا</div>
                       <a href="/bill" class="middle btn btn-white">سجل معانا</a>
                    </div>
               </div>
               <img src="img/oil0.jpg" alt="">
           </li>
       </ul>
   </div>
</section>
 <!-- End Slider  -->


<!--Start Features-->
<section  id="about" class="section">
  <div class="container">
      <div class="row">

         <!-- Features Icon-->
         <div class="col-md-4">
             <div class="features-icon-box">  

                 <div class="features-info">
                    <h4  style="color: #095f45">بيئة صحية ونظيفة</h4>
                    <p  style="color: #095f45">إن لتراً واحداً من الزيت المستخدم يمكن أن يلوث ما يصل إلى 1000 لتر من الماء، وبالتالي، فإن هذه العادة هي واحدة من أكثر العادات ضرراً بالبيئة</p>
                 </div>
             </div>
         </div>

          <!-- Features Icon-->
         <div class="col-md-4">
             <div class="features-icon-box">

                 <div class="features-info">
                    <h4  style="color: #095f45">للتوصيل</h4>
                    <p  style="color: #095f45">فور ان تملى استمارة التسجيل يتم تحديد موعد معك ليصلك مندوبنا فى اسرع وقت ممكن فنحن نمتاز بدقة المواعيد</p>
                 </div>
             </div>
         </div>

          <!-- Features Icon-->
         <div class="col-md-4">
             <div class="features-icon-box">


                 <div class="features-info">
                    <h4  style="color: #095f45">خطر سرى </h4>
                    <p  style="color: #095f45">تجنب رمى الزيت ف الاحواض فان ذلك يعود علينا ف مياه الشر ويسبب الامراض الخطيرة فان اختلاظ الزيت بالماء لا يمكن معالجته بسهوله</p>
                 </div>
             </div>
         </div>

          <!-- Features Icon-->
         <div class="col-md-4">
             <div class="features-icon-box">

                

                 <div class="features-info">
                    <h4  style="color: #095f45">نظافة </h4>
                    <p  style="color: #095f45">لا تنسى ان تحفظ الزيت المستعمل ف اناء مناسب له حتى يتسنى لنا امدادك بالاناء المناسب  لتحافظ على جمال البيئة المحيطه بك </p>
                 </div>
             </div>
         </div>

         <!-- Features Icon-->
         <div class="col-md-4">
             <div class="features-icon-box">


                 <div class="features-info">
                    <h4  style="color: #095f45">ميزانيتك تهمنا</h4>
                    <p  style="color: #095f45">نحن نوفر ايضا خدمه شراء الزيت نقدا فبذلك يمكننا ان نوفر لك دعما يساعد مطعمك او مصنعك ف التخلص من الزيت والربح</p>
                 </div>
             </div>
         </div>

         <!-- Features Icon-->
         <div class="col-md-4">
             <div class="features-icon-box">

                
                 <div class="features-info">
                    <h4  style="color: #095f45">اسال عن هديتك</h4>
                    <p  style="color: #095f45">نوفر ايضا مسابقه لاكبر مجمع زيت فى الشهر فلتسال عن هديتك وتتابع كميتك المجمعه من خلال حسابك الشحصى معنا</p>
                 </div>
             </div>
         </div>


      </div> <!-- /.row-->
  </div> <!-- /.container-->
</section>
<!--End Features-->

   <!--Start video-->
   <section id="video" class="section parallax">
    {{-- <div class="slider-overlay"></div> --}}

    <div class="overlay"></div>
   <div class="container">
       <div class="row">
       
             <div class="title-box text-center white">
                <h2 class="title">فيديو</h2>
             </div>
         
         <div class="col-md-6">
             <div class="video-caption-main">
                  <!--Video caption #1-->
                  <div class="video-caption">
                      <div class="video-icon">
                          <i class="fa fa-briefcase"></i>
                      </div>
                      <div class="video-caption-info">
                          <h4>ربه المنزل</h4>
                          <p> اعتادت ربات البيوت على التخلص من الزيوت المستخدمة في القلي بسكبها بحوض المطبخ، الأمر الذي قد يتسبب في حدوث مشاكل لا حصر لها.
                            .</p>
                      </div>
                  </div>
                  
                   <!--Video caption #2-->
                  <div class="video-caption">
                      <div class="video-icon">
                          <i class="fa fa-glass"></i>
                      </div>
                      <div class="video-caption-info">
                          <h4>صاحب المطعم</h4>
                          <p>عملائنا من المصانع المتعاقدين بعقود لنقل مخلفات المصانع من الزيوت ف اقصر واسرع وقت ممكن ،اطمن مصنعك ف امان   </p>
                      </div>
                  </div>

                  <!--Video caption #3-->
                  <div class="video-caption">
                      <div class="video-icon">
                          <i class="fa fa-rocket "></i>
                      </div>
                      <div class="video-caption-info">
                          <h4>صاحب المصنع</h4>
                          <p>هذه العادة هي واحدة من أكثر العادات ضرراً بالبيئة،.</p>
                      </div>
                  </div>      
             </div>
         </div>
        <!-- End Video caption-->
         
        <div class="col-md-6">
            <div class="play-video">
              <iframe src="http://player.vimeo.com/video/115919099?title=0&amp;byline=0&amp;portrait=0&amp;color=fff" allowfullscreen></iframe>
            </div>
        </div> 
           
       </div> <!-- /.row-->
   </div> <!-- /.container-->
</section>
<!--End video-->


  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #095f45; ">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1"  href="#!" style="border: #fff solid 1px" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" style="border: #fff solid 1px"role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" style="border: #fff solid 1px"role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!"style="border: #fff solid 1px" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!"style="border: #fff solid 1px" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!"style="border: #fff solid 1px" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2" style="color: #fff;">
                <strong>  للاستفسار </strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <textarea cols="50" rows="3" placeholder="لا تتردد ف التواصل معنا " style="border: #fff solid 1px; outline:none;"></textarea>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit"style="border: #fff solid 1px" class="btn btn-outline-light mb-4">
                ارسال
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Text -->
      <section>
        <p style="color: #fff;">

            زيت هى خدمة لمساعدتك في التخلص من زيت الطعام المستعمل بطريقة صحيحة.
            الزيت المستعمل عادة بيترمى فى الصرف فبيسد المواسير و يلوث المياه و ده بيعمل صعوبة فى تنقيتها او يترمى فى الزبالة و نفقد قيمته.
            احنا في زيت بنشتغل على إعادة تدوير الزيت لإنتاج منتجات زي الوقود حيوى كبديل للطاقة و الجليسرين و صابون.

        </p>
      </section>
    </div>
    
    <!-- Copyright -->
    <div class="text-center p-3"style="color: #fff;" style="background-color: rgba(0, 0, 0, 0.2);">
      © حقوق الملكية 2021 
      <a class="text-white"style="color: #fff;" href="#">زيت</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->


            <!--Plugins-->
            <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script> 
            <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
            <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
            <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
            <script type="text/javascript" src="js/easing.js"></script>
            <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
            <script type="text/javascript" src="js/jquery.appear.js"></script>
            <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
            <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
            <script type="text/javascript" src="js/custom.js"></script>
  </html>