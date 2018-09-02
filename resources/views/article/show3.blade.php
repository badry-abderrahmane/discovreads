@extends('layouts.app_made')

@section('title', $article->title)

@section('content')
<div class="container">
  <div class="main-content">
    <div class="thumbnail">
      <img src="{{ $article->page_image }}" alt="">
    </div>

      <div class="header">
        <h4>{{ $article->title }}</h4>

        <h6>{{ $article->subtitle }}</h6>
          <a href="#" class="tag-rounded"><i class="fa fa-user"></i>{{ $article->user->name or 'null' }}</a><br>
          <i class="fa fa-clock-o"></i>{{ $article->published_at->diffForHumans() }}<br>
          @if(count($article->tags))
              @foreach($article->tags as $tag)
                  <a href="{{ url('tag', ['tag' => $tag->tag]) }}" class="tag-rounded"><i class="fa fa-tags"></i>{{ $tag->tag }}</a>
              @endforeach
          @endif

      </div>
  </div>
</div>

    <div class="article container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

            <parse content="{{ $article->content['raw'] }}"></parse>

            @if($article->is_original)
                <div class="publishing alert alert-dismissible alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {!! config('blog.license') !!}
                </div>
                @endif
                @if(config('blog.social_share.article_share'))
                <div class="footing">
                    <div class="social-share"
                        data-title="{{ $article->title }}"
                        data-description="{{ $article->title }}"
                        {{ config('blog.social_share.sites') ? "data-sites=" . config('blog.social_share.sites') : '' }}
                        {{ config('blog.social_share.mobile_sites') ? "data-mobile-sites=" . config('blog.social_share.mobile_sites') : '' }}
                        initialized></div>
                </div>
                @endif
            </div>
        </div>
    </div>

    @if(Auth::guest())
        <comment title="comments"
                 commentable-type="articles"
                 commentable-id="{{ $article->id }}"></comment>
    @else
        <comment title="comments"
                 username="{{ Auth::user()->name }}"
                 user-avatar="{{ Auth::user()->avatar }}"
                 commentable-type="articles"
                 commentable-id="{{ $article->id }}"
                 can-comment></comment>
    @endif



@endsection

@section('scripts')
    <script>
        hljs.initHighlightingOnLoad();
    </script>
@endsection
