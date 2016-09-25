@extends('layout')


@section('register')

<div class="main_bg">
<div class="wrap">
<div class="main">
     <div class="contact">
          <div class="register_info">
            <h2>Give info</h2>

          <div class="register-form">

              <form method="post" action="?">
                <div>
                  <span><label>Full Name</label></span>
                  <span><input name="fullName" type="text" class="textbox"></span>
                </div>
                <div>
                  <span><label>User Name</label></span>
                  <span><input name="userName" type="text" class="textbox"></span>
                </div>
                <div>
                  <span><label>E-mail</label></span>
                  <span><input name="userEmail" type="text" class="textbox"></span>
                </div>
                <div>
                  <span><label>Mobile</label></span>
                  <span><input name="userPhone" type="text" class="textbox"></span>
                </div>
                <div>
                  <span><label>Password</label></span>
                  <span><input name="password" type="password" class="textbox"></span>
                </div>
                <div>
                  <span><label>Re-type Password</label></span>
                  <span><input name="rePassword" type="password" class="textbox"></span>
                </div>
               <div>
                  <span><input type="submit" class="" value="Register"></span>
              </div>
              </form>
            </div>
          <div class="clear"></div>
        </div>
    </div>
</div>
</div>

@endsection
