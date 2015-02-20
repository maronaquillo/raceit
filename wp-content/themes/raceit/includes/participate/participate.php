

<h1>Participant Information</h1>
<div id="participant-form">
    	<div class="participant-">
            <div class="row">
                <div class="col-md-7 form-fields">
                    <form method="post" action="<?php echo WP_SITEURL.'/participate/?event_id='.$event_id ?>">
                        <div class="form-group">
                            <label for="participant_first_name"><span class="required">*</span>First Name:</label>
                            <input required type="text" class="form-control" name="participant_first_name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="participant_last_name"> <span class="required">*</span>Last Name:</label>
                            <input required type="text" class="form-control" name="participant_last_name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="participant_email_address"> <span class="required">*</span>Email Address:</label>
                            <input required type="email" class="form-control" name="participant_email_address" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="participant_email_address2"> <span class="required">*</span>Retype Email Address:</label>
                            <input required type="email" class="form-control" name="participant_email_address2" placeholder="">
                        </div>
                        
                        <fieldset>
                            <legend>Participant Address</legend>
                            <div class="form-group">
                                <label for="participant_address1"><span class="required">*</span>Address Line 1:</label>
                                <input required type="text" class="form-control" name="participant_address1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="participant_address2">Address Line 2:</label>
                                <input required type="text" class="form-control" name="participant_address2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="participant_city"><span class="required">*</span>City:</label>
                                <input required type="text" class="form-control" name="participant_city" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="participant_state">State:</label>
                                <select class="form-control" name="participant_state">
                                    <?php showSelected( getSnippet('state') ); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="participant_phone">Phone Number:</label>
                                <input type="text" class="form-control" name="participant_phone" placeholder="">
                                <p class="desc">(Example: 555-555-5555)</p>
                            </div>
                            <div class="form-group">
                                <label for="participant_birthdate"><span class="required">*</span>Birthdate:</label>
                                <input required type="date" class="form-control" name="participant_birthdate" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="participant_econtact_name"><span class="required">*</span>Emergency Contact Name:</label>
                                <input required type="text" class="form-control" name="participant_contact_name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="participant_e contact_number"><span class="required">*</span>Emergency Contact Number:</label>
                                <input required type="text" class="form-control" name="participant_contact_number" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="participant_team_name">Club/Team Name:</label>
                                <input  type="text" class="form-control" name="participant_team_name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="participant_occupation"> <span class="required">*</span>Occupation:</label>
                                <select class="form-control" name="participant_occupation">
                                    <option value="1">-- Select One --</option>
                                    <option value="1">Accounting/Finance</option>
                                    <option value="2">Administrative/Clerical</option>
                                    <option value="3">Banking</option>
                                    <option value="4">Customer Service</option>
                                    <option value="5">Engineering</option>
                                    <option value="6">Executive</option>
                                    <option value="7">Entrepeneur</option>
                                    <option value="8">Franchise</option>
                                    <option value="9">Government</option>
                                    <option value="10">Health Care</option>
                                    <option value="11">Hospitality</option>
                                    <option value="12">Human Resources</option>
                                    <option value="13">I.T.</option>
                                    <option value="14">Manufacturing</option>
                                    <option value="15">Non-Profit / Charity</option>
                                    <option value="16">Retail</option>
                                    <option value="17">Sales / Marketing</option>
                                    <option value="18">Science / Biotech</option>
                                    <option value="19">Education</option>
                                    <option value="20">Transportation</option>
                                    <option value="21">Other</option>
                                </select>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary btn-participant">Continue</button>
                    </form>
                </div>
                <div class="col-md-5 form-login">
                    <div class="wrap">
                        <h2>Optional RaceIt Account</h2>
                        <?php $args2 = array(
                                'echo'           => true,
                                'redirect'       => site_url('/events'), 
                                'form_id'        => 'participant_form_login',
                                'label_username' => __( 'Username' ),
                                'label_password' => __( 'Password' ),
                                'label_remember' => __( 'Remember Me' ),
                                'label_log_in'   => __( 'Log In' ),
                                'id_username'    => 'participant_login',
                                'id_password'    => 'participant_pass',
                                'id_remember'    => 'rememberme',
                                'id_submit'      => 'participant_submit',
                                'remember'       => false,
                                'value_username' => NULL,
                                'value_remember' => false
                        ); ?> 
                        <?php wp_login_form( $args2 ); ?> 
                        <a href="<?php echo wp_lostpassword_url(); ?>" class="lost-password" title="Lost Password">Forgot Password</a>
                        <a href="<?php echo site_url('/create-an-account')?>" class="create-account pull-right">Create Account</a>
                    </div>
                </div>
            </div>
            
            
        </div>
   
</div>