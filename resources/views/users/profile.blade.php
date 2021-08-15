@can('isAdmin')
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
            }
        </style>
      </head>
<body>
        <div class="container">
            <div class="main-body">
                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                              <h4> {{ $user->name }}</h4>
                              <p class="text-secondary mb-1">عميل رقم   {{ $user->id }}</p>
                              <p class="text-muted font-size-sm">مصر</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-8">   
                      @foreach($bills as $user)
                      <div class="card mb-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right" > رقم العملية </h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500">
                                    {{ $user->id }}
                                </div>
                              </div>
                              <hr>

                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right" > تاريخ العملية  </h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500">
                                {{ $user->date }}
                            </div>
                          </div>
                          <hr>
    
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right">كميه الزيت</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500">
                                {{ $user->quantity }}
                            </div>
                          </div>
                          <hr>
                          
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right">رقم الهاتف</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500; float:right">
                                0{{ $user->phone }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0" style="font-size: 20px; color: #095f45; font-weight:500; float:right">العنوان</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="font-size: 20px; color: #095f45; font-weight:500; float:right">
                                {{ $user->address }}
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
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
{{--     <div class="container">
    
        <div class="main">
            
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar" style="background-color:#095f45;">
                        <div class="card-body">
                            <div class="mt-3" style="color: #fff;">
                                <h3>{{ $user->username }}</h3>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content" style="background-color:#095f45;">
                        <h1 class="m-3 pt-3" style="color: #fff;">قسم الادارة</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5 style="color: #fff;">الاسم بالكامل</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <h1 style="color: #fff;">{{ $user->name }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(count($bills) == 0)
                        <div class="card mb-3 content"  style="background-color:#095f45;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"  style="color:#fff;">
                                        <h3  style="color:#fff;">لا يوجد أي طلب تم تقديمه</h3>
                                    </div>
                                </div>
                            </div>            
                        </div>
                    @else
                    @foreach($bills as $user)
                    <div class="card mb-3 content"  style="background-color:#095f45;">
                       
                        <h1 class="m-3"  style="color:#fff;">الكمية المقدمة</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"  style="color:#fff;">
                                    <h5  style="color:#fff;">{{ $user->quantity }}</h5>
                                </div>
                            </div>
                        </div>
                        <h1 class="m-3"  style="color:#fff;">الهاتف</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5  style="color:#fff;">{{ $user->phone }}</h5>
                                </div>
                            </div>
                        </div>
                        <h1 class="m-3"  style="color:#fff;">العنوان</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5  style="color:#fff;">{{ $user->address }}</h5>
                                </div>
                            </div>
                        </div>              
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div> --}}

    @endcan