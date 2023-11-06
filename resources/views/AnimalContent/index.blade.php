<x-app-layout title="Cards">

    <!-- Include Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <div class="flex justify-between font-serif items-center p-4" x-data="{ isOpen: false }">
        <div class="relative space-x-2 flex items-center">
            <a href="{{route('AnimalContent.create')}}" class="px-4 py-2 text-gray-900 bg-green-400 rounded-md hover:bg-green-500 transition duration-300 ease-in-out">Add Animal</a>
            <a href="{{route('Next')}}" class="px-4 py-2 font-serif text-gray-900 bg-green-400 rounded-md hover:bg-green-500 transition duration-300 ease-in-out">Add Group</a>

            <button @click="isOpen = !isOpen" class="ml-2 px-2 font-serif py-2 text-gray-900 bg-gray-300 rounded-md hover:bg-gray-400 transition duration-300 ease-in-out" aria-haspopup="true">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
            <ul x-show="isOpen" class="absolute font-serif right-0 top-10 mt-2 space-y-2 bg-white text-gray-900 border border-gray-300 rounded-md shadow-lg">
                <li>
                    <a href="#" class="block px-4 py-2 text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out">Import Records</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out">Bulk Update from File</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out">Download Records</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out">Download All Records</a>
                </li>
                <li role="separator" class="divider my-1 border-t border-gray-300"></li>
                <li>
                    <a href="#" class="block px-4 py-2 text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out">Print</a>
                </li>
                <!-- Add more dropdown items here -->
            </ul>
        </div>
    </div>

