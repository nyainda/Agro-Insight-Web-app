<x-app-layout title="Cards">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Cards
        </h2>

        <!-- Big section cards -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Big section cards
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Large, full width sections goes here
            </p>
        </div>

        <!-- Responsive cards -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Responsive cards
        </h4>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total clients
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        6389
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Account balance
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        $ 46,760.89
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        New sales
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        376
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Pending contacts
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        35
                    </p>
                </div>
            </div>
        </div>

        <!-- Cards with title -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Cards with title
        </h4>
        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                    Revenue
                </h4>
                <p class="text-gray-600 dark:text-gray-400">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                    quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                    nihil dolorum.
                </p>
            </div>
            <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
                <h4 class="mb-4 font-semibold">
                    Colored card
                </h4>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                    quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                    nihil dolorum.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
<fieldset>
    <legend>Physical Characteristics</legend>
      <div class="form-group">
        <label class="col-md-3 control-label" for="animal_neutered">Neutered</label>
        <div class="col-md-4">
          <div class="checkbox">
              <label>
                <input name="animal[is_neutered]" type="hidden" value="0"><input type="checkbox" value="1" name="animal[is_neutered]" id="animal_is_neutered"> Neutered
              </label>
          </div>
        </div>
      </div>

        <div class="form-group">
          <label class="col-md-3 control-label" for="animal_breeding_stock">Is Breeding Stock</label>
          <div class="col-md-4">
              <div class="checkbox">
                <label>
                  <input name="animal[breeding_stock]" type="hidden" value="0"><input type="checkbox" value="1" name="animal[breeding_stock]" id="animal_breeding_stock"> Breeding Stock
                </label>
              </div>
          </div>
        </div>


     <div class="form-group">
      <label class="col-md-3 control-label" for="animal_coloring">Coloring</label>
      <div class="col-md-4">
        <input class="form-control" placeholder="Brown, white, Black, etc" type="text" name="animal[coloring]" id="animal_coloring">
      </div>
    </div>




    <div class="form-group">
      <label class="col-md-3 control-label" for="animal_description">Description</label>
      <div class="col-md-6">
        <textarea class="wysiwyg form-control" rows="3" name="animal[description]" id="animal_description"></textarea>
      </div>
    </div>
</fieldset>

<fieldset>
    <legend>Identification</legend>


          <div class="form-group">
            <label class="col-md-3 control-label" for="animal_tag_number">Tag number(s)</label>
            <div class="col-md-3">
              <input class="form-control" type="text" name="animal[tag_number]" id="animal_tag_number">
            </div>
            <div class="col-md-2">
              <input class="form-control" placeholder="Color" type="text" name="animal[tag_color]" id="animal_tag_color">
            </div>
            <div class="col-md-2">
              <select class="form-control" name="animal[tag_location]" id="animal_tag_location"><option value="">Location</option>
<option value="Left Ear">Left Ear</option>
<option value="Right Ear">Right Ear</option></select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="animal_other_tag_number">Other Tag Number</label>
            <div class="col-md-3">
              <input class="form-control" placeholder="Example: USDA Tag" type="text" name="animal[other_tag_number]" id="animal_other_tag_number">
            </div>
            <div class="col-md-2">
              <input class="form-control" placeholder="Color" type="text" name="animal[other_tag_color]" id="animal_other_tag_color">
            </div>
            <div class="col-md-2">
              <select class="form-control" name="animal[other_tag_location]" id="animal_other_tag_location"><option value="">Location</option>
<option value="Left Ear">Left Ear</option>
<option value="Right Ear">Right Ear</option></select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="animal_electronic_id">Electronic ID</label>
            <div class="col-md-3">
              <input class="form-control" type="text" name="animal[electronic_id]" id="animal_electronic_id">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="animal_registry_number">Registry number</label>
            <div class="col-md-3">
              <input class="form-control" type="text" name="animal[registry_number]" id="animal_registry_number">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" for="animal_Tattoos">Tattoos</label>
            <div class="col-md-3">
              <input class="form-control" placeholder="Left" type="text" name="animal[tattoo_left]" id="animal_tattoo_left">
            </div>
            <div class="col-md-3">
              <input class="form-control" placeholder="Right" type="text" name="animal[tattoo_right]" id="animal_tattoo_right">
            </div>
          </div>
</fieldset>

<fieldset>
  <legend>Birth Information</legend>


    <div class="form-group">
      <label class="col-md-3 control-label" for="animal_birth_date">Birth Date</label>
        <div class="col-md-3">
          <input class="form-control" type="date" name="animal[birth_date]" id="animal_birth_date">
      </div>
    </div>

    <div id="parents" data-id="0" data-mother_id="" data-father_id="">    <div class="form-group">
     <label for="animal_mother" class="col-md-3 control-label">Dam (Maternity)</label>
     <div class="col-md-5">
          <select class="form-control" disabled="">
            <option>No compatible animals found</option>
          </select>
     </div>
  </div>

  <div class="form-group">
     <label for="animal_father" class="col-md-3 control-label">Sire (Paternity)</label>
     <div class="col-md-5">
          <select class="form-control" disabled="">
            <option>No compatible animals found</option>
          </select>
     </div>
  </div>
