@extends('layouts.admin')

@section('title', 'Add Product | ' . strtoupper(config('app.name')))

@section('content')
    <div class="container mx-auto p-6">
        <!-- Breadcrumbs -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="ml-72 text-2xl font-semibold text-gray-800">Create New Product</h2>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-700 hover:text-blue-600">Dashboard</a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Create Product</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Form Container -->
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Name & Slug -->
                    <div class="col-span-1">
                        <label for="name" class="block text-sm font-medium text-gray-700">Product Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1">
                        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('slug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price, Sale Price, Cost Price & SKU -->
                    <div class="col-span-1">
                        <label for="price" class="block text-sm font-medium text-gray-700">Price <span class="text-red-500">*</span></label>
                        <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01" min="0" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1">
                        <label for="sale_price" class="block text-sm font-medium text-gray-700">Sale Price</label>
                        <input type="number" name="sale_price" id="sale_price" value="{{ old('sale_price') }}" step="0.01" min="0" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('sale_price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1">
                        <label for="cost_price" class="block text-sm font-medium text-gray-700">Cost Price</label>
                        <input type="number" name="cost_price" id="cost_price" value="{{ old('cost_price') }}" step="0.01" min="0" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('cost_price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1">
                        <label for="sku" class="block text-sm font-medium text-gray-700">SKU <span class="text-red-500">*</span></label>
                        <input type="text" name="sku" id="sku" value="{{ old('sku') }}" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('sku')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Short Description -->
                    <div class="col-span-1 lg:col-span-2">
                        <label for="short_description" class="block text-sm font-medium text-gray-700">Short Description</label>
                        <textarea name="short_description" id="short_description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('short_description') }}</textarea>
                        @error('short_description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Stock & Stock Status -->
                    <div class="col-span-1">
                        <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock Quantity <span class="text-red-500">*</span></label>
                        <input type="number" name="stock_quantity" id="stock_quantity" value="{{ old('stock_quantity') }}" step="1" min="0" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('stock_quantity')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1">
                        <label for="stock_status" class="block text-sm font-medium text-gray-700">Stock Status <span class="text-red-500">*</span></label>
                        <select name="stock_status" id="stock_status" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            <option value="in_stock" {{ old('stock_status') == 'in_stock' ? 'selected' : '' }}>In Stock</option>
                            <option value="out_of_stock" {{ old('stock_status') == 'out_of_stock' ? 'selected' : '' }}>Out of Stock</option>
                            <option value="backorder" {{ old('stock_status') == 'backorder' ? 'selected' : '' }}>Backorder</option>
                        </select>
                        @error('stock_status')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Brand & Category -->
                    <div class="col-span-1">
                        <label for="brand_id" class="block text-sm font-medium text-gray-700">Brand</label>
                        <select name="brand_id" id="brand_id" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @error('brand_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1">
                        <label for="category_id" class="block text-sm font-medium text-gray-700">Category <span class="text-red-500">*</span></label>
                        <select name="category_id" id="category_id" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="col-span-1 lg:col-span-2">
                        <label for="description" class="block text-sm font-medium text-gray-700">Product Description <span class="text-red-500">*</span></label>
                        <textarea name="description" id="description" rows="6" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('description') }}</textarea>
                        @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Attributes -->
                    <div class="col-span-1 lg:col-span-2">
                        <label for="attributes" class="block text-sm font-medium text-gray-700">Attributes</label>
                        <div x-data="{ attributes: [{ key: '', value: '' }] }">
                            <template x-for="(attribute, index) in attributes" :key="index">
                                <div class="flex items-center space-x-4 mb-4">
                                    <input type="text" x-model="attribute.key" :name="'attributes[' + index + '][key]'" placeholder="Attribute Name" class="block w-1/2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <input type="text" x-model="attribute.value" :name="'attributes[' + index + '][value]'" placeholder="Attribute Value" class="block w-1/2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <button type="button" @click="attributes.splice(index, 1)" class="text-red-500 hover:text-red-700 focus:outline-none">Remove</button>
                                </div>
                            </template>
                            <button type="button" @click="attributes.push({ key: '', value: '' })" class="text-blue-500 hover:text-blue-700 focus:outline-none">Add Attribute</button>
                        </div>
                        @error('attributes')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Images & Thumbnail -->
                    <div class="col-span-1 lg:col-span-2">
                        <label for="images" class="block text-sm font-medium text-gray-700">Product Images</label>
                        <input type="file" name="images[]" id="images" multiple class="mt-1 block w-full text-sm text-gray-500 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-lg file:text-sm file:bg-gray-100 file:text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('images')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1 lg:col-span-2">
                        <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail Image</label>
                        <input type="file" name="thumbnail" id="thumbnail" class="mt-1 block w-full text-sm text-gray-500 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-lg file:text-sm file:bg-gray-100 file:text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('thumbnail')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="col-span-1">
                        <label for="status" class="block text-sm font-medium text-gray-700">Product Status <span class="text-red-500">*</span></label>
                        <select name="status" id="status" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                            <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                        </select>
                        @error('status')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- SEO Section -->
                    <div x-data="{ showSeo: false }" class="col-span-1 lg:col-span-2">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">SEO Metadata</h3>

                        <!-- SEO Toggle Button -->
                        <button type="button" @click="showSeo = !showSeo" class="mb-4 inline-flex items-center px-4 py-2 bg-gray-200 text-gray-800 rounded-lg">
                            <span x-text="showSeo ? 'Hide SEO Form' : 'Add SEO Metadata'"></span>
                        </button>

                        <!-- SEO Form (Hidden initially) -->
                        <div x-show="showSeo" x-transition class="space-y-4">
                            <!-- Google Meta Section -->
                            <div class="mb-6">
                                <h4 class="text-lg font-semibold text-gray-800 text-center bg-amber-200 px-2 py-2">Google Meta</h4>
                                <div class="mb-4">
                                    <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta Title</label>
                                    <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title') }}" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    @error('meta_title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta Keywords</label>
                                    <input type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords') }}" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    @error('meta_keywords')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="canonical_url" class="block text-sm font-medium text-gray-700">Canonical URL</label>
                                    <input type="text" name="canonical_url" id="canonical_url" value="{{ old('canonical_url') }}" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    @error('canonical_url')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>


                                <!-- Facebook Meta Section -->
                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 text-center bg-amber-200 px-2 py-2">Facebook Meta</h4>
                                    <div class="mb-4">
                                        <label for="og_title" class="block text-sm font-medium text-gray-700">Open Graph Title</label>
                                        <input type="text" name="og_title" id="og_title" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        @error('og_title')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="og_description" class="block text-sm font-medium text-gray-700">Open Graph Description</label>
                                        <textarea name="og_description" id="og_description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                        @error('og_description')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="og_image" class="block text-sm font-medium text-gray-700">Open Graph Image</label>
                                        <input type="file" name="og_image" id="og_image" class="mt-1 block w-full text-sm text-gray-500 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-lg file:text-sm file:bg-gray-100 file:text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        @error('og_image')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Twitter Meta Section -->
                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 text-center bg-amber-200 px-2 py-2">Twitter Meta</h4>
                                    <div class="mb-4">
                                        <label for="twitter_title" class="block text-sm font-medium text-gray-700">Twitter Title</label>
                                        <input type="text" name="twitter_title" id="twitter_title" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        @error('twitter_title')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="twitter_description" class="block text-sm font-medium text-gray-700">Twitter Description</label>
                                        <textarea name="twitter_description" id="twitter_description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                        @error('twitter_description')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="twitter_image" class="block text-sm font-medium text-gray-700">Twitter Image</label>
                                        <input type="file" name="twitter_image" id="twitter_image" class="mt-1 block w-full text-sm text-gray-500 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-lg file:text-sm file:bg-gray-100 file:text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        @error('twitter_image')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>


                                <!-- Schema Markup Section -->
                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 text-center bg-amber-200 px-2 py-2">Schema Markup</h4>
                                    <div class="mb-4">
                                        <label for="schema_markup" class="block text-sm font-medium text-gray-700">Schema Markup (JSON-LD)</label>
                                        <textarea name="schema_markup" id="schema_markup" rows="6" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                        @error('schema_markup')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    </div>

                                    <!-- Robots Meta Tag Section -->
                                    <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 text-center bg-amber-200 px-2 py-2">Robots Meta Tag</h4>
                                    <div class="mb-4">
                                        <label for="robots" class="block text-sm font-medium text-gray-700">Robots Meta Tag</label>
                                        <input type="text" name="robots" id="robots" class="mt-1 block w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="index, follow">
                                        @error('robots')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- Submit Button -->
                        <div class="col-span-1 lg:col-span-2 text-right">
                            <button type="submit" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Save Product
                            </button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection
