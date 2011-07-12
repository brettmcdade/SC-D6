
<div class="profile-wrapper">
    	<h1 class="name"><?php print $node->field_name[0]['view'];?></h1>
        
        <div class="contain">

            <div class="profile-meta left">
                <p class="jobtitle"><?php print $node->field_job_title[0]['view'];?></p>
                <p class="location"><?php print $node->field_location[0]['view'];?></p>
            </div>
            <div class="payform right">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payPalForm">
                    <input type="hidden" name="item_number" value="Web Services">
                    <input type="hidden" name="cmd" value="_xclick">

                    <input type="hidden" name="no_note" value="1">
                    <input type="hidden" name="business" value="brettmcdade@gmail.com">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="return" value="salmonchase.brettmcdade.com/thankyou.html">               
                    <input type="text" value="" size="4" name="amount" id="amount" class="text">
                   <!-- <input type="submit" name="Submit" class="submit" value="Pay"> -->
                    <button id="submitbutton" class="button paypal" type="submit"><span class="button-content">Create Your Profile</span></button>
                </form>
            </div><!-- /payform -->

        </div>
        
        <div class="profile-details">
        	<p>Hey! As you already know my name is Brett McDade and I am a web designer and developer chasing big dreams.</p>
			<p>I am the founder of Salmonchase.me, a web startup aiming to simplify the process of building websites to receiving payments online. I am currently building the site with my blood, sweat, and tears. If you are intersted in the development of this project and would like to hear more, please send me your email address and I will keep you informed.</p>
        </div>
        
        
    </div><!-- /wrapper -->