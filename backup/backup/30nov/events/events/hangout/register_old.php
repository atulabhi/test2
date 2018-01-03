<html>
<head>
    <title>openEBS | hangout #3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="../../styles/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../styles/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../styles/css/openebs.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../styles/js/bootstrap.min.js"></script>
</head>

<body class="careers-page">
    <section class="nav-section">
        <nav class="navbar navbar-expand-lg navbar-light" style="background:#fff; padding:2%;">
            <div class="container">
                <a class="navbar-brand desktop-logo" href="../../index.html"><img src="../../styles/images/banner-icon.png" height="40" width="auto"></a>
                <a class="navbar-brand mobile-logo" href="../../index.html"><img src="../../styles/images/openebs-logo.svg" height="40" width="auto"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" onclick="openNav()" aria-label="Toggle navigation" style="border:0px;"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-md-auto social-top">
                        <a href="https://www.facebook.com/openebs/" target="_blank">
                            <li class="nav-item p-2" style="display:inline;" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                        </a>
                        <a href="http://slack.openebs.io" target="_blank">
                            <li class="nav-item p-2" style="display:inline;" title="Slack"><i class="fa fa-slack" aria-hidden="true"></i></li>
                        </a>
                        <a href="https://blog.openebs.io" target="_blank">
                            <li class="nav-item p-2" style="display:inline;" title="Blog"><i class="fa fa-medium" aria-hidden="true"></i></li>
                        </a>
                        <a href="https://twitter.com/openebs" target="_blank">
                            <li class="nav-item p-2" style="display:inline;" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        </a>
                        <a href="https://github.com/openebs/" target="_blank">
                            <li class="nav-item p-2" style="display:inline;" title="Github "><i class="fa fa-github" aria-hidden="true"></i></li>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!--Event header info-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="event-title">OpenEBS Hangout #3 <span class="event-time">Thursday September, 14th at 10:00 AM PST</span></h1>
                    <div class="webinars-detail__info" style="padding: 20px 0 30px;">
                        <div class="webinars-detail__date"><span class="sem-ts" data-test="time-switcher"><time datetime="2017-09-14 10:00" style="">Thursday, 14 September, 10:00 </time>PST</span></div><span class="webinars-detail__separator" style="">|</span>
                        <div class="webinars-detail__add-to-calendar" data-test="upcoming-add_to_calendar"><a href="/webinars/semrush-101-tuesday-september-12th-at-2-pm-est/calendar/google/" target="_blank" rel="noopener" style="">Add to Google calendar</a></div><span class="webinars-detail__separator" style="">|</span>
                        <div class="webinars-detail__lang" style="">
                            <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" class="sem-icon" viewBox="0 0 16 16" width="16" height="16">
                                <path d="M5 16v-1c1.1 0 2-.9 2-2-2.3-.5-4-2.6-4-5 0-.6.4-1 1-1s1 .4 1 1c0 1.7 1.3 3 3 3s3-1.3 3-3c0-.6.4-1 1-1s1 .4 1 1c0 2.4-1.7 4.5-4 5 0 1.1.9 2 2 2v1h-6zm3-6c-1.1 0-2-.9-2-2v-6c0-1.1.9-2 2-2s2 .9 2 2v6c0 1.1-.9 2-2 2z"></path>
                            </svg>
                            <!-- react-text: 39 -->
                            <!-- /react-text -->
                            <!-- react-text: 40 -->English
                            <!-- /react-text -->
                        </div>
                    </div>
                    <div> </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 agenda" style="border-right:1px dotted #64787e;">
                    <h3>Agenda</h3>
                    <br>
                    <ul>
                        <li style="list-style:none;"><span style="color:#ee5a2b; margin-right:1%; "><i class="fa fa-angle-right" aria-hidden="true"></i></span>Deployment guide for OpenEBS on AWS.</li>
                        <li style="list-style:none;"><span style="color:#ee5a2b; margin-right:1%; list-style:none;"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Generic storage benchmarking tool.</li>
                        <li style="list-style:none;"><span style="color:#ee5a2b; margin-right:1%; list-style:none;"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Discussion on added support OpenEBS Volume Snapshot API.</li>
                        <li style="list-style:none;"><span style="color:#ee5a2b; margin-right:1%; list-style:none;"><i class="fa fa-angle-right" aria-hidden="true"></i></span>OpenEBS project updates. </li>
                    </ul>
                </div>
                <div class="col-md-5" >
                    
                    <!-- code for the agile form -->











