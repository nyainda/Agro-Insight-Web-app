
<x-app-layout title="measurements">


    <!-- Modal Content -->
    <div class="container mx-auto font-serif  mt-8 p-4 mb-4 bg-gray-20  dark:bg-gray-800 dark:rounded-lg shadow-lg">
        <!-- Modal Header -->

            <h3 class="text-lg dark:text-gray-200  font-semibold">New Measurement</h3>


        <!-- Modal Body -->
        <div class="p-4">
            <form action="{{ route('animals.storemeasurement', ['animal_id' => $animal->id]) }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label for="measurement_weight" class="block font-serif dark:text-gray-200  text-sm mt-4 font-medium text-gray-700">Weight</label>
                        <div class="input-group">
                            <input class="form-input dark:bg-gray-700 dark:text-gray-200 mt-2 w-full" placeholder="Enter Weight" max="100000" step="any"  type="number" name="weight" id="measurement_weight">
                            <span class="font-serif dark:text-gray-200  input-group-addon">kg</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="measurement_height" class="block  font-serif dark:text-gray-200  mt-4 text-sm font-medium text-gray-700">Height</label>
                        <div class="input-group">
                            <input class="form-input mt-2 dark:bg-gray-700 dark:text-gray-200 w-full" placeholder="Enter Height" step="any" max="1000" type="number"  name="height" id="measurement_height">
                            <span class="font-serif dark:text-gray-200  input-group-addon">meter</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="measurement_condition_score" class="block dark:text-gray-200  text-sm font-medium text-gray-700">Condition score</label>
                        <div class="input-group">
                            <input class="form-input mt-2 dark:bg-gray-700 dark:text-gray-200 w-full" step=".5" min="0" max="100" type="number" name="condition_score" id="measurement_condition_score">
                            <span class=" font-serif dark:text-gray-200  input-group-addon">BCS</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="measurement_temp" class="block text-sm dark:text-gray-200  font-medium text-gray-700">Temperature</label>
                        <div class="input-group">
                            <input class="form-input mt-2 dark:bg-gray-700 dark:text-gray-200 w-full" step=".5" min="0" max="200" type="number" name="temp" id="measurement_temp">
                            <span class=" font-serif dark:text-gray-200  input-group-addon">ºC</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="measurement_fec" class="block text-sm dark:text-gray-200  font-medium text-gray-700">Fecal egg count</label>
                        <div class="input-group">
                            <input class="form-input dark:bg-gray-700 dark:text-gray-200 mt-2 w-full" step="1" min="0" max="99999"  type="number" name="fec" id="measurement_fec">
                            <span class="font-serif dark:text-gray-200  input-group-addon">FEC</span>
                        </div>
                    </div>


                    <!-- Additional Fields -->
                    <div class="mb-4">
                        <label for="measurement_heart_rate" class="block dark:text-gray-200  text-sm font-medium text-gray-700">Heart Rate</label>
                        <div class="input-group">
                            <input class="form-input dark:bg-gray-700 dark:text-gray-200 mt-2  w-full" step="1" min="0" max="300"  type="number" name="heart_rate" id="measurement_heart_rate">
                            <span class="font-serif dark:text-gray-200  input-group-addon">bpm</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="measurement_respiratory_rate" class="block dark:text-gray-200  text-sm font-medium text-gray-700">Respiratory Rate</label>
                        <div class="input-group">
                            <input class="form-input dark:bg-gray-700 dark:text-gray-200 mt-2 w-full" step="1" min="0" max="100"  type="number" name="respiratory_rate" id="measurement_respiratory_rate">
                            <span class="font-serif dark:text-gray-200  input-group-addon">breaths/min</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="measurement_systolic_bp" class="block text-sm dark:text-gray-200  font-medium text-gray-700">Systolic Blood Pressure</label>
                        <div class="input-group">
                            <input class="form-input dark:bg-gray-700 dark:text-gray-200 mt-2 w-full" step="1" min="0" max="300"  type="number" name="systolic_bp" id="measurement_systolic_bp">
                            <span class="font-serif dark:text-gray-200  input-group-addon">mmHg</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="measurement_diastolic_bp" class="block text-sm dark:text-gray-200  font-medium text-gray-700">Diastolic Blood Pressure</label>
                        <div class="input-group">
                            <input class="form-input dark:bg-gray-700 dark:text-gray-200 mt-2 w-full" step="1" min="0" max="200" type="number" name="diastolic_bp" id="measurement_diastolic_bp">
                            <span class="font-serif dark:text-gray-200  input-group-addon">mmHg</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="measurement_pulse_oximetry" class="block text-sm dark:text-gray-200   font-medium text-gray-700">Pulse Oximetry (SpO2)</label>
                        <div class="input-group">
                            <input class="form-input dark:bg-gray-700 dark:text-gray-200 mt-2 w-full" step=".1" min="0" max="100"  type="number" name="pulse_oximetry" id="measurement_pulse_oximetry">
                            <span class="font-serif dark:text-gray-200  input-group-addon">%</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="measurement_date" class="block dark:text-gray-200  font-serif  text-sm font-medium text-gray-700">Measurement date</label>
                        <input class="form-input dark:bg-gray-700 dark:text-gray-200 mt-2 w-full"  type="date" name="date" id="measurement_date">
                    </div>

                </div>
<hr class="mt-4">
                <div class="flex justify-end  mt-6">
                    <button type="button" class="px-3 py-2 text-sm mr-4 mb-4 dark:text-gray-100  tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">

                        <a href="{{ route('index')}}" class="btn btn-gray-500">Cancel</a>
                    </button>
                    <button type="submit" name="action" value="save"  class="px-3 btn btn-success mb-4 py-2 text-sm mr-4 tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        Save
                    </button>
            </form>

    </div>


</x-app-layout>
