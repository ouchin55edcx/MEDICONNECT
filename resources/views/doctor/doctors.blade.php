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

        <div class="h-full w-full flex overflow-hidden antialiased text-gray-800 bg-white">

            <main class="flex-grow flex min-h-0 border-t">
                <!-- Medication and Appointments Section -->
                <div class="container mx-auto p-4">
                    <!-- Appointments Section -->
                    <div class="bg-white rounded-lg shadow p-4 mb-4">
                        <h2 class="text-2xl font-semibold mb-4">Appointments</h2>
                        <!-- Display user-selected appointment times -->
                        <ul class="list-disc pl-4">
                            <li class="text-gray-800">10:00 AM - John Doe</li>
                            <li class="text-gray-800">02:30 PM - Jane Smith</li>
                            <!-- Add more appointments dynamically based on user choices -->
                        </ul>
                    </div>
                    <!-- Medication List -->
                    <div class="bg-white rounded-lg shadow p-4 mb-4">
                        <h2 class="text-2xl font-semibold mb-4">Medication List</h2>
                        <!-- Add new medication form -->
                        <form action="{{ route('addMedication') }}" method="post" class="mt-4">
                            @csrf
                            <input type="text" name="newMedicament" placeholder="Medication name"
                                class="w-full p-2 border rounded">
                            <button type="submit" class="my-2 text-white px-4 py-2 rounded bg-red-500">Add
                                Medication</button>
                        </form>

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
                                @forelse ($medicaments as $medicament)
                                    <tr>
                                        <td class="py-2 px-4 border-b text-center">{{ $medicament->medicamentName }}
                                        </td>
                                        <td class="py-2 px-4 border-b text-center">100 mg</td>
                                        <td class="py-2 px-4 border-b text-center">Daily</td>
                                        <td class="py-2 px-4 border-b text-center">
                                            <button class="text-blue-500 hover:underline mr-2">Edit</button>
                                            <button class="text-red-500 hover:underline">Delete</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="py-2 px-4 border-b text-center">No medications
                                            available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tickets Updates Section -->
                <section class="flex flex-col p-4 w-full max-w-sm flex-none bg-gray-100 min-h-0 overflow-auto">
                    <h1 class="font-semibold mb-3">
                        Patient History
                    </h1>
                    <ul>
                        <li>
                            <article tabindex="0"
                                class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                                <span class="flex-none pt-1 pr-2">
                                    <img class="h-8 w-8 rounded-md"
                                        src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                                </span>
                                <div class="flex-1">
                                    <header class="mb-1">
                                        Tarun T <span class="font-semibold">commented</span> on
                                        <h1 class="inline">"RE: WPMS issue".</h1>
                                    </header>
                                    <p class="text-gray-600">
                                        Hi Mazhar, Please note this issue comes when the user is not
                                        closing or logout sy…
                                    </p>
                                    <footer class="text-gray-500 mt-2 text-sm">
                                        Friday 22:16
                                    </footer>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article tabindex="0"
                                class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
                                <span class="flex-none pt-1 pr-2">
                                    <img class="h-8 w-8 rounded-md"
                                        src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
                                </span>
                                <div class="flex-1">
                                    <header class="mb-1">
                                        Tarun T <span class="font-semibold">commented</span> on
                                        <h1 class="inline">"RE: WPMS issue".</h1>
                                    </header>
                                    <p class="text-gray-600">
                                        Hi Mazhar, Please note this issue comes when the user is not
                                        closing or logout sy…
                                    </p>
                                    <footer class="text-gray-500 mt-2 text-sm">
                                        Friday 22:16
                                    </footer>
                                </div>
                            </article>
                        </li>
                    </ul>
                </section>
            </main>
        </div>


    </x-app-layout>
