@include('shared/header')
<link rel="stylesheet" type="text/css" href="{{ url('css/contactus.css') }}">
<div class="container-fluid" id="greydivider"> </div>

<div class="container-fluid" id="contactworld">
    <div class="leftcontact">
        <div class="row cnthead">
            Contact US
        </div>
        <div class="row cntmap">
            <div class="cnticon">
                <i class="fas fa-map-marker-alt" style="font-size:20px; color:#6cc0b9"></i>
            </div>
            <div class="cntaddressz">
                Address :
            </div>
            <div class="cntdesc">
                123, abc Road, xyz Building, 2nd Floor, Jeddah
            </div>
        </div>
        <!----------row cntmap ------------------->
        <div class="row cntmap">
            <div class="cnticon">
                <i class="fas fa-phone" style="font-size:20px; color:#6cc0b9"></i>
            </div>
            <div class="cntaddress">
                Phone :
            </div>
            <div class="cntdescone">
                +91-9876543210
            </div>
        </div>
        <!----------row cntmap ------------------->
        <div class="row cntmap">
            <div class="cnticon">
                <i class="far fa-envelope" style="font-size:20px; color:#6cc0b9"></i>
            </div>
            <div class="cntaddress">
                Email :
            </div>
            <div class="cntdesctwo">
                info@munasabatna.com
            </div>
        </div>
        <!----------row cntmap ------------------->

    </div>
    <!--------------leftcontact -------------->

    <div class="rightcontact">
        <div class="row cntheadem">
            Email Us

        </div>
        <div class="row cnttxt">
            **Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            laboris nisi ut aliquip.
        </div>
        <form class="form-horizontal" id="contact-us-form">
            <div class="form-group">

                <input type="firstname" name="first_name" class="form-control contact-form-inputs" aria-describedby="emailHelp"
                    placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="secondname" name="fathers_name" class="form-control contact-form-inputs" placeholder="Second Name">
            </div>
            <div class="form-group">
                <input type="familyname" name="family_name" class="form-control contact-form-inputs" placeholder="Family Name">
            </div>
            <div class="row cntinput">
                <div class="colext">
                    <input type="ext" name="country_code" class="form-control" id="exampleInputext" placeholder="+91  ">
                </div>
                <div class="colphn">
                    <input type="phone" name="phone_number" class="form-control" id="exampleInputphone" placeholder="Your Phone Number">
                </div>
            </div>
            <!----------------row ----------------------->
            <div class="form-group">
                <input type="emailadd" name="email" class="form-control" id="exampleInputemailadd" placeholder="Email Address">
            </div>
            <div class="form-group">
                <textarea type="msg" name="message" class="form-control" id="exampleInputmsgadd" placeholder="Your Message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg-12 custom-button ctusbtn" value="Send">
            </div>
        </form>
    </div>
    <!----------------rightcontact ------------------------>
    <div class="leftsocial">
        <div class="row cnthead">
            Connect With US
        </div>
        <div class="row soctriple">
            <a href="#" class="facebtn"><i class="fab fa-facebook-f" style="font-size:20px; padding-right:10px; padding-top:2px"></i>Facebook</a>
            <a href="#" class="facebtn"><i class="fab fa-twitter" style="font-size:20px; padding-right:10px; padding-top:2px"></i>Twitter</a>
            <a href="#" class="facebtn"><i class="fab fa-instagram" style="font-size:20px; padding-right:10px; padding-top:2px"></i>Instagram</a>
        </div>
    </div>
    <!----------------leftsocial ----------------------->
</div>
<!------------- contactworld ---------------------------------->

<div class="row"> </div>

@include('shared/footer')
<script src="{{ url('js/contact-us.js') }}" type="text/javascript" charset="utf-8"></script>
