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
#new {
    margin-left:70%;
}
</style>

<body>

    <div class="container">

    <div class="row">
            <span class="col-md-12 text-center">
                <h2>Login</h2>
</span>
        </div>    

        <div class="row">

        <form action="<?php echo base_url()."index.php/user/Login"?>" method="post">
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="email">Email</label>
                <div class="col-sm-5">
                    <input required type="text" name="email" class="form-control"
                        value="<?php echo set_value('email'); ?>" placeholder="Enter Email" id="email">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="password">Password</label>
                <div class="col-sm-5">
                    <input required type="password" name="password" class="form-control"
                        value="<?php echo set_value('password'); ?>" placeholder="Enter Password" id="password">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right"></label>
                <div class="col-sm-5">
                    <button class="btn btn-outline-success" type="submit"> Submit</button>
					<span>
                        <a  id ="new" href="<?php echo base_url()."index.php/user/Register"?>"  >New User</a>
                	</span>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</html>
