@if ($paginator->hasPages())
<div class="row text-center">
        {{-- Previous Page Link --}}
        <div class="col">
          @if ($paginator->onFirstPage())
              <button class="previous btn btn-outline-success disabled">Prev</button>
          @else
              <a href="{{ $paginator->previousPageUrl() }}" class="previous btn btn-outline-success" rel="prev">Prev</a>
          @endif
        </div>

        <div class="col">
          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
              {{-- "Three Dots" Separator --}}
              @if (is_string($element))
                  <button class="page-number btn btn-outline-success disabled"><span>{{ $element }}</span></button>
              @endif

              {{-- Array Of Links --}}
              @if (is_array($element))
                  @foreach ($element as $page => $url)
                      @if ($page == $paginator->currentPage())
                          <button class="page-number btn btn-outline-success active"><span>{{ $page }}</span></button>
                      @else
                          <a class="page-number btn btn-outline-success" href="{{ $url }}">{{ $page }}</a>
                      @endif
                  @endforeach
              @endif
          @endforeach

        </div>
        <div class="col">
          {{-- Next Page Link --}}
          @if ($paginator->hasMorePages())
              <a href="{{ $paginator->nextPageUrl() }}" class="next btn btn-outline-success" rel="next">Next</a>
          @else
              <button class="next btn btn-outline-success disabled"><span>Next</span></button>
          @endif
        </div>
</div>
@endif
