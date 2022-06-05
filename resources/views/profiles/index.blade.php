
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="/img/profile.jpg" alt="">
        </div>
        <div class="pt-5 col-9 ">
            <div class="d-flex justify-content-between align-baseline"><h1>{{ $user->username }}</h1>
                <a href="#" >Add new post</a></div>


            <div class="d-flex">
                <div class="pe-5"><strong>1</strong>post</div>
                <div class="pe-5"><strong>14K</strong> followers</div>
                <div class="pe-5"><strong>13</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#"> {{ $user->profile->url }}</a></div>
        </div>
    </div>

    <!--posts -->
    <div class="row pt-5">

        <div class="col-4">
            <img class="w-100" src="/img/post.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 "  src="/img/post3.jpg" alt="">
        </div>

        <div class="col-4">
            <img class="w-100 " style="height: 81%" src="/img/post4.jpg" alt="">
        </div>

    </div>

</div>
@endsection
