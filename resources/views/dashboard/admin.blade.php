@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6">My Profile</h1>

        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Information</h2>
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-2">Password</h3>
                <h4 class="text-md font-medium mb-2">Legal Documents</h4>
                <p class="text-gray-600 mb-2"><strong>Personal information</strong></p>
                <p class="text-gray-600 mb-2">Email address <span class="text-red-500">*</span></p>
                <p class="text-gray-600 mb-4">admin@support.com</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700">First name <span class="text-red-500">*</span></label>
                        <p class="text-gray-600">Mohammad Parvar-Uri-Rahman</p>
                    </div>
                    <div>
                        <label class="block text-gray-700">Last name <span class="text-red-500">*</span></label>
                        <p class="text-gray-600">Pisu</p>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Phone number <span class="text-red-500">*</span></label>
                    <p class="text-gray-600">+860 1551 805527</p>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Company information</h2>
            <div class="mb-6">
                <p class="text-gray-600 mb-2"><strong>Company / Organization</strong></p>
                <p class="text-gray-600 mb-2">TARPOR</p>
                <p class="text-gray-600 mb-2">Street address <span class="text-red-500">*</span></p>
                <p class="text-gray-600 mb-4">House Of, East Midlands, Uttara</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700">ZIP code <span class="text-red-500">*</span></label>
                        <p class="text-gray-600">1230</p>
                    </div>
                    <div>
                        <label class="block text-gray-700">City <span class="text-red-500">*</span></label>
                        <p class="text-gray-600">Dinka</p>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Country <span class="text-red-500">*</span></label>
                    <p class="text-gray-600">Bangladesh</p>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Newsletter</h2>
            <div class="flex items-center">
                <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                <label class="ml-2 text-gray-700">Send me marketing tips and news about Brovo updates.</label>
            </div>
        </div>

        <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Update my profile</button>
    </div>
@endsection
