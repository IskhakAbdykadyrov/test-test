@extends('layout.nav')

@section('content')
    <section id="container">
        <div class="wrap-container">
            <!-----------------Content-Box-------------------->
            <div id="main-content">
                <div class="wrap-content">
                    <div class="row">
                        <article class="single-post zerogrid">
                            <div class="row wrap-post"><!--Start Box-->
                                <div class="entry-header">
                                    <span class="time">June 26, 2013  by admin</span>
                                    <h2 class="entry-title"><a href="#">RETRO GALLERY: FRAGMENTING PERSISTENT FLIGHT AND
                                            PATHOLOGY</a></h2>
                                    <span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>
                                </div>
                                <div class="post-thumbnail-wrap">
                                    <img src="{{$products->image}}">
                                </div>
                                <div class="entry-content">
                                    <h2>{{$products->name}}</h2>
                                    <p>{{$products->description}}</p>
                                </div>
                            </div>
                            @foreach($comments as $comment)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h1 class="card-title">Комментарии</h1>
                                    <h5 class="card-title">{{$comment->name}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$comment->email}}</h6>
                                    <p class="card-text">{{$comment->text}}</p>
                                </div>
                            </div>
                            @endforeach
                        </article>
                        <div class="zerogrid">
                            <div class="comments-are">
                                <div id="comment">
                                    <h3>Leave a Reply</h3>
                                    <span>Your email address will not be published. Required fields are marked </span>
                                    <form name="comment_form" id="comment_form" method="post" action="{{ route('comment-store') }}">
                                        <input type="hidden" name="product_id" value="{{ $products->id }}">
                                        <label>
                                            <span>Comment:</span>
                                            <textarea name="text" id="text"></textarea>
                                        </label>
                                        <label>
                                            <span>Name:</span>
                                            <input type="text" name="name" id="name" required>
                                        </label>
                                        <label>
                                            <span>Email:</span>
                                            <input type="email" name="email" id="email" required>
                                        </label>
                                        @csrf
                                        <center><input class="sendButton" type="submit" name="submitcomment"
                                                       value="Submit"></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

