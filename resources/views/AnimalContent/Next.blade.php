<x-app-layout title="Cards">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>


    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold">Add Livestock Group</h1>
        </div>
        <form class="new_livestock_group" id="new_livestock_group" action="{{ route('new') }}" accept-charset="UTF-8">
            <div id="error_explanation"></div>

            <!-- Tab Content -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="settings">
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2" for="livestock_group_name">Group Name</label>
                        <input class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" required="required" type="text" name="livestock_group[name]" id="livestock_group_name">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2" for="livestock_group_description">Description</label>
                        <textarea class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" rows="3" name="livestock_group[description]" id="livestock_group_description"></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Options</label>
                        <div class="flex items-center">
                            <input name="livestock_group[active_only]" type="hidden" value="0">
                            <input type="checkbox" value="1" name="livestock_group[active_only]" id="livestock_group_active_only" class="mr-2">
                            <label for="livestock_group_active_only" class="text-gray-600">Include Active Animals Only</label>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Group Type</label>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input class="js-group-type mr-2" type="radio" value="Smart" checked="checked" name="livestock_group[type]" id="livestock_group_type_smart">
                                <label for="livestock_group_type_smart" class="text-gray-600">Smart Group - Automatically assign animals</label>
                            </div>
                            <div class="flex items-center">
                                <input class="js-group-type mr-2" type="radio" value="Basic" name="livestock_group[type]" id="livestock_group_type_basic">
                                <label for="livestock_group_type_basic" class="text-gray-600">Basic Group - Manually assign animals</label>
                            </div>
                            <div class="flex items-center">
                                <input class="js-group-type mr-2" type="radio" value="Set" name="livestock_group[type]" id="livestock_group_type_set">
                                <label for="livestock_group_type_set" class="text-gray-600">Set - Track records for multiple animals, like a flock together</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-8">
                <a class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 transition duration-300 ease-in-out" href="">Cancel</a>
                <input type="submit" name="commit" value="Next" class="bg-green-500 text-white px-4 py-2 ml-4 rounded hover:bg-green-600 transition duration-300 ease-in-out">
            </div>
        </form>
    </div>


</x-app-layout>