</div>

    <div class="form-group">
    <label class="col-md-3 control-label" for="animal_birth_weight">Birth Weight</label>
      <div class="col-md-3">
         <div class="input-group">
            <input class="form-control" type="text" name="animal[birth_weight]" id="animal_birth_weight">
            <span class="input-group-addon">lbs</span>
      </div>
    </div>
  </div>

  <div class="form-group">
      <label class="col-md-3 control-label" for="animal_Age to wean">Age to wean</label>
        <div class="col-md-3">
          <div class="input-group">
            <input class="form-control" step="1" type="number" name="animal[days_to_wean]" id="animal_days_to_wean">
            <span class="input-group-addon">Days</span>
          </div>
      </div>
  </div>

  <div class="form-group">
      <label class="col-md-3 control-label" for="animal_weaned_date">Date weaned</label>
        <div class="col-md-3">
          <input class="form-control" type="date" name="animal[weaned_date]" id="animal_weaned_date">
      </div>
  </div>

    <!--dates!-->
    <div class="form-group">
        <label class="col-md-3 control-label" for="animal_purchased">Raised or Purchased</label>
        <div class="col-md-1 radio">
          <label>
              <input type="radio" value="false" checked="checked" name="animal[purchased]" id="animal_purchased_false"> Raised
          </label>
        </div>
        <div class="col-md-1 radio">
          <label>
            <input type="radio" value="true" name="animal[purchased]" id="animal_purchased_true"> Purchased
          </label>
        </div>
    </div>

    <div class="js-animal-purchased hidden">

        <div class="form-group">
        <label class="col-md-3 control-label" for="animal_purchase_date">Date Purchased</label>
          <div class="col-md-3">
            <input class="form-control" type="date" name="animal[purchase_date]" id="animal_purchase_date">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label" for="animal_purchase_price">Purchase price</label>
        <div class="col-md-3">
          <div class="input-group">
          <span class="input-group-addon">$</span>
          <input class="form-control" placeholder="0.00" value="" type="number" name="animal[purchase_price]" id="animal_purchase_price">
          </div>
        </div>
      </div>

        <div class="form-group">
          <label class="col-md-3"></label>
          <div class="col-md-6 input-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="record_purchase" id="record_purchase" value="true"> Record a new expense transaction in Accounting section
                </label>
              </div>
          </div>
        </div>

      <div class="form-group">
        <label class="col-md-3 control-label" for="animal_purchased_from">Purchased from</label>
          <div class="col-sm-6">
      <select class="form-control" disabled="">
        <option>You haven't added any contacts yet</option>
      </select>
</div>

      </div>


     <div class="form-group">
      <label class="col-md-3 control-label" for="animal_breeder">Breeder</label>
        <div class="col-sm-6">
      <select class="form-control" disabled="">
        <option>You haven't added any contacts yet</option>
      </select>
</div>

    </div>

  </div>

</fieldset>


<fieldset>
  <legend>Additional Information</legend>

 <div class="form-group">
    <label class="col-md-3 control-label" for="animal_Veterinarian">Veterinarian</label>
      <div class="col-sm-6">
      <select class="form-control" disabled="">
        <option>You haven't added any contacts yet</option>
      </select>
</div>

 </div>

  <div class="form-group">
    <label class="col-md-3 control-label" for="animal_on_feed">On Feed</label>
    <div class="col-md-4">
        <div class="checkbox">
          <label>
             <input name="animal[on_feed]" type="hidden" value="0"><input type="checkbox" value="1" name="animal[on_feed]" id="animal_on_feed"> On Feed
          </label>
        </div>
    </div>
  </div>

 <div class="form-group">
  <label class="col-md-3 control-label" for="animal_feed">Feed Type</label>
  <div class="col-md-3">
    <input class="form-control" placeholder="Feed Type (eg; Purina Layena Pellets)" type="text" name="animal[feed]" id="animal_feed">
  </div>
</div>

<!--harvest info!-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="animal_harvest_unit">Measure Harvests in</label>
      <div class="col-md-2">
          <select class="form-control" name="animal[harvest_unit]" id="animal_harvest_unit"><option value="bales">bales</option>
<option value="barrels">barrels</option>
<option value="bunches">bunches</option>
<option value="bushels">bushels</option>
<option value="dozen">dozen</option>
<option value="fluid ounces">fluid ounces</option>
<option value="gallons">gallons</option>
<option value="head">head</option>
<option value="milliliter">milliliter</option>
<option value="ounces">ounces</option>
<option value="pounds">pounds</option>
<option selected="selected" value="quantity">quantity</option>
<option value="quarts">quarts</option>
<option value="tons">tons</option></select>
      </div>
      <div class="col-sm-1">
          <a href="#" rel="tooltip" data-original-title="This will be the base unit of measure for all harvests for this type"><i class="far fa-question-circle" aria-hidden="true"></i></a>
      </div>
    </div>

    <div class="form-group">
    <label class="control-label col-md-3" for="animal_market_price">Estimated Revenue</label>
     <div class="col-sm-4">
      <div class="input-group">
        <span class="input-group-addon">$</span>
        <input class="form-control" placeholder="0.00" value="" step="any" type="number" name="animal[market_price]" id="animal_market_price">
        <span class="input-group-addon js-harvest-label_single">per harvest unit</span>
      </div>
    </div>
  </div>
<!--harvest info!-->

<div class="form-group">
  <label class="control-label col-md-3" for="animal_estimated_value">Estimated Value</label>
   <div class="col-sm-3">
    <div class="input-group">
      <span class="input-group-addon">$</span>
      <input class="form-control" placeholder="0.00" value="" step="any" type="number" name="animal[estimated_value]" id="animal_estimated_value">
    </div>
  </div>
</div>


</fieldset>

  <div class="actions">
        <a class="btn btn-link" href="/animals">Cancel</a>
        <input type="submit" name="commit" value="Save &amp; New" class="btn btn-default online-only" data-disable-with="Save &amp; New">
    <input type="submit" name="commit" value="Create" class="btn btn-success" data-disable-with="Create">
  </div>

  <!-- for group animals !-->
  <input as="hidden" type="hidden" value="false" name="animal[is_group]" id="animal_is_group">
  <!--for group paging !-->
  <!-- for creating parents !-->
  <input type="hidden" name="parent_of" value="">
  <input type="hidden" name="root_animal" value="">

<script>
var animal_type_list = ["Alpaca","Bees","Bison","Buffalo","Butterflies","Camel","Cat","Catfish","Cattle","Chicken","Crickets","Deer","Dog","Donkey","Duck","Elk","Emu","Fish","Gayal","Goat","Goose","Guineafowl","Horse","Llama","Mealworms","Mollusk","Mule","Muskox","Ostrich","Partridge","Peafowl","Pheasant","Pig","Pigeon","Pony","Quail","Rabbit","Reindeer","Rhea","Salmon","Sheep","Shellfish","Silkworms","Swine","Tilapia","Trout","Turkey","Water buffalo","Waxworms","Yak","Zebu"];
  document.addEventListener("DOMContentLoaded", function(){
    animalFormInit(animal_type_list);
  });
