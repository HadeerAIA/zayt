@can('isAdmin')
@extends('layouts.app')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>

    body{
        background:#DCDCDC;
        margin-top:20px;
    }
    .card-box {
        padding: 20px;
        border-radius: 3px;
        margin-bottom: 30px;
        background-color: #fff;
    }

    .social-links li a {
        border-radius: 50%;
        color: rgba(121, 121, 121, .8);
        display: inline-block;
        height: 30px;
        line-height: 27px;
        border: 2px solid rgba(121, 121, 121, .5);
        text-align: center;
        width: 30px
    }

    .social-links li a:hover {
        color: #797979;
        border: 2px solid #797979
    }
    .thumb-lg {
        height: 88px;
        width: 88px;
    }
    .img-thumbnail {
        padding: .25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        max-width: 100%;
        height: auto;
    }
    .text-pink {
        color: #095f45!important;
    }
    .btn-rounded {
        border-radius: 2em;
    }
    .text-muted {
        color: #98a6ad!important;
    }
    h4 {
        line-height: 22px;
        font-size: 20px;
    }
    #pag nav{
        background-color: transparent;
    }
    #pag{

        margin-right: 450px; 
    }

</style>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"><a href="#" class="btn btn-gray-border  waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i>{{ Auth::user()->name }}</a></div>
        </div>
        <div class="row">
            @foreach($users as $user)
            <div class="col-lg-4">
                <div class="text-center card-box">
                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <div class="">
                            <h4 style="padding-top:20px"><a href="{{route('users.profile', $user->id)}}" >{{$user->username}}</a></h4>
                            <p class="text-muted"><span><a href="#" class="text-pink">{{ $user->email }}</a></span></p>
                            <p class="text-muted"><span><a href="#" class="text-pink">   العميل رقم  {{ $user->id }}</a></span></p>

                        </div>
                        <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-gray-border  mt-3 btn-rounded waves-effect w-md waves-light" type="submit">الغاء</button>
                          </form>
                    </div>
                </div>
            </div>
            @endforeach
            <span id="pag">{{ $users->links() }}</span> 
        </div>
    </div>
</div>
@endsection
@endcan