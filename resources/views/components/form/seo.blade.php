@props(['showSeo' => false])

<div x-data="{ showSeo: @json($showSeo) }" class="col-span-1 lg:col-span-2">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">SEO Metadata</h3>

    <button type="button" @click="showSeo = !showSeo" class="mb-4 inline-flex items-center px-4 py-2 bg-gray-200 text-gray-800 rounded-lg">
        <span x-text="showSeo ? 'Hide SEO Form' : 'Add SEO Metadata'"></span>
    </button>

    <div x-show="showSeo" x-transition class="space-y-4">
        <!-- Google Meta -->
        <div class="mb-6">
            <h4 class="text-lg font-semibold text-gray-800 text-center bg-amber-200 px-2 py-2">Google Meta</h4>
            <x-form.input name="meta_title" label="Meta Title" />
            <x-form.textarea name="meta_description" label="Meta Description" />
            <x-form.input name="meta_keywords" label="Meta Keywords" />
            <x-form.input name="canonical_url" label="Canonical URL" />
        </div>

        <!-- Facebook Meta -->
        <div class="mb-6">
            <h4 class="text-lg font-semibold text-gray-800 text-center bg-amber-200 px-2 py-2">Facebook Meta</h4>
            <x-form.input name="og_title" label="Open Graph Title" />
            <x-form.textarea name="og_description" label="Open Graph Description" />
            <x-form.file-upload name="og_image" label="Open Graph Image" />
        </div>

        <!-- Twitter Meta -->
        <div class="mb-6">
            <h4 class="text-lg font-semibold text-gray-800 text-center bg-amber-200 px-2 py-2">Twitter Meta</h4>
            <x-form.input name="twitter_title" label="Twitter Title" />
            <x-form.textarea name="twitter_description" label="Twitter Description" />
            <x-form.file-upload name="twitter_image" label="Twitter Image" />
        </div>

        <!-- Schema & Robots -->
        <div class="mb-6">
            <x-form.textarea name="schema_markup" label="Schema Markup (JSON-LD)" rows="6" />
            <x-form.input name="robots" label="Robots Meta Tag" value="index, follow" />
        </div>
    </div>
</div>
