<x-app-layout title="Cards">
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
        <div x-data="{ activeTab: 'settings' }">
            <form class="edit_livestock_group" id="edit_livestock_group_650ec6e9234bb100084ef63f" action="/livestock_groups/650ec6e9234bb100084ef63f" accept-charset="UTF-8" method="post">
                @method('PATCH')
                @csrf

                <!-- Error Messages -->
                <div id="error_explanation"></div>

                <!-- Tabs -->
                <div class="border-b border-gray-300">
                    <ul class="flex">
                        <li class="mr-3">
                            <a href="#" @click="activeTab = 'settings'" :class="{ 'border-b-2 border-blue-500': activeTab === 'settings' }" class="text-blue-500 py-2 px-4 hover:border-blue-700">Settings</a>
                        </li>
                        <li class="mr-3">
                            <a href="#" @click="activeTab = 'filters'" :class="{ 'border-b-2 border-blue-500': activeTab === 'filters' }" class="text-blue-500 py-2 px-4 hover:border-blue-700">Filters</a>
                        </li>
                        <li>
                            <a href="#" @click="activeTab = 'fields'" :class="{ 'border-b-2 border-blue-500': activeTab === 'fields' }" class="text-blue-500 py-2 px-4 hover:border-blue-700">Columns (optional)</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="p-4">
                    <div x-show="activeTab === 'settings'">
                        <!-- Settings Tab -->
                        <div class="mb-6">
                            <label for="livestock_group_name" class="block text-gray-700 font-semibold mb-2">Group Name</label>
                            <div class="relative rounded-md shadow-sm">
                                <input type="text" value="jk" name="livestock_group[name]" id="livestock_group_name" class="form-input block w-full py-2 px-3 border rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="livestock_group_description" class="block text-gray-700 font-semibold mb-2">Description</label>
                            <textarea rows="3" name="livestock_group[description]" id="livestock_group_description" class="form-textarea block w-full py-2 px-3 border rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="inline-flex items-center">
                                <input type="hidden" name="livestock_group[active_only]" value="0">
                                <input type="checkbox" value="1" name="livestock_group[active_only]" id="livestock_group_active_only" class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Include Active Animals Only</span>
                            </label>
                        </div>
                    </div>

                    <div x-show="activeTab === 'filters'">
                        <!-- Filters Tab -->
                        <h4>Group Filters</h4>
                        <h6>Filter and limit the records that are included on your group</h6>
                        <hr>
                        <!-- ... (Advanced Filters) -->

                    </div>

                    <div x-show="activeTab === 'fields'">
                        <!-- Fields Tab -->
                        <!-- ... (Columns Optional) -->

                    </div>
                    <div class="mt-6 flex justify-end">
                        <a href="" class="px-4 py-2 text-gray-600 hover:text-gray-800 border rounded-lg border-gray-400 hover:border-gray-600 mr-2">Cancel</a>
                        <input type="submit" name="commit" value="Save" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 focus:outline-none focus:bg-green-600">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>


</x-app-layout>
