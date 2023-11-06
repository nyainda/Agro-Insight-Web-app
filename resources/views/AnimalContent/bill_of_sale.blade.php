<x-app-layout title="Cards">
    <div id="bill-of-sale-content" class="container mx-auto mt-8 p-4 dark:bg-gray-700 mb-4 font-serif bg-white rounded-lg shadow-lg">
        <div class="w-12 h-12 md:w-10 md:h-10 lg:w-12 lg:h-12 font-serif rounded-full bg-gradient-to-br from-blue-500 to-purple-500 text-white flex items-center justify-center text-2xl font-bold mb-4 mx-auto">
            {{ substr($animal->name, 0, 1) }}
        </div>
        <!-- Name and Status as clickable link -->
        <div class="text-center mb-4">
            <a href="#" class="text-2xl font-serif font-semibold text-gray-800 hover:text-blue-500 transition duration-300">{{ $animal->name }}</a>
            <p class="text-lg text-red-500">{{ $animal->status }}</p>
        </div>

        <a href="javascript:void(0);" onclick="printBillOfSale()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg hidden-print">
            <i class="fas fa-print mr-2" aria-hidden="true"></i> Print Bill of Sale
        </a>




        <h2 class="text-3xl text-center dark:text-gray-200   font-bold mt-4">Livestock Sales Receipt</h2>
        <h5 class="dark:text-gray-200 text-lg mt-2">#{{ $billOfSaleId }}</h5>

        <!-- Seller and Buyer Information -->
        <table class="w-full mt-4">
            <thead>
                <tr>
                    <th colspan="4" class="dark:text-gray-200 text-left"><strong>Seller</strong></th>
                    <th colspan="4" class="dark:text-gray-200  text-left"><strong>Buyer</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="dark:text-gray-200 font-medium">Name:</td>
                    <td colspan="3">
                        <input type="text" class="w-full mb-4 dark:text-gray-200 p-2 dark:bg-gray-700 border border-gray-300 rounded-md" value="">
                    </td>
                    <td class="dark:text-gray-200 font-medium">Name:</td>
                    <td colspan="3">
                        <input type="text" class="w-full mb-4 dark:text-gray-200 p-2 dark:bg-gray-700 border border-gray-300 rounded-md" value="{{ $soldTo }}">
                    </td>
                </tr>
                <!-- Add other seller and buyer fields here -->

                <tr>
                    <td class="font-medium dark:text-gray-200">Address:</td>
                    <td colspan="3">
                        <input type="text" class="w-full mb-4 dark:text-gray-200 p-2 dark:bg-gray-700 border border-gray-300 rounded-md" value="">
                    </td>
                    <td class="dark:text-gray-200 font-medium">Address:</td>
                    <td colspan="3">
                        <input type="text" class="w-full mb-4 dark:text-gray-200 dark:bg-gray-700 p-2 border border-gray-300 rounded-md" value="">
                    </td>
                </tr>
                <tr>
                    <td class="dark:text-gray-200 font-medium">City:</td>
                    <td colspan="3">
                        <input type="text" class="w-full dark:text-gray-200 p-2 mt-4 dark:bg-gray-700 border border-gray-300 rounded-md" value="">
                    </td>
                    <td class="dark:text-gray-200 font-medium">City:</td>
                    <td colspan="3">
                        <input type="text" class="w-full dark:text-gray-200 dark:text-gray-200  p-2 mb-4  dark:bg-gray-700 border border-gray-300 rounded-md" value="">
                    </td>
                </tr>
                <tr>
                    <td class="dark:text-gray-200 font-medium">Email:</td>
                    <td colspan="3">
                        <input type="text" class="w-full dark:text-gray-200 p-2 mt-4 dark:bg-gray-700 border border-gray-300 rounded-md" value="">
                    </td>
                    <td class="dark:text-gray-200 font-medium">Email:</td>
                    <td colspan="3">
                        <input type="text" class="w-full p-2 dark:text-gray-200 mt-4 dark:bg-gray-700 border border-gray-300 rounded-md" value="">
                    </td>
                </tr>

            </tbody>
        </table>

        <!-- Additional Information -->
        <p class="mb-4 dark:text-gray-200 mt-4">
            This is to certify that the undersigned has this day <span class="text-blue-700">(Oct. 03, 2023)</span> in consideration of the sum of
            <u class="text-red-700">ksh:{{ $salePrice }}</u> sold the following described livestock. The Title to which (seller)
            <input type="text" class="w-full mbt-4  dark:bg-gray-700 border border-gray-300 rounded-md p-2" value=""> hereby guarantees:
        </p>

        <hr class="my-6">

        <!-- Livestock Information -->
        <table class="w-full">
            <tbody>
                <tr>
                    <th scope="row" class="row-header dark:text-gray-200 font-medium">Name:</th>
                    <td>
                        <input type="text" class="w-full dark:text-gray-200  mb-4 p-2 dark:bg-gray-700 border border-gray-300 rounded-md" value="{{ $animal->name }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="row-header dark:text-gray-200 font-medium">Identification:</th>
                    <td>
                        <input type="text" class="w-full dark:text-gray-200 mb-4 p-2 dark:bg-gray-700  border border-gray-300 rounded-md" value="Tag: ID:{{ $animal->electronic_id }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="row-header dark:text-gray-200  font-medium">Breed/Type:</th>
                    <td>
                        <input type="text" class="w-full dark:text-gray-200   p-2 mb-4 dark:bg-gray-700 border border-gray-300 rounded-md" value="{{ $animal->breed }} ">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="row-header dark:text-gray-200  font-medium">Sex:</th>
                    <td>
                        <input type="text" class="w-full dark:text-gray-200   mb-4 dark:bg-gray-700 p-2 border border-gray-300 rounded-md" value="{{ $animal->gender }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="row-header dark:text-gray-200  font-medium">Birth Date:</th>
                    <td>
                        <input type="text" class="w-full mb-4 dark:text-gray-200   dark:bg-gray-700 p-2 border border-gray-300 rounded-md" value="{{ $animal->birth_date }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="row-header dark:text-gray-200  font-medium">Animal_Weight:</th>
                    <td>
                        <input type="text" class="w-full dark:text-gray-200   p-2 mb-4 dark:bg-gray-700 border border-gray-300 rounded-md" value="{{ $animal->weight }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="row-header dark:text-gray-200  font-medium">Body Condition Score</th>
                    <td>
                        <input type="text" class="w-full dark:text-gray-200  mb-4 dark:bg-gray-700 p-2 border border-gray-300 rounded-md" value="{{ $animal->body_condition_score }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="row-header dark:text-gray-200  dark:bg-gray-700 font-medium">Body Condition Score</th>
                    <td>
                        <input type="text" class="w-full mb-4 dark:text-gray-200   dark:bg-gray-700 p-2 border border-gray-300 rounded-md" value="{{$animal->body_condition_score}}">
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="row-header dark:text-gray-200   font-medium">Description:</th>
                    <td>
                        <input type="text" class="w-full mt-4 dark:text-gray-200  dark:bg-gray-700 p-2 border border-gray-300 rounded-md" value="{{ $descriptions }}">
                    </td>
                </tr>
            </tbody>
        </table>

        <hr class="my-6">

        <div class="mt-8">
            <p class="dark:text-gray-200 mb-2">Signature of Seller <input type="text" class="w-1/3 border dark:text-gray-200  dark:bg-gray-700 border-gray-300 rounded-md p-2" value=""> Date: <input type="text" class="w-1/3 border border-gray-300 dark:bg-gray-700 rounded-md p-2" value=""></p>
            <p class="dark:text-gray-200 mb-2">Signature of Buyer <input type="text" class="w-1/3 dark:text-gray-200  dark:bg-gray-700 border border-gray-300 rounded-md p-2" value=""> Date: <input type="text" class="w-1/3 mt-4 border border-gray-300 dark:bg-gray-700 rounded-md p-2" value=""></p>
        </div>
    </div>

</x-app-layout>
<script>
    function printBillOfSale() {
        var printContent = document.getElementById("bill-of-sale-content");
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContent.innerHTML;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