<!-- Breadcrumb -->
<nav class="justify-between  mr-2 ml-2 px-4 py-3 text-gray-700 border border-gray-200 rounded-lg sm:flex sm:px-5 bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 sm:mb-0">



      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>

          <!-- Output the animal details -->
          <a href="{{ route('AnimalContent.showalltreatments') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-red-500 ">Treatment</a>
        </div>

      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="{{ route('AnimalContent.showallfeedings') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Feeding</a>
        </div>

      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="{{ route('AnimalContent.showallmeasurements') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Measurement</a>
        </div>

      </li>

      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="{{ route('AnimalContent.showallyieldrecords') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">YieldRecord</a>
        </div>

      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="{{ route('AnimalContent.showallnotes') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Notes</a>
        </div>

      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="{{ route('Task.showalltasks') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Tasks</a>
        </div>

      </li>

  </nav>

    <div id="error-message-wrapper">
        @if ($error)
            <div class="bg-red-100 mx-auto border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error:</strong>
                <span class="block sm:inline">{{ $error }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="hideErrorMessage();">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.293 5.293a1 1 0 011.414 0l.293.293L18 7.586l-1.293 1.293-.293.293L14 10.586l-1.293 1.293-.293.293L10.586 14l-1.293 1.293-.293.293L7 17.586l-1.293 1.293-.293.293L3.586 14 2.293 12.707l-.293-.293L1 10.586l1.293-1.293.293-.293L4.414 7 5.707 5.707l.293-.293L7 3.586l1.293-1.293.293-.293L10.586 1l1.293 1.293.293.293L14 3.586l1.293 1.293.293.293L17.586 7l1.293 1.293-.293.293L16.414 10l-1.293 1.293-.293.293L13 12.414l-1.293 1.293-.293.293L9.586 16 7.293 18.293l-.293.293L5 17.414l-1.293-1.293-.293-.293L1.414 14 3.707 11.707l.293-.293L5 10.414l1.293-1.293.293-.293L8.414 7l1.293-1.293.293-.293L11 4.414l1.293-1.293.293-.293L14.414 1l1.293 1.293.293.293L18 4.414l-1.293 1.293-.293.293z" clip-rule="evenodd"/>
                    </svg>
                </span>
            </div>
            <script>
                function hideErrorMessage() {
                    document.getElementById('error-message-wrapper').style.display = 'none';
                }

                setTimeout(function() {
                    hideErrorMessage();
                }, 8000);
            </script>
        @endif
    </div>


@if ($recordCount > 0)
<div class="mx-4 md:mx-8 dark:bg-gray-800 bg-white dark:text-white font-serif lg:mx-16 my-4 md:my-8 lg:my-16">
    <div class="p-4 dark:shadow-lg shadow-md sm:rounded-lg bg-white dark:bg-gray-800">
        <!-- Record Count -->
        <div id="recordCount" class="text-center text-gray-600 dark:text-gray-200 mb-4">
            <p class="text-2xl font-bold">{{ $recordCount }}</p>
            <p class="text-lg">records displayed</p>
        </div>

        <!-- Summary Block -->
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Animal Summary -->
            <li class="summary-item p-6 rounded-lg bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white dark:bg-gradient-to-br dark:from-gray-600 dark:via-gray-700 dark:to-gray-800 dark:text-white">
                <div class="text-3xl font-semibold">Animals</div>
                <div class="text-5xl font-extrabold mt-2">{{ $recordCount }}</div>

                <div class="text-sm text-gray-200 dark:text-gray-200 mt-2">
                    100% of <a href="{{ route('Farmflow') }}" class="underline dark:text-gray-200 hover:text-blue-300 hover:dark:text-blue-500">{{ $recordCount }}</a>
                </div>
                <div class="text-sm col-span-2 text-gray-200 dark:text-gray-200 mt-2">
                   <span class="text-yellow-500"> AnimalRaised:{{$raised}}</span>
                    AnimalPurchased:{{$purchased}}
                   <span class="text-red-600"> AnimalSolid:{{$soldAnimal}}</span>
                </div>
            </li>

            <!-- Type Summary -->
            <li class="summary-item p-6 rounded-lg bg-gradient-to-br from-green-400 via-green-500 to-green-600 text-white dark:bg-gradient-to-br dark:from-gray-600 dark:via-gray-700 dark:to-gray-800 dark:text-white">
                <div class="text-3xl font-semibold">Type</div>
                <div class="text-5xl font-extrabold mt-2"><a href="{{ route('Farmflow') }}" class="underline hover:text-green-300 hover:dark:text-green-500">{{ $recordCount }}</a></div>
                <div class="text-sm text-gray-200 dark:text-gray-200 mt-2">
                    100% of {{ $recordCount }}

                </div>

            </li>
        </ul>

        <!-- Female and Male Animal Counts -->
        <div class="grid grid-cols-2 gap-4 mt-4">
            <div class="summary-item p-6 rounded-lg bg-gradient-to-br from-pink-400 via-pink-500 to-pink-600 text-white dark:bg-gradient-to-br dark:from-gray-600 dark:via-gray-700 dark:to-gray-800 dark:text-white">
                <div class="text-3xl font-semibold">Female Animals</div>
                <div class="text-5xl font-extrabold mt-2">{{ $femaleCount }}</div>

            </div>

            <div class="summary-item p-6 rounded-lg bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white dark:bg-gradient-to-br dark:from-gray-600 dark:via-gray-700 dark:to-gray-800 dark:text-white">
                <div class="text-3xl font-semibold">Male Animals</div>
                <div class="text-5xl font-extrabold mt-2">{{ $maleCount }}</div>
            </div>
        </div>
    </div>
</div>


    <div class="mx-4 md:mx-8 lg:mx-16 font-serif my-4 md:my-8 lg:my-16">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <!-- Animal Data Table -->
            <table id="animalTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <!-- Avatar column -->
                        <th class="px-6 py-3">
                        Animal_name
                        </th>
                        <th class="px-6 py-3">
                            Animal
                            </th>
                        <!-- Gender column -->
                        <th class="px-6 py-3">
                            Gender
                        </th>
                        <!-- Breed column -->
                        <th class="px-6 py-3">
                            Breed
                        </th>
                        <!-- Name column -->
                      {{--  <th class="py-3 px-4 bg-blue-500 text-white w-1/6 md:w-1/6 lg:w-1/6 text-center">
                            Name
                        </th>--}}
                        <!-- Status column -->
                        <th class="px-6 py-3">
                            Weight
                        </th>
                        <!-- Type/Breed column -->
                        <th class="px-6 py-3">
                            status
                        </th>
                        <th class="px-6 py-3">
                            Raised or Purchased
                        </th>
                        <!-- Action column -->
                        <th class="px-6 py-3">
                            Animal_id
                        </th>
                        <th class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table data goes here -->

                    @foreach ($animals as $animal)

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <!-- Avatar column -->
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <!-- Avatar with the first letter of the name -->
                                <div class="w-8 h-8 md:w-6 md:h-6 lg:w-8 lg:h-8 rounded-full bg-blue-500 text-white dark:text-gray-100 flex items-center justify-center text-lg font-bold">
                                    {{ substr($animal->name, 0, 1) }}
                                </div>
                                <!-- Name as a clickable link -->
                                <a href="{{route('AnimalContent.show', $animal->id)}}" class="ml-2 hover:text-blue-700">{{ $animal->name }}</a>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{$animal->type}}
                        </td>
                        <!-- Gender column -->
                        <td class="px-6 py-4">
                            {{ $animal->gender ?: "N/A" }}
                        </td>
                        <!-- Breed column -->
                        <td class="px-6 py-4">
                            {{ $animal->breed ?: "N/A" }}
                        </td>
                        <!-- Name column -->
                        <td class="px-6 py-4">
                            {{ $animal->weight ?: "N/A" }}
                        </td>
                        <!-- Status column -->
                        <td class="px-6 py-4">
                            {{ $animal->status ?: "N/A" }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $animal->raised_purchased ?: 'N/A' }}
                        </td>
                        <!-- Type/Breed column -->
                        <td class="px-6 py-4">
                            {{ $animal->internal_id ?: "N/A" }}
                        </td>
                        <!-- Action column -->
                        <td class="px-6 py-4 ">
                            <div class="relative  inline-block text-left">
                                <button
                                    type="button"
                                    id="dropdownButton_{{ $animal->id }}"
                                    class="inline-flex items-center px-4 py-2 dark:bg-gray-700 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                >
                                    <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <!-- Dropdown content -->

                                <div
                                    id="dropdownMenu_{{ $animal->id }}"
                                    class="origin-top-right dark:bg-gray-700  absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
                                    style="display: none;"
                                >
                                    <!-- Add your dropdown content here -->
                                    <a href="{{ route('AnimalContent.edit',$animal->id) }}" class="block px-4 py-2 dark:text-gray-200 text-sm text-gray-700 hover:bg-blue-400 add-note" role="menuitem">
                                        <i class="far fa-comment"></i> Edit Animal
                                    </a>
                                    <a href="{{ route('AnimalContent.treatment', ['animal_id' => $animal->id]) }}" class="block dark:text-gray-200  px-4 py-2 text-sm text-gray-700 hover:bg-blue-400 add-treatment" role="menuitem">
                                        <i class="fas fa-syringe" aria-hidden="true"></i> Add Treatment
                                    </a>
                                    <a href="{{ route('animals.note', ['animal_id' => $animal->id]) }}" class="block dark:text-gray-200  px-4 py-2 text-sm text-gray-700 hover:bg-blue-400 add-treatment" role="menuitem">
                                        <i class="fas fa-sticky-note" aria-hidden="true"></i> Add Note
                                    </a>
                                    <a href="{{ route('animals.task', ['animal_id' => $animal->id]) }}" class="block dark:text-gray-200  px-4 py-2 text-sm text-gray-700 hover:bg-blue-400 add-treatment" role="menuitem">
                                        <i class="fas fa-sticky-note" aria-hidden="true"></i> Add Task
                                    </a>
                                    <a href="{{ route('animals.feeding', ['animal_id' => $animal->id]) }}" class="block px-4 dark:text-gray-200 py-2 text-sm text-gray-700 hover:bg-blue-400 record-feeding" role="menuitem">
                                        <i class="fas fa-cookie-bite" aria-hidden="true"></i> Record Feeding
                                    </a>
                                    <a href="{{ route('animals.measurement', ['animal_id' => $animal->id]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-400 dark:text-gray-200  record-input" role="menuitem">
                                        <i class="fas fa-balance-scale" aria-hidden="true"></i> Record measurements
                                    </a>
                                    <a href="{{ route('animals.yieldrecord', ['animal_id' => $animal->id]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-400 dark:text-gray-200  record-input" role="menuitem">
                                        <i class="fas fa-chart-line" aria-hidden="true"></i> Record yield
                                    </a>
                                    <a href="{{ route('AnimalContent.display', ['animal_id' => $animal->id]) }}" class="block dark:text-gray-200  px-4 py-2 text-sm text-gray-700 hover:bg-blue-400 sell-animal" role="menuitem">
                                        <i class="fas fa-shopping-cart" aria-hidden="true"></i> Sell Animal
                                    </a>

                                     <div x-data="{ modelOpen: false }">
                                        <div @click="modelOpen = !modelOpen" class="flex  dark:text-gray-200 items-center p-2 space-x-2 text-sm text-gray-700 cursor-pointer hover:bg-blue-400 hover:text-red-500 transition-all duration-300 ease-in-out sell-animal" role="menuitem">
                                            <i class="far fa-trash-alt text-sm text-red-500" aria-hidden="true"></i>
                                            <span class="font-small">Delete</span>
                                        </div>
                                        <div x-show="modelOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-40" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div x-cloak @click="modelOpen = false" x-show="modelOpen" class="fixed inset-0 transition-opacity"></div>

                                            <div x-cloak x-show="modelOpen" class="bg-white dark:bg-gray-700 rounded-lg shadow-xl max-w-xl mx-auto p-8 transform transition-all sm:my-20 sm:p-0 sm:scale-95">
                                                <div class="flex items-center justify-between space-x-4">
                                                    <h1 class="text-xl mx-auto mt-2 dark:text-gray-400 font-medium text-gray-800">Confirm Deletion</h1>

                                                    <button @click="modelOpen = false" class="text-gray-600 hover:text-gray-700 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>



                                                <div class="rounded-lg shadow p-6 text-center">
                                                    <svg class="mx-auto mb-4 text-red-500 w-12 h-12 dark:text-red-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Animal?</h3>

                                                    <!-- Confirm Delete Link -->
                                                    <a href="{{route('AnimalContent.delete',$animal->id)}}">
                                                        <button data-modal-hide="popup-modal" type="button" class="bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 text-white font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Yes, I'm sure
                                                        </button>
                                                    </a>

                                                    <!-- Cancel Link -->
                                                    <a href="{{route('index')}}">
                                                        <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                            No, cancel
                                                        </button>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            {{ $animals->links() }}
            @else
            <div id="animals" class="p-4 mx-8">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="text-muted text-center text-4xl">
                        <i class="far fas fa-tag" aria-hidden="true"></i>
                    </div>
                    <div class="text-center text-gray-900 text-xl font-semibold mt-4">
                        No animals yet?
                    </div>
                    <div class="text-center text-gray-600 mt-2">
                        Add a new animal and they'll show up here.
                    </div>
                    <div class="text-center mb-4 mt-4">
                        <strong>Need help getting started?</strong>
                        Check out this <a href="https://help.farmbrite.com/help/getting-started-with-livestock" class="text-blue-600 hover:underline">livestock getting started guide</a>.
                    </div>
                </div>
            </div>

        </div>

@endif
    </div>
    <p class="mb-4 text-gray-600 mt-4 font-serif text-center dark:text-gray-400"> Created By: <span class="text-red-500 font-serif ">{{$user->name}}</span></p>
</x-app-layout>

<script>
    // Function to toggle the dropdown menu
    function toggleDropdown(id) {
        const dropdownButton = document.getElementById(`dropdownButton_${id}`);
        const dropdownMenu = document.getElementById(`dropdownMenu_${id}`);

        if (dropdownMenu.style.display === "none" || !dropdownMenu.style.display) {
            dropdownMenu.style.display = "block";
        } else {
            dropdownMenu.style.display = "none";
        }
    }

    // Add event listeners to all buttons
    const dropdownButtons = document.querySelectorAll("[id^=dropdownButton_]");
    dropdownButtons.forEach((button) => {
        const id = button.id.split("_")[1]; // Extract the ID from the button
        button.addEventListener("click", () => toggleDropdown(id));
    });
</script>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript for Row Deletion and Editing -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- Include Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    // Initialization for ES Users


