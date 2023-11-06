<x-app-layout title="Cards">


    <div class="container mx-auto mt-8 p-4 dark:bg-gray-700 dark:shadow-md">
        <form action="{{route('animals.update',$animal)}}" method="POST" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
            @csrf <!-- Add CSRF token -->
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <fieldset>
                <legend class="text-lg font-semibold mb-4 text-gray-700 dark:text-gray-200">Basic Information</legend>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Identification -->
                    <div class="flex flex-col">
                        <label for="name" class="dark:text-gray-200 text-gray-700">Identification</label>
                        <input type="text" name="name" id="name" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                    </div>


                    <!-- Species -->
                    <div class="relative">
                        <label for="animal_type" class="text-gray-700 dark:text-gray-200">Species</label>
                        <div class="relative">
                            <label for="animal_name" class="dark:text-gray-200 text-gray-700"></label>
                            <input type="text" name="type" id="animal_type" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 w-full dark:text-gray-200 dark:bg-gray-700"
                                onclick="toggleAnimalDropdown()">
                            <div id="animalDropdown" class="absolute mt-2 bg-white dark:bg-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg w-full max-h-32 overflow-y-auto" style="display: none;">
                                <ul class="divide-y divide-gray-200" id="animal_list">
                                    <!-- JavaScript will populate the list of animals here -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Breed -->
                    <div class="flex flex-col">
                        <label for="animal_breed" class="text-gray-700 dark:text-gray-200">Breed</label>
                        <input type="text" name="breed" id="animal_breed" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                    </div>

                    <!-- Gender -->
                    <div class="flex flex-col">
                        <label for="animal_gender" class="text-gray-700 dark:text-gray-200">Gender</label>
                        <select name="gender" id="animal_gender" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                            <option value="" label=" "></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <!-- Labels/Keywords -->
                    <div class="flex flex-col">
                        <label for="animal_keywords" class="text-gray-700 dark:text-gray-200">Labels/Keywords</label>
                        <input type="text" name="keywords" id="animal_keywords" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700" placeholder="Calf, Steer, Dairy, Stud, Fiber, Broiler, etc">
                    </div>

                    <!-- Reference Number -->
                    <div class="flex flex-col">
                        <label for="animal_internal_id" class="text-gray-700 dark:text-gray-200">Reference Number</label>
                        <input type="text" name="internal_id" id="animal_internal_id" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700" placeholder="Example: A001">
                    </div>

                    <!-- Status -->
                    <div class="flex flex-col">
                        <label for="animal_status" class="text-gray-700 dark:text-gray-200">Status</label>
                        <select name="status" id="animal_status" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                            <option value="Active" selected>Active</option>
                            <option value="Butchered">Butchered</option>
                            <option value="Culled">Culled</option>
                            <option value="Deceased">Deceased</option>
                            <option value="Butchered">Butchered</option>
                            <option value="Dry">Dry</option>
                            <option value="Finishing">Finishing</option>
                            <option value="For Sale">For Sale</option>
                            <option value="Lactating">Lactating</option>
                            <option value="Lost">Lost</option>
                            <option value="Off Farm">Off Farm</option>
                            <option value="Quarantined">Quarantined</option>
                            <option value="Reference">Reference</option>
                            <option value="Sick">Sick</option>
                            <option value="Sold">Sold</option>
                            <option value="Weaning">Weaning</option>
                            <option value="Archived">Archived</option>
                            <!-- ... (other options) ... -->
                        </select>
                    </div>
                    </div>

                    <!-- Date Deceased -->
                    <div id="dateDeceasedSection" class="mt-6" style="display: none;">
                        <div class="flex flex-col">
                            <label for="animal_death_date" class="text-gray-700 dark:text-gray-200">Date Deceased</label>
                            <input type="date" name="death_date" id="animal_death_date" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:bg-gray-800">
                        </div>

                        <div class="mt-4">
                            <label for="animal_deceased_reason" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deceased Reason</label>
                            <textarea rows="4" name="deceased_reason" id="animal_deceased_reason" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write the reason for deceased..."></textarea>
                        </div>
                    </div>
            </fieldset>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>

        </form>


        <!-- Add a hidden input field to store the animal's ID -->

    </div>


    <!-- JavaScript code -->
    <script>
        // List of animals
        const animalTypeList = [
            "Alpaca", "Bees", "Bison", "Buffalo", "Butterflies", "Camel", "Cat", "Catfish",
            "Cattle", "Chicken", "Crickets", "Deer", "Dog", "Donkey", "Duck", "Elk",
            "Emu", "Fish", "Gayal", "Goat", "Goose", "Guineafowl", "Horse", "Llama",
            "Mealworms", "Mollusk", "Mule", "Muskox", "Ostrich", "Partridge", "Peafowl",
            "Pheasant", "Pig", "Pigeon", "Pony", "Quail", "Rabbit", "Reindeer", "Rhea",
            "Salmon", "Sheep", "Shellfish", "Silkworms", "Swine", "Tilapia", "Trout",
            "Turkey", "Water buffalo", "Waxworms", "Yak", "Zebu"
        ];

        // Populate the animal dropdown with the list of animals
        const animalList = document.getElementById("animal_list");
        const animalTypeInput = document.getElementById("animal_type");
        const animalDropdown = document.getElementById("animalDropdown");

        animalTypeInput.addEventListener("click", function () {
            if (animalDropdown.style.display === "none" || animalDropdown.style.display === "") {
                animalDropdown.style.display = "block";
            } else {
                animalDropdown.style.display = "none";
            }
        });

        animalTypeList.forEach(animal => {
            const listItem = document.createElement("li");
            listItem.textContent = animal;
            listItem.className = "px-4 py-2 cursor-pointer hover:bg-blue-500";
            listItem.addEventListener("click", function () {
                animalTypeInput.value = animal;
                animalDropdown.style.display = "none";
            });
            animalList.appendChild(listItem);
        });
    </script>

<script>
    const animalStatusSelect = document.getElementById("animal_status");
    const dateDeceasedSection = document.getElementById("dateDeceasedSection");

    animalStatusSelect.addEventListener("change", function () {
        if (animalStatusSelect.value === 'Deceased') {
            dateDeceasedSection.style.display = 'block';
        } else {
            dateDeceasedSection.style.display = 'none';
        }
    });
</script>
</x-app-layout>