</script>
</form>







     <div class="form-group">
      <label class="col-md-3 control-label" for="animal_type">Animal Type</label>
      <div class="col-md-4">
        <div class="suggest-field-wrapper">
          <input class="form-control suggest-field ui-autocomplete-input" type="text" name="animal[type]" id="animal_type" autocomplete="off">
        </div>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="animal_breed">Breed</label>
        <div class="col-md-4">
          <input class="form-control" placeholder="Breed" type="text" name="animal[breed]" id="animal_breed">
        </div>
///////////////////////



<div class="container mx-auto mt-8 p-4 dark:bg-gray-700 dark:shadow-md">
    <form x-data="{ showDeathDate: false, showAnimalDropdown: false, animalType: '' }" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
        <fieldset>
            <legend class="text-lg font-semibold mb-4 text-gray-700 dark:text-gray-200">Physical Characteristics</legend>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Identification -->
                <div class="flex flex-col">
                    <label for="animal_name" class="dark:text-gray-200 text-gray-700">Neutered</label>
                    <div class="checkbox">
                        <label class="inline-flex items-center">
                            <input name="animal[is_neutered]" type="hidden" value="0">
                            <input type="checkbox" value="1" name="animal[is_neutered]" id="animal_is_neutered" class="form-checkbox h-5 w-5 text-gray-600 border-gray-300 rounded">
                            <span class="ml-2 dark:text-gray-200">Neutered</span>
                        </label>
                    </div>
                </div>

                <!-- Is Breeding Stock -->
                <div class="flex flex-col">
                    <label for="animal_breeding_stock" class="dark:text-gray-200 text-gray-700">Is Breeding Stock</label>
                    <div class="checkbox">
                        <label class="inline-flex items-center">
                            <input name="animal[is_breeding_stock]" type="hidden" value="0">
                            <input type="checkbox" value="1" name="animal[is_breeding_stock]" id="animal_is_breeding_stock" class="form-checkbox h-5 w-5 text-gray-600 border-gray-300 rounded">
                            <span class="ml-2 dark:text-gray-200">Is Breeding Stock</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-4 md:grid-cols-2 gap-6">
                <!-- Coloring -->
                <div class="flex flex-col">
                    <label for="animal_coloring" class="dark:text-gray-200 text-gray-700">Coloring</label>
                    <input type="text" placeholder="Brown, white, Black, etc" name="animal[coloring]" id="animal_coloring" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Retention Score -->
                <div class="flex flex-col">
                    <label for="animal_retention_score" class="dark:text-gray-200 text-gray-700">Retention Score</label>
                    <input class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700" step="1" min="0" max="10" type="number" name="animal[retention_score]" id="animal_retention_score">
                </div>
            </div>



            <!-- Additional Physical Characteristics -->
            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Weight -->
                <div class="flex flex-col">
                    <label for="animal_weight" class="dark:text-gray-200 text-gray-700">Weight (kg)</label>
                    <input type="number" step="0.01" name="animal[weight]" id="animal_weight" placeholder="Enter weight in kg" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Height -->
                <div class="flex flex-col">
                    <label for="animal_height" class="dark:text-gray-200 text-gray-700">Height (cm)</label>
                    <input type="number" step="0.01" name="animal[height]" id="animal_height" placeholder="Enter height in cm" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Body Condition Score -->
                <div class="flex flex-col">
                    <label for="animal_body_condition_score" class="dark:text-gray-200 text-gray-700">Body Condition Score</label>
                    <input type="number" step="0.1" name="animal[body_condition_score]" id="animal_body_condition_score" placeholder="Enter body condition score" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>

            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Horn/Tusk Length -->
                <div class="flex flex-col">
                    <label for="animal_horn_length" class="dark:text-gray-200 text-gray-700">Horn/Tusk Length (cm)</label>
                    <input type="number" step="0.01" name="animal[horn_length]" id="animal_horn_length" placeholder="Enter horn/tusk length in cm" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Tail Length/Shape -->
                <div class="flex flex-col">
                    <label for="animal_tail" class="dark:text-gray-200 text-gray-700">Tail Length/Shape</label>
                    <input type="text" name="animal[tail]" id="animal_tail" placeholder="Describe tail length/shape" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Fur/Feather/Scale Type -->
                <div class="flex flex-col">
                    <label for="animal_fur_type" class="dark:text-gray-200 text-gray-700">Fur/Feather/Scale Type</label>
                    <input type="text" name="animal[fur_type]" id="animal_fur_type" placeholder="Describe fur/feather/scale type" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>

            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Eye Color -->
                <div class="flex flex-col">
                    <label for="animal_eye_color" class="dark:text-gray-200 text-gray-700">Eye Color</label>
                    <input type="text" name="animal[eye_color]" id="animal_eye_color" placeholder="Enter eye color" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Beak Shape (for birds) -->
                <div class="flex flex-col">
                    <label for="animal_beak_shape" class="dark:text-gray-200 text-gray-700">Beak Shape (for birds)</label>
                    <input type="text" name="animal[beak_shape]" id="animal_beak_shape" placeholder="Describe beak shape" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Tail Feather Pattern (for birds) -->
                <div class="flex flex-col">
                    <label for="animal_tail_feather_pattern" class="dark:text-gray-200 text-gray-700">Tail Feather Pattern (for birds)</label>
                    <input type="text" name="animal[tail_feather_pattern]" id="animal_tail_feather_pattern" placeholder="Describe tail feather pattern" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>

            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Saddle/Markings -->
                <div class="flex flex-col">
                    <label for="animal_saddle_markings" class="dark:text-gray-200 text-gray-700">Saddle/Markings</label>
                    <input type="text" name="animal[saddle_markings]" id="animal_saddle_markings" placeholder="Describe saddle/markings" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Hoof Type (for livestock) -->
                <div class="flex flex-col">
                    <label for="animal_hoof_type" class="dark:text-gray-200 text-gray-700">Hoof Type (for livestock)</label>
                    <input type="text" name="animal[hoof_type]" id="animal_hoof_type" placeholder="Describe hoof type" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Gait or Movement -->
                <div class="flex flex-col">
                    <label for="animal_gait" class="dark:text-gray-200 text-gray-700">Gait or Movement</label>
                    <input type="text" name="animal[gait]" id="animal_gait" placeholder="Describe gait or movement" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>

            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Teeth Characteristics -->
                <div class="flex flex-col">
                    <label for="animal_teeth_characteristics" class="dark:text-gray-200 text-gray-700">Teeth Characteristics</label>
                    <input type="text" name="animal[teeth_characteristics]" id="animal_teeth_characteristics" placeholder="Describe teeth characteristics" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>
                <!-- Additional Physical Characteristics -->
                <div class="flex mt-4 flex-col">
                    <label for="animal_description" class="dark:text-gray-200 text-gray-700">Description</label>
                    <textarea rows="4" name="animal[description]" id="animal_description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write a description..."></textarea>
                </div>
        </fieldset>
    </form>
