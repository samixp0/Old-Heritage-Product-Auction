<?php include "includes/header.php" ?>

<div class="container ">
    <div class="row bound">
        <div class="col-sm-12 col-md-12 col-lg-12">
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="panel panel-u">
                <div class="panel heading-a">
                    <p> <b>MY INFORMATION </b>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><i class="fa fa-edit"></i>EDIT PROFILE</a></p>
                </div>
                <div class="panel-body-b">
                    <div class="form-horizontal">
                        <div class="row manage">
                            <label class="control-label col-md-3">
                                Name
                            </label>
                            <div class="col-md-4 rank">
                                <span id="Body_lblFirstName" class="aspNetDisabled form-control">Naeem </span>
                            </div>
                            <div class="col-md-4 bang">
                                <span id="Body_lblLastName" class="aspNetDisabled form-control">Islam</span>
                            </div>
                        </div>
                        <div class="row manage">
                            <label class="control-label col-md-3">
                                User Name<span class="text-danger">&nbsp;*</span></label>
                            <div class="col-md-8">
                                <input type="text" value="naeemxp" id="Body_txtUsername" class="aspNetDisabled form-control">
                            </div>
                        </div>
                        <div class="row manage">
                            <label class="control-label col-md-3">
                                Email</label>
                            <div class="col-md-8">
                                <input type="text" value="naeemxp@gmail.com" id="Body_txtEmail" class="aspNetDisabled form-control">
                            </div>
                        </div>
                        <div class="row manage">
                            <label class="control-label col-md-3">
                                Mobile<span class="text-danger">&nbsp;*</span></label>
                            <div class="col-md-8">
                                <input type="text" value="+8801679602307" maxlength="10" id="Body_txtMobile" class="aspNetDisabled form-control" placeholder="Mobile">
                            </div>
                        </div>
                        <div class="row manage">
                            <label class="control-label col-md-3">
                                Birthdate<span class="text-danger">&nbsp;*</span></label>
                            <div class="col-md-8">
                                <input type="text" id="Body_txtDOB" class="aspNetDisabled form-control" placeholder="Birthdate">

                            </div>
                        </div>
                        <div class="row manage">
                            <label class="control-label col-md-3">
                                Address<span class="text-danger">&nbsp;*</span></label>
                            <div class="col-md-8">
                                <textarea name="text-context" class="aspNetDisabled form-control" id="address" cols="41" placeholder="Address" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row manage">
                            <label class="control-label col-md-3">
                                City<span class="text-danger">&nbsp;*</span></label>
                            <div class="col-md-8">
                                <input type="text" id="Body_txtCity" class="aspNetDisabled form-control" placeholder="City">
                            </div>
                        </div>
                        <div class="row manage">
                            <label class="control-label col-md-3">
                                Country<span class="text-danger">&nbsp;*</span></label>
                            <div class="col-md-8">
                                <input type="text" id="Body_txtCountry" class="aspNetDisabled form-control" placeholder="Country">
                            </div>
                        </div>
                    </div>
                    <div class="cotainer">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button class="btn btn-secondary  button-b"> Save changes</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="panel panel-u">
                <div class="panel heading-a">
                    <p><b>CHANGE PASSWORD</b></p>
                </div>
                <div class="panel-body-b">
                    <div class="container">
                        <div class="row manage">
                            <i class="fa fa-key col-md-1"></i>
                            <div class="col-md-10  ">
                                <input type="password" class="form-control " placeholder="Old Password">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row manage">
                            <i class="fa fa-key col-md-1"></i>
                            <div class="col-md-10  ">
                                <input type="password" class="form-control " placeholder="New Password">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row manage">
                            <i class="fa fa-key col-md-1"></i>
                            <div class="col-md-10  ">
                                <input type="password" class="form-control " placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <div class="cotainer">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button class="btn btn-secondary  button-b"> Change Password</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</div>
<?php include "includes/footer.php"?>

