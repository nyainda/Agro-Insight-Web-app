<x-app-layout title="Animal Treatments">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <div class="container mx-auto mt-8 p-4 mb-4 dark:bg-gray-800 dark:rounded-lg font-serif bg-white rounded-lg shadow-lg">

        <h1 class="text-4xl font-bold  mb-6 dark:text-gray-200 text-center">
            <a class="hover:text-blue-500" href="{{ route('index') }}">All Animals and Their Tasks</a></h1>
        <div class="overflow-x-auto">
            <div class="min-w-full">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th class="border-r px-4 py-3">Animal</th>
                            <th class="border-r px-4 py-3">Animal_ID</th>
                            <th class="border-r px-4 py-3">Status</th>
                            <th class="px-4 text-center py-3">Task </th>
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
                                @if (isset($animaltasks[$animal->id]))
                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th class="border-r px-4 py-2"> title </th>
                                                <th class="border-r px-4 py-2">start_date</th>

                                                <th class="border-r px-4 py-2"> end_date</th>
                                                <th class="border-r px-4 py-2"> associated</th>
                                                <th class="border-r px-4 py-2">status</th>

                                                <th class="border-r px-4 py-2"> priority</th>
                                                <th class="border-r px-4 py-2"> description</th>
                                                <th class="border-r px-4 py-2"> Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($animaltasks[$animal->id] as $task)
                                            <tr class="border-b dark:border-neutral-500">
                                                <td class="whitespace-nowrap px-4 py-2 dark:border-neutral-500"> {{ $task->title ?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500"> {{ $task->start_date ?: 'N/A' }}</td>

                                               <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{$task->end_date?: 'N/A'}}</td>
                                               <td class="whitespace-nowrap px-4 py-2 dark:border-neutral-500"> {{ $task->associated_to?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500"> {{ $task->status ?: 'N/A' }}</td>

                                               <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{$task->priority?: 'N/A'}}</td>
                                               <td class="whitespace-nowrap px-4 py-2 dark-border-neutral-500">{{$task->description?: 'N/A'}}</td>
                                                <td class="whitespace-nowrap px-4 py-2">
                                                    <a href="{{ route('animals.taskedit', ['animal_id' => $animal->id, 'task_id' => $task->id]) }}" class="text-blue-600 hover:underline mr-2 print-hidden">Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <p class="text-gray-500 dark:text-gray-400 text-center">No taskrecords for this animal.</p>


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
    <p class="mb-4 text-gray-600 font-serif text-center dark:text-gray-400"> Created By: <span class="text-red-500 font-serif ">{{$user->name}}</span></p>












</x-app-layout>

