<div class="login-container">	<div class="block green">			<h1 class="beta">Log In</h1>				<p><strong>Simply fill in your details below to log in to the website.</strong></p>				<?php echo form_open('home/login', array('id' => 'login_form')) ?>				<div style="float:left;">			<label for="email">E-mail Address</label>			<br />			<?php echo form_input(array(				'name' => 'email',				'id' => 'email',				'maxlength' => 100,				'class' => 'text-input',				'placeholder' => 'Email Address',			)); ?>		</div>				<div style="float:left; margin-left: 20px;">			<label for="password">Password</label>			<br />			<?php echo form_password(array(				'name' => 'password',				'id' => 'password',				'maxlength' => 100,				'class' => 'text-input',				'placeholder' => 'Password',			)); ?>		</div>		<div style="clear:both;"></div>						<p>				<input type="submit" name="submit" value="Log In" class="wide round orange button float-right">			</p>				</form>				<p>			If you have not used the site before, you will need to <a href="<?php echo site_url('home/register'); ?>">register on the site.</a>			<br />If you have <a href="<?php echo site_url('home/forgotten-password'); ?>">forgotten your password</a>, a new one can be e-mailed to you.		</p>			</div></div>