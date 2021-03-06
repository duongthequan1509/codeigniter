<script language="javascript" src="../../jsvalidate/jquery.js" type="text/javascript"></script>
<script language="javascript" src="../../jsvalidate/jquery.validate.min.js" type="text/javascript"></script>
<script>
(function($,W,D)
{
    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    agree: "required"
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
})(jQuery, window, document);
</script>
<form action="" method="post" id="register-form" novalidate="novalidate">
 
    <h2>User Registration</h2>
 
    <div id="form-content">
        <fieldset>
 
            <div class="fieldgroup">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname"/>
            </div>
 
            <div class="fieldgroup">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname"/>
            </div>
 
            <div class="fieldgroup">
                <label for="email">Email</label>
                <input type="text" name="email"/>
            </div>
 
            <div class="fieldgroup">
                <label for="password">Password</label>
                <input type="password" name="password"/>
            </div>
 
            <div class="fieldgroup">
                <p class="right">By clicking register you agree to our <a target="_blank" href="/policy">policy</a>.</p>
                <input type="submit" value="Register" class="submit"/>
            </div>
 
        </fieldset>
    </div>
 
        <div class="fieldgroup">
            <p>Already registered? <a href="/login">Sign in</a>.</p>
        </div>
</form>
<style>
#register-form {
    background: url("form-fieldset.gif") repeat-x scroll left bottom #F8FDEF;
    border: 1px solid #DFDCDC;
    border-radius: 15px 15px 15px 15px;
    display: inline-block;
    margin-bottom: 30px;
    margin-left: 20px;
    margin-top: 10px;
    padding: 25px 50px 10px;
    width: 350px;
}
 
#register-form .fieldgroup {
    background: url("form-divider.gif") repeat-x scroll left top transparent;
    display: inline-block;
    padding: 8px 10px;
    width: 340px;
}
 
#register-form .fieldgroup label {
    float: left;
    padding: 15px 0 0;
    text-align: right;
    width: 110px;
}
 
#register-form .fieldgroup input, #register-form .fieldgroup textarea, #register-form .fieldgroup select {
    float: right;
    margin: 10px 0;
    height: 25px;
}
 
#register-form .submit {
    padding: 10px;
    width: 220px;
    height: 40px !important;
}
 
#register-form .fieldgroup label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 4px 0 5px 125px;
    padding: 0;
    text-align: left;
    width: 220px;
}
</style>