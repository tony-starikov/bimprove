
@if ($paginator->hasPages())

    <nav aria-label="Page navigation example">
        <ul class="pagination d-flex align-items-center m-0">

                @if ($paginator->onFirstPage())
                    <li class="page-item disabled p-0 m-0 mx-4">
                        <a class="page-link border-0 p-0 m-0 shadow-none" href="#" aria-label="Previous">
                            <img src="/images/pagination/arrows/left.svg" class="img-fluid p-0 m-0" style="height: 50px;">
                        </a>
                    </li>
                @else
                    <li class="page-item p-0 m-0 mx-4">
                        <a class="page-link border-0 p-0 m-0 shadow-none" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                            <img src="/images/pagination/arrows/left.svg" class="img-fluid p-0 m-0" style="height: 50px;">
                        </a>
                    </li>
                @endif

                @foreach ($elements as $element)

                    @if (is_string($element))
                            <li class="page-item p-0 m-0"><a class="page-link border-0 p-0 m-0" href="#">{{ $element }}</a></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item p-0 m-0 mx-2">
                                    <a class="page-link border-0 p-1 m-0 shadow-none">
                                        <img src="/images/pagination/circles/{{ $page }}.svg" class="img-fluid p-0 m-0" style="height: 45px;">
{{--                                        <span class="display-3 px-2">{{ $page }}</span>--}}
                                    </a>
                                </li>
                            @else
                                <li class="page-item p-0 m-0 mx-2">
                                    <a class="page-link border-0 p-1 m-0 shadow-none" href="{{ $url }}">
                                        <img src="/images/pagination/circles/{{ $page }}.svg" class="img-fluid p-0 m-0" style="height: 45px;">
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="page-item p-0 m-0 mx-4">
                        <a class="page-link border-0 p-0 m-0 shadow-none" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                            <img src="/images/pagination/arrows/right.svg" class="img-fluid p-0 m-0" style="height: 50px;">
                        </a>
                    </li>
                @else
                    <li class="page-item disabled p-0 m-0 mx-4">
                        <a class="page-link border-0 p-0 m-0 shadow-none" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                            <img src="/images/pagination/arrows/right.svg" class="img-fluid p-0 m-0" style="height: 50px;">
                        </a>
                    </li>
                @endif
        </ul>
    </nav>
@endif
