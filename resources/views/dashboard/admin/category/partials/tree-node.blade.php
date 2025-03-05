@push('styles')
    <style>
        .tree-node-line::before {
            content: '';
            @apply absolute left-0 top-0 w-px h-full bg-gray-200;
        }
    </style>
@endpush

<div class="tree-node group" style="padding-left: {{ $level * 28 }}px" x-data="{ isOpen: false }">
    <div class="flex items-center justify-between bg-white p-3 rounded-lg transition-all duration-200 hover:bg-gray-50 shadow-sm hover:shadow-md border border-gray-100 cursor-pointer" @click="isOpen = !isOpen">
        <div class="flex items-center space-x-2">
            @if($category->children->isNotEmpty())
                <button
                    @click.stop="isOpen = !isOpen"
                    class="w-6 h-6 flex items-center justify-center rounded-full bg-white shadow-sm hover:bg-gray-100 transition-colors border border-gray-200"
                >
                    <i
                        class="text-xs text-gray-600 fas transition-transform"
                        :class="isOpen ? 'fa-minus' : 'fa-plus'"
                        x-bind:style="isOpen ? 'transform: rotate(180deg)' : ''"
                    ></i>
                </button>
            @else
                <div class="w-6 h-6 flex items-center justify-center">
                    <i class="fas fa-folder-open text-xs text-gray-300"></i>
                </div>
            @endif

            <span class="font-medium text-gray-700 text-sm tracking-wide">{{ $category->name }}</span>
        </div>

        <!-- Show number of subcategories for parent categories -->
        <span class="px-2.5 py-1 rounded-full text-xs font-medium
            {{ $category->children->isNotEmpty() ? 'bg-blue-50 text-blue-700' : 'bg-gray-50 text-gray-700' }}">
            @if($category->children->isNotEmpty())
                <span class="text-red-700 font-semibold p-2">{{ $category->children->count() }} </span> Sub  &nbsp; ||
                <span class="text-red-600 font-semibold p-2"> {{ $category->totalProducts() }} </span>  Items
            @elseif($category->children->isEmpty() && $category->products->count() > 0)
                <span class="text-red-500 font-medium p-2">{{ $category->products->count() }} </span> Items
            @else
                <span class="bg-amber-100 font-semibold p-2">No Item</span>
            @endif
        </span>

    </div>

    @if($category->children->isNotEmpty())
        <div
            x-show="isOpen"
            x-collapse
            class="tree-children ml-6 mt-2 relative space-y-2 tree-node-line"
        >
            @foreach($category->children as $child)
                @include('dashboard.admin.category.partials.tree-node', [
                    'category' => $child,
                    'level' => $level + 1
                ])
            @endforeach
        </div>
    @endif
</div>


{{--    <!-- Show number of products for the last subcategory -->--}}
{{--    @if($category->children->isEmpty() && $category->products->count() > 0)--}}
{{--        <div class="mt-2 text-xs text-gray-600">--}}
{{--            <span class="font-medium">Products: </span>{{ $category->products->count() }} Products--}}
{{--        </div>--}}
{{--    @endif--}}

