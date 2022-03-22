@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        <div class="col-3 p-5">
            <img src="/svg/instaprofile.jpg" alt="profile pic" class="rounded-circle">
        </div>
        <div class="col-9">
            <div><h1>Omwash.Daghiz</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>63</strong> posts</div>
                <div class="pe-5"><strong>86</strong> followers</div>
                <div class="pe-5"><strong>116</strong> following</div>
            </div>
            <div class="pt-5"><strong>Rasta Smitre Smitten</strong></div>
            <div>
                “It has become appallingly obvious that our technology has exceeded our humanity.”,“It is only when they go wrong that machines remind you how powerful they are.”  
            </div>
            <div><a href="https://github.com/douglas254">GitHub</a></div>
        </div>
    </div>
    
    <div class="row pt-5">
        <div class="col-4">
            <img src="/svg/pic1.jpg" class="w-100">
        </div>
          <div class="col-4">
            <img src="/svg/pic2.jpg" class="w-100">
        </div>
          <div class="col-4">
            <img src="/svg/pic3.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
