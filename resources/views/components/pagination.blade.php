<div class="mt-10">
    @isset($scrollTo)
        {{ $items->links('components.custom-pagination-links', ['scrollTo' => $scrollTo]) }}
    @else
        {{ $items->links('components.custom-pagination-links') }}
    @endisset
</div>
