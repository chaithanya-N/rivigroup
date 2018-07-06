

<div class="row login">
			<div class="col-md-12">
				<div class="col-md-4 login-div pull-right">
					<form  name="form" id="login-form" method="post"  >
						<div class="col-md-12 text-center">
							<label class="loginlbl">Login</label>
						</div>
					
						<div class="col-md-12 text-center" style="padding:15px; background: #fff">
							<label class="lbl1">User ID</label>
							<input type="email" class="form-control" name="userid" 
							 id="mail">
							 <label style="color:red;" class="fname-error error" id="error0">Please enter valid User ID </label> <br> 
							<label class="lbl1">Password</label>
							<input type="password" class="form-control" name="password"
						 id="pw">
							 <label style="color:red;" class="fname-error error" id="error">Please enter Password </label>
							<br>
							<button type="button" onclick="return emailval()" id="loginbtn" >Login</button>
							<hr> 
							<a href="forgot-password">Forgot Password</a>
 						</div>
					</form>
			
				</div>
			</div>
		</div>