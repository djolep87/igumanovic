@extends('layouts.master')
@section('title', 'Завршни испит')

@section('content')
<section class="tf-page-title">
    <div class="overlay"></div>
    <img src="/assets/images/background/img1innerpage.png" class="bg-inner1" alt="">
    <img src="/assets/images/background/img2innerpage.png" class="bg-inner2" alt="">
    <img src="/assets/images/background/img4innerpage.png" class="bg-inner3" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title inner">
                    <h1 class="title">Завршни испит</h1>
                    <div class="breadcrumbs">
                        <ul class="jus-ct">
                            <li><a href="/">Почетна</a></li>
                            <li><p class="breadcrumbs-inner f-rubik">Завршни испит</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>

<section class="tf-section tf-blog-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($posts as $post)
                    <div class="wrap-sc-event">
                    <div class="sc-event-box active fx wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                        <div class="image">
                           <a href="/admin.zavrsni_ispit.show/{{$post->id}}"><img src="/storage/post_image/{{$post->image}}" alt=""></a> 
                        </div>
                        <div class="content">
                            <h3><a href="/admin.zavrsni_ispit.show/{{$post->id}}">{{$post->title}}</a></h3>
                            <ul>
                                {{-- <li><span><i class="far fa-map-marker-alt"></i>55 Main Street,2nd Block, 3rd Floor, New York City</span></li> --}}
                                <li><span><i class="far fa-calendar-alt"></i>{{$post->created_at->toFormattedDateString()}}</span></li>
                            </ul>
                            
                        </div>
                        <a href="/admin.zavrsni_ispit.show/{{$post->id}}" class="fl-btn st-1">
                            <span class="inner">Детаљније</span>
                        </a>
                    </div>
                </div>
                @endforeach
                
            </div>

        </div> 
    </div>
</section>
@endsection