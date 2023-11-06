<x-app-layout title="Animal Treatments">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <div class="container mx-auto mt-8 p-4 mb-4 dark:bg-gray-800 dark:rounded-lg font-serif bg-white rounded-lg shadow-lg">

        <h1 class="text-4xl font-bold  mb-6 dark:text-gray-200 text-center">
            <a class="hover:text-blue-500" href="{{ route('index') }}">All Animals and Their YieldRecord</a></h1>
        <div class="overflow-x-auto">
            <div class="min-w-full">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th class="border-r px-4 py-3">Animal</th>
                            <th class="border-r px-4 py-3">Animal_ID</th>
                            <th class="border-r px-4 py-3">Status</th>
                            <th class="px-4 text-center py-3">yieldrecords</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            {{--<td class="whitespace-nowrap border-r px-4 py-3 font-medium dark:border-neutral-500">{{ $loop->index + 1 }}</td>--}}
                            <td class="whitespace-nowrap border-r px-4 py-3 dark:border-neutral-500">{{ $animal->name }}</td>
                            <td class="whitespace-nowrap border-r px-4 py-3 dark:border-neutral-500">{{ $animal->internal_id }}</td>
                            <td class="whitespace-nowrap px-4 py-3 dark-border-neutral-500">{{ $animal->status }}</td>
                            <td class="whitespace-nowrap px-4 py-3">
                                @if (isset($animalyieldrecords[$animal->id]))
                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th class="border-r px-4 py-2"> Date</th>
                                                <th class="border-r px-4 py-2">Time</th>
                                                <th class="border-r px-4 py-2">Product</th>
                                                <th class="border-r px-4 py-2">Price</th>
                                                <th class="border-r px-4 py-2">Amount</th>
                                                {{--<th class="border-r px-4 py-2">quality</th>--}}
                                                <th class="border-r px-4 py-2"> Trace_no</th>
                                                <th class="border-r px-4 py-2"> Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($animalyieldrecords[$animal->id] as $yieldrecord)
                                            <tr class="border-b dark:border-neutral-500">
                                                <td class="whitespace-nowrap px-4 py-2 dark:border-neutral-500"> {{ $yieldrecord->date }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500"> {{ $yieldrecord->yield_time }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500"> {{ $yieldrecord->product }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500"> ${{ number_format($yieldrecord->price, 2) }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500"> {{ $yieldrecord->quantity }}/{{ ($yieldrecord->quality) }}</td>
                                                {{--<td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">  {{ ($yieldrecord->quality) }}</td>--}}
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{$yieldrecord->trace_number}}</td>
                                                <td class="whitespace-nowrap px-4 py-2">
                                                    <a href="{{ route('animals.yieldrecordedit', ['animal_id' => $animal->id, 'yieldrecord_id' => $yieldrecord->id]) }}" class="text-blue-600 hover:underline mr-2 print-hidden">Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <p class="text-gray-500 dark:text-gray-400 text-center">No yieldrecords for this animal.</p>


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

