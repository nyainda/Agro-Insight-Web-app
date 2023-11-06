<x-app-layout title="Cards">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <div class="flex justify-between items-center p-4" x-data="{ isOpen: false }">
        <div class="relative space-x-2 flex items-center">
            <a href="{{route('animals.create')}}" class="px-4 py-2 text-gray-900 bg-green-400 rounded-md hover:bg-green-500 transition duration-300 ease-in-out">Add Animal</a>
            <a href="{{route('Next')}}" class="px-4 py-2 text-gray-900 bg-green-400 rounded-md hover:bg-green-500 transition duration-300 ease-in-out">Add Group</a>

            <button @click="isOpen = !isOpen" class="ml-2 px-2 py-2 text-gray-900 bg-gray-300 rounded-md hover:bg-gray-400 transition duration-300 ease-in-out" aria-haspopup="true">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
            <ul x-show="isOpen" class="absolute right-0 top-10 mt-2 space-y-2 bg-white text-gray-900 border border-gray-300 rounded-md shadow-lg">
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

    <div id="animals" class="p-4 mx-8">
        <div class="content-wrapper nothing mt-4 bg-gray-100 rounded-md p-4">
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
    <div class="mx-4 md:mx-8 lg:mx-16 my-4 md:my-8 lg:my-16">
        <div class="rounded-lg shadow-lg bg-white overflow-x-auto p-4">
            <!-- Record Count -->
            <div id="recordCount" class="text-center text-gray-600 mb-4">
                <p class="text-lg">{{ $recordCount }}</p>
                <p class="text-sm">record(s) displayed</p>
            </div>

            <!-- Summary Block -->
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Animal Summary -->
                <li class="summary-item p-4 rounded-lg border border-gray-200">
                    <div class="text-xl font-semibold">Animals</div>
                    <div class="text-3xl font-bold mt-2">{{ $recordCount }}</div>
                    <div class="text-sm text-gray-500 mt-2">
                        100% of <a href="{{ route('Farmflow') }}" class="text-blue-500">{{ $recordCount }}</a>
                    </div>
                </li>

                <!-- Type Summary -->
                <li class="summary-item p-4 rounded-lg border border-gray-200">
                    <div class="text-xl font-semibold">Type</div>
                    <div class="text-3xl font-bold mt-2"><a href="{{ route('Farmflow') }}" class="text-blue-500">{{ $recordCount }}</a></div>
                    <div class="text-sm text-gray-500 mt-2">
                        100% of {{ $recordCount }}
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="mx-4 md:mx-8 lg:mx-16 my-4 md:my-8 lg:my-16">
        <div class="rounded-lg shadow-lg bg-white overflow-x-auto">
            <!-- Animal Data Table -->
            <table id="animalTable" class="min-w-full table-auto border border-collapse">
                <thead>
                    <tr>
                        <!-- Avatar column -->
                        <th class="py-3 px-4 bg-blue-500 text-white w-1/6 md:w-1/6 lg:w-1/6 text-center">
                            Avatar
                        </th>
                        <!-- Gender column -->
                        <th class="py-3 px-4 bg-blue-500 text-white w-1/6 md:w-1/6 lg:w-1/6 text-center">
                            Gender
                        </th>
                        <!-- Breed column -->
                        <th class="py-3 px-4 bg-blue-500 text-white w-1/6 md:w-1/6 lg:w-1/6 text-center">
                            Breed
                        </th>
                        <!-- Name column -->
                        <th class="py-3 px-4 bg-blue-500 text-white w-1/6 md:w-1/6 lg:w-1/6 text-center">
                            Name
                        </th>
                        <!-- Status column -->
                        <th class="py-3 px-4 bg-blue-500 text-white w-1/6 md:w-1/6 lg:w-1/6 text-center">
                            Status
                        </th>
                        <!-- Type/Breed column -->
                        <th class="py-3 px-4 bg-blue-500 text-white w-1/6 md:w-1/6 lg:w-1/6 text-center">
                            Type/Breed
                        </th>
                        <!-- Action column -->
                        <th class="py-3 px-4 bg-blue-500 text-white w-1/6 md:w-1/6 lg:w-1/6 text-center">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table data goes here -->
                    @foreach ($animalsData as $animalData)
                    <tr class="hover:bg-gray-200" >
                        <!-- Avatar column -->
                        <td class="py-3 px-4 border">
                            <div class="flex items-center">
                                <!-- Avatar with the first letter of the name -->
                                <div class="w-8 h-8 md:w-6 md:h-6 lg:w-8 lg:h-8 rounded-full bg-blue-500 text-white flex items-center justify-center text-lg font-bold">
                                    {{ substr($animalData->name, 0, 1) }}
                                </div>
                                <!-- Name as a clickable link -->
                                <a href="" class="ml-2">{{ $animalData->name }}</a>
                            </div>
                        </td>
                        <!-- Gender column -->
                        <td class="py-3 px-4 text-center border">
                            {{ $animalData->gender }}
                        </td>
                        <!-- Breed column -->
                        <td class="py-3 px-4 text-center border">
                            {{ $animalData->breed }}
                        </td>
                        <!-- Name column -->
                        <td class="py-3 px-4 text-center border">
                            {{ $animalData->name }}
                        </td>
                        <!-- Status column -->
                        <td class="py-3 px-4 text-center border">
                            {{ $animalData->status }}
                        </td>
                        <!-- Type/Breed column -->
                        <td class="py-3 px-4 text-center border">
                            {{ $animalData->breed }}
                        </td>
                        <!-- Action column -->
                        <td class="py-3 px-4 text-center border ">

                            <div class="relative inline-block text-left">
                                <button
                                    type="button"
                                    id="dropdownButton_{{ $animalData->id }}"
                                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                >
                                    <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <!-- Dropdown content -->
                                <div
                                    id="dropdownMenu_{{ $animalData->id }}"
                                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
                                    style="display: none;"
                                >
                                    <!-- Add your dropdown content here -->

                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 add-note" role="menuitem">
                                        <i class="far fa-comment"></i> Add Note
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 add-treatment" role="menuitem">
                                        <i class="fas fa-syringe" aria-hidden="true"></i> Add Treatment
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 record-feeding" role="menuitem">
                                        <i class="fas fa-cookie-bite" aria-hidden="true"></i> Record Feeding
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 record-input" role="menuitem">
                                        <i class="fas fa-plus-square" aria-hidden="true"></i> Record Input
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 sell-animal" role="menuitem">
                                        <i class="fas fa-receipt" aria-hidden="true"></i> Sell Animal
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 delete-animal" data-animal-id="{{ $animalData->id }}" role="menuitem">
                                        <i class="far fa-trash-alt" aria-hidden="true"></i> Delete
                                    </a>
                                    <a href="{{route('Edit')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 edit-animal"  role="menuitem">
                                        <i class="far fa-edit"></i> Edit
                                    </a>

                                    <!-- ... (dropdown menu items) ... -->
                                </div>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</body>
</html>


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

<script>
    // Function to toggle the edit form
    function toggleEditForm(id) {
        const editForm = document.getElementById(`editableFields_${id}`);
        if (editForm.style.display === "none" || !editForm.style.display) {
            editForm.style.display = "block";
        } else {
            editForm.style.display = "none";
        }
    }

    // Add event listeners to all "Edit" buttons
    const editButtons = document.querySelectorAll("[data-animal-id]");
    editButtons.forEach((button) => {
        const id = button.getAttribute("data-animal-id");
        button.addEventListener("click", () => toggleEditForm(id));
    });
</script>




</x-app-layout>

