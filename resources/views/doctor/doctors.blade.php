<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body><x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <div class="container mx-auto p-4">

            <!-- Medication List -->
            <div class="bg-white rounded-lg shadow p-4 mb-4">
                <h2 class="text-xl font-semibold mb-4">Medication List</h2>
                <!-- Medication Table -->
                <table class="min-w-full border rounded">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4 border-b">Medication Name</th>
                            <th class="py-2 px-4 border-b">Dosage</th>
                            <th class="py-2 px-4 border-b">Frequency</th>
                            <th class="py-2 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Medication Row (Example) -->
                        <tr>
                            <td class="py-2 px-4 border-b">Aspirin</td>
                            <td class="py-2 px-4 border-b">100 mg</td>
                            <td class="py-2 px-4 border-b">Daily</td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-blue-500 hover:underline mr-2">Edit</button>
                                <button class="text-red-500 hover:underline">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows dynamically based on your data -->
                    </tbody>
                </table>
                
                <!-- Add new medication form -->
                <form class="mt-4">
                    <input type="text" placeholder="Medication name" class="w-full p-2 border rounded">
                    <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add
                        Medication</button>
                </form>
            </div>
            <div class="flex h-auto gap-10">
                <!-- Sidebar -->
                <aside class="border rounded p-4 bg-gray-100">
                    <h1 class="text-2xl font-bold mb-6 text-black">Availability Patient</h1>
                    <!-- Static data for available patients -->
                    <div class="mb-4 bg-green-100 p-8">
                        <p class="text-lg font-semibold mb-2">Patient: Jane Smith</p>
                        <p class="text-gray-600">Diagnosis: Diabetes</p>
                        <p class="text-gray-600">Medications: Metformin, Insulin</p>
                        <p class="text-gray-600">Last Visit: 2024-02-12</p>
                    </div>
                    <div class="mb-4 mb-4 bg-green-100 p-8">
                        <p class="text-lg font-semibold mb-2">Patient: Mike Johnson</p>
                        <p class="text-gray-600">Diagnosis: Asthma</p>
                        <p class="text-gray-600">Medications: Albuterol, Prednisone</p>
                        <p class="text-gray-600">Last Visit: 2024-02-15</p>
                    </div>
                    <!-- Add more static patient data as needed -->
                </aside>

                <!-- Patient Records Content -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4 border w-full">
                    <!-- Title for not available patients -->
                    <div class="col-span-full mb-4">
                        <h1 class="text-2xl font-bold mb-2 text-gray-800">Not Available Patients</h1>
                        <p class="text-gray-600">There are no patients currently available.</p>
                    </div>

                    <!-- Patient Record Card (Example) -->
                    <div class="border rounded p-4 bg-gray-100">
                        <p class="text-lg font-semibold mb-2">Patient: John Doe</p>
                        <p class="text-gray-600">Diagnosis: Hypertension</p>
                        <p class="text-gray-600">Medications: Lisinopril, Amlodipine</p>
                        <p class="text-gray-600">Last Visit: 2024-02-10</p>
                        <!-- Certificate status -->
                        <div class="mt-4">
                            <span class="text-sm font-semibold">Certificate:</span>
                            <span class="text-green-500">Available</span>
                        </div>
                        <!-- Certificate button -->
                        <button class="mt-2 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Generate
                            Certificate
                        </button>
                    </div>
                    <!-- Add more cards dynamically based on your data -->
                </div>
            </div>
            <!-- Certificate Popup -->
            <div id="certificatePopup"
                class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
                <div class="bg-white p-4 rounded shadow-md">
                    <h3 class="text-lg font-semibold mb-2">Certificate for John Doe</h3>
                    <!-- Additional Information (Doctor's Details) -->
                    <div class="mb-4">
                        <label for="doctorName" class="block text-sm font-medium text-gray-700">Doctor's Name:</label>
                        <input type="text" id="doctorName" name="doctorName" class="mt-1 p-2 border rounded w-full"
                            placeholder="Dr. Example Doctor">
                    </div>
                    <div class="mb-4">
                        <label for="doctorSpecialty" class="block text-sm font-medium text-gray-700">Specialty:</label>
                        <input type="text" id="doctorSpecialty" name="doctorSpecialty"
                            class="mt-1 p-2 border rounded w-full" placeholder="Cardiologist">
                    </div>
                    <!-- Certificate Content -->
                    <label for="certificateContent" class="block text-sm font-medium text-gray-700">Certificate
                        Content:</label>
                    <textarea id="certificateContent" rows="5" class="w-full p-2 border rounded mb-2"
                        placeholder="Write certificate content here..."></textarea>
                    <!-- Buttons (Save and Cancel) -->
                    <div class="flex justify-between">
                        <button id="cancelCertificate"
                            class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancel</button>
                        <button id="saveCertificate"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save
                            Certificate</button>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const availabilityStatus = document.getElementById('availabilityStatus');
                    const toggleAvailabilityButton = document.getElementById('toggleAvailability');
                    const availablePatientsList = document.getElementById('availablePatientsList');

                    toggleAvailabilityButton.addEventListener('click', function() {
                        const currentStatus = availabilityStatus.textContent;
                        const newStatus = currentStatus === 'Available' ? 'Not Available' : 'Available';
                        availabilityStatus.textContent = newStatus;

                        if (newStatus === 'Available') {
                            const patientName = "John Doe"; // Replace with the actual patient name
                            const listItem = document.createElement('li');
                            listItem.textContent = patientName;
                            availablePatientsList.appendChild(listItem);
                        } else {
                            // Remove patient from the list if not available
                            availablePatientsList.innerHTML = "";
                        }
                    });
                });
            </script>



    </x-app-layout>
