@extends('layouts.comptn')
@section('content')
    <section class="container mx-auto mt-8">
        <div class="flex">
            <div class="w-1/3 pr-8">
                <!-- Doctor Image -->
                <img src="storage/images/pexels-anna-shvets-3846009.jpg" alt="Dr. John Doe" class="w-60 h-auto rounded-full">
            </div>
            <div class="w-2/3">
                <!-- Doctor Details -->
                <h2 class="text-2xl font-semibold mb-4">About Dr. John Doe</h2>
                <p class="text-gray-700">
                    Dr. John Doe is a dedicated and experienced professional in the field of [specialty]. With [number]
                    years of experience, Dr. Doe has been providing top-notch medical care to patients. Lorem ipsum dolor
                    sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-8">
        <!-- Patient Comments Section -->
        <h2 class="text-2xl font-semibold mb-4">Patient Comments</h2>
        <div class="bg-white p-4 rounded-md shadow-md">
            <!-- Add a form for patients to write comments -->
            <form>
                <label for="comment" class="block text-sm font-medium text-gray-700">Write your comment:</label>
                <textarea id="comment" name="comment" rows="4"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md bg-white shadow-sm focus:outline-none focus:border-sky-500 focus:ring focus:ring-sky-200"></textarea>
                <button type="submit"
                    class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">Submit
                    Comment</button>
            </form>

            <!-- Display existing comments -->
            <div class="mt-8">
                <h3 class="text-xl font-semibold mb-2">Previous Comments:</h3>
                <!-- Display comments dynamically (replace with actual data) -->
                <div class="border-t border-gray-300 pt-2">
                    <p class="text-gray-700">"Great doctor! Highly recommended."</p>
                    <p class="text-gray-500 text-sm">- Patient1</p>
                </div>
                <div class="border-t border-gray-300 pt-2">
                    <p class="text-gray-700">"Dr. Doe is very caring and knowledgeable."</p>
                    <p class="text-gray-500 text-sm">- Patient2</p>
                </div>
            </div>
        </div>
    </section>
@endsection
