<x-app-layout title="Yield Record">
    <form action="{{ route('animals.storeyieldrecord', ['animal_id' => $animal->id]) }}" method="POST">
        @csrf
    <div class="container grid font-serif gap-4 dark:text-gray-200 grid-cols-2 mx-auto mt-8 p-4 mb-4 bg-gray-20 dark:bg-gray-700 dark:rounded-lg shadow-lg">
        <h2 class="text-2xl font-serif  font-semibold col-span-2">Yield Record</h2>


        <!-- Product (What the Animal Gives) -->
        <div class="mb-4 col-span-2">
            <label for="product" class="block text-gray-700 dark:text-gray-200 text-sm font-medium mb-2">Product</label>
            <select id="product" name="product" class="w-full dark:bg-gray-700 dark:text-gray-200 px-3 py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" required>
                <option value="milk">Milk</option>
<option value="eggs">Eggs</option>
<option value="wool">Wool</option>
<option value="meat">Meat</option>
<option value="honey">Honey</option>
<option value="feathers">Feathers</option>
<option value="fur">Fur</option>
<option value="leather">Leather</option>
<option value="oil">Oil</option>
<option value="antlers">Antlers</option>
<option value="quills">Quills</option>
<option value="silk">Silk</option>
<option value="bone">Bone</option>
<option value="pelt">Pelt</option>
<option value="carapace">Carapace</option>
<option value="pearls">Pearls</option>
<option value="lard">Lard</option>
<option value="seafood">Seafood</option>
<option value="manure">Manure</option>
<option value="nectar">Nectar</option>
<option value="tallow">Tallow</option>
<option value="bristles">Bristles</option>
<option value="lanolin">Lanolin</option>
<option value="tusks">Tusks</option>
<option value="venom">Venom</option>
<option value="feet">Feet</option>
<option value="scales">Scales</option>
<option value="exoskeleton">Exoskeleton</option>
<option value="gall">Gall</option>
<option value="feet">Feet</option>
<option value="syrup">Syrup</option>
<option value="sperm">Sperm</option>
<option value="nacre">Nacre</option>
<option value="tissues">Tissues</option>
<option value="bark">Bark</option>
<option value="roots">Roots</option>
<option value="seeds">Seeds</option>
<option value="foliage">Foliage</option>

                <!-- Add more options for different products -->
            </select>
        </div>

        <div class="mb-4">
            <label for="quantity" class="block text-gray-700 dark:text-gray-200 text-sm font-medium mb-2">Quantity</label>
            <input type="number"  id="quantity" name="quantity" class="w-full dark:bg-gray-700 dark:text-gray-200  px-3 py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" placeholder="Quantity" required>
        </div>

        <div class="mb-4">
            <label for="trace_number" class="block text-gray-700 dark:text-gray-200 text-sm font-medium mb-2">Trace Number</label>
            <input type="text" id="trace_number" name="trace_number" class="w-full dark:bg-gray-700 dark:text-gray-200  px-3 py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" placeholder="N/B Trace Number will be generated outomatically ">
        </div>

        <div class="mb-4">
            <label for="date" class="block text-gray-700 text-sm dark:text-gray-200 font-medium mb-2">Date</label>
            <input type="date" id="date" name="date" class="w-full px-3 dark:bg-gray-700 dark:text-gray-200  py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="quality" class="block text-gray-700 text-sm dark:text-gray-200 font-medium mb-2">Quality</label>
            <select id="quality" name="quality" class="w-full px-3 dark:bg-gray-700 dark:text-gray-200  py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" required>
                <option value="liters">Liters</option>
                <option value="kilograms">Kilograms</option>
                <option value="Pieces">Pieces</option>
                <option value="Grams">Grams</option>
                <!-- Add more options for different units of measurement -->
            </select>
        </div>

        <div class="mb-4">
            <label for="grade" class="block text-gray-700 text-sm dark:text-gray-200 font-medium mb-2">Grade</label>
            <select id="grade" name="grade" class="w-full px-3 dark:bg-gray-700 dark:text-gray-200  py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="Premium">Premium</option>
                <option value="Choice">Choice</option>
                <option value="Standard">Standard</option>
                <!-- Add more options for different grades -->
            </select>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 text-sm dark:text-gray-200 font-medium mb-2">Price</label>
            <input type="number" id="price" name="price" class="w-full dark:bg-gray-700 dark:text-gray-200  px-3 py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" placeholder="Price in $" required>
        </div>

        <!-- Additional Fields -->
        <div class="mb-4">
            <label for="batch" class="block text-gray-700 text-sm dark:text-gray-200 font-medium mb-2">Batch/Group</label>
            <input type="text" id="batch" name="batch" class="w-full dark:bg-gray-700 dark:text-gray-200  px-3 py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" placeholder="Batch/Group">
        </div>

        <div class="mb-4">
            <label for="collector" class="block text-gray-700 text-sm dark:text-gray-200 font-medium mb-2">Collector/Operator</label>
            <input type="text" id="collector" name="collector" class="w-full px-3 dark:bg-gray-700 dark:text-gray-200  py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" placeholder="Collector/Operator">
        </div>

        <div class="mb-4">
            <label for="yield_method" class="block text-gray-700 text-sm dark:text-gray-200 font-medium mb-2">Yield Method</label>
            <select id="yield_method" name="yield_method" class="w-full px-3 dark:bg-gray-700 dark:text-gray-200  py-2 border rounded shadow-sm focus:outline-none focus:border-blue-500" required>
                <option value="hand-milking">Hand </option>
                <option value="machine-milking">Machine</option>
                <option value="manual-collection">Manual Collection</option>
                <!-- Add more options for different yield methods -->
            </select>
        </div>

        <div class="grid grid-cols-1 gap-4">
            <div class="col-span-1">
                <label for="feeding_Details/Notes" class="block text-sm font-serif dark:text-gray-200 font-medium text-gray-700">Details/Notes</label>
                <textarea rows="3" class="form-textarea dark:text-gray-200 font-serif  dark:bg-gray-700   mt-1 w-full" placeholder="Enter Details/Notes" value="" name="yield_description" id="feeding_description"></textarea>
            </div>
        </div>

        <div class="mb-4 col-span-2">
            <label for="yield_time" class="block text-gray-700 dark:text-gray-200 text-sm font-medium mb-2">Yield Time</label>
            <div class="relative rounded-md shadow-sm">
                <input type="time" id="yield_time" name="yield_time" class="w-full pl-3 pr-10 dark:bg-gray-700 dark:text-gray-200  py-2 border rounded focus:outline-none focus:border-blue-500" required>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.293 4.293a1 1 0 011.414-1.414L9 8.586V12a1 1 0 11-2 0V8.586l-3.293-3.293a1 1 0 111.414-1.414L9 10.172l-5.293-5.293a1 1 0 111.414-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
<hr class="mb-4  col-span-2">
        <div class="flex col-span-2 justify-end  mt-6">
            <button type="button" class="px-3 py-2 text-sm mr-4 mb-4 dark:text-gray-100  tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">

                <a href="{{ route('index')}}" class="btn btn-gray-500">Cancel</a>
            </button>
            <button type="submit" name="action" value="save"  class="px-3 btn btn-success mb-4 py-2 text-sm mr-4 tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                Save
            </button>
        </div>

    </div>

</form>
</x-app-layout>

