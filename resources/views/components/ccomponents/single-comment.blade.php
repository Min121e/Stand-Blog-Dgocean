@props(['comment'])
    <ul>
        <li>
            <div class="author-thumb">
              <img src="{{$comment->profile_photo_path}}" alt="" width="70" height="70" class="rounded-pic">
            </div>
            <div class="right-content">
              <h4>{{$comment->name}}<span>{{$comment->created_at->format('Y-m-d')}}</span></h4>
              <p>{{$comment->body}}</p>
            </div>
        </li>
    </ul>






{{-- <div class="content">
  <ul>
    
    <li>
      <div class="author-thumb">
        <img src="/assets/images/comment-author-01.jpg" alt="">
      </div>
      <div class="right-content">
        <h4>Charles Kate<span>May 16, 2020</span></h4>
        <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
      </div>
    </li>
  </ul>
</div> --}}