<x-app-layout title="Cards">
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold">Add Livestock Group</h1>
        </div>
        <form class="new_livestock_group" id="new_livestock_group" action="/livestock_groups" accept-charset="UTF-8" method="post">
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
                <a class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 transition duration-300 ease-in-out" href="/livestock_groups">Cancel</a>
                <input type="submit" name="commit" value="Next" class="bg-green-500 text-white px-4 py-2 ml-4 rounded hover:bg-green-600 transition duration-300 ease-in-out">
            </div>
        </form>
    </div>


</x-app-layout>

<form class="edit_livestock_group" id="edit_livestock_group_650ec6e9234bb100084ef63f" action="/livestock_groups/650ec6e9234bb100084ef63f" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="DcxhXzg8qqxuPHqT4gSuJNakMv2yivi1IxlSGhR+0uHlQ0pixS6aTfcqLzkjAyAwXBDMrji/heN4N39nUuwLVw==">
    <div id="error_explanation">
  </div>


    <!-- tabs !-->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class=""><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
          <li role="presentation" class="active"><a href="#filters" role="tab" data-toggle="tab">Filters</a></li>
        <li role="presentation" class=""><a href="#fields" role="tab" data-toggle="tab">Columns (optional)</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
          <div role="tabpanel" class="tab-pane " id="settings">
              <!--Settings!-->
               <div class="form-group">
            <label class="control-label" for="livestock_group_name">Group Name</label>
            <div class="row">
              <div class="col-md-7">
                <input class="form-control" required="required" type="text" value="jk" name="livestock_group[name]" id="livestock_group_name">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label" for="livestock_group_description">Description</label>
             <div class="row">
              <div class="col-md-7">
                <textarea class="form-control" rows="3" name="livestock_group[description]" id="livestock_group_description"></textarea>
              </div>
            </div>
          </div>

           <div class="form-group">
              <div class="checkbox">
                  <label>
                    <input name="livestock_group[active_only]" type="hidden" value="0"><input type="checkbox" value="1" name="livestock_group[active_only]" id="livestock_group_active_only"> Include Active Animals Only
                  </label>
              </div>
          </div>

          </div>

          <div role="tabpanel" class="tab-pane active" id="filters">
                <div id="group-filters">
                  <h4>Group Filters</h4>
                  <h6>Filter and limit the records that are included on your group</h6>
                  <hr>
                  <!--advanced filters!-->
       <div class="form-group filter-row text-left">
          <label class="control-label">Breed:</label>
          <div class="row">
                  <div class="col-tight-right col-sm-4">
                      <select name="filter[breed_operator" class="form-control">
                              <option value="" selected="'selected'"></option>
                              <option value="starts_with">Starts with</option>
                              <option value="eq">Equals</option>
                              <option value="contains">Contains</option>
                      </select>
                  </div>
                  <div class="col-tight col-sm-8">
                        <input type="text" name="filter[breed]" id="filter_breed" class="form-control">
                </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Gender:</label>
          <div class="row">
      <div class="col-sm-12">
                  <div class="form-inline">
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Female" name="filter[gender][]"> Female
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Male" name="filter[gender][]"> Male
                          </label>
                      </div>
                  </div>
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Status:</label>
          <div class="row">
      <div class="col-sm-12">
                  <div class="form-inline">
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Active" name="filter[status][]"> Active
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Archived" name="filter[status][]"> Archived
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Butchered" name="filter[status][]"> Butchered
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Culled" name="filter[status][]"> Culled
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Deceased" name="filter[status][]"> Deceased
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Dry" name="filter[status][]"> Dry
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Finishing" name="filter[status][]"> Finishing
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="For Sale" name="filter[status][]"> For Sale
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Lactating" name="filter[status][]"> Lactating
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Lost" name="filter[status][]"> Lost
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Off Farm" name="filter[status][]"> Off Farm
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Quarantined" name="filter[status][]"> Quarantined
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Reference" name="filter[status][]"> Reference
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Sick" name="filter[status][]"> Sick
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Sold" name="filter[status][]"> Sold
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Weaning" name="filter[status][]"> Weaning
                          </label>
                      </div>
                  </div>
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Keywords:</label>
          <div class="row">
                  <div class="col-tight-right col-sm-4">
                      <select name="filter[keywords_operator" class="form-control">
                              <option value="" selected="'selected'"></option>
                              <option value="starts_with">Starts with</option>
                              <option value="eq">Equals</option>
                              <option value="contains">Contains</option>
                      </select>
                  </div>
                  <div class="col-tight col-sm-8">
                        <input type="text" name="filter[keywords]" id="filter_keywords" class="form-control">
                </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Breeding Status:</label>
          <div class="row">
      <div class="col-sm-12">
                  <div class="form-inline">
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Exposed" name="filter[breeding_status][]"> Exposed
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Open" name="filter[breeding_status][]"> Open
                          </label>
                      </div>
                      <div class="checkbox">
                          <label>
                          <input type="checkbox" value="Pregnant" name="filter[breeding_status][]"> Pregnant
                          </label>
                      </div>
                  </div>
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Breeding Stock:</label>
          <div class="row">
               <div class="col-sm-12">
                  <label class="radio-inline">
                      <input type="radio" name="filter[breeding_stock]" id="filter_breeding_stock_true" value="true">
                      True
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="filter[breeding_stock]" id="filter_breeding_stock_false" value="false">
                      False
                  </label>
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Neutered:</label>
          <div class="row">
               <div class="col-sm-12">
                  <label class="radio-inline">
                      <input type="radio" name="filter[is_neutered]" id="filter_is_neutered_true" value="true">
                      True
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="filter[is_neutered]" id="filter_is_neutered_false" value="false">
                      False
                  </label>
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Condition Score:</label>
          <div class="row">
              <div class="col-tight-right col-sm-4">
                  <select name="filter[condition_score_operator" class="form-control">
                          <option value="" selected="'selected'"></option>
                          <option value="lt">&lt;</option>
                          <option value="lte">&lt;=</option>
                          <option value="eq">=</option>
                          <option value="gte">&gt;=</option>
                          <option value="gt">&gt;</option>
                  </select>
              </div>
              <div class="col-tight col-sm-8">
                  <input type="text" name="filter[condition_score]" id="filter_condition_score" class="form-control">
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Famacha Score:</label>
          <div class="row">
              <div class="col-tight-right col-sm-4">
                  <select name="filter[famacha_operator" class="form-control">
                          <option value="" selected="'selected'"></option>
                          <option value="lt">&lt;</option>
                          <option value="lte">&lt;=</option>
                          <option value="eq">=</option>
                          <option value="gte">&gt;=</option>
                          <option value="gt">&gt;</option>
                  </select>
              </div>
              <div class="col-tight col-sm-8">
                  <input type="text" name="filter[famacha]" id="filter_famacha" class="form-control">
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Retention Score:</label>
          <div class="row">
              <div class="col-tight-right col-sm-4">
                  <select name="filter[retention_score_operator" class="form-control">
                          <option value="" selected="'selected'"></option>
                          <option value="lt">&lt;</option>
                          <option value="lte">&lt;=</option>
                          <option value="eq">=</option>
                          <option value="gte">&gt;=</option>
                          <option value="gt">&gt;</option>
                  </select>
              </div>
              <div class="col-tight col-sm-8">
                  <input type="text" name="filter[retention_score]" id="filter_retention_score" class="form-control">
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Estimated Value:</label>
          <div class="row">
              <div class="col-tight-right col-sm-4">
                  <select name="filter[estimated_value_operator" class="form-control">
                          <option value="" selected="'selected'"></option>
                          <option value="lt">&lt;</option>
                          <option value="lte">&lt;=</option>
                          <option value="eq">=</option>
                          <option value="gte">&gt;=</option>
                          <option value="gt">&gt;</option>
                  </select>
              </div>
              <div class="col-tight col-sm-8">
                  <input type="text" name="filter[estimated_value]" id="filter_estimated_value" class="form-control">
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Weight:</label>
          <div class="row">
              <div class="col-tight-right col-sm-4">
                  <select name="filter[weight_operator" class="form-control">
                          <option value="" selected="'selected'"></option>
                          <option value="lt">&lt;</option>
                          <option value="lte">&lt;=</option>
                          <option value="eq">=</option>
                          <option value="gte">&gt;=</option>
                          <option value="gt">&gt;</option>
                  </select>
              </div>
              <div class="col-tight col-sm-8">
                  <input type="text" name="filter[weight]" id="filter_weight" class="form-control">
              </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Birth Date Range:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[birth_date][quick_date]" id="filter_birth_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[birth_date][start_date]" id="filter_birth_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[birth_date][end_date]" id="filter_birth_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Date Exposed Range:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[bred_date][quick_date]" id="filter_bred_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[bred_date][start_date]" id="filter_bred_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[bred_date][end_date]" id="filter_bred_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Expected Due Date:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[due_date][quick_date]" id="filter_due_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[due_date][start_date]" id="filter_due_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[due_date][end_date]" id="filter_due_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Last Measurment Date:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[measurement_date][quick_date]" id="filter_measurement_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[measurement_date][start_date]" id="filter_measurement_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[measurement_date][end_date]" id="filter_measurement_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Purchase Date Range:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[purchase_date][quick_date]" id="filter_purchase_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[purchase_date][start_date]" id="filter_purchase_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[purchase_date][end_date]" id="filter_purchase_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Withdrawal Date Range:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[treatments.withdrawal_date][quick_date]" id="filter_treatments.withdrawal_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[treatments.withdrawal_date][start_date]" id="filter_treatments-withdrawal_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[treatments.withdrawal_date][end_date]" id="filter_treatments-withdrawal_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Booster Date Range:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[treatments.retreat_date][quick_date]" id="filter_treatments.retreat_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[treatments.retreat_date][start_date]" id="filter_treatments-retreat_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[treatments.retreat_date][end_date]" id="filter_treatments-retreat_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Weaned Date Range:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[weaned_date][quick_date]" id="filter_weaned_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[weaned_date][start_date]" id="filter_weaned_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[weaned_date][end_date]" id="filter_weaned_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Date Deceased Range:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[death_date][quick_date]" id="filter_death_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[death_date][start_date]" id="filter_death_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[death_date][end_date]" id="filter_death_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Date Sold Range:</label>
          <div class="row">
                <div class="col-tight-right col-sm-4">
                    <select name="filter[sale_date][quick_date]" id="filter_sale_date_quick_date" class="form-control js-quick-date"><option value="" label=" "></option><option value="custom">Custom</option>
  <option value="this_year">This Year</option>
  <option value="last_year">Last Year</option>
  <option value="this_month">This Month</option>
  <option value="last_month">Last Month</option>
  <option value="this_quarter">This Quarter</option>
  <option value="this_week">This Week</option>
  <option value="in_the_last_90_days">In the Last 90 Days</option>
  <option value="in_the_last_6_months">In the Last 6 Months</option>
  <option value="in_the_last_12_months">In the Last 12 Months</option>
  <option value="in_the_last_18_months">In the Last 18 Months</option>
  <option value="in_the_last_24_months">In the Last 24 Months</option>
  <option value="in_the_last_36_months">In the Last 36 Months</option>
  <option value="more_than_6_months_ago">More than 6 Months Ago</option>
  <option value="more_than_12_months_ago">More than 12 Months Ago</option>
  <option value="more_than_18_months_ago">More than 18 Months Ago</option>
  <option value="more_than_24_months_ago">More than 24 Months Ago</option>
  <option value="more_than_36_months_ago">More than 36 Months Ago</option>
  <option value="all_dates">All Dates</option>
  <option value="not_set">Not Set</option></select>
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[sale_date][start_date]" id="filter_sale_date_start_date" value="" class="form-control">
                </div>
                <div class="col-tight col-sm-4">
                    <input type="date" name="filter[sale_date][end_date]" id="filter_sale_date_end_date" value="" class="form-control">
                 </div>
            </div>
        </div>
       <div class="form-group filter-row text-left">
          <label class="control-label">Group:</label>
          <div class="row">
              <div class="col-sm-12">
                  <select name="filter[id]" id="filter_id" class="form-control"><option value="" label=" "></option><option value="650ad4ed7656aa00142381c3">j</option>
  <option value="650ec6e9234bb100084ef63f">jk</option>
  <option value="650eb2e97656aa000d2387d3">k</option></select>
              </div>
                    </div>
        </div>
  <!--advanced filters!-->

                </div>
          </div>

        <div role="tabpanel" class="tab-pane " id="fields">
          <h4>Select Columns (optional)</h4>
          <h6>Choose the data that you would like to include when viewing your group</h6>
          <div id="report-fields-wrapper-report_field" class="panel panel-default">
      <div class="panel-body">
          <div class="row">
              <div class="col-md-7">
                  <div class="column_select_wrapper" data-id="report-fields-select">
      <div class="suggest-field-wrapper">
          <input type="text" id="report-fields-select-search" class="form-control suggest-field ui-autocomplete-input" value="" placeholder="Search" autocomplete="off">
      </div>
      <input type="hidden" name="add_field" id="report-fields-select" value="">

      <script>
              document.addEventListener("DOMContentLoaded", function(){
                  init_12b5f82b0ad44aae9e699863fb715429();
              });
          var items = [{"label":"AVG Daily Feed Consumed","value":"avg_feed_consumed"},{"label":"Age","value":"age"},{"label":"Animal Name","value":"name"},{"label":"Animal Type","value":"animal_type"},{"label":"Average Daily Gain","value":"adg"},{"label":"Basic Group Name","value":"basic_group"},{"label":"Birth Date","value":"birth_date"},{"label":"Birth Weight","value":"birth_weight"},{"label":"Birthing Interval","value":"birthing_interval"},{"label":"Break Even Amount","value":"breakeven"},{"label":"Breed","value":"breed"},{"label":"Breeding Costs","value":"breeding_cost"},{"label":"Breeding Status","value":"breeding_status"},{"label":"Coloring","value":"coloring"},{"label":"Conception Rate","value":"conception_rate"},{"label":"Condition Score","value":"condition_score"},{"label":"Dam","value":"dam"},{"label":"Date Bred","value":"bred_date"},{"label":"Date Deceased","value":"death_date"},{"label":"Date Purchased","value":"purchase_date"},{"label":"Date Sold","value":"sale_date"},{"label":"Date Weaned","value":"weaned_date"},{"label":"Days Open Average","value":"avg_days_open"},{"label":"Days since Last Breeding","value":"days_since_bred"},{"label":"Electronic ID","value":"electronic_id"},{"label":"Estimated Value","value":"estimated_value"},{"label":"Expected Due Date","value":"due_date"},{"label":"FCR","value":"fcr"},{"label":"Failed Pregnancies","value":"failed_pregnancy_count"},{"label":"Failed Pregnancy Rate","value":"failed_pregnancy_rate"},{"label":"Famacha Score","value":"famacha"},{"label":"Fecal Egg Count","value":"fec"},{"label":"Feed Cost","value":"feed_costs"},{"label":"Frame Score","value":"framescore"},{"label":"Gender","value":"gender"},{"label":"Grazing in Field","value":"grazing"},{"label":"Internal ID","value":"internal_id"},{"label":"Is Breeding Stock","value":"breeding_stock"},{"label":"Is Neutered","value":"is_neutered"},{"label":"Last Height","value":"height"},{"label":"Last Measurement Date","value":"last_measurement_date"},{"label":"Last Pregnancy Check Date","value":"last_pregcheck_date"},{"label":"Last Pregnancy Check Method","value":"last_pregcheck_method"},{"label":"Last Pregnancy Check Results","value":"last_pregcheck_result"},{"label":"Last Weaning","value":"last_date_weaning"},{"label":"Last Weight","value":"weight"},{"label":"Market Price","value":"market_price"},{"label":"Months Old","value":"months_old"},{"label":"Next Booster Date","value":"next_booster_date"},{"label":"Next Withdrawal Date","value":"next_withdrawal_date"},{"label":"Other Tag Color","value":"other_tag_color"},{"label":"Other Tag Location","value":"other_tag_location"},{"label":"Other Tag Number","value":"other_tag_number"},{"label":"Purchase Price","value":"purchase_price"},{"label":"Purchased From","value":"purchased_from_name"},{"label":"Registry Number","value":"registry_number"},{"label":"Retention Score","value":"retention_score"},{"label":"Sale Price","value":"sale_price"},{"label":"Sire","value":"sire"},{"label":"Sold To","value":"sold_to"},{"label":"Status","value":"status"},{"label":"Tag Color","value":"tag_color"},{"label":"Tag Location","value":"tag_location"},{"label":"Tag Number","value":"tag_number"},{"label":"Target Weaning Date","value":"target_wean_date"},{"label":"Tattoo Left","value":"tattoo_left"},{"label":"Tattoo Right","value":"tattoo_right"},{"label":"Total Harvested","value":"total_harvested"},{"label":"Was Purchased","value":"purchased"}];
          function init_12b5f82b0ad44aae9e699863fb715429(){
              //format data for autocomplete
              search_suggest($('#report-fields-select-search'), items, $('#report-fields-select'), false, function(event, ui){});
          }
      </script>
  </div>
              </div>
              <div class="col-md-5">
                  <button class="btn btn-default js-add-all-fields" type="button">Add All</button>
                  <button class="btn btn-default js-clear-all-fields" type="button">Clear</button>
              </div>
          </div><!-- /input-group -->
          <br>
          <div class="js-report-fields hidden">
              <ul class="list-group report-fields-list ui-sortable">
              </ul>
          </div>
      </div>
  </div>
  <script>
          document.addEventListener("DOMContentLoaded", function(){
              init_25841ccba9c74406bdb19e5c38b5fe1e();
          });

      function init_25841ccba9c74406bdb19e5c38b5fe1e(){
          //make field list sortable
          $( "#report-fields-wrapper-report_field .report-fields-list" ).sortable({
              stop: function( event, ui ) {
                  var i = 0;
                  //renumber all the fields
                  $('#report-fields-wrapper-report_field .report-fields-list li').each(function(){
                      $(this).find('.js-report-field').attr('name','report_field[' + i + ']');
                      i++;
                  });
              }
          });
          $( "#report-fields-wrapper-report_field .report-fields-list" )

          $('#report-fields-wrapper-report_field .js-add-all-fields').on('click', function(){
              var $search_fld = $('#report-fields-wrapper-report_field #report-fields-select-search')
              var src = $search_fld.autocomplete( "option","source" );
              if(src){
                  src.forEach((e) => {
                      addReportField(e.value, e.label)
                  })
              }
          })

          $('#report-fields-wrapper-report_field #report-fields-select-search' ).on('searchselect',function(event, label, val){
              addReportField(val, label)
              $(this).val("")
          });

          function addReportField(field_id, field_name){
              if(field_id.length > 0){
                  //make sure field doens't exist already
                  if($("#report-fields-wrapper-report_field .js-report-field[value='" + field_id + "']").length == 0){
                      //get next index
                      var index = $('#report-fields-wrapper-report_field .report-fields-list li').length
                      $('#report-fields-wrapper-report_field .js-report-fields').removeClass('hidden');
                      //add remove
                      var $row = $('#report-fields-wrapper-report_field .report-fields-list').append('<li class="list-group-item"><i class="fas fa-bars text-muted" title="Drag & Drop to Reorder"></i> &nbsp; ' + field_name + '<i class="fas fa-times pull-right js-remove-field"></i><input type="hidden" class="js-report-field" name="report_field['+ index + ']" value="' + field_id + '"/></li>');
                      //remove selected option for newly added field
                      $('.report-fields-list li.list-group-item .js-remove-field').on('click',function(){
                          $(this).closest('li').remove()
                      });
                  }
              }
              showMessage("Field added")
          }

          $('#report-fields-wrapper-report_field .js-clear-all-fields').on('click', function(){
              $('#report-fields-wrapper-report_field .report-fields-list li').remove();
          })

          $('.report-fields-list li.list-group-item .js-remove-field').on('click',function(){
              $(this).closest('li').remove()
          });
      }

  </script>
        </div>

      </div>

    <div class="actions">
        <a class="btn btn-default" href="/livestock_groups/650ec6e9234bb100084ef63f">Cancel</a>
      <input type="submit" name="commit" value="Save" class="btn btn-success" data-disable-with="Save">
    </div>

  </form>
