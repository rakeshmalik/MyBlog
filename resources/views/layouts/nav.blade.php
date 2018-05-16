<div class="row">
  <div class="col-md-8">
    <nav class="blog-nav">
  <a class="blog-nav-item active" href="/">Home</a>
  <a class="blog-nav-item" href="/posts/create">Add New Post</a>
  <a class="blog-nav-item" href="#">Press</a>
  <a class="blog-nav-item" href="#">New hires</a>
</nav>
  </div>
  <div class="col-md-4 text-right">
    <nav class="pull-right">
    @if (Auth::check())
      <a class="blog-nav-item pull-right" href="#">
        {{ Auth::user()->name }}
      </a>
    @endif
    </nav>
    
  </div>
</div>
