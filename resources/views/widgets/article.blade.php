<div class="container list">
  <!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Featured</span></h2>
	</div>
	<div class="row card-columns listrecent">
    <!-- begin post -->
    @forelse($articles as $article)
			@if($article->featured)
    		<div class="col-lg-6">
		      <div class="card">
		        @if($article->page_image)
		        <a href="{{ url($article->slug) }}">
		          <img class="img-fluid" src="{{ $article->page_image }}" alt="">
		        </a>
		        @endif
		        <div class="card-block" href="{{ url($article->slug) }}">
		          <h2 class="card-title"><a href="{{ url($article->slug) }}">{{ $article->title }}</a></h2>
		          <h4 class="card-text">{{ $article->meta_description }}</h4>
		          <div class="metafooter">
		            <div class="wrapfooter">
		              <span class="meta-footer-thumb">
		              <a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
		              </span>
		              <span class="author-meta">
		              <span class="post-name"><a href="author.html">{{ $article->user->name or 'null' }}</a></span><br/>
		              <span class="post-date">{{ $article->published_at->diffForHumans() }}</span><span class="dot"></span><span class="post-read">{{ $article->view_count }} reads</span>
		              </span>
		              <span class="post-read-more"><a href="{{ url($article->slug) }}" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
			@endif
    @empty
        <h3 class="text-center">{{ lang('Nothing') }}</h3>
    @endforelse
    <!-- end post -->

  </div>

	</section>
	<!-- End Featured
	================================================== -->

  <!-- Begin List Posts
  ================================================== -->
  <section class="recent-posts">
  <div class="section-title">
    <h2><span>All Stories</span></h2>
  </div>
  <div class="row card-columns listrecent">
    <!-- begin post -->
    @forelse($articles as $article)
    <div class="col-lg-4">
      <div class="card">
        @if($article->page_image)
        <a href="{{ url($article->slug) }}">
          <img class="img-fluid" src="{{ $article->page_image }}" alt="">
        </a>
        @endif
        <div class="card-block">
          <h2 class="card-title"><a href="{{ url($article->slug) }}">{{ $article->title }}</a></h2>
          <h4 class="card-text">{{ $article->meta_description }}</h4>
          <div class="metafooter">
            <div class="wrapfooter">
              <span class="meta-footer-thumb">
              <a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
              </span>
              <span class="author-meta">
              <span class="post-name"><a href="author.html">{{ $article->user->name or 'null' }}</a></span><br/>
              <span class="post-date">{{ $article->published_at->diffForHumans() }}</span><span class="dot"></span><span class="post-read">{{ $article->view_count }} reads</span>
              </span>
              <span class="post-read-more"><a href="{{ url($article->slug) }}" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    @empty
        <h3 class="text-center">{{ lang('Nothing') }}</h3>
    @endforelse
    <!-- end post -->

  </div>
  </section>
  <!-- End List Posts
  ================================================== -->

    </div>
</div>
