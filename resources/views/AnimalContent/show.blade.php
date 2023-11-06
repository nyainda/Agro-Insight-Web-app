<x-app-layout title="Animal Details">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <div class="flex font-serif mx-4 mt-4 items-center">
        <!-- Name and Status as clickable link -->
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
                   <p class="text-sm ml-4 text-blue-500">By:{{$user->name}}</p>
                </div>
            </div>
        </div>

        <!-- Add spacing between the name/status and dropdown button -->
        <div class="ml-auto font-serif">
            <div class="relative font-serif inline-block text-left">
                <button
                    type="button"
                    id="dropdownButton_{{ $animal->id }}"
                    class="inline-flex items-center px-4 py-2 rounded-md bg-blue-500 dark:bg-gray-800 text-white hover:bg-blue-600 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-blue-400 transition duration-300 ease-in-out"
                    onclick="toggleDropdown('dropdownMenu_{{ $animal->id }}')"
                >
                    <i class="fas fa-ellipsis-v font-serif text-base mr-1" aria-hidden="true"></i> <!-- Adjust icon size and margin as needed -->
                    More Options
                </button>

                <!-- Dropdown content -->
                <div
                    id="dropdownMenu_{{ $animal->id }}"
                    class="origin-top-right absolute font-serif right-0 mt-2 w-48 rounded-md shadow-lg bg-gray-10 dark:bg-gray-800 ring-1 ring-black dark:ring-white ring-opacity-5"
                    style="display: none;"
                >

                <!-- Add your dropdown content here -->
                <a href="{{ route('AnimalContent.edit',$animal->id) }}" class="block dark:text-gray-100 px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 dark:hover:bg-gray-600 add-note" role="menuitem">
                    <i class="far fa-comment"></i> Edit
                </a>
                <a href="{{ route('AnimalContent.treatment', ['animal_id' => $animal->id]) }}" class="block px-4 py-2 dark:text-gray-100 text-sm text-gray-700 hover:bg-blue-500 dark:hover:bg-gray-600 add-treatment" role="menuitem">
                    <i class="fas fa-syringe" aria-hidden="true"></i> Add Treatment
                </a>
                <a href="#" class="block px-4 py-2 text-sm dark:text-gray-100  text-gray-700 hover:bg-blue-500 dark:hover:bg-gray-600 record-feeding" role="menuitem">
                    <i class="fas fa-cookie-bite" aria-hidden="true"></i> Record Feeding
                </a>
                <a href="#" class="block px-4 py-2 text-sm dark:text-gray-100 text-gray-700 hover:bg-blue-500 dark:hover:bg-gray-600 record-input" role="menuitem">
                    <i class="fas fa-plus-square" aria-hidden="true"></i> Record Input
                </a>
                <a href="{{ route('AnimalContent.display', ['animal_id' => $animal->id]) }}" class="block px-4 py-2 text-sm dark:text-gray-100 text-gray-700 hover:bg-blue-500 dark:hover:bg-gray-600 sell-animal" role="menuitem">
                    <i class="fas fa-receipt" aria-hidden="true"></i> Sell Animal
                </a>
                <a href="#" class="block px-4 py-2 text-sm dark:text-gray-100 text-gray-700 hover:bg-blue-500 dark:hover:bg-gray-600 sell-animal" role="menuitem">
                    <i class="fas fa-receipt" aria-hidden="true"></i> print
                </a>
                <a href="#" class="block px-4 py-2 text-sm dark:text-gray-100 text-gray-700 hover:bg-blue-500 dark:hover:bg-gray-600 sell-animal" role="menuitem">
                    <i class="fas fa-check-circle" aria-hidden="true"></i> Add Task
                    <a href="#" class="block px-4 py-2 text-sm dark:text-gray-100 text-gray-700 hover:bg-blue-500 dark:hover:bg-gray-600 sell-animal" role="menuitem">
                        <i class="far fa-comment" aria-hidden="true"></i> Add Notes
                    </a>
                </a>
                <a href="#" class="block px-4 py-2 text-sm dark:text-gray-100 text-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500 delete-animal" data-animal-id="{{ $animal->id }}" role="menuitem">
                    <i class="far fa-trash-alt" aria-hidden="true"></i> Delete
                </a>
                <!-- component -->



                </div>
            </div>
        </div>

        <!-- Avatar with the first letter of the name and status -->

    </div>

    <script>
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            if (dropdown.style.display === 'none') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        }
    </script>
    <div class="bg-gray-200 dark:bg-gray-700 mt-2  ml-2 mr-2 border border-gray-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <nav class="flex font-serif" aria-label="Breadcrumb">
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
                  {{$animal->status}}
                  {{--<a href="{{ route('AnimalContent.showalltreatments') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$animal->name}}</a>--}}
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ml-1 text-sm font-medium text-blue-500 md:ml-2 dark:text-blue-500">Animal{{$animal->raised_purchased}}</span>
                </div>
              </li>
            </ol>
          </nav>
        </div>
<div class="container font-serif mr-4 ml-4 mt-8 p-6 bg-gray-50 dark:bg-gray-800 dark:shadow-lg rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold mb-6 dark:text-gray-200 font-serif">Basic Information</h1>
    <div class="grid grid-cols-2 mx-auto  gap-4">
        <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Name:</div>
            <div class="dark:text-gray-200">{{ $animal->name ?: 'N/A' }}</div>
        </div>
        <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Species:</div>
            <div class="dark:text-gray-200" >{{ $animal->type ?: 'N/A' }}</div>
        </div>
        <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Breed:</div>
            <div class="dark:text-gray-200" >{{ $animal->breed ?: 'N/A' }}</div>{{ $animal->purchasedAnimal }}
        </div>
        <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Gender:</div>
            <div class="dark:text-gray-200">{{ $animal->gender ?: 'N/A' }}</div>
        </div>
        <div class="col-span-2 bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Status:</div>
            <div class="dark:text-gray-200">
                <a href="{{ route('index', ['id' => $animal->id]) }}" class="hover:text-blue-700 text-blue-500">{{ $animal->status }}</a>
            </div>
        </div>
        <!-- Add more rows and data as needed -->
    </div>
    <!-- Add any other details or formatting as desired -->
</div>


<div class="container font-serif mr-4 ml-4 mt-8 p-6 bg-gray-50 dark:bg-gray-800 dark:shadow-lg rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold mb-6 dark:text-gray-200 font-serif">Physical Characteristics</h1>
    <div class="grid grid-cols-2 mx-auto gap-4">
        <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Animal Color:</div>
            <div class="dark:text-gray-200">{{ $animal->coloring ?: 'N/A' }}</div>
        </div>
        <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Weight (kg):</div>
            <div class="dark:text-gray-200" >{{ $animal->weight ?: 'N/A' }}</div>
        </div>
        <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Horn/Tusk Length(c m):</div>
            <div class="dark:text-gray-200">{{ $animal->horn_length ?: 'N/A' }}</div>
        </div>
        <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Height (cm):</div>
            <div class="dark:text-gray-200">{{ $animal->height ?: 'N/A' }}</div>
        </div>
        <div class="col-span-2 bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Description:</div>
            <div class="dark:text-gray-200">{{ $animal->description ?: 'N/A' }}</div>
        </div>
        <div class="col-span-2 bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
            <div class="font-semibold text-gray-800 dark:text-gray-300">Animal Eye Color:</div>
            <div class="dark:text-gray-200">
                @if($animal->eye_color)
                    {{ $animal->eye_color }}
                @else
                    <a href="{{ route('AnimalContent.edit', ['id' => $animal->id]) }}" class="text-blue-500 hover:text-blue-700">Add Eye Color</a>
                @endif
            </div>
        </div>
        <!-- Add more rows and data as needed -->
    </div>
    <!-- Add any other details or formatting as desired -->
</div>



    <div class="container font-serif mr-4 ml-4 mt-8 p-6 bg-gray-50 dark:bg-gray-800 dark:shadow-lg rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-6 dark:text-gray-200 font-serif">Identification</h1>
        <div class="grid grid-cols-2 mx-auto gap-4">
            <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Tag Number(s):</div>
                <div class="dark:text-gray-200">{{ $animal->tag_number ?: 'N/A' }}</div>
            </div>
            <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">other tag:</div>
                <div class="dark:text-gray-200"> {{ $animal->other_tag ?: 'N/A' }}</div>
            </div>
            <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Electronic ID:</div>
                <div class="dark:text-gray-200">{{ $animal->electronic_id ?: 'N/A' }}</div>
            </div>
            <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Registry Number:</div>
                <div class="dark:text-gray-200">{{ $animal->registry_number ?: 'N/A' }}</div>
            </div>
            <div class="col-span-2 bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Animal Eye Color:</div>
                <div>
                    @if($animal->description)
                        {{ $animal->description }}
                    @else
                        <a href="{{ route('AnimalContent.edit', ['id' => $animal->id]) }}" class="text-blue-500 hover:text-blue-700">DNA Profile</a>
                    @endif
                </div>
            </div>
        </div>
    </div>



    <div class="container font-serif mr-4 ml-4 mb-4 mt-8 p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold dark:text-gray-200 mb-6 font-serif">Birth Information</h1>
        <div class="grid grid-cols-2 mx-auto gap-4">
            <div class="bg-gray-10 dark:bg-gray-700 p-4 dark:shadow rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Birth Date:</div>
                <div class="dark:text-gray-200">{{ $animal->birth_date ?: '-' }}</div>
            </div>
            <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Birth Weight:</div>
                <div class="dark:text-gray-200">{{ $animal->birth_weight ?: '-' }}</div>
            </div>
            <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Birth Time:</div>
                <div class="dark:text-gray-200" >{{ $animal->birth_time ?: '-' }}</div>
            </div>
            <div class="bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Birth Status:</div>
                <div class="dark:text-gray-200">{{ $animal->birth_status ?: 'N/A' }}</div>
            </div>
            <div class="col-span-2 bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Health at Birth:</div>
                <div class="dark:text-gray-200">{{ $animal->health_at_birth ?: 'N/A' }}</div>
            </div>
            <div class="col-span-2 bg-gray-10 dark:bg-gray-700 p-4 rounded-lg shadow">
                <div class="font-semibold text-gray-800 dark:text-gray-300">Raised or Purchased:</div>
                <div class="dark:text-gray-200">{{ $animal->raised_purchased ?: 'N/A' }}</div>
            </div>
        </div>
    </div>





</x-app-layout>


