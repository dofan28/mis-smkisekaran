<nav class="text-gray-800">
    <ul class="flex items-center space-x-1 text-sm font-jakarta">
        @foreach ($breadcrumbs as $breadcrumb)
            <li>
                <a wire:navigate href="{{ $breadcrumb['url'] }}"
                    class="font-semibold text-amber-500 hover:text-amber-700 focus:text-amber-700 hover:font-bold">{{ $breadcrumb['name'] }}</a>
            </li>
            @if (!$loop->last)
                <li>
                    <span class="mx-2 text-amber-500">></span>
                </li>
            @endif
        @endforeach
    </ul>
</nav>
