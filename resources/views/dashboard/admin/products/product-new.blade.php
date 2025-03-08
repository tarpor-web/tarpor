@extends('layouts.admin')

@section('title', 'Add Product | ' . strtoupper(config('app.name')))



@section('page-content')
    <div class="w-full h-full bg-sky-100 p-4 md:p-8 transition-all duration-300">
        <!-- Breadcrumbs -->
        @include('components.breadcrumbs', [
            'links' => [
                'Dashboard' => route('admin.dashboard'),
                'Products' => route('product.index'),
                'Create Product' => null
            ],
             'title' => "Create Product"
        ])

        <!-- Form Container -->
        <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-8">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Name & Slug -->
                    <x-form.input name="name" id="name" label="Product Name" value="{{ old('name') }}" required />
                    <x-form.input
                        name="slug"
                        id="slug"
                        label="Slug"
                        value="{{ old('slug') }}"
                        urlPrefix="{{ config('app.url') . '/product/' }}"
                    />

                    <!-- Price, Sale Price, Cost Price & SKU -->
                    <x-form.input name="price" label="Regular Price" type="number" step="1.00" value="{{ old('price') }}" required />
                    <x-form.input name="sale_price" label="Sale Price" type="number" step="1.00" value="{{ old('sale_price') }}" />
                    <x-form.input name="cost_price" label="Cost Price" type="number" step="1.00" value="{{ old('cost_price') }}" />
                    <x-form.input name="sku" label="SKU" value="{{ old('sku') }}" />

                    <!-- Stock & Stock Status -->
                    <x-form.input name="stock_quantity" label="Stock Quantity" type="number" step="1.00" value="{{ old('stock_quantity') }}" required />
                    <x-form.select
                        name="stock_status"
                        label="Inventory Status"
                        :options="[
                            'in_stock' => 'Available Now',
                            'out_of_stock' => 'Sold Out',
                            'backorder' => 'Pre-Order'
                        ]"
                        selected="{{ old('stock_status') }}"
                        required
                    />

                    <!-- Short Description -->
                    <x-form.textarea name="short_description" label="Short Description">{{ old('short_description') }}</x-form.textarea>
                    <x-form.textarea name="description" label="Description" required rows="6">{{ old('description') }}</x-form.textarea>

                    <!-- Brand & Category -->
                    <x-form.select
                        name="brand_id"
                        label="Brand"
                        :options="$brands->pluck('name', 'id')"
                        selected="{{ old('brand_id') }}"
                    />

                    <x-form.category-tree
                        name="category_ids"
                        label="Category"
                        :categories="$categories"
                        :selected="old('category_ids', [])"
                        required
                    />

                    <!-- Images & Thumbnail -->
                    <x-form.file-upload
                        name="images[]"
                        label="Product Images"
                        uploadLabel="Upload Product Images"
                        ManyImagesInput="true"
                        multiple
                        description="(Upload multiple images)"
                    />
                    <x-form.file-upload name="thumbnail" label="Thumbnail Image" uploadLabel="Upload Thumbnail Image" isSingleImage="true" />

                    <!-- SEO Section -->
                    <x-form.seo :seo="null" />

                    <!-- Status -->
                    <x-form.select
                        name="status"
                        label="Listing Status"
                        :options="[
                            'draft' => 'Unpublished',
                            'published' => 'Live',
                            'archived' => 'Retired'
                        ]"
                        selected="{{ old('status', 'draft') }}"
                        class="mb-4"
                    />

                    <!-- Submit Button -->
                    <div class="col-span-1 lg:col-span-2 text-right">
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                            Create Product
                        </button>
                    </div>
                </div>
            </form>
        </div>
@endsection
@push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                function convertToSlug(name) {
                    return name.toLowerCase()
                        .replace(/[^a-z0-9\s-]/g, '')
                        .trim()
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-');
                }

                $('#name').on('input', function() {
                    var name = $(this).val();
                    var slug = convertToSlug(name);
                    $('#slug').val(slug);
                    checkSlugAvailability(slug);
                });

                $('#slug').on('input', function() {
                    checkSlugAvailability($(this).val());
                });

                function checkSlugAvailability(slug) {
                    $.ajax({
                        url: '{{ route('api.slug.check') }}',
                        method: 'GET',
                        data: { slug: slug },
                        success: function(response) {
                            if (response.exists) {
                                $('#slug').val(response.suggested);
                            }
                        },
                        error: function() {
                            console.log('Error checking slug');
                        }
                    });
                }
            });
        </script>
@endpush

