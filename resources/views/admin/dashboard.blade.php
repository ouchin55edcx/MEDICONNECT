<x-app-layout>
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
                        200
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
                        50
                    </div>
                </div>
            </div>

            <div class="relative p-6 rounded-2xl bg-white shadow">
                <div class="space-y-2">
                    <div class="flex items-center space-x-2 text-sm font-medium text-gray-700">
                        <span>Patient</span>
                    </div>

                    <div class="text-3xl">
                        3543
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
                <button type="submit" class="button bg-blue-500 text-white hover:bg-blue-700 px-4 py-2 rounded">
                    Add New Specialty
                </button>
            </form>




            <!-- Displayed Specialties -->
            @foreach ($specialties as $specialty)
            <div class="specialty mt-4 border-t border-gray-300 pt-4">
                <div class="flex justify-between items-center">
                    <p class="text-lg font-semibold">{{ $specialty->specialtyName }}</p>
                    <div class="flex space-x-2">
                        <button class="button bg-yellow-500 text-white hover:bg-yellow-700 px-3 py-1 rounded">
                            Edit
                        </button>
                        <form action="{{ route('specialties.destroy', $specialty) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        
                            <button type="submit" class="button bg-red-500 text-white hover:bg-red-700 px-3 py-1 rounded">
                                Delete
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        @endforeach

        </div>


        {{-- medicament  --}}
        <div class="card bg-white rounded shadow-lg p-8 w-full text-center rounded-2xl ">
            <h2 class="text-2xl font-bold mb-4">Medicament</h2>
            <!-- Add New Specialty Button -->
            <input type="text" placeholder="New Specialty"
                class="input px-4 py-2 border border-gray-300 rounded mr-2">
            <button class="button bg-blue-500 text-white hover:bg-blue-700 px-4 py-2 rounded">
                Add New medicament
            </button>

            <!-- Displayed Specialties -->
            <div class="specialty mt-4 border-t border-gray-300 pt-4">
                <div class="flex justify-between items-center">
                    <p class="text-lg font-semibold">medicament</p>
                    <div class="flex space-x-2">
                        <button class="button bg-yellow-500 text-white hover:bg-yellow-700 px-3 py-1 rounded">
                            Edit
                        </button>
                        <button class="button bg-red-500 text-white hover:bg-red-700 px-3 py-1 rounded">
                            Delete
                        </button>
                    </div>
                </div>
            </div>

            <!-- Add more specialties as needed -->
            <!-- Example:-->
            <div class="specialty mt-4 border-t border-gray-300 pt-4">
                <div class="flex justify-between items-center">
                    <p class="text-lg font-semibold">Dermatology</p>
                    <div class="flex space-x-2">
                        <button class="button bg-yellow-500 text-white hover:bg-yellow-700 px-3 py-1 rounded">
                            Edit
                        </button>
                        <button class="button bg-red-500 text-white hover:bg-red-700 px-3 py-1 rounded">
                            Delete
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
