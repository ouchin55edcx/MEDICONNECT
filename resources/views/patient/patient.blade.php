@extends('layouts.comptn')

@section('content')
    <section class=" py-16 md:py-32"
        style="background-image: url('storage/images/pexels-karolina-grabowska-4386470.jpg'); background-size: cover; background-position: center;">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h1 class="text-white font-bold text-4xl md:text-6xl leading-tight mb-6">Welcome to our <br>Colorful World</h1>
            <p class="text-white text-lg md:text-2xl mb-12">Explore a World </p>
            <a href="#"
                class="hover:bg-blue-700 bg-white text-amber-500 font-bold py-2 px-10 m-4 rounded-full  transition duration-200">Make
                an Appointment
            </a>
        </div>
    </section>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <!-- Doctor Reviews Section -->
    <section class="bg-white px-4 py-12 md:py-24">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="font-black text-black text-center text-3xl leading-none uppercase max-w-2xl mx-auto mb-12">
                What Listeners Are Saying
            </h2>
            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4 relative">
                <!-- Doctor Review 1 -->
                <a href="{{ route('patient.doctor_profile') }}" class="bg-gray-200 rounded-lg p-8 text-center md:w-1/3">
                    <img src="storage/images/pexels-anna-shvets-4167541.jpg" alt="Dr. John Doe"
                        class="w-full h-48 object-cover mb-4 rounded-md">
                    <p class="font-bold uppercase">Dr. John Doe</p>
                    <p class="text-xl font-light italic text-gray-700">
                        This doctor is amazing! The expertise and care provided are exceptional. Highly recommended.
                    </p>
                    <div class="flex items-center justify-center space-x-2 mt-4">
                        <!-- Rating Stars -->
                        <!-- Add your rating SVGs here -->
                    </div>
                </a>
                <!-- Doctor Review 2 -->
                <a href="{{ route('patient.doctor_profile') }}" class="bg-gray-200 rounded-lg p-8 text-center md:w-1/3">
                    <img src="storage/images/pexels-anna-shvets-4167541.jpg" alt="Dr. Jane Smith"
                        class="w-full h-48 object-cover mb-4 rounded-md">
                    <p class="font-bold uppercase">Dr. Jane Smith</p>
                    <p class="text-xl font-light italic text-gray-700">
                        Dr. Smith is a brilliant professional. The dedication to patient well-being is truly commendable.
                    </p>
                    <div class="flex items-center justify-center space-x-2 mt-4">
                        <!-- Rating Stars -->
                        <!-- Add your rating SVGs here -->
                    </div>
                </a>
                <!-- Doctor Review 3 -->
                <a href="{{ route('patient.doctor_profile') }}" class="bg-gray-200 rounded-lg p-8 text-center md:w-1/3">
                    <img src="storage/images/pexels-anna-shvets-4167541.jpg" alt="Dr. Emily Johnson"
                        class="w-full h-48 object-cover mb-4 rounded-md">
                    <p class="font-bold uppercase">Dr. Emily Johnson</p>
                    <p class="text-xl font-light italic text-gray-700">
                        Dr. Johnson is a fantastic doctor. Her professionalism and genuine concern for patients make her an
                        outstanding choice for medical care.
                    </p>
                    <div class="flex items-center justify-center space-x-2 mt-4">
                        <!-- Rating Stars -->
                        <!-- Add your rating SVGs here -->
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
