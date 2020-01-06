<style>
    th {
        text-align: right;
    }

    td {
        text-align: left;
    }
</style>

<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body bg-white">
                <button data-dismiss="modal" class="close text-black">&times;</button>
                <h4 style="color: black">Login</h4>
                <form>
                    <input type="text" name="username" class="username form-control"
                           placeholder="Username" style="border-color: lightgrey; opacity: 1"/>
                    <input type="password" name="password" class="password form-control"
                           placeholder="Password" style="border-color: lightgrey; opacity: 1"/>
                    <h6 style=""><a href="forgotPassword.php"> Forgot Password?</a></h6>
                    <h6 style="color: black"> Not a member? <a href="signUp.php">Sign Up.</a></h6>
                    <input class="btn login btn-primary" type="submit" value="Login"/>
                </form>
            </div>
        </div>
    </div>
</div>

<div style="background-color: black;top: 0;height: 120px"></div>
<div class="site-section" id="properties-section">
    <div class="container align-content-center">
        <div class="row">
            <div class="col">
                <h2 class="section-title text-black">CREATE NEW ACCOUNT</h2>
                <table class="table text-black mt-4 text-center" cellspacing="5"
                       cellpadding="5">
                    <tbody>
                    <tr>
                        <th>Full Name</th>
                        <td><input type="text" class="" id="inputName" name="name" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><input type="text" id="inputUsername" name="username" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" id="inputPassword" name="password" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th>Re-type Password</th>
                        <td><input type="password" id="inputPassword" name="password" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td><input type="button" class="btn btn-primary" id="buttonSignUp" name="signUpButton"
                                   value="Create Account"></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
</div>
