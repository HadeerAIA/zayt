<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" class="no-js">
      <head>
        <title>زيت</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.css" rel="stylesheet">
        <link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="../js/owl-carousel/owl.theme.css" rel="stylesheet">
        <link href="../js/owl-carousel/owl.transitions.css" rel="stylesheet">
        <link href="../css/magnific-popup.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/animate.css" />
        <link rel="stylesheet" href="../css/etlinefont.css">
        <link href="../css/style.css" type="text/css"  rel="stylesheet"/>
      </head>
    
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light fixed-top" >
            <div class="container-fluid" style="background-color:#095f45">
                <a class="navbar-brand" style="color:#fff; font-size:1.5rem;"  href="{{ url('/') }}">
                    للرجوع للرئيسية
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link nav-new" style="color:#fff;" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link nav-new" style="color:#fff;" href="{{ route('register') }}">{{ __('انشاء الحساب') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle nav-new"  style="color:#fff;font-size:1.5rem;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                                    @can('isAdmin')
                                    <a class="dropdown-item nav-new" style="color:#095f45;" href="{{ route('admin.store') }}">
                                      {{ __('قسم الادارة') }}
                                  </a>
                                  @endcan
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../img/oil.png" alt="" width="72" height="80">
            <h2 >نموذج إتمام شراء الزيت</h2>
            <p class="lead">
        فيما يلي نموذج للتسجيل . ليصلك مندوبنا اينما كنت ، يرجى التاكد من صحه البيانات المدرجه بالاسفل .
            </p>
            </div>
            @if(Session::has('client-created'))
                <div class="alert alert-succ" role="alert">
                    {{ Session::get('client-created') }}
                </div>
            @endif   
            <div class="row g-3">
            <div class="col-md-7 col-lg-8 container">
                <h4 class="mb-3 text-center">عنوان الفاتورة</h4>
                <hr class="my-4">

                <form class="needs-validation" method="POST" action="{{route('bill.store')}}" novalidate>
                    @csrf
                <div class="row g-3">

                    <div class="col-sm-6">
                    <label for="fname" class="form-label" style="color: black">الأسم الأول</label>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="الاسم الاول" value="" required>
                    <span style="color:#095f45;">@error('fname'){{ __('يرجى إدخال الاسم الاول صحيح.') }}@enderror</span>
                    </div>

                    <div class="col-sm-6">
                    <label for="lname" style="color:black" class="form-label">إسم العائلة</label>
                    <input type="text" class="form-control" name="lname"id="lname" placeholder="اسم العائلة" value="" required>
                    <span style="color:#095f45;">@error('lname'){{ __('يرجى إدخال اسم عائلة صحيح.') }}@enderror</span>
                    </div>

                    <div class="col-sm-6">
                    <label for="address" style="color:black" class="form-label">العنوان</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 الشارع الأول" required>
                    <span style="color:#095f45;">@error('address'){{ __('يرجى إدخال عنوان الشحن الخاص بك.') }}@enderror</span>
                    </div>

                    <div class="col-sm-6">
                    <label for="country" style="color:black" class="form-label">البلد</label>
                    <select class="form-select" name="country" id="country" required>
                        <option value="">اختر...</option>
                        <option>
                            القاهرة
                        </option>
                        <option>
                            الاسكندرية
                        </option>
                        <option>
                            الجيزة
                        </option>
                        <option>
                            القليوبية
                        </option>
                        <option>
                            اسوان
                        </option>
                        <option>
                            المنوفية
                        </option>
                        <option>
                            الغربية
                        </option>
                        <option>
                            الشرقية
                        </option>
                        <option>
                            الاقصر
                        </option>
                    </select>
                    <span style="color:#095f45;">@error('country'){{ __('يرجى اختيار البلد .') }}@enderror</span>
                    </div>

                    <div class="col-sm-6">
                    <label for="source" style="color:black" class="form-label">مصدر الزيت</label>
                    <select class="form-select" name="source" id="source" required>
                        <option value="">اختر...</option>
                        <option>
                            ربة المنزل
                        </option>
                        <option>
                                المطاعم
                        </option>
                        <option>
                            المصانع
                        </option>
                    </select>
                    <span style="color:#095f45;">@error('source'){{ __('يرجى ادخال احدى الاختيارات') }}@enderror</span>
                    </div>

                    <div class="col-sm-6">
                    <label for="quantity" style="color:black" class="form-label">كمية الزيت باللتر</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="5" placeholder="لتر" value="" required>
                    <span style="color:#095f45;">@error('quantity'){{ __('يرجى أدخال كميه صحيحة') }}@enderror</span>
                    </div>

                    <div class="col-sm-6">
                    <label for="phone" style="color:black" class="form-label">رقم الهاتف</label>
                    <input type="number" class="form-control"  name="phone" id="phone"min="6" max="11" required>
                    <span style="color:#095f45;">@error('phone'){{ __('يرجي ادخال رقم الهاتف حتي نتمكن من التواصل معاك') }}@enderror</span>
                    </div>

                    <div class="col-sm-6">
                    <label for="date" style="color:black" class="form-label">موعد الاستلام </label>
                    <input type="date" class="form-control" name="date" id="date" required>
                    <span style="color:#095f45;">@error('date'){{ __('يرجي تحديد ميعاد لتسليم كمية الزيت') }}@enderror</span>
                    </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">احفظ هذه المعلومات في المرة القادمة</label>
                </div>

                <hr class="my-4">

                <h4 class="mb-3">طريقة الدفع</h4>


                <div class="my-3">
                    <label for="credit" style="color:black" class="form-label">طريقة الدفع </label>
                    <select class="form-select" name="bill" id="credit" required>
                        <option value="">اختر...</option>
                        <option>
                            تبديل باحد منجاتنا
                        </option>
                        <option>
                            الدفع نقدا
                        </option>
                        <option>
                            التبرع لاحدى جهات حماية البيئة
                        </option>
                    </select>
                    <span style="color:#095f45;">@error('bill'){{ __('يرجي تحديد طريقة الدفع') }}@enderror</span>
                    </div>

                <hr class="my-4">
                <div style="height: 20px"></div>

                <button class="w-25 btn btn-gray-border" style="margin-right: 250px" type="submit">الاستمرار بالدفع</button>
                </form>

            </div>
            <div style="height: 60px"></div>
            </div>
        </main>
        </div>



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
                        <textarea cols="50" rows="3" placeholder="لا تتردد ف التواصل معنا " style="border: #fff solid 1px"></textarea>
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
            </div>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            -->
          
          
                      <!--Plugins-->
                      <script src="{{ asset('js/app.js') }}" defer></script>
                      <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
                      <script type="text/javascript" src="../js/bootstrap.min.js"></script> 
                      <script type="text/javascript" src="../js/owl-carousel/owl.carousel.js"></script>
                      <script type="text/javascript" src="../js/jquery.flexslider-min.js"></script>
                      <script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
                      <script type="text/javascript" src="../js/easing.js"></script>
                      <script type="text/javascript" src="../js/jquery.easypiechart.js"></script>
                      <script type="text/javascript" src="../js/jquery.appear.js"></script>
                      <script type="text/javascript" src="../js/jquery.parallax-1.1.3.js"></script>
                      <script type="text/javascript" src="../js/jquery.mixitup.min.js"></script>
                      <script type="text/javascript" src="../js/custom.js"></script>
             
            </body>
            </html>
        
        