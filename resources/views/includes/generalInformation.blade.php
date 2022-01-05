<div class="accordion-item accor_main_space">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button accor_style acco_btn_style" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            GENERAL INFORMATION
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="ms-xl-5 geninfo_flabel_style">
                <h6>Your Details</h6>
            </div>
            <div class="ms-xl-5 me-xl-5">
                <form class="row needs-validation" novalidate>
                    <div class="col-xl-6 col-12 mb-xl-0 mb-2">

                        <input type="text" class="form-control Fname" placeholder="FIRST NAME" aria-label="First name" maxlength="8" minlength="4" name="firstname" id="fname" required />
                        <p id="usercheck" style="color: red;">
                            *First Name is missing
                        </p>
                    </div>
                    <div class="col-xl-6 col-12 mb-xl-0 mb-2">
                        <input type="text" class="form-control Lname" placeholder="LAST NAME" aria-label="Last name" name="lastname" id="lname" />
                        <p id="usercheck2" style="color: red;">
                            *Last Name is missing
                        </p>
                    </div>
                    <div class="col-12 mt-xl-3 mb-xl-3 mb-4">
                        <input type="text" class="form-control Email" id="email" placeholder="EMAIL" id="email" />
                        <small id="emailvalid" class="form-text
                text-muted invalid-feedback">
                            Your email must be a valid email
                        </small>
                    </div>
                </form>
            </div>

            <div class="ms-xl-5 geninfo_flabel_style">
                <h6>Mailing Address</h6>
            </div>
            <div class="ms-xl-5 me-xl-5">
                <form class="row">
                    <div class="col-12 mb-xl-3 mb-2">
                        <input type="text" class="form-control inputAddress" id="inputAddress" placeholder="ADDRESS1" />
                    </div>
                    <div class="col-12 mb-xl-3 mb-2">
                        <input type="text" class="form-control inputAddress2" id="inputAddress2" placeholder="ADDRESS2" />
                    </div>
                    <div class="col-12 mb-xl-3 mb-2">
                        <select id="inputState" class="form-select">
                            <option>Select Country</option>
                            @foreach($countries as $country)
                            <option>{{$country->name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="col-md-6 mb-xl-3 mb-2">
                        <input type="text" class="form-control inputCity" id="inputCity" placeholder="CITY" />
                    </div>
                    <div class="col-md-4 mb-xl-3 mb-2">
                        <input type="text" class="form-control inputState" id="inputCity" placeholder="STATE" />
                    </div>
                    <div class="col-md-2 mb-xl-3 mb-4">
                        <input type="text" class="form-control inputZip" id="inputZip" placeholder="ZIPCODE" />
                    </div>
                </form>
            </div>

            <div class="ms-xl-5 geninfo_flabel_style">
                <h6>Did somebody refer you?</h6>
            </div>
            <div class="ms-xl-5 me-xl-5">
                <form class="row">
                    <div class="col-12 mb-xl-3 mb-4">
                        <input type="text" class="form-control inputAddress3" id="inputAddress" placeholder="NAME" />
                    </div>
                </form>
            </div>

            <div class="ms-xl-5 geninfo_flabel_style">
                <h6>Did somebody give you a code?</h6>
            </div>
            <div class="ms-xl-5 me-xl-5">
                <form class="row">
                    <div class="col-12 mb-xl-3 mb-4">
                        <input type="text" class="form-control inputAddress4" id="inputAddress" placeholder="CODE" />
                    </div>
                </form>
            </div>

            <div class="ms-xl-5 geninfo_flabel_style">
                <h6>Joint Membership</h6>
            </div>
            <div class="ms-xl-5 me-xl-5 mb-xl-5">
                <div class="row">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="watch-me" value="option2" />
                        <label class="form-check-label" for="gridRadios2">
                            ADD A FAMILY MEMBER
                        </label>
                    </div>
                </div>
            </div>

            <div id="show-me" style="display: none">
                <div class="ms-xl-5 me-xl-5">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name" />
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" />
                        </div>
                        <div class="col-12 mt-xl-3 mb-xl-3">
                            <input type="text" class="form-control" id="inputAddress" placeholder="EMAIL" />
                        </div>
                        <div class="col-12 mb-xl-3">
                            <input type="text" class="form-control" id="inputAddress" placeholder="PHONE NUMBER" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="continue_style">
                <button data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" type="submit" class="btn btn-primary continue_btn_style rsform-submit-button Submit" id="Submit">
                    COUNTINUE
                </button>
            </div>
        </div>
    </div>
</div>