<div class="pageheader-content row">
    <div class="col-full">

        <div class="featured">
          @foreach($articles as $index => $article)


              @if($index == 0)
              <div class="featured__column featured__column--big">
                  <div class="entry" style="background-image:url({{ $article->page_image }});">

                      <div class="entry__content">
                          <span class="entry__category"><a href="#0">Music</a></span>

                          <h1><a href="#0" title="">{{ $article->title }}</a></h1>

                          <div class="entry__info">
                              <a href="#0" class="entry__profile-pic">
                                  <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                              </a>

                              <ul class="entry__meta">
                                  <li><a href="#0">{{ $article->user->name or 'null' }}</a></li>
                                  <li>{{ $article->published_at->diffForHumans() }}</li>
                              </ul>
                          </div>
                      </div> <!-- end entry__content -->

                  </div> <!-- end entry -->
              </div> <!-- end featured__big -->
              @endif


              <div class="featured__column featured__column--small">
              @if($index == 1)
                <div class="entry" style="background-image:url({{ $article->page_image }});">

                    <div class="entry__content">
                        <span class="entry__category"><a href="#0">Management</a></span>

                        <h1><a href="#0" title="">{{ $article->title }}</a></h1>

                        <div class="entry__info">
                            <a href="#0" class="entry__profile-pic">
                                <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                            </a>

                            <ul class="entry__meta">
                                <li><a href="#0">{{ $article->user->name or 'null' }}</a></li>
                                <li>{{ $article->published_at->diffForHumans() }}</li>
                            </ul>
                        </div>
                    </div> <!-- end entry__content -->

                </div> <!-- end entry -->
                @endif

                @if($index == 2)
                  <div class="entry" style="background-image:url({{ $article->page_image }});">

                      <div class="entry__content">
                          <span class="entry__category"><a href="#0">LifeStyle</a></span>

                          <h1><a href="#0" title="">{{ $article->title }}</a></h1>

                          <div class="entry__info">
                              <a href="#0" class="entry__profile-pic">
                                  <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                              </a>

                              <ul class="entry__meta">
                                  <li><a href="#0">{{ $article->user->name or 'null' }}</a></li>
                                  <li>{{ $article->published_at->diffForHumans() }}</li>
                              </ul>
                          </div>
                      </div> <!-- end entry__content -->

                  </div> <!-- end entry -->
                @endif
              </div> <!-- end featured__small -->
          @endforeach

        </div> <!-- end featured -->

    </div> <!-- end col-full -->
</div> <!-- end pageheader-content row -->
