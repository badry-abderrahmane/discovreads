
  <div class="row masonry-wrap">
      <div class="masonry">

          <div class="grid-sizer"></div>
          @forelse($articles as $article)
          <article class="masonry__brick entry format-standard" data-aos="fade-up">
            @if($article->page_image)
              <div class="entry__thumb">
                  <a href="{{ url($article->slug) }}" class="entry__thumb-link">
                      <img src="{{ $article->page_image }}" alt="">
                  </a>
              </div>
            @endif


              <div class="entry__text">
                  <div class="entry__header">

                      <div class="entry__date">
                          <a href="{{ url($article->slug) }}">{{ $article->user->name or 'null' }}</a>
                      </div>
                      <h1 class="entry__title"><a href="{{ url($article->slug) }}">{{ $article->title }}</a></h1>

                  </div>
                  <div class="entry__excerpt">
                      <p>
                          {{ $article->meta_description }}
                      </p>
                  </div>
                  <div class="entry__meta">
                    <div class="row">
                      <div class="col-md-6">
                        <i class="fa fa-clock-o"></i>
                        {{ $article->published_at->diffForHumans() }}
                      </div>
                      <div class="col-md-6">
                        <i class="fa fa-eye"></i>
                        {{ $article->view_count }}
                      </div>
                    </div>

                      <span class="entry__meta-links">
                      </span>
                  </div>
              </div>

          </article> <!-- end article -->
          @empty
              <h3 class="text-center">{{ lang('Nothing') }}</h3>
          @endforelse
      </div> <!-- end masonry -->
  </div> <!-- end masonry-wrap -->
