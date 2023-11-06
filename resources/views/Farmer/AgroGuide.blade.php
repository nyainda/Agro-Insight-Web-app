<x-app-layout title="Cards">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <div class="container mx-auto mt-8 p-4 dark:bg-gray-700 dark:shadow-md">
        <form x-data="{ showDeathDate: false, showAnimalDropdown: false, animalType: '' }" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
            <fieldset>
                <legend class="text-lg font-semibold mb-4 text-gray-700 dark:text-gray-200">Basic Information</legend>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Identification -->
                    <div class="flex flex-col">
                        <label for="animal_name" class="dark:text-gray-200 text-gray-700">Identification</label>
                        <input type="text" name="animal[name]" id="animal_name" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                    </div>

                    <!-- Species -->
                    <div class="relative">
                        <label for="animal_type" class="text-gray-700 dark:text-gray-200">Species</label>
                        <div class="relative">
                        <label for="animal_name" class="dark:text-gray-200 text-gray-700"></label>
                            <input type="text" name="animal[type]" id="animal_type" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 w-full dark:text-gray-200  dark:bg-gray-700"
                                x-on:click="showAnimalDropdown = !showAnimalDropdown" x-model="animalType">
                            <div x-show="showAnimalDropdown" class="absolute mt-2 bg-white dark:bg-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-600 rounded-lg shadow-lg w-full max-h-32 overflow-y-auto">
                                <ul class="divide-y divide-gray-200" id="animal_list">
                                    <!-- JavaScript will populate the list of animals here -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Breed -->
                    <div class="flex flex-col">
                        <label for="animal_breed" class="text-gray-700 dark:text-gray-200">Breed</label>
                        <input type="text" name="animal[breed]" id="animal_breed" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                    </div>

                    <!-- Gender -->
                    <div class="flex flex-col">
                        <label for="animal_gender" class="text-gray-700 dark:text-gray-200">Gender</label>
                        <select name="animal[gender]" id="animal_gender" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                            <option value="" label=" "></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <!-- Labels/Keywords -->
                    <div class="flex flex-col">
                        <label for="animal_keywords" class="text-gray-700 dark:text-gray-200">Labels/Keywords</label>
                        <input type="text" name="animal[keywords]" id="animal_keywords" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700" placeholder="Calf, Steer, Dairy, Stud, Fiber, Broiler, etc">
                    </div>

                    <!-- Reference Number -->
                    <div class="flex flex-col">
                        <label for="animal_internal_id" class="text-gray-700 dark:text-gray-200">Reference Number</label>
                        <input type="text" name="animal[internal_id]" id="animal_internal_id" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700" placeholder="Example: A001">
                    </div>

                    <!-- Status -->
                    <div class="flex flex-col">
                        <label for="animal_status" class="text-gray-700 dark:text-gray-200">Status</label>
                        <select name="animal[status]" id="animal_status" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700" x-on:change="showDeathDate = ($event.target.value === 'Deceased')">
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
                        </select>
                    </div>
                </div>

                <!-- Date Deceased -->
                <div x-show="showDeathDate" class="mt-6">
                    <div class="flex flex-col">
                        <label for="animal_death_date" class="text-gray-700 dark:text-gray-200">Date Deceased</label>
                        <input type="date" name="animal[death_date]" id="animal_death_date" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:bg-gray-800">
                    </div>


                    <div class="mt-4">
                        <label for="animal_deceased_reason" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deceased Reason</label>
                        <textarea rows="4" name="animal[deceased_reason]" id="animal_deceased_reason" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write the reason for deceased..."></textarea>
                    </div>
                </div>
            </fieldset>
        </form>
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
        animalTypeList.forEach(animal => {
            const listItem = document.createElement("li");
            listItem.textContent = animal;
            listItem.className = "px-4 py-2 cursor-pointer hover:bg-blue-500";
            listItem.addEventListener("click", function () {
                document.getElementById("animal_type").value = animal;
                document.querySelector('[x-data]').__x.$data.showAnimalDropdown = false;
            });
            animalList.appendChild(listItem);
        });
    </script>
</x-app-layout>
