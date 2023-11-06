<x-app-layout title="Animal Treatments">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <div class="container mx-auto mt-8 p-4 mb-4 dark:bg-gray-800 dark:rounded-lg font-serif bg-white rounded-lg shadow-lg">

        <h1 class="text-4xl font-bold  mb-6 dark:text-gray-200 text-center">
            <a class="hover:text-blue-500" href="{{ route('index') }}">All Animals and Their Feedings</a></h1>
        <div class="overflow-x-auto">
            <div class="min-w-full">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th class="border-r px-4 py-3">Animal</th>
                            <th class="border-r px-4 py-3">Animal ID</th>
                            <th class="border-r px-4 py-3">Status</th>
                            <th class="px-4 text-center py-3">Feedings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="whitespace-nowrap border-r px-4 py-3 dark:border-neutral-500">{{ $animal->name }}</td>
                            <td class="whitespace-nowrap border-r px-4 py-3 dark:border-neutral-500">{{ $animal->internal_id }}</td>
                            <td class="whitespace-nowrap px-4 py-3 dark-border-neutral-500">{{ $animal->status }}</td>
                            <td class="whitespace-nowrap px-4 py-3">
                                @if (isset($animalFeedings[$animal->id]))
                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th class="border-r px-4 py-2">Created At </th>
                                                <th class="border-r px-4 py-2">Estimated Cost </th>
                                                <th class="border-r px-4 py-2">Feed Details </th>
                                                <th class="border-r px-4 py-2">Feeding Amount</th>
                                                <th class="border-r px-4 py-2">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($animalFeedings[$animal->id] as $feeding)
                                            <tr class="border-b dark:border-neutral-500">
                                                <td class="whitespace-nowrap px-4 py-2 dark:border-neutral-500">{{ $feeding->feeding_date ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $feeding->estimated_cost ?: 'N/A' }}/<span class=" text-sm text-red-500">{{$feeding->feeding_currency}}</span></td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $feeding->feed_details ?: 'N/A' }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{ $feeding->amount ?: 'N/A'}}/<span class="text-red-500 text-sm ">{{  $feeding->unit}}</span></td>
                                                <td class="whitespace-nowrap px-4 py-2">
                                                    <a href="{{ route('animals.feedingedit', ['animal_id' => $animal->id, 'feeding_id' => $feeding->id]) }}" class="text-blue-600 hover:underline mr-2 print-hidden">Edit</a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                @else
                                <p class="text-gray-500 dark:text-gray-400 text-center">No Feedings recorded for this animal.</p>


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

