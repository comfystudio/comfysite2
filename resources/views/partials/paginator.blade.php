@if ($paginator->hasPages())
    <div class="pagiNation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())

        @else
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{--<li class="active"><span>{{ $page }}</span></li>--}}
                        <span class="current">{{$page}}</span>

                    @else
                        {{--<li><a href="{{ $url }}">{{ $page }}</a></li>--}}
                        <a href = "{{$url}}">{{$page}}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{$url}}"><i class="fa fa-angle-double-right"></i></a>
        @else

        @endif
    </div>
@endif
