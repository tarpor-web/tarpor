@push('styles')
    <style>
        .tree-node-line::before {
            content: '';
            @apply absolute left-0 top-0 w-px h-full bg-gray-300;
        }
    </style>
@endpush

<div class="tree-node group" style="padding-left: {{ $level * 28 }}px" x-data="{ isOpen: false }">
    <div class="flex items-center justify-between bg-sky-100 p-3 rounded-lg transition-all duration-200 hover:bg-gray-50 shadow-sm hover:shadow-md border border-gray-200 cursor-pointer" @click="isOpen = !isOpen">
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
                    <i class="fas fa-folder-open text-xs text-gray-400"></i>
                </div>
            @endif

            <span class="font-medium text-black text-sm tracking-wide">{{ $category->name }}</span>
        </div>

        <!-- Show number of subcategories for parent categories -->
        <span class="px-2.5 py-1 rounded-full text-xs font-medium
            {{ $category->children->isNotEmpty() ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">
            @if($category->children->isNotEmpty())
                <span class="text-blue-700 font-semibold p-2">{{ $category->children->count() }} </span> Sub  &nbsp; ||
                <span class="text-blue-600 font-semibold p-2"> {{ $category->totalProducts() }} </span>  Items
            @elseif($category->children->isEmpty() && $category->products->count() > 0)
                <span class="text-blue-500 font-medium p-2">{{ $category->products->count() }} </span> Items
            @else
                <span class="bg-amber-100 text-amber-800 font-semibold p-2">No Item</span>
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
