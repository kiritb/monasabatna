<form class="form-vertical" id="cityDateForm">
    <div class="container-fluid" id="commonpack-bg">
        <div class="row" id="set-bg">
            <div class="col-md-12 col-sm-12 themeform-top">
                <div class="form-group d-flex">

                    <input type="hidden" name="pageType" value="">

                    <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="citypack">
                        <label class="themelab" for="citiesList">City</label>
                        <select class="form-control themehome" name="city[]" id="citiesList">
                            <option value="" selected>Select City...</option>
                        </select>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="datapack">
                        <label class="themelab">Date From</label>
                        <input type="text" class="form-control themehome datepicker" placeholder="16 May, 2018"
                            name="from_date">
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="labpack">
                        <label class="themelab">Date To</label>
                        <input type="text" class="form-control themehome datepicker" placeholder="20 May,2018"
                            name="to_date">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3 form-group packform" id="subpack">
                        <label class="themelab"></label>
                        <button type="submit" class="btn btn-danger sub_theme">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>