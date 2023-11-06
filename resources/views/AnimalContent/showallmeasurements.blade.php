<x-app-layout title="Animal Treatments">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <div class="container mx-auto mt-8 p-4 mb-4 dark:bg-gray-800 dark:rounded-lg font-serif bg-white rounded-lg shadow-lg">

        <h1 class="text-4xl font-bold  mb-6 dark:text-gray-200 text-center">
            <a class="hover:text-blue-500" href="{{ route('index') }}">All Animals and Their measurements</a></h1>
        <div class="overflow-x-auto">
            <div class="min-w-full">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th class="border-r px-4 py-3">Animal</th>
                            <th class="border-r px-4 py-3">Animal ID</th>
                            <th class="border-r px-4 py-3">Status</th>
                            <th class="px-4 text-center py-3">Measurements</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="whitespace-nowrap border-r px-4 py-3 dark:border-neutral-500">{{ $animal->name }}</td>
                            <td class="whitespace-nowrap border-r px-4 py-3 dark:border-neutral-500">{{ $animal->internal_id }}</td>
                            <td class="whitespace-nowrap px-4 py-3 dark-border-neutral-500">{{ $animal->status }}</td>
                            <td class="whitespace-nowrap px-4 py-3">
                                @if (isset($animalMeasurements[$animal->id]))
                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th class="border-r px-4 py-2">Date </th>
                                                <th class="border-r px-4 py-2">Weight(kg) </th>
                                                <th class="border-r px-4 py-2">Height(m)</th>
                                                <th class="border-r px-4 py-2">Temp<span class="text-xs  align-top">(°C)</span></th>
                                                <th class="border-r px-4 py-2">fec</th>
                                                <th class="border-r px-4 py-2">resp_rate</th>
                                                <th class="border-r px-4 py-2">systolic</th>
                                                <th class="border-r px-4 py-2">heart_rate</th>
                                                <th class="border-r px-4 py-2">pulse</th>
                                                <th class="border-r px-4 py-2">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($animalMeasurements[$animal->id] as $measurement)
                                            <tr class="border-b dark:border-neutral-500">
                                                <td class="whitespace-nowrap px-4 py-2 dark:border-neutral-500">{{ $measurement->date ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $measurement->weight ?: 'N/A' }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $measurement->height ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $measurement->temp ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $measurement->fec ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $measurement->respiratory_rate ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $measurement->systolic_bp ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $measurement->heart_rate ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $measurement->pulse_oximetry ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2">
                                                    <a href="{{ route('animals.measurementedit', ['animal_id' => $animal->id, 'measurement_id' => $measurement->id]) }}" class="text-blue-600 hover:underline mr-2 print-hidden">Edit</a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <p class="text-gray-500 dark:text-gray-400 text-center">No measurements recorded for this animal.</p>


                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $animals->links() }}
            </div>
        </div>
    </div>











</x-app-layout>

