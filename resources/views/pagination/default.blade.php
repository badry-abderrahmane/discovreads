@if ($paginator->hasPages())
  <div class="row">
      <div class="col-full">
          <nav class="pgn">
              <ul>
                @if ($paginator->onFirstPage())
                  <li><a class="pgn__prev disabled">Prev</a></li>
                @else
                  <li><a class="pgn__prev" href="{{ $paginator->previousPageUrl() }}">Prev</a></li>
                @endif
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li><span class="pgn__num dots">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li><span class="pgn__num current">{{ $page }}</span></li>
                            @else
                                <li><a class="pgn__num" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li><a class="pgn__next" href="{{ $paginator->nextPageUrl() }}">Next</a></li>
                @else
                    <li><a class="pgn__next disabled">Next</a></li>
                @endif
              </ul>
          </nav>
      </div>
  </div>
@endif
