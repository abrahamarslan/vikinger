@if ($paginator->hasPages())
    <nav class="section-pager-bar">
        <ul class="section-pager">            

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="section-pager-item active" aria-current="page"><span class="section-pager-item-text">{{ $page }}</span></li>
                        @else
                            <li class="section-pager-item"><a class="section-pager-item-text" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            
        </ul>
    </nav>
@endif
