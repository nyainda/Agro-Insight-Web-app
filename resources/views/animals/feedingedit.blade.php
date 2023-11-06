

    <x-app-layout title="Forms">

        <!-- Include Font Awesome for icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <div class="container mx-auto mt-8 p-4 mb-4 bg-white dark:bg-gray-700 dark:rounded-lg dark:shadow-lg">
            <form action="{{ route('feeding.update', ['animal_id' => $animal->id, 'feeding_id' => $feeding->id]) }}" method="POST">
                @csrf <!-- Add CSRF token -->
                @method('PUT')
                <h3 class="text-2xl font-serif dark:text-gray-100 font-semibold text-gray-800 mb-4">Edit {{$animal->name}} Feeding</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label for="feeding_Subtract from Inventory" class="block font-serif text-sm font-medium text-gray-700">Subtract from Inventory</label>
                        <div class="mt-1">
                            <a href="/inventories" class="font-serif text-blue-500">No Available Inventory</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 font-serif md:grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label for="feeding_Amount Fed" class="block text-sm font-serif font-medium dark:text-gray-200  text-gray-700">Amount Fed</label>
                        <input class="form-input dark:bg-gray-700 mt-1 w-full" placeholder="Enter Amount Fed" step="any" max="1000000" required="required" type="number" value="{{$feeding->amount}}" name="amount" id="feeding_amount" />
                    </div>
                    <div class="col-span-1">
                        <label for="feeding_unit" class="block text-sm font-serif dark:text-gray-200  font-medium text-gray-700">Unit</label>
                        <select class="form-select dark:text-gray-200 font-serif dark:bg-gray-700  mt-1 w-full" required="required" value="{{$feeding->unit}}" name="unit" id="feeding_unit">
                            <option value="" label=" "></option>
                            <option value="bales">Bales</option>
                            <option value="ounces">Ounces</option>
                            <option selected="selected" value="pounds">Pounds</option>
                            <option value="quantity">Quantity</option>
                            <option value="tons">Tons</option>
                            <!-- Add more unit options as needed -->
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-1">
                        <label for="feeding_Feed Details" class="block mt-2 text-sm font-serif font-medium dark:text-gray-200 text-gray-700">Feed Details</label>
                        <input class="form-input dark:text-gray-200 dark:bg-gray-700 font-serif  mt-1 w-full" type="text" placeholder="Enter Feed Details" value="{{$feeding->feed_details}}" name="feed_details" id="feeding_type" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <label for="feeding_Feed Weight" class="block mt-2 text-smd dark:text-gray-200  font-serif font-medium text-gray-700">Feed Weight</label>
                        <div class="flex mt-1">
                            <input class="form-input font-serif  dark:text-gray-200 dark:bg-gray-700 w-full" step=".1" min="0" max="100000" type="number" placeholder="Enter Feed Weight" value="{{$feeding->feed_weight}}" name="feed_weight" id="feeding_weight" />
                            <select class="form-select dark:text-gray-200 font-serif dark:bg-gray-700 w-full  ml-2" value="{{$feeding->weight_unit}}" name="weight_unit" id="feeding_weight_unit">
                                <option value="lbs">lbs</option>
                                <option value="kg">kg</option>
                                <option value="g">g</option>
                                <option value="oz">oz</option>
                                <!-- Add more weight unit options as needed -->
                            </select>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <label for="feeding_Estimated Cost" class="block mt-2 text-sm font-serif dark:text-gray-200 font-medium text-gray-700">Estimated Cost</label>
                        <div class="flex mt-1">
                            <select class=" dark:bg-gray-700 dark:text-gray-200 w-full font-serif form-select" value="{{$feeding->feeding_currency}}" name="feeding_currency" id="feeding_currency">
                                <option value="USD">$ USD</option>
                                <option value="EUR">€ EUR</option>
                                <option value="GBP">£ GBP</option>
                                <option value="JPY">¥ JPY</option>
                                <option value="KES">KES Ksh</option>
                                <!-- Add more currency options as needed -->
                            </select>
                            <input class="form-input dark:text-gray-200 dark:bg-gray-700 font-serif   w-full ml-2" step=".1" min="0" max="100000000" type="number" placeholder="Enter Estimated Cost" value="{{$feeding->estimated_cost}}" name="estimated_cost" id="feeding_cost" />
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-1">
                        <label for="feeding_Details/Notes" class="block mt-2 text-sm font-serif dark:text-gray-200 font-medium text-gray-700">Details/Notes</label>
                        <textarea rows="3" class="form-textarea dark:text-gray-200 font-serif  dark:bg-gray-700   mt-1 w-full" placeholder="Enter Details/Notes" value="{{$feeding->feeding_description}}" name="feeding_description" id="feeding_description"></textarea>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <label for="feeding_Feeding Date" class="block mt-2 font-serif dark:text-gray-200 text-sm font-medium text-gray-700">Feeding Date</label>
                        <input class="form-input dark:text-gray-200 dark:bg-gray-700 font-serif   mt-1 w-full" value="2023-10-04" type="date" value="{{$feeding->feeding_date}}" name="feeding_date" id="feeding_date" />
                    </div>
                  {{--}}  <div class="col-span-1">
                        <label for="repeat_days" class="block text-sm dark:text-gray-200 dark:bg-gray-700  font-serif  font-medium text-gray-700">Repeat for N Days of feeding</label>
                        <input type="number" name="repeat_days" id="repeat_days" class="form-input font-serif dark:text-gray-200 dark:bg-gray-700 " min="1" value="1" placeholder="Enter Number of Days" />
                    </div>--}}
                </div>

               {{--}} <div class="mt-4">
                    <div class="flex justify-end">

                        <a href="{{ route('animals.showfeeding', ['animal_id' => $animal->id]) }}" class="btn btn-gray-500">Cancel</a>

                        <input type="submit" name="commit" value="Save" class="btn btn-primary ml-3" />
                    </div>
                </div>--}}
                <div class="flex justify-end mt-6">
                    <button type="button" class="px-3 py-2 text-sm mr-4 mb-4 dark:text-gray-100  tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">

                        <a href="{{ route('animals.showfeeding', ['animal_id' => $animal->id]) }}" class="btn btn-gray-500">Cancel</a>
                    </button>
                    <button type="submit" name="action" value="save"  class="px-3 btn btn-success mb-4 py-2 text-sm mr-4 tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        Save
                    </button>


                </div>
            </form>
        </div>
    </x-app-layout>