</div>


<div class="container mx-auto mt-8 p-4 dark:bg-gray-700 dark:shadow-md">
    <form x-data="{ showDeathDate: false, showAnimalDropdown: false, animalType: '' }" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
        @csrf
        <fieldset>
            <legend class="text-lg font-semibold mb-4 text-gray-700 dark:text-gray-200">Identification
            </legend>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Tag Number(s) -->
                <div class="flex flex-col">
                    <label for="animal_tag_number" class="dark:text-gray-200 text-gray-700">Tag Number(s)</label>
                    <input type="text" name="animal[tag_number]" id="animal_tag_number" placeholder="e.g., ABC123, XYZ456" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Color -->
                <div class="flex flex-col">
                    <label for="animal_color" class="dark:text-gray-200 text-gray-700">Color</label>
                    <input type="text" name="animal[color]" id="animal_color" placeholder="e.g., Brown, White, Black" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Location -->
                <div class="flex flex-col">
                    <label for="animal_location" class="dark:text-gray-200 text-gray-700">Location</label>
                    <select name="animal[location]" id="animal_location" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                        <option value="Male">Select Location</option>
                        <option value="Male">Left Ear</option>
                        <option value="Female">Right Ear</option>
                    </select>
                </div>

                <!-- Electronic ID -->
                <div class="flex flex-col">
                    <label for="animal_electronic_id" class="dark:text-gray-200 text-gray-700">Electronic ID</label>
                    <input type="text" name="animal[electronic_id]" id="animal_electronic_id" placeholder="e.g., EID123456" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>

            <div class="grid grid-cols-1 mt-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Other Tag Number/Label -->
                <div class="flex flex-col">
                    <label for="animal_other_tag" class="dark:text-gray-200 text-gray-700">Other Tag Number/Label</label>
                    <input type="text" name="animal[other_tag]" id="animal_other_tag" placeholder="e.g., DEF789, GHI012" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Other Color -->
                <div class="flex flex-col">
                    <label for="animal_other_color" class="dark:text-gray-200 text-gray-700">Other Color</label>
                    <input type="text" name="animal[other_color]" id="animal_other_color" placeholder="e.g., Gray, Spotted, Red" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Other Location -->
                <div class="flex flex-col">
                    <label for="animal_other_location" class="dark:text-gray-200 text-gray-700">Other Location</label>
                    <select name="animal[other_location]" id="animal_other_location" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                        <option value="Male">Select Location</option>
                        <option value="Male">Left Ear</option>
                        <option value="Female">Right Ear</option>
                    </select>
                </div>

                <!-- Registry Number -->
                <div class="flex flex-col">
                    <label for="animal_registry_number" class="dark:text-gray-200 text-gray-700">Registry Number</label>
                    <input type="text" name="animal[registry_number]" id="animal_registry_number" placeholder="e.g., REG789012" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>

            <div class="grid mt-4 grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left Tattoo -->
                <div class="flex flex-col">
                    <label for="animal_tattoo_left" class="dark:text-gray-200 text-gray-700">Tattoo (Left)</label>
                    <input type="text" name="animal[tattoo_left]" id="animal_tattoo_left" placeholder="e.g., ABC123" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Right Tattoo -->
                <div class="flex flex-col">
                    <label for="animal_tattoo_right" class="dark:text-gray-200 text-gray-700">Tattoo (Right)</label>
                    <input type="text" name="animal[tattoo_right]" id="animal_tattoo_right" placeholder="e.g., XYZ456" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>

            <div class="grid mt-4 grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Photographs -->
                <div class="flex flex-col">
                    <label for="animal_photographs" class="dark:text-gray-200 text-gray-700">Photographs</label>
                    <input type="file" name="animal[photographs]" id="animal_photographs" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- DNA Profile -->
                <div class="flex flex-col">
                    <label for="animal_dna_profile" class="dark:text-gray-200 text-gray-700">DNA Profile</label>
                    <input type="text" name="animal[dna_profile]" id="animal_dna_profile" placeholder="e.g., DNA12345" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Scars -->
                <div class="flex flex-col">
                    <label for="animal_scars" class="dark:text-gray-200 text-gray-700">Scars</label>
                    <textarea rows="3" name="animal[scars]" id="animal_scars" placeholder="Enter any scars or marks..." class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700"></textarea>
                </div>

            </div>
        </fieldset>
        <!-- Add more fieldsets and form elements here -->
    </form>
</div>

