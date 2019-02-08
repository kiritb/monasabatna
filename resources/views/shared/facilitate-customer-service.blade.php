<form class="form-horizontal text-center col-sm-6" id="facilitate-form">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
            <input type="text" class="form-control customhomeone" placeholder="Name" name="name">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
            <input type="text" class="form-control customhome" placeholder="Phone Number" name="phone">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
            <input type="text" class="form-control customhomeone" placeholder="Email Address" name="email">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
            <input type="text" class="form-control customhome datepicker" placeholder="Event Date" name="eventdate">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
            <select class="form-control customhomeone" name="eventtype">
                <option value="" selected>--Select event type--</option>
                <option value="Marriages">Mariages</option>
                <option value="Babyshower">Baby Shower</option>
                <option value="birthdays">Birthdays</option>
                <option value="tradition">Tradition Ceremonies</option>
            </select>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
            <input type="text" class="form-control customhome" placeholder="Number of Guests" name="noofguests">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
            <select class="form-control customhomeone" name="foodtype">
                <option value="" selected>--Select Food--</option>
                <option value="Marriages">Mariages</option>
                <option value="Babyshower">Baby Shower</option>
                <option value="birthdays">Birthdays</option>
                <option value="tradition">Tradition Ceremonies</option>
            </select>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
            <select class="form-control customhomeone" name="decoration">
                <option value="" selected>--Select Decoration--</option>
                <option value="Marriages">Mariages</option>
                <option value="Babyshower">Baby Shower</option>
                <option value="birthdays">Birthdays</option>
                <option value="tradition">Tradition Ceremonies</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
            <select class="form-control customhomeone" name="budget">
                <option value="" selected>--Select Budget--</option>
                <option value="100">100</option>
                <option value="200">200</option>
                <option value="300">300</option>
                <option value="400">400</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <textarea class="form-control customtext" placeholder="Note" rows="4" name="notes"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 form-group mt-3">
            <button type="submit" class="btn btn-info btn-lg center-block" id="show_recordform">SUBMIT</button>
        </div>
    </div>
</form>