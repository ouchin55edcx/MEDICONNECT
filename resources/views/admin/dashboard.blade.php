<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
{{-- @dd($medicaments) --}}

<body><x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        {{-- statistic --}}
        <div class="bg-gray-100 ">
            <div class="grid gap-4 lg:gap-8 md:grid-cols-3 p-8 pt-20">
                <div class="relative p-6 rounded-2xl bg-white shadow">
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2 text-sm font-medium text-gray-700">
                            <span>Medicament</span>
                        </div>

                        <div class="text-3xl">
                            {{ $totalMedicament }}
                        </div>

                        <div class="flex items-center space-x-1 text-sm font-medium text-green-600">
                        </div>
                    </div>
                </div>

                <div class="relative p-6 rounded-2xl bg-white shadow">
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2 text-sm font-medium text-gray-700">
                            <span>Specialty</span>
                        </div>

                        <div class="text-3xl">
                            {{ $totalSpecialties }}
                        </div>
                    </div>
                </div>

                <div class="relative p-6 rounded-2xl bg-white shadow">
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2 text-sm font-medium text-gray-700">
                            <span>Users</span>
                        </div>

                        <div class="text-3xl">
                            {{ $totalUsers }}
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex flex-col gap-10 m-8">

            {{-- specialty  --}}
            <div class="card bg-white rounded shadow-lg p-8 w-full text-center rounded-2xl">
                <h2 class="text-2xl font-bold mb-4">Specialties</h2>

                <!-- Add New Specialty Section -->
                <form id="addSpecialtyForm" action="{{ route('addSpecialty') }}" method="POST" class="mb-4">
                    @csrf
                    <input type="text" name="newSpecialty" placeholder="New Specialty"
                        class="input px-4 py-2 border border-gray-300 rounded mr-2">
                    <button class="button bg-blue-500 text-white hover:bg-blue-700 px-4 py-2 rounded">
                        Add New specialty
                    </button>
                </form>
                <!-- Displayed Specialties -->
                @foreach ($specialties as $specialty)
                    <div x-data="{ showModal: false, editedSpecialty: '{{ $specialty->specialtyName }}' }">
                        <!-- Displayed Specialties -->
                        <div class="specialty mt-4 border-t border-gray-300 pt-4">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold">{{ $specialty->specialtyName }}</p>
                                <div class="flex space-x-2">
                                    <button @click="showModal = true"
                                        class="button bg-yellow-500 text-white hover:bg-yellow-700 px-3 py-1 rounded">
                                        Edit
                                    </button>
                                    <form action="{{ route('specialties.destroy', $specialty) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="button bg-red-500 text-white hover:bg-red-700 px-3 py-1 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div x-show="showModal" class="fixed inset-0 z-50 overflow-auto bg-smoke">
                            <div x-show="showModal" class="fixed inset-0 transition-opacity"
                                x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                @click="showModal = false"></div>

                            <div x-show="showModal" class="fixed inset-0 flex items-center justify-center">
                                <div class="bg-white p-8 mx-4 rounded-lg max-w-md w-full">
                                    <h2 class="text-2xl font-bold mb-4">Edit Specialty</h2>
                                    <form action="{{ route('specialties.update', $specialty) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <input type="text" name="specialtyName" x-model="editedSpecialty"
                                            class="input border border-gray-300 rounded mb-4 w-full px-3 py-2">

                                        <div class="flex justify-end">
                                            <button @click="showModal = false"
                                                class="button bg-gray-500 text-white hover:bg-gray-700 px-3 py-1 rounded mr-2">
                                                Cancel
                                            </button>
                                            <button type="submit"
                                                class="button bg-blue-500 text-white hover:bg-blue-700 px-3 py-1 rounded">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


            {{-- medicament  --}}
            <div class="card bg-white rounded shadow-lg p-8 w-full text-center rounded-2xl ">
                <h2 class="text-2xl font-bold mb-4">Medicament</h2>
                <!-- Add New Specialty Button -->
                <form id="addMedicamentForm" action="{{ route('addMedicament') }}" method="POST" class="mb-4">
                    @csrf
                    <input type="text" name="newMedicament" placeholder="New Medicament"
                        class="input px-4 py-2 border border-gray-300 rounded mr-2">
                    <button class="button bg-blue-500 text-white hover:bg-blue-700 px-4 py-2 rounded">
                        Add New Medicament
                    </button>
                </form>

                @foreach ($medicaments as $medicament)
                    <div x-data="{ showModal: false, editedMedicament: '{{ $medicament->medicamentName }}' }">
                        <!-- Displayed Medicaments -->
                        <div class="medicament mt-4 border-t border-gray-300 pt-4">
                            <div class="flex justify-between items-center">
                                <p class="text-lg font-semibold">{{ $medicament->medicamentName }}</p>
                                <div class="flex space-x-2">
                                    <button @click="showModal = true"
                                        class="button bg-yellow-500 text-white hover:bg-yellow-700 px-3 py-1 rounded">
                                        Edit
                                    </button>
                                    <form action="{{ route('medicaments.destroy', $medicament) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="button bg-red-500 text-white hover:bg-red-700 px-3 py-1 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div x-show="showModal" class="fixed inset-0 z-50 overflow-auto bg-smoke">
                                <div x-show="showModal" class="fixed inset-0 transition-opacity"
                                    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    @click="showModal = false"></div>

                                <div x-show="showModal" class="fixed inset-0 flex items-center justify-center">
                                    <div class="bg-white p-8 mx-4 rounded-lg max-w-md w-full">
                                        <h2 class="text-2xl font-bold mb-4">Edit Medicament</h2>
                                        <form action="{{ route('medicaments.update', $medicament) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <input type="text" name="medicamentName" x-model="editedMedicament"
                                                class="input border border-gray-300 rounded mb-4 w-full px-3 py-2">

                                            <div class="flex justify-end">
                                                <button @click="showModal = false"
                                                    class="button bg-gray-500 text-white hover:bg-gray-700 px-3 py-1 rounded mr-2">
                                                    Cancel
                                                </button>
                                                <button type="submit"
                                                    class="button bg-blue-500 text-white hover:bg-blue-700 px-3 py-1 rounded">
                                                    Update
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </x-app-layout>

    <script>
        function updateSpecialty() {
            console.log("Updating specialty:", this.editedSpecialty);
            this.showModal = false;
        }
    </script>
