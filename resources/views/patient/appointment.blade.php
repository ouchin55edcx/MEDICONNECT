@extends('layouts.comptn')
@section('content')
    <div class="mx-14 mt-10 border-2 border-blue-400 rounded-lg">
        <div class="mt-10 text-center font-bold">Contact Us</div>
        <div class="mt-3 text-center text-4xl font-bold">Make an Appointment</div>
        <div class="p-8">
            <div class="flex gap-4">
                <!-- Select Type of Appointment -->
                <select name="appointmentType" id="appointmentType"
                    class="mt-1 block w-full rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                    <option value="simple">Simple Appointment</option>
                    <option value="emergency">Emergency Appointment</option>
                </select>
            </div>
            <div class="my-6 flex gap-4">
                <!-- Select Specialty -->
                <select name="specialty" id="specialty"
                    class="block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                    <option value="">Select Specialty</option>
                    <!-- Add specialties based on your data -->
                    <option value="cardiology">Cardiology</option>
                    <option value="orthopedics">Orthopedics</option>
                    <!-- Add more specialties as needed -->
                </select>
                <!-- Select Doctor -->
                <select name="doctor" id="doctor"
                    class="block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                    <option value="">Select Doctor</option>
                    <!-- Add doctors based on your data -->
                    <!-- Doctors for Cardiology -->
                    <option value="dr-smith">Dr. Smith</option>
                    <option value="dr-jones">Dr. Jones</option>
                    <!-- Doctors for Orthopedics -->
                    <option value="dr-white">Dr. White</option>
                    <option value="dr-black">Dr. Black</option>
                    <!-- Add more doctors as needed -->
                </select>
                <!-- Select Time -->
                <select name="time" id="time"
                    class="block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                    <option value="">Select Time</option>
                    <!-- Add available times based on your data -->
                    <option value="9:00">9:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <!-- Add more times as needed -->
                </select>
            </div>
            <div class="">
                <!-- Message Textarea -->
                <textarea name="message" id="message" cols="30" rows="10"
                    class="mb-10 h-40 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-500"
                    placeholder="Message"></textarea>
            </div>
            <div class="text-center">
                <!-- Button for Booking Appointment -->
                <a href="#" class="cursor-pointer rounded-lg bg-blue-700 px-8 py-5 text-sm font-semibold text-white"
                    onclick="bookAppointment()">Book Appointment</a>
            </div>
        </div>
    </div>


    <!-- Add this script within the <head> tag or at the end of the <body> tag -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the elements
            var appointmentType = document.getElementById('appointmentType');
            var doctorField = document.getElementById('doctor');
            var timeField = document.getElementById('time');

            // Add change event listener to appointmentType select
            appointmentType.addEventListener('change', function() {
                // Check if the selected appointment type is 'emergency'
                var isEmergency = appointmentType.value === 'emergency';

                // Hide or show doctor and time fields based on the appointment type
                doctorField.style.display = isEmergency ? 'none' : 'block';
                timeField.style.display = isEmergency ? 'none' : 'block';
            });
        });
    </script>
@endsection
