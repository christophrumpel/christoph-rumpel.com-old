@if ($paginator->hasPages())
    <ul class="pagination list-reset flex flex-row justify-center h-10 mt-4 mb-4">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled pr-2 text-lg"><span>@lang('pagination.previous')</span></li>
        @else
            <li class="text-lg"><a class="text-blue-light pr-2" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="text-lg"><a class="text-blue-light pl-2" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
        @else
            <li class="disabled pl-2 text-lg"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
