@if ($paginator->hasPages())
    <ul class="pagination list-reset flex flex-row justify-center h-10">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled pr-2"><span>@lang('pagination.previous')</span></li>
        @else
            <li><a class="text-blue-light pr-2" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a class="text-blue-light pl-2" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
        @else
            <li class="disabled pl-2"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
