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


    <html>
        <head>
            <style>
            body{
                margin-top:20px;
                color: #1a202c;
                text-align: left;
                background-color: #e2e8f0;    
            }
            .main-body {
                padding: 15px;
            }
            .card {
                box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
            }
            
            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0 solid rgba(0,0,0,.125);
                border-radius: .25rem;
            }
            
            .card-body {
                flex: 1 1 auto;
                min-height: 1px;
                padding: 1rem;
            }
            
            .gutters-sm {
                margin-right: -8px;
                margin-left: -8px;
            }
            
            .gutters-sm>.col, .gutters-sm>[class*=col-] {
                padding-right: 8px;
                padding-left: 8px;
            }
            .mb-3, .my-3 {
                margin-bottom: 1rem!important;
            }
            
            .bg-gray-300 {
                background-color: #e2e8f0;
            }
            .h-100 {
                height: 100%!important;
            }
            .shadow-none {
                box-shadow: none!important;
            }</style>
        </head>
        <div class="container">
            <div class="main-body">
            
    
                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                              <h4> {{ Auth::user()->name }}</h4>
                              <p class="text-secondary mb-1">عميل جديد</p>
                              <p class="text-muted font-size-sm">مصر</p>
                              <a class="btn btn-primary" style="background-color: #095f45;color:#fff; " href="{{"/Asks/create"}}">لطلب مندوب لعملية جديدة</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>   موقعنا   </h6>
                            <span class="text-secondary">https://oil.com</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>   نويتر   </h6>
                            <span class="text-secondary">@زيت</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>   انستجرام   </h6>
                            <span class="text-secondary">زيت</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>   فيس بوك   </h6>
                            <span class="text-secondary">زيت</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-8">
                      
                      @foreach($asks as $ask)
                      <div class="card mb-3">
                        <div class="card-body">
                       
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right" > رقم العملية </h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500">
                                {{ $ask->id }}
                            </div>
                          </div>
                          <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right" > تاريخ العملية  </h6>
                        </div>
                        <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500">
                            {{ $ask->date }}
                        </div>
                      </div>
                      <hr>
    
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right">كميه الزيت</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500">
                                {{ $ask->quantity }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right">رقم الهاتف</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500; float:right">
                                0{{ $ask->phone }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right">العنوان</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500; float:right">
                                {{ $ask->address }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('Asks.destroy', $ask->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-info " style="background-color: #095f45;color:#fff; ">لالغاء الطلب الحالى</button>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach

                      
                      <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                          <div class="card h-100">
                            <div class="card-body">
                              <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2" > احصاءات تهمك </i></h6>
                              <small>كمية الزيت المستبمع من خلال الموقع</small>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 72%; " aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <small>سرعة المندوب</small>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <small>مدى رضا العميل</small>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <small>تعامل العملاء من خلال موقعنا</small>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div> 

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
        
        