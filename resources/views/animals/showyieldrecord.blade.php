
<x-app-layout title="Animal Treatments">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <div class="bg-gray-200 font-serif  dark:bg-gray-700 mt-2  ml-2 mr-2 border border-gray-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
              <li class="inline-flex items-center">
                <a href="{{route("index")}}" class="inline-flex dark:text-gray-200 items-center text-sm font-medium text-gray-700 hover:text-blue-600  dark:hover:text-white">
                  <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Animal
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="{{ route('AnimalContent.showallyieldrecords') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$animal->name}}</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Yieldrecord</span>
                </div>
              </li>
            </ol>
          </nav>
        </div>
        @if(session('success'))
    <div
      class="font-regular relative mt-4 mx-auto block w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
      data-dismissible="alert"
      data-dismissible-id="success-message"
    >
      <div class="absolute top-4 left-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          aria-hidden="true"
          class="mt-px h-6 w-6"
        >
          <path
            fill-rule="evenodd"
            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </div>
      <div class="ml-8 mr-12">
        <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
          Success
        </h5>
        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
          {{ session('success') }}
        </p>
      </div>
      <div
        data-dismissible-target="alert"
        data-ripple-dark="true"
        class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
      >
        <div role="button" class="w-max rounded-lg p-1">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12"
            ></path>
          </svg>
        </div>
      </div>
    </div>
@endif
    <div class="container mx-auto p-6 space-y-6 font-serif">
        <div class="flex font-serif   items-center space-x-4">
            <div class="w-12 h-12 md:w-10 md:h-10 lg:w-12 lg:h-12 dark:text-gray-200 font-serif rounded-full bg-gradient-to-br from-blue-500 to-purple-500 text-white flex items-center justify-center text-2xl font-bold">
               <span class="dark:text-gray-200">{{ substr($animal->name, 0, 1) }}</span>
            </div>
            <!-- Name and Status as clickable link -->
            <div class="ml-4 flex flex-col">
                <a href="{{ route('index') }}" class="text-2xl font-serif font-semibold text-gray-800 hover:text-blue-500 transition duration-300">{{ $animal->name }}</a>
                <div class="flex">
                    <p class="text-sm text-blue-500">{{ $animal->type }}</p>
                    <p class="text-sm ml-4 text-blue-500">Id: {{ $animal->internal_id }}</p>
                    <p class="text-sm ml-4  text-blue-500">By:{{ $user->name }}</p>
                </div>
            </div>



        </div>
        <div class="mb-4 flex flex-col font-serif sm:flex-row justify-between items-center">
            <div class="mb-2 sm:mb-0">
                <a class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300 ease-in-out" data-remote="true" href="{{ route('animals.yieldrecord', ['animal_id' => $animal->id]) }}">New Yield Record</a>
            </div>
            <div class="sm:ml-2">
                <button id="printButton" class="btn btn-default hidden sm:inline-block" title="Print">
                    <i class="fas fa-print" aria-hidden="true"></i> Print
                </button>
            </div>
        </div>





@foreach ($productStatistics as $productStat)


    <div class="relative overflow-x-auto font-serif shadow-md sm:rounded-lg">
        <table class="w-full text-sm font-serif text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Yield Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        product
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Avg.amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Trace No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productStat['records'] as $yieldrecord)
                    <tr class="bg-gray-30 border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $yieldrecord->date }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $yieldrecord->yield_time }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $productStat['product'] }}
                        </td>
                        <td class="px-6 py-4">
                            ${{ number_format($yieldrecord->price, 2) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $yieldrecord->quantity }}/{{ $yieldrecord->quality }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $productStat['averageYield'] }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('AnimalContent.showallyieldrecords') }}" class="text-blue-500 hover:text-red-700">
                                {{ Str::limit($yieldrecord->trace_number, 11) }}
                            </a>
                        </td>
                        <td td class="px-6 py-4">
                            <a href="{{ route('animals.yieldrecordedit', ['animal_id' => $animal->id, 'yieldrecord_id' => $yieldrecord->id]) }}" class="text-blue-600 hover:underline mr-2 print-hidden">Edit</a>
                            <a href="{{ route('yieldrecord.delete', ['animal_id' => $animal->id, 'yieldrecord_id' => $yieldrecord->id]) }}" class="text-red-600 hover:underline print-hidden">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

   {{--{{ $yieldrecords->links() }}--}}
@endforeach




</x-app-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Find the success message element
        var successMessage = document.querySelector('[data-dismissible-id="success-message"]');

        // If the success message element exists, add a click event listener to dismiss it
        if (successMessage) {
            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        }
    });
</script>