<link href="https://s3.amazonaws.com/agilecrm/forms/v1/agile-form-min.css" rel="stylesheet">
<form class="form-view theme1" id="agile-form" action="https://cloudbyte.agilecrm.com/formsubmit" style="max-width:450px;border-radius:60px;" method="GET" >
<fieldset style="background:#f15a29;color:white;padding:30px;font-family:'Open Sans';border-radius:60px;">

<!-- Form Name -->
<legend  style="display:none;">Register for the Webinar</legend>
<p class="agile-form-description" style="font-size:30px;">Register</p>
<div style="display: none; height: 0px; width: 0px;">
<input type="hidden" id="_agile_form_name" name="_agile_form_name" value="Register for the Webinar">
<input type="hidden" id="_agile_domain" name="_agile_domain" value="cloudbyte">
<input type="hidden" id="_agile_api" name="_agile_api" value="eaim4vnkf485ujkslhmldf328e">
<input type="hidden" id="_agile_redirect_url" name="_agile_redirect_url" value="https://www.openebs.io/index.html">
<input type="hidden" id="_agile_document_url" name="_agile_document_url" value="">
<input type="hidden" id="_agile_confirmation_msg" name="_agile_confirmation_msg" value="">
<input type="hidden" id="_agile_form_id_tags" name="tags" value="">

<input type="hidden" id="_agile_form_id" name="_agile_form_id" value="5761885492215808">
</div>
<br>

<!-- Text input-->

<div class="agile-group">
  <label class="agile-label" for="agilefield-1" style="text-align:center;"></label>
  <div class="agile-field-xlarge agile-field">
	<input maxlength="250"  name="first_name" type="text" placeholder="Enter your Name" id="f_name" class="agile-height-default" style="font-size: 20px;padding:10px;">
  </div>
  <div class="agile-custom-clear"></div>
</div>
<br>
<!-- Text input-->

<div class="agile-group">
  <label class="agile-label" for="agilefield-3" style="text-align:center;"></label>
  <div class="agile-field-xlarge agile-field">
	<input maxlength="250" name="email" type="email" id="email" placeholder="Enter your Email" class="agile-height-default" style="font-size: 20px;padding:10px;">
  </div>
  <div class="agile-custom-clear"></div>
</div>

<!--recaptcha aglignment-->

<!-- Button -->

<div class="agile-group">
  <label class="agile-label">&nbsp;</label>
  <div class="agile-field agile-button-field">
    <button type="submit" class="agile-button" style="background: #A73211; border: 1px solid #A73211;" onclick = "createContact2()" >Register</button>
    <br><span id="agile-error-msg"></span>
  </div>
</div>
</fieldset>
</form>
<script type="text/javascript">
(function(a){var b=a.onload,p=true;isCaptcha=false;if(p){a.onload="function"!=typeof b?function(){try{_agile_load_form_fields()}catch(a){}}:function(){b();try{_agile_load_form_fields()}catch(a){}}};a.document.forms["agile-form"].onsubmit=function(a){a.preventDefault();try{_agile_synch_form_v4()}catch(b){this.submit()}}})(window);
</script>





<script>
            function createContact2() {
              //  alert('hello');
                var email_received = document.getElementById('email').value;
                var contact = {};
                contact.email = email_received;
                contact.first_name = document.getElementById('f_name').value;
                contact.tags = "Webinar3SignUp, Webinar3";
                
                // Custom fields can be added to contact object as
               contact.status = "incomplete";
                contact.custom_id = "EN001C";
                
                
                _agile.create_contact(contact, {
                    success: function (data) {
                        // Set Email at success of contact creation. But you can set it at failure too.
                        _agile.set_email(email_received);
                        
                        console.log("success");
                        console.log("Response = "+data);
                    },
                    error: function (data) {
                        console.log("error");
                        console.log("Error Cause = "+data);
                    }
                });


_agile.add_tag('Webinar3SignUp, Webinar3', {
    success: function (data) {
        console.log("success");
    },
    error: function (data) {
        console.log("error");
    }
});
            }
        </script>
                </div>
            </div>
        </div>
    </section>
                  
</body>
</html>