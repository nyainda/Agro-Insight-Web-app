<x-app-layout title="Cards">

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>
    <div class="container mx-auto mt-8 p-4 font-serif ">
        @if($errors->hasBag('requiredFields'))
        <div class="alert alert-danger">
            <strong class="dark:text-gray-100">Oops! Some required fields are missing:</strong>
            <ul class="list-disc ml-5">
                @foreach($errors->requiredFields->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="container mx-auto mt-8 p-4 font-serif dark:bg-gray-700 dark:shadow-md">
        <form action="{{ route('AnimalContent.storebill', ['animal_id' => $animal->id]) }}" method="POST" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
            @csrf
                    <div class="mt-4">
                        <label for="bill_of_sale_id" class="block dark:text-gray-200 text-gray-600 text-sm font-medium">Bill of Sale #:NB/This will be generated automatically</label>
                        <input type="text" name="bill_of_sale_id" id="bill_of_sale_id" placeholder="This will be generated automatically " value="#{{ $billOfSaleId }}" class="mt-1 p-3 w-full dark:bg-gray-700  dark:text-gray-200 rounded-md border border-gray-300 focus:ring focus:ring-blue-200">
                    </div>

                    <div class="mt-4">
                        <label for="descriptions" class="block dark:text-gray-200 text-gray-600 text-sm font-medium">Note</label>
                        <textarea name="descriptions" id="descriptions" rows="4" class="mt-1 p-3 dark:bg-gray-700 w-full rounded-md border border-gray-300 focus:ring focus:ring-blue-200"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div class="col-span-1">
                            <label for="date" class="block dark:text-gray-200 text-gray-600 text-sm font-medium">Date</label>
                            <input type="date" name="date" id="date" value="2023-10-02" class="mt-1 p-3 dark:bg-gray-700 dark:text-gray-200 w-full rounded-md border border-gray-300 focus:ring focus:ring-blue-200">
                        </div>
                        <div class="col-span-1">
                            <label for="keyword" class="block dark:text-gray-200 text-gray-600 text-sm font-medium">Keywords</label>
                            <input type="text" name="keyword" id="keyword" class="mt-1 p-3 dark:bg-gray-700  w-full rounded-md border border-gray-300 focus:ring focus:ring-blue-200" placeholder="example: vet, insects, maintenance, etc" maxlength="100">
                        </div>
                    </div>

                    <hr class="mt-6">

                    <!-- Sale Information -->
                    <div class="mt-4">
                        <h4 class="text-xl dark:text-gray-200 font-semibold">Sale Information</h4>
                    </div>

                    <div class="mt-4">
                        <label for="sold_to" class="block dark:text-gray-200 text-gray-600 text-sm font-medium">Sold to</label>
                        <input type="text" name="sold_to" id="sold_to" class="mt-1 dark:bg-gray-700 p-3 w-full rounded-md border border-gray-300 focus:ring focus:ring-blue-200" placeholder="E.g:bruce oyugi">
                    </div>

                    <div class="mt-4">
                        <label class="block dark:text-gray-200 text-gray-600 text-sm font-medium">
                            <input type="checkbox" name="record_transaction" id="record_transaction" checked="checked" class="  form-checkbox">
                            Record Income Transaction
                        </label>
                    </div>

                    <div class="mt-4">
                        <label class="block dark:text-gray-200 text-gray-600 text-sm font-medium">
                            <input type="checkbox" name="bill_of_sale" id="bill_of_sale" checked="checked" class=" form-checkbox">
                            Generate a Bill of Sale
                        </label>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div class="col-span-1">
                            <label for="sale_price" class="block dark:text-gray-200 text-gray-600 text-sm font-medium">Total sale price</label>
                            <div class="flex items-center mt-1 relative rounded-md shadow-sm">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </span>
                                <input type="number" name="sale_price" id="sale_price" value="0" class="pl-7 pr-3 dark:bg-gray-700 p-3 w-full rounded-md border border-gray-300 focus:ring focus:ring-blue-200" placeholder="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="button" class="px-3 py-2 text-sm mr-4 mb-4 dark:text-gray-100  tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
                        </button>
                        <button type="submit"  class="px-3 btn btn-success mb-4 py-2 text-sm mr-4 tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Save
                        </button>


                   {{-- <button
    x-data="{ redirectTo: '{{ route('index') }}' }"
    @click.window="window.location.href = redirectTo"
    class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50"
>
    Save
</button>--}}


                 </form>
    </div>





</x-app-layout>


{{--<div class="flex font-serif flex-col">
    <label for="note_category" class="text-gray-700 font-serif dark:text-gray-200">category</label>
        <select name="category]" id="note_category" class="border font-serif rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700" required>

        <option value=""></option>
        <option value="Breeding">Breeding</option>
        <option value="Deworming">Deworming</option>
        <option value="General">General</option>
        <option value="Grazing">Grazing</option>
        <option value="Grooming">Grooming</option>
        <option value="Injury">Injury</option>
        <option value="Medication">Medication</option>
        <option value="Moved">Moved</option>
        <option value="Pregnancy Check">Pregnancy Check</option>
        <option value="Supplement">Supplement</option>
        <option value="Vaccination">Vaccination</option>
        <option value="Veterinarian">Veterinarian</option>
        <option value="Other">Other</option>
    </select>
</div>
<div class="mt-4">
    <label for="attachment" class="block text-gray-600 text-sm font-medium">Attachment</label>
    <input type="file" name="attachment" id="attachment" class="mt-1 p-3 w-full rounded-md border border-gray-300 focus:ring focus:ring-blue-200">
</div>--}}