<div class="container mx-auto mt-8 p-4 dark:bg-gray-700 dark:shadow-md">
    <form x-data="{ showDeathDate: false, showAnimalDropdown: false, animalType: '' }" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
        <fieldset>
            <legend class="text-lg font-semibold mb-4 text-gray-700 dark:text-gray-200">Birth Information</legend>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Birth Date -->
                <div class="flex flex-col">
                    <label for="birth_date" class="dark:text-gray-200 text-gray-700">Birth Date</label>
                    <input type="date" name="birth_date" id="birth_date" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Dam (Maternity) -->
                <div class="flex flex-col">
                    <label for="dam" class="dark:text-gray-200 text-gray-700">Dam (Maternity)</label>
                    <input type="text" name="dam" id="dam" placeholder="Enter dam's name" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Sire (Paternity) -->
                <div class="flex mt-4 flex-col">
                    <label for="sire" class="dark:text-gray-200 text-gray-700">Sire (Paternity)</label>
                    <input type="text" name="sire" id="sire" placeholder="Enter sire's name" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Birth Weight -->
                <div class="flex mt-4 flex-col">
                    <label for="birth_weight" class="dark:text-gray-200 text-gray-700">Birth Weight</label>
                    <div class="flex items-center">
                        <input type="number" step="0.01" name="birth_weight" id="birth_weight" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark-text-gray-200 dark:bg-gray-700">
                        <select name="weight_unit" id="weight_unit" class="border rounded-lg px-2 py-2 ml-2 focus:outline-none focus:border-blue-400 dark-text-gray-200 dark:bg-gray-700">
                            <option value="lbs">lbs</option>
                            <option value="kg">kg</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Age to Wean -->
                <div class="flex mt-4 flex-col">
                    <label for="age_to_wean" class="dark:text-gray-200 text-gray-700">Age to Wean (Days)</label>
                    <input type="number" name="age_to_wean" id="age_to_wean" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Date Weaned -->
                <div class="flex mt-4 flex-col">
                    <label for="date_weaned" class="dark:text-gray-200 text-gray-700">Date Weaned</label>
                    <input type="date" name="date_weaned" id="date_weaned" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex mt-4 flex-col">
                    <label for="birth_time" class="dark:text-gray-200 text-gray-700">Birth Time</label>
                    <input type="time" name="birth_time" id="birth_time" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
                <div class="flex mt-4 flex-col">
                    <label for="birth_status" class="dark:text-gray-200 text-gray-700">Birth Status</label>
                    <select name="birth_status" id="birth_status" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                        <option value="Natural">Natural</option>
                        <option value="Assisted">Assisted</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                 <!-- Colostrum Intake -->

            <div class="flex mt-4 flex-col">
                <label for="colostrum_intake" class="dark:text-gray-200 text-gray-700">Colostrum Intake (ml)</label>
                <input type="number" name="colostrum_intake" id="colostrum_intake" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
            </div>
             <!-- Health at Birth -->
             <div class="flex mt-4 flex-col">
                <label for="health_at_birth" class="dark:text-gray-200 text-gray-700">Health at Birth</label>
                <select name="health_at_birth" id="health_at_birth" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                    <option value="Healthy">Healthy</option>
                    <option value="Sick">Sick</option>
                </select>
            </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col mt-4">
                    <label for="milk_feeding" class="dark:text-gray-200 text-gray-700">Milk Feeding</label>
                    <input type="text" name="milk_feeding" id="milk_feeding" placeholder="Type and quantity of milk/formula" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Vaccinations -->
                <div class="flex flex-col mt-4">
                    <label for="vaccinations" class="dark:text-gray-200 text-gray-700">Vaccinations</label>
                    <input type="text" name="vaccinations" id="vaccinations" placeholder="List any vaccinations given" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col mt-4">
                    <label for="breeder_info" class="dark:text-gray-200 text-gray-700">Breeder Information</label>
                    <input type="text" name="breeder_info" id="breeder_info" placeholder="Enter breeder information" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Birth Photos -->
                <div class="flex flex-col mt-4">
                    <label for="birth_photos" class="dark:text-gray-200 text-gray-700">Birth Photos</label>
                    <input type="file" name="birth_photos" id="birth_photos" accept="image/*" multiple class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>
            </div>
            <!-- Raised or Purchased -->
            <div class="mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Raised or Purchased</label>
                <div class="flex items-center">
                    <label class="mr-4">
                        <input type="radio" name="raised_purchased" value="Raised" class="mr-2">
                        <span class="dark:text-gray-200">Raised</span>
                    </label>
                    <label>
                        <input type="radio" name="raised_purchased" value="Purchased" class="mr-2">
                        <span class="dark:text-gray-200">Purchased</span>
                    </label>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<div class="container mx-auto mt-8 p-4 dark:bg-gray-700 dark:shadow-md">
    <form x-data="{ showDeathDate: false, showAnimalDropdown: false, animalType: '' }" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
        @csrf
        <fieldset>
            <legend class="text-lg font-semibold mb-4 text-gray-700 dark:text-gray-200">Veterinarian</legend>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Veterinarian Name -->
                <div class="flex flex-col">
                    <label for="vet_name" class="dark:text-gray-200 text-gray-700">Veterinarian Name</label>
                    <input type="text" name="vet_name" id="vet_name" placeholder="Enter veterinarian's name" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Veterinarian Contact -->
                <div class="flex flex-col">
                    <label for="vet_contact" class="dark:text-gray-200 text-gray-700">Contact Information</label>
                    <input type="text" name="vet_contact" id="vet_contact" placeholder="Enter contact information" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

            </div>
        </fieldset>

        <fieldset class="mt-6">
            <legend class="text-lg font-semibold mb-4 text-gray-700 dark:text-gray-200">On Feed</legend>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- On Feed Status -->
                <div class="flex flex-col">
                    <label for="on_feed" class="dark:text-gray-200 text-gray-700">On Feed</label>
                    <input type="checkbox" name="on_feed" id="on_feed" class="dark:text-gray-200">
                </div>

                <!-- Feed Type -->
                <div class="flex flex-col">
                    <label for="feed_type" class="dark:text-gray-200 text-gray-700">Feed Type</label>
                    <input type="text" name="feed_type" id="feed_type" placeholder="Enter feed type" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                </div>

                <!-- Measure Harvests -->
                <div class="flex flex-col">
                    <label for="measure_harvests" class="dark:text-gray-200 text-gray-700">Measure Harvests in</label>
                    <select name="measure_harvests" id="measure_harvests" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                        <option value="barrels">barrels</option>
                        <option value="bunches">bunches</option>
                        <option value="bushels">bushels</option>
                        <option value="dozen">dozen</option>
                        <option value="fluid ounces">fluid ounces</option>
                        <option value="gallons">gallons</option>
                        <option value="head">head</option>
                        <option value="milliliter">milliliter</option>
                        <option value="ounces">ounces</option>
                        <option value="pounds">pounds</option>
                        <option selected="selected" value="quantity">quantity</option>
                        <option value="quarts">quarts</option>
                        <option value="tons">tons</option>
                    </select>
                </div>
            </div>

            <div class="grid mt-8 grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Estimated Revenue -->
                <div class="flex flex-col">
                    <label for="estimated_revenue" class="dark:text-gray-200 text-gray-700">Estimated Revenue</label>
                    <div class="flex items-center">
                        <input type="text" name="estimated_revenue_value" id="estimated_revenue_value" placeholder="Enter value" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                        <select name="currency_revenue" id="currency_revenue" class="ml-2 border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                            <option value="USD">USD</option>
                            <option value="GBP">KSH</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <!-- Add more currency options as needed -->
                        </select>
                    </div>
                </div>

                <div class="flex flex-col">
                    <label for="estimated_value" class="dark:text-gray-200 text-gray-700">Estimated Value</label>
                    <div class="flex items-center">
                        <input type="text" name="estimated_value" id="estimated_value" placeholder="Enter value" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                        <select name="currency_value" id="currency_value" class="ml-2 border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                            <option value="USD">USD</option>
                            <option value="GBP">KSH</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <!-- Add more currency options as needed -->
                        </select>
                    </div>
                </div>


                <!-- Estimated Value -->
                <div class="flex flex-col">
                    <label for="estimated_value" class="dark:text-gray-200 text-gray-700">Estimated Value</label>
                    <div class="flex items-center">
                        <input type="text" name="estimated_value" id="estimated_value" placeholder="Enter value" class="border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                        <select name="currency_value" id="currency_value" class="ml-2 border rounded-lg px-4 py-2 focus:outline-none focus:border-blue-400 dark:text-gray-200 dark:bg-gray-700">
                            <option value="USD">USD</option>
                            <option value="GBP">KSH</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <!-- Add more currency options as needed -->
                        </select>
                    </div>
                </div>
            </div>
        </fieldset>

        <!-- Add more fieldsets and form elements here -->
    </form>
