@props(['links' => [], 'title' => null])

<div class="flex items-center justify-between mx-4 mb-6">
    <!-- Left Side: Toggle Button and Title -->
    <div class="flex justify-between items-center">
        <!-- Toggle Button -->
        <button @click="isSidebarCollapsed = false"
                x-show="isSidebarCollapsed"
                x-transition
                class="px-6 rounded-lg text-dark hover:text-white hover:bg-lime-800 mr-1 md:mr-4">
            <x-sidebar.sidebar-toogle-right-icon />
        </button>

        <!-- Title -->
        <h1 class="text-lg lg:text-3xl font-bold text-gray-800">{{ $title }}</h1>
    </div>

    <!-- Right Side: Breadcrumb -->
    <nav class="flex" aria-label="Breadcrumb">
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
</div>
