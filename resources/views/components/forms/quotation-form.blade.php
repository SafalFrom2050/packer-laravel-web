<form class="modala-content" action="{{route('quotations.store')}}" method="post">
    @csrf

    <div class="control-group">
        <input type="text" class="form-control p-4" name="fullname" id="fullname" placeholder="Please Enter Full Your Name"
               required="required" data-validation-required-message="Please enter Full Your Name"/>
        <p class="help-block text-danger"></p>
    </div>
    <div class="form-row">

        <div class="col-sm-6 control-group">
            <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email" required="required"
                   data-validation-required-message="Please enter your email"/>
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-sm-6 control-group">
            <input type="text" class="form-control p-4" id="phone" name="phone" placeholder="Your Contact No." required="required"
                   data-validation-required-message="Please enter your phone number"/>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="form-row">

        <div class="col-sm-6 control-group">
            <input type="text" class="form-control p-4" id="pickup_location" name="pickup_location" placeholder="Your Pickup Location" required="required"
                   data-validation-required-message="Please Enter Your Pickup Location"/>
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-sm-6 control-group">
            <input type="text" class="form-control p-4" id="drop_location" name="drop_location" placeholder="Your Drop Location" required="required"
                   data-validation-required-message="Please Enter Your Drop Location"/>
            <p class="help-block text-danger"></p>
        </div>
    </div>


    <div class="control-group">
        <textarea class="form-control p-4" rows="6" id="message" name="message" placeholder="Message" required="required"
                  data-validation-required-message="Please enter your message"></textarea>
        <p class="help-block text-danger"></p>
    </div>
    <div>
        <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
    </div>

</form>
