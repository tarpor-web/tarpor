@extends('layouts.admin')

@section('title', 'Add Product | ' . strtoupper(config('app.name')))



@section('page-content')
    <div class="w-full h-full bg-sky-100 p-4 md:p-8 transition-all duration-300">
        <!-- Breadcrumbs -->
        @include('components.breadcrumbs', [
            'links' => [
                'Dashboard' => route('admin.dashboard'),
                'Products' => '#',
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
                    <x-form.input name="name" id="name" label="Product Name" required />
                    <x-form.input
                        name="slug"
                        id="slug"
                        label="Slug"
                        urlPrefix="{{ config('app.url') . '/product/' }}"
                    />

                    <!-- Price, Sale Price, Cost Price & SKU -->
                    <x-form.input name="price" label="Regular Price" type="number" step="1.00" required />
                    <x-form.input name="sale_price" label="Sale Price" type="number" step="1.00" />

                    <x-form.input name="cost_price" label="Cost Price" type="number" step="1.00" />
{{--                    <x-form.input name="sku" label="SKU" />--}}

                    <!-- Stock & Stock Status -->
                    <x-form.input name="stock_quantity" label="Stock Quantity" type="number" step="1.00" required />
                    <x-form.select
                        name="stock_status"
                        label="Inventory Status"
                        :options="[
                                'in_stock' => 'Available Now',
                                'out_of_stock' => 'Sold Out',
                                'backorder' => 'Pre-Order'
                            ]"
                        required
                    />

                    <!-- Short Description -->
                    <x-form.textarea name="short_description" label="Short Description" />
                    <x-form.textarea name="description" label="Description" required rows="6" />

                    <!-- Brand & Category -->
                    <x-form.select
                        name="brand_id"
                        label="Brand"
                        :options="$brands->pluck('name', 'id')"
                    />

{{--                    <x-form.select--}}
{{--                        name="category_id"--}}
{{--                        label="Category"--}}
{{--                        :options="$categories->pluck('name', 'id')"--}}
{{--                        required--}}
{{--                    />--}}

                    <x-form.category-tree
                        name="category_ids"
                        label="Category"
                        :categories="$categories"
                        :selected="old([])"
                        required
                    />



                    <!-- Attributes -->
                    <x-form.attributes
                        name="specifications"
                        label="Product Specifications"
                    />

                    <!-- Images & Thumbnail -->
                    <x-form.file-upload name="images[]" label="Product Images" multiple />
                    <x-form.file-upload name="thumbnail" label="Thumbnail Image" />

                    <!-- SEO Section -->
                    <x-form.seo />

                    <!-- Status -->
                    <x-form.select
                        name="status"
                        label="Listing Status"
                        :options="[
                                'draft' => 'Unpublished',
                                'published' => 'Live',
                                'archived' => 'Retired'
                            ]"
                        class="mb-4"
                    />
                    <!-- Submit Button -->
                    <div class="col-span-1 lg:col-span-2 text-right">
                        <button type="submit" class="@apply inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Save Product
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to convert name to slug
            function convertToSlug(name) {
                return name.toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')  // Remove non-alphanumeric characters
                    .trim()
                    .replace(/\s+/g, '-')          // Replace spaces with hyphens
                    .replace(/-+/g, '-');          // Remove multiple hyphens
            }

            // When the name field changes
            $('#name').on('input', function() {
                var name = $(this).val();
                var slug = convertToSlug(name);
                $('#slug').val(slug);

                // Check if the slug exists via the API
                checkSlugAvailability(slug);
            });

            // When the slug field changes manually
            $('#slug').on('input', function() {
                var slug = $(this).val();
                checkSlugAvailability(slug);
            });

            // Function to check if slug exists using AJAX
            function checkSlugAvailability(slug) {
                $.ajax({
                    url: '{{ route('api.slug.check') }}',
                    method: 'GET',
                    data: { slug: slug },
                    success: function(response) {
                        if (response.exists) {
                            $('#slug').val(response.suggested); // Show suggested slug
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
