@extends('layouts.master')


@section('content')


    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post-single">
              <div class="post-thumbnail"><img src="{{ url('img/blog-post-3.jpeg') }}" alt="..." class="img-fluid"></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="category">
                    @foreach($message->tags as $tag)
                      <a href="#">{{ $tag->name }}</a>

                    @endforeach
                  </div>
                </div>
                <h1>{{ $message->header }}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="{{ url('img/avatar-1.jpg') }}" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{ $message->user->name }}</span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i> {{ $message->created_at }}</div>
                  </div>
                </div>
                <div class="post-body">
                  <p class="lead">{!!  $message->message !!}</p>
                </div>
                <div class="post-tags">
                  @foreach($message->tags as $tag)
                    <a href="#" class="tag"> #{{ $tag->name }}</a>

                  @endforeach

                  </div>
                <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column  flex-md-row">
                  @if(isset($prev))
                  <a href="{{ route('post',['id'=>($message->id)-1]) }}" class="prev-post text-left d-flex align-items-center">
                    <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                    <div class="text"><strong class="text-primary">Previous Post </strong>
                      <h6>{{ $prev->header }}</h6>
                    </div></a>
                    @endif
                  @if(isset($next))
                    <a href="{{ route('post',['id'=>($message->id)+1]) }}" class="next-post text-right d-flex align-items-center justify-content-end">
                    <div class="text"><strong class="text-primary">Next Post </strong>
                      <h6>{{ $next->header }}</h6>
                    </div>
                    <div class="icon next"><i class="fa fa-angle-right">   </i></div></a>
                  @endif
                </div>

              </div>
            </div>
          </div>
        </main>
        <aside class="col-lg-4">
          <!-- Widget [Search Bar Widget]-->
          <div class="widget search">
            <header>
              <h3 class="h6">Search the blog</h3>
            </header>
            <form action="#" class="search-form">
              <div class="form-group">
                <input type="search" placeholder="What are you looking for?">
                <button type="submit" class="submit"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
          <!-- Widget [Latest Posts Widget]        -->
          <div class="widget latest-posts">
            <header>
              <h3 class="h6">Latest Posts</h3>
            </header>
            <div class="blog-posts">
              <div class="blog-posts"><a href="#">
                      <?php $i=0; ?>
                  @foreach($messages as $message)
                    @if($i<4)
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="{{ url('img/small-thumbnail-3.jpg') }}" alt="..." class="img-fluid"></div>
                        <div class="title"><strong>{{ $message->header }}</strong>
                          <div class="d-flex align-items-center">
                            <div class="views"><i class="icon-eye"></i> {{ substr($message->created_at,0,10) }}</div>
                            <div class="comments"><i class="icon-comment"></i>{{ $message->user->name }}</div>
                          </div>
                        </div>
                      </div></a>
                @endif
                  <?php $i=$i+1; ?>
                @endforeach
              </div>
            </div>
          </div>


        </aside>
      </div>
    </div>

  @endsection