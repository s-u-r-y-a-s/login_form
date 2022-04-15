<!doctype html>
<html>

<head>
    <title>Registration form using codeigniter 3</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<style>
body {
    background: grey;
}

.custom-bottom-margin {
    padding-bottom: 30px;
}

</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Registration Form</h2>
            </div>
        </div>

        <div class="row">

            <form action="<?php echo base_url()."index.php/user/RegisterUser"?>" method="post">
                <div class="form-group custom-bottom-margin">
                    <label class="control-label col-sm-4 text-right" for="name">First Name</label>
                    <div class="col-sm-5">
                        <input required type="text" name="first_name" class="form-control"
                            value="<?php echo set_value('first_name'); ?>" placeholder="Enter First name" id="fname">
                    </div>
                </div>
                <div class="form-group custom-bottom-margin">
                    <label class="control-label col-sm-4 text-right" for="name">Last Name</label>
                    <div class="col-sm-5">
                        <input required type="text" name="last_name" class="form-control"
                            value="<?php echo set_value('last_name'); ?>" placeholder="Enter Last name" id="lname">
                    </div>
                </div>
                <div class="form-group custom-bottom-margin">
                    <label class="control-label col-sm-4 text-right" for="email">Email</label>
                    <div class="col-sm-5">
                        <input required type="email" name="email" class="form-control"
                            value="<?php echo set_value('email');?>" placeholder="Enter email" id="email">
                    </div>
                </div>
                <div class="form-group custom-bottom-margin">
                    <label class="control-label col-sm-4 text-right" for="confirm_email">Confirm Email</label>
                    <div class="col-sm-5">
                        <input required type="text" name="confirm_email" class="form-control"
                            value="<?php echo set_value('confirm_email');?>" placeholder="Confirm email"
                            id="confirm_email">
                    </div>
                </div>

                <div class="form-group custom-bottom-margin">
                    <label class="control-label col-sm-4 text-right" for="password">Password</label>
                    <div class="col-sm-5">
                        <input required type="password" name="password" class="form-control"
                            value="<?php echo set_value('password');?>" placeholder="Enter password" id="password">
                    </div>
                </div>

                <div class="form-group custom-bottom-margin">
                    <label class="control-label col-sm-4 text-right" for="phone">Phone</label>
                    <div class="col-sm-5">
                        <input required type="text" name="phone" class="form-control"
                            value="<?php echo set_value('phone');?>" placeholder="Enter phone" id="phone">
                    </div>
                </div>

                <div class="form-group custom-bottom-margin">
                    <label class="control-label col-sm-4 text-right" for="phone">Designation</label>
                    <div class="col-sm-5">
                        <input required type="text" name="designation" class="form-control"
                            value="<?php echo set_value('designation');?>" placeholder="Designation" id="designation">
                    </div>
                </div>

                <div class="form-group custom-bottom-margin">
                    <label class="control-label col-sm-4 text-right"></label>
                    <div class="col-sm-5">
                        <button class="btn btn-outline-success" type="submit"> Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>


</body>

</html>