</div>
<form action="" accept-charset="UTF-8" data-remote="true" method="get">
    <div class="table-responsive">
      <table class="table sortable table-striped ">
        <thead>
        <tr>
          <!-- base columns !-->
          <th class="select-cell select-cell-wide">
                <input type="checkbox" class="js-bulk js-bulk-chk-all">
                  <div class="js-bulk-actions bulk-select-actions">
      <div class="dropdown">
          <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
              Bulk Actions <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
                  <li>
                      <input type="submit" value="Add Note" formaction="/notes/new?ref_type=animal" class="btn btn-clear btn-block text-left">
                  </li>
                  <li>
                      <input type="submit" value="Add Task" formaction="/tasks/new?ref_type=animal" class="btn btn-clear btn-block text-left">
                  </li>
                  <li>
                      <input type="submit" value="Add Treatment" formaction="/treatments/new?ref_type=animal" class="btn btn-clear btn-block text-left">
                  </li>
                      <li>
                          <input type="submit" value="Record Feeding" formaction="/feedings/new?ref_type=animal" class="btn btn-clear btn-block text-left">
                      </li>
                      <li>
                          <input type="submit" value="Record Input" formaction="/inputs/new?ref_type=animal" class="btn btn-clear btn-block text-left">
                      </li>
                      <li>
                          <input type="submit" value="Move Location" formaction="/grazings/new?ref_type=animal" class="btn btn-clear btn-block text-left">
                      </li>
                      <li>
                          <input type="submit" value="Record Breeding " formaction="/breedings/new?ref_type=animal" class="btn btn-clear btn-block text-left">
                      </li>
                      <li>
                          <input type="submit" value="Pregnancy Check" formaction="/preg_checks/new" class="btn btn-clear btn-block text-left">
                      </li>
                  <li>
                      <input type="submit" value="Sell Animals" formaction="livestock/sell?ref_type=animal" class="btn btn-clear btn-block text-left">
                  </li>
                  <li>
                      <input type="submit" value="Edit Selected Animals" formaction="/livestock_group/bulk_action?type=edit&amp;ref_type=animal" class="btn btn-clear btn-block text-left">
                  </li>
                      <li role="separator" class="divider"></li>
                  <li>
                      <input type="submit" value="Delete Selected Records" formaction="/bulk_delete/animal" class="btn btn-link text-danger btn-block text-left">
                  </li>
          </ul>
          <span class="js-bulk-actions-selected badge"></span>
      </div>
  </div>
          </th>
          <th>
            <a data-remote="true" href="/animals?direction=asc&amp;sort=name">Animal </a>
          </th>
          <!-- custom columns !-->
              <th><a data-remote="true" href="/animals?direction=asc&amp;sort=gender">Gender </a></th>
              <th><a data-remote="true" href="/animals?direction=asc&amp;sort=birth_date">Age </a></th>
              <th><a data-remote="true" href="/animals?direction=asc&amp;sort=weight">Last Weight </a></th>
              <th><a data-remote="true" href="/animals?direction=asc&amp;sort=status">Status </a></th>
              <th><a data-remote="true" href="/animals?direction=asc&amp;sort=type%2Fbreed">type/breed </a></th>
            <th class=""></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="thumb select-cell">
                <label><input type="checkbox" name="ref_id[]" class="js-bulk js-bulk-chk" value="651160945d253d0014a62e50"></label>
              <span class="thumbnail-badge" rel="tooltip" title="" data-original-title="Cccc"><span>CC</span></span>
          </td>
          <td>
            <a href="/animals/651160945d253d0014a62e50">Cccc</a>

            <div>
                <span></span>
            </div>
          </td>
          <!-- custom columns !-->
              <td>

              </td>
              <td>

              </td>
              <td>

              </td>
              <td>
                Active
              </td>
              <td>

              </td>
            <td class="grid-actions">
              <!-- actions -->
              <div class="btn-group hidden-print">
                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                </button>

                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a href="/animals/651160945d253d0014a62e50/edit">
                      <i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit Animal
  </a>                </li>

                  <li>
                    <a data-remote="true" href="/animals/651160945d253d0014a62e50/notes/new">
                      <i class="far fa-comment" aria-hidden="true"></i> Add Note
  </a>                </li>
                  <li>
                    <a data-remote="true" href="/activities/new?r_id=651160945d253d0014a62e50&amp;r_type=animals&amp;todo=true">
                      <i class="fas fa-check-circle" aria-hidden="true"></i> Add Task
  </a>                </li>
                  <li>
                    <a data-remote="true" href="/animals/651160945d253d0014a62e50/treatments/new">
                      <i class="fas fa-syringe" aria-hidden="true"></i> Add Treatment
  </a>                </li>
                    <li>
                      <a data-remote="true" href="/animals/651160945d253d0014a62e50/feedings/new">
                        <i class="fas fa-cookie-bite" aria-hidden="true"></i> Record Feeding
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/651160945d253d0014a62e50/inputs/new">
                        <i class="fas fa-plus-square" aria-hidden="true"></i> Record Input
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/651160945d253d0014a62e50/measurements/new">
                        <i class="fas fa-weight" aria-hidden="true"></i> Record Measurment
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/651160945d253d0014a62e50/harvests/new">
                        <i class="fas fa-egg" aria-hidden="true"></i> Add Yield
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/grazings/new?ref_type=animal&amp;ref_id=651160945d253d0014a62e50">
                        <i class="fas fa-location-arrow" aria-hidden="true"></i> Move Location
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/livestock/sell?ref_type=animal&amp;ref_id=651160945d253d0014a62e50">
                        <i class="fas fa-receipt" aria-hidden="true"></i> Sell Animal
  </a>                  </li>

                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="/animals/651160945d253d0014a62e50/copy">
                      <i class="fas fa-copy" aria-hidden="true"></i> Duplicate Animal
  </a>                </li>
                  <li>
                    <a data-confirm="Are you sure you want to delete 'cccc'?" rel="nofollow" data-method="delete" href="/animals/651160945d253d0014a62e50">
                      <i class="far fa-trash-alt" aria-hidden="true"></i> Delete
  </a>                </li>
                </ul>
              </div>
            </td>
      </tr>
        <tr>
          <td class="thumb select-cell">
                <label><input type="checkbox" name="ref_id[]" class="js-bulk js-bulk-chk" value="6511610d5d253d0014a62e51"></label>
              <span class="thumbnail-badge" rel="tooltip" title="" data-original-title="Dddd"><span>DD</span></span>
          </td>
          <td>
            <a href="/animals/6511610d5d253d0014a62e51">Dddd</a>

            <div>
                <span></span>
            </div>
          </td>
          <!-- custom columns !-->
              <td>

              </td>
              <td>

              </td>
              <td>

              </td>
              <td>
                Active
              </td>
              <td>

              </td>
            <td class="grid-actions">
              <!-- actions -->
              <div class="btn-group hidden-print">
                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                </button>

                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a href="/animals/6511610d5d253d0014a62e51/edit">
                      <i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit Animal
  </a>                </li>

                  <li>
                    <a data-remote="true" href="/animals/6511610d5d253d0014a62e51/notes/new">
                      <i class="far fa-comment" aria-hidden="true"></i> Add Note
  </a>                </li>
                  <li>
                    <a data-remote="true" href="/activities/new?r_id=6511610d5d253d0014a62e51&amp;r_type=animals&amp;todo=true">
                      <i class="fas fa-check-circle" aria-hidden="true"></i> Add Task
  </a>                </li>
                  <li>
                    <a data-remote="true" href="/animals/6511610d5d253d0014a62e51/treatments/new">
                      <i class="fas fa-syringe" aria-hidden="true"></i> Add Treatment
  </a>                </li>
                    <li>
                      <a data-remote="true" href="/animals/6511610d5d253d0014a62e51/feedings/new">
                        <i class="fas fa-cookie-bite" aria-hidden="true"></i> Record Feeding
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/6511610d5d253d0014a62e51/inputs/new">
                        <i class="fas fa-plus-square" aria-hidden="true"></i> Record Input
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/6511610d5d253d0014a62e51/measurements/new">
                        <i class="fas fa-weight" aria-hidden="true"></i> Record Measurment
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/6511610d5d253d0014a62e51/harvests/new">
                        <i class="fas fa-egg" aria-hidden="true"></i> Add Yield
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/grazings/new?ref_type=animal&amp;ref_id=6511610d5d253d0014a62e51">
                        <i class="fas fa-location-arrow" aria-hidden="true"></i> Move Location
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/livestock/sell?ref_type=animal&amp;ref_id=6511610d5d253d0014a62e51">
                        <i class="fas fa-receipt" aria-hidden="true"></i> Sell Animal
  </a>                  </li>

                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="/animals/6511610d5d253d0014a62e51/copy">
                      <i class="fas fa-copy" aria-hidden="true"></i> Duplicate Animal
  </a>                </li>
                  <li>
                    <a data-confirm="Are you sure you want to delete 'dddd'?" rel="nofollow" data-method="delete" href="/animals/6511610d5d253d0014a62e51">
                      <i class="far fa-trash-alt" aria-hidden="true"></i> Delete
  </a>                </li>
                </ul>
              </div>
            </td>
      </tr>
        <tr>
          <td class="thumb select-cell">
                <label><input type="checkbox" name="ref_id[]" class="js-bulk js-bulk-chk" value="6511977b5d253d000da62ec0"></label>
              <span class="thumbnail-badge" rel="tooltip" title="" data-original-title="Ii"><span>II</span></span>
          </td>
          <td>
            <a href="/animals/6511977b5d253d000da62ec0">Ii</a>

            <div>
                <span></span>
            </div>
          </td>
          <!-- custom columns !-->
              <td>

              </td>
              <td>

              </td>
              <td>

              </td>
              <td>
                Active
              </td>
              <td>

              </td>
            <td class="grid-actions">
              <!-- actions -->
              <div class="btn-group hidden-print">
                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                </button>

                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a href="/animals/6511977b5d253d000da62ec0/edit">
                      <i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit Animal
  </a>                </li>

                  <li>
                    <a data-remote="true" href="/animals/6511977b5d253d000da62ec0/notes/new">
                      <i class="far fa-comment" aria-hidden="true"></i> Add Note
  </a>                </li>
                  <li>
                    <a data-remote="true" href="/activities/new?r_id=6511977b5d253d000da62ec0&amp;r_type=animals&amp;todo=true">
                      <i class="fas fa-check-circle" aria-hidden="true"></i> Add Task
  </a>                </li>
                  <li>
                    <a data-remote="true" href="/animals/6511977b5d253d000da62ec0/treatments/new">
                      <i class="fas fa-syringe" aria-hidden="true"></i> Add Treatment
  </a>                </li>
                    <li>
                      <a data-remote="true" href="/animals/6511977b5d253d000da62ec0/feedings/new">
                        <i class="fas fa-cookie-bite" aria-hidden="true"></i> Record Feeding
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/6511977b5d253d000da62ec0/inputs/new">
                        <i class="fas fa-plus-square" aria-hidden="true"></i> Record Input
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/6511977b5d253d000da62ec0/measurements/new">
                        <i class="fas fa-weight" aria-hidden="true"></i> Record Measurment
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/6511977b5d253d000da62ec0/harvests/new">
                        <i class="fas fa-egg" aria-hidden="true"></i> Add Yield
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/grazings/new?ref_type=animal&amp;ref_id=6511977b5d253d000da62ec0">
                        <i class="fas fa-location-arrow" aria-hidden="true"></i> Move Location
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/livestock/sell?ref_type=animal&amp;ref_id=6511977b5d253d000da62ec0">
                        <i class="fas fa-receipt" aria-hidden="true"></i> Sell Animal
  </a>                  </li>

                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="/animals/6511977b5d253d000da62ec0/copy">
                      <i class="fas fa-copy" aria-hidden="true"></i> Duplicate Animal
  </a>                </li>
                  <li>
                    <a data-confirm="Are you sure you want to delete 'ii'?" rel="nofollow" data-method="delete" href="/animals/6511977b5d253d000da62ec0">
                      <i class="far fa-trash-alt" aria-hidden="true"></i> Delete
  </a>                </li>
                </ul>
              </div>
            </td>
      </tr>
        <tr>
          <td class="thumb select-cell">
                <label><input type="checkbox" name="ref_id[]" class="js-bulk js-bulk-chk" value="65119798f790ff00082add1c"></label>
              <span class="thumbnail-badge" rel="tooltip" title="" data-original-title="Uuutu"><span>UU</span></span>
          </td>
          <td>
            <a href="/animals/65119798f790ff00082add1c">Uuutu</a>

            <div>
                <span></span>
            </div>
          </td>
          <!-- custom columns !-->
              <td>

              </td>
              <td>

              </td>
              <td>

              </td>
              <td>
                Active
              </td>
              <td>

              </td>
            <td class="grid-actions">
              <!-- actions -->
              <div class="btn-group hidden-print">
                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                </button>

                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a href="/animals/65119798f790ff00082add1c/edit">
                      <i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit Animal
  </a>                </li>

                  <li>
                    <a data-remote="true" href="/animals/65119798f790ff00082add1c/notes/new">
                      <i class="far fa-comment" aria-hidden="true"></i> Add Note
  </a>                </li>
                  <li>
                    <a data-remote="true" href="/activities/new?r_id=65119798f790ff00082add1c&amp;r_type=animals&amp;todo=true">
                      <i class="fas fa-check-circle" aria-hidden="true"></i> Add Task
  </a>                </li>
                  <li>
                    <a data-remote="true" href="/animals/65119798f790ff00082add1c/treatments/new">
                      <i class="fas fa-syringe" aria-hidden="true"></i> Add Treatment
  </a>                </li>
                    <li>
                      <a data-remote="true" href="/animals/65119798f790ff00082add1c/feedings/new">
                        <i class="fas fa-cookie-bite" aria-hidden="true"></i> Record Feeding
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/65119798f790ff00082add1c/inputs/new">
                        <i class="fas fa-plus-square" aria-hidden="true"></i> Record Input
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/65119798f790ff00082add1c/measurements/new">
                        <i class="fas fa-weight" aria-hidden="true"></i> Record Measurment
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/animals/65119798f790ff00082add1c/harvests/new">
                        <i class="fas fa-egg" aria-hidden="true"></i> Add Yield
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/grazings/new?ref_type=animal&amp;ref_id=65119798f790ff00082add1c">
                        <i class="fas fa-location-arrow" aria-hidden="true"></i> Move Location
  </a>                  </li>
                    <li>
                      <a data-remote="true" href="/livestock/sell?ref_type=animal&amp;ref_id=65119798f790ff00082add1c">
                        <i class="fas fa-receipt" aria-hidden="true"></i> Sell Animal
  </a>                  </li>

                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="/animals/65119798f790ff00082add1c/copy">
                      <i class="fas fa-copy" aria-hidden="true"></i> Duplicate Animal
  </a>                </li>
                  <li>
                    <a data-confirm="Are you sure you want to delete 'uuutu'?" rel="nofollow" data-method="delete" href="/animals/65119798f790ff00082add1c">
                      <i class="far fa-trash-alt" aria-hidden="true"></i> Delete
  </a>                </li>
                </ul>
              </div>
            </td>
      </tr>
      </tbody>
    </table>
  </div>
  </form>
