@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="css3/Profile.css">
</head>
    <div class="container">
        <div class="main">
            
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            {{-- <img src="img2/image.jpg" class="rounded-circle" width="150"/> --}}
                            <div class="mt-3">
                                <h3>سعيد</h3>{{-- <h3>{{ $bills->fname }}</h3> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">الحساب</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>الاسم بالكامل</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    سعيد{{-- {{$bills->fname}} --}}
                                </div>
                            </div>
                            {{-- <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>الهاتف</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    0112387662
                                </div>
                            </div>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>العنوان</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    مدينة القاهرة حي المعادي شارع 9
                                </div>
                            </div> --}}
                        </div>
                    </div>
                   @foreach($bills as $bill) 
                    <div class="card mb-3 content">
                        <h1 class="m-3">الكمية المقدمة</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>{{$bill->bill}}</h5>
                                </div>
                            </div>
                        </div>
                        <h1 class="m-3">الهاتف</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>{{$bill->phone}}</h5>
                                </div>
                            </div>
                        </div>
                        <h1 class="m-3">العنوان</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>{{$bill->address}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection