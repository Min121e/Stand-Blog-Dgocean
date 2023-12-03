@props(['randomBlogs'])
<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
        @foreach ($randomBlogs as $blog)
        <div class="item">
          {{-- <img src="blog/assets/images/banner-item-01.jpg" alt=""> --}}
          {{-- <img src="https://picsum.photos/250/170?random={{ $blog->id }}" alt=""> --}}

          <img src='{{ asset($blog->thumbnail ? "/storage/$blog->thumbnail" : "https://picsum.photos/250/170?random=" . $blog->id) }}' width="520" height="350" alt="">


          <div class="item-content">
            <div class="main-content">
              <div class="meta-category">
                <a href="/?category={{$blog->category->slug}}"><span>{{$blog->category->name}}</span></a>
              </div>
              <a href="/blogs/{{$blog->slug}}"><h4>{{$blog->title}}</h4></a>
              <ul class="post-info">
                <li>{{$blog->user->name}}</li>
                <li>{{$blog->created_at->format('Y-m-d')}}</li>
                <li>12 Comments</li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>