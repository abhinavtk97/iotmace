@extends('layouts.master')

@section('content')


    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
          <div class="container">
            <div class="row">
              <!-- post -->
              @foreach ($messages as $message)
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href="post.blade.php"><img src="img/blog-post-1.jpeg" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{ $message->created_at }}</div>
                    <div class="category"><a href="#">Business</a></div>
                  </div><a href="{{ route('post',['id'=>$message->id]) }}">
                    <h3 class="h4">{{ $message->header }}</h3></a>
                  <p class="text-muted">{{  strip_tags(substr($message->message,0,10)) }}<?php echo '...'?></p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                      <div class="title"><span>{{ $message->user->name }}</span></div></a>
                  </footer>
                </div>
              </div>
              @endforeach

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              {{ $messages->links() }}

            </nav>
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
            <div class="blog-posts"><a href="#">
                 <?php $i=0; ?>
                @foreach($messages as $message)
                  @if($i<4)
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
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
          <!-- Widget [Categories Widget]-->
          <div class="widget categories">
            <header>
              <h3 class="h6">Categories</h3>
            </header>
            <div class="item d-flex justify-content-between"><a href="#">Growth</a><span>12</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
          </div>
          <!-- Widget [Tags Cloud Widget]-->
          <div class="widget tags">       
            <header>
              <h3 class="h6">Tags</h3>
            </header>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>

  @endsection