@props(['links' => [], 'title' => null ])

<nav class="flex justify-between mb-4" aria-label="Breadcrumb">
    <h2 class="text-lg font-bold">{{ $title }}</h2>
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        @foreach($links as $label => $url)
            <li class="inline-flex items-center">
                @if(!$loop->last)
                    <a href="{{ $url }}" class="text-sm text-gray-700 hover:text-blue-600">
                        {{ $label }}
                    </a>
                    <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                @else
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">
                        {{ $label }}
                    </span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
