@if ($paginator->hasPages())
    <nav class="my-2 text-center">
        <div class="join justify-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button disabled class="btn join-item btn-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')" aria-hidden="true">@lang('pagination.previous')</button>
            @else
                <a class="btn join-item" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@lang('pagination.previous')</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="btn join-item" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@lang('pagination.next')</a>
            @else
                <button disabled class="btn join-item btn-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">@lang('pagination.next')</button>
            @endif
        </div>
    </nav>
@endif
