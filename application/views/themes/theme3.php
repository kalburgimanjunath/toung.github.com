<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/css/format1.css">
<title>CredMine: Sample Profile</title>

<!--[if IE]>
	<link href="iefix.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>themes/scripts/scripts.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>themes/scripts/slimbox2.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>themes/scripts/scroll.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>lib/cufon-yui.js"></script>	
	<script src="<?php echo base_url();?>js/common.js"></script>
		<script type="text/javascript">
			Cufon.replace('h1, h2');
		</script>
	<script src="<?php echo base_url();?>lib/jquery.tmpl.js"></script>	
	<script src="<?php echo base_url();?>lib/jgrowl/jquery.jgrowl.js" type="text/javascript"></script>		
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>lib/jquery-fastconfirm/jquery.fastconfirm.css"/>
</head>

<body id="me">

<div id="container">
	<div id="header">
			<p>
				<?php echo $account->firstname;?>
			</p>
	</div>
        
        <!--END HEADER-->
        
<!--ME-->
<ul class="nav">

				<li><a class="active" href="#me">ME</a></li>
				<li><a href="#education">EDUCATION</a></li>
				<li><a href="#experience">EXPERIENCE</a></li>
				<li><a href="#references">REFERENCES</a></li>
                <li><a href="#contact">CONTACT</a></li>
         </ul>


<div class="section">
	<div class="box435">
		<div class="picture">
	    <img class="placeholder" src="<?php echo base_url(); ?>images/placeholder.png" />
	    </div>
    </div>
    
    <div class="box435">
		    <h1>About Me</h1>
		    <p><?php echo $account->aboutme;?></p>
    </div>
</div>
<!--END Me-->

<div class="spacer"></div>

<!--EDUCATION-->
<ul class="nav" id="education">

				<li><a href="#me">ME</a></li>
				<li><a href="#education" class="active">EDUCATION</a></li>
				<li><a href="#experience">EXPERIENCE</a></li>
				<li><a href="#references">REFERENCES</a></li>
                <li><a href="#contact">CONTACT</a></li>
         </ul>
<div class="section">
<div class="box900">
<h1>Education</h1>
<?php 
	if(!empty($education)){
		//continue;
	}else{
		$education = '';
	}
	if(count($education)>0 && $education <>''){
		
	foreach($education as $strEducation){ 
?>

<ul class="educ">
	<li><h2><?php echo $strEducation->institution;?></h2></li>
	<li><h3>2008-2011</h3></li>
	<li><h4><?php echo $strEducation->fieldofstudy;?></h4></li>
</ul>

	
<?php }
	}else{
		echo "<p>You do not have any information at the moment. </p>"; 
	}
	
?>
    </div>
</div>
<!--End Education-->

<div class="spacer"></div>

<!--EXPERIENCE-->
<ul class="nav" id="experience">

				<li><a href="#me">ME</a></li>
				<li><a href="#education">EDUCATION</a></li>
				<li><a href="#experience" class="active">EXPERIENCE</a></li>
				<li><a href="#references">REFERENCES</a></li>
                <li><a href="#contact">CONTACT</a></li>
         </ul>
<div class="section">
<div class="box155"></div>
<div class="box590">
<h1>Experience</h1>
<?php 

	if(!empty($experience)){
		//continue;
	}else{
		$experience = '';
	}
	if(count($experience)>0 && $experience <>''){

	
		foreach($experience as $strExperience){ ?>

			<ul class="exper">
				<li><h2><?php echo $strExperience->position.''.$strExperience->company;?></h2></li>
				<li><h3>Santa Cruz, California</h3></li>
				<li><h4>2010-Present</h4></li>
				<li><p><?php echo $strExperience->description;?></p>
				</li>
			</ul>

<?php }
	}else{
		echo "<p>You do not have any information at the moment. </p>"; 
	}
	
?>
</div>
<div class="box155"></div>
</div>
<!--End Experience-->
<div class="spacer"></div>

<ul class="nav" id="references">

				<li><a href="#me">ME</a></li>
				<li><a href="#education">EDUCATION</a></li>
				<li><a href="#experience">EXPERIENCE</a></li>
				<li><a href="#references"  class="active">REFERENCES</a></li>
                <li><a href="#contact">CONTACT</a></li>
         </ul>


<!--REFERENCES-->
<div class="section">
<div class="box280">
<h1>References</h1>
<ul class="ref">
<li><h3>CEO, Wise Solutions</h3></li>
<li><h4>Jeremiah Ridenour</h4></li>
<li>(831) 750-0738</li>
</ul>

<ul class="ref">
<li><h3>VP of Products, Ketera</h3></li>
<li><h4>Mike Gardner</h4></li>
<li>(408) 572-9585</li>
</ul>

<ul class="ref">
<li><h3>Director of Product Management, Ketera</h3></li>
<li><h4>Brian Grove</h4></li>
<li>(408) 572-9583</li>
</ul>

<ul class="ref">
<li><h3>VP of Engineering, Jack Be</h3></li>
<li><h4>Deepak Alur</h4></li>
<li>(510) 589-5608</li>
</ul>

<ul class="ref">
<li><h3>CEO and Co-Founder, Jack Be</h3></li>
<li><h4>Luis Derechin</h4></li>
<li>(703) 943-9449</li>
</ul>

<ul class="ref">
<li><h3>Jack Be Director of Development</h3></li>
<li><h4>Girish Ippadi</h4></li>
<li>(408) 215-8958</li></ul>

</div>
<div class="box590">
<h1>Testimonials</h1>
<p class="ref">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet mi dolor, quis tempus lorem. Quisque vehicula ligula at enim convallis tempus. In convallis, magna quis ullamcorper fringilla, erat ante facilisis lorem, et aliquet tellus sem mattis felis. Sed blandit mi at sem sagittis fringilla. Mauris eget justo dui. Nullam consequat condimentum tortor, et ultrices dui ultricies sed. Phasellus quis turpis massa. Quisque fermentum egestas tortor, tempor adipiscing urna posuere dignissim. Maecenas condimentum erat nec est rhoncus faucibus ut at nunc. Donec ornare arcu sit amet enim vestibulum sagittis. Maecenas semper posuere eros. Phasellus lacinia blandit faucibus.
</p>
<ul class="ref2">
<li><h3>CEO, Wise Solutions</h3></li>
<li><h4>Jeremiah Ridenour</h4></li>
</ul>

<p class="ref">
Quisque fermentum egestas tortor, tempor adipiscing urna posuere dignissim. Maecenas condimentum erat nec est rhoncus faucibus ut at nunc. Donec ornare arcu sit amet enim vestibulum sagittis. Maecenas semper posuere eros. Phasellus lacinia blandit faucibus.Quisque fermentum egestas tortor, tempor adipiscing urna posuere dignissim. Maecenas condimentum erat nec est rhoncus faucibus ut at nunc. Donec ornare arcu sit amet enim vestibulum sagittis. Maecenas semper posuere eros. Phasellus lacinia blandit faucibus.</p>
<ul class="ref2">
<li><h3>VP of Products, Ketera</h3></li>
<li><h4>Mike Gardner</h4></li>
</ul>

<p class="ref">
Sed blandit mi at sem sagittis fringilla. Mauris eget justo dui. Nullam consequat condimentum tortor, et ultrices dui ultricies sed. Phasellus quis turpis massa. Quisque fermentum egestas tortor, tempor adipiscing urna posuere dignissim.</p>
<ul class="ref2">
<li><h3>VP of Engineering, Jack Be</h3></li>
<li><h4>Deepak Alur</h4></li>
</ul>
</div>
</div>
<!--End References-->
<div class="spacer"></div>

<!--CONTACT-->
<ul class="nav" id="contact">

				<li><a href="#me">ME</a></li>
				<li><a href="#education">EDUCATION</a></li>
				<li><a href="#experience">EXPERIENCE</a></li>
				<li><a href="#references">REFERENCES</a></li>
                <li><a href="#contact" class="active">CONTACT</a></li>
         </ul>

<div class="section">
<div class="box280">
			<h1>Contact</h1>
				<!--CONTACT FORM-->	
				<fieldset class="info_fieldset">
				<div id="note"></div>
				<form id="ajax-contact-form" action="javascript:alert('success!');" name="ajax-contact-form">
				<div class="label">Name</div>
				<input class="textbox" type="text" name="name" value="" size="30" /><br />
				<div class="label">E-Mail</div>
				<input class="textbox" type="text" name="email" value="" size="30" /><br />
				<div class="label">Subject</div>
				<input class="textbox" type="text" name="subject" value="" size="30" /><br />
				<div class="label">Message</div>
				<textarea class="textbox" name="message" rows="20" cols="30"></textarea>
				<br />
				<div class="label"> </div>
				<input class="button" type="submit" name="submit" value="Contact Me!" /></form>
				</fieldset>
  </div>
		<div class="box280">
			<h1>Phone</h1>
				<p><strong>Mobile:</strong><?php if(!empty($account->mobile)){echo $account->mobile;}else{echo '';}?></p>
				<p><strong>Landline:</strong> <?php if(!empty($account->phone)){echo $account->phone;}else{echo '';}?></p>
			<h1>Other Contacts</h1>
				<p><strong>E-mail:</strong><?php echo $account->email;?></p>
				<p><strong>Skype:</strong>tim.thimmaiah</p>
		</div>
        <div class="boxlinks">
        <a href="#"><img class="icon" src="<?php echo base_url();?>images/icons/facebook-64x64.png" alt="" name="icon1" width="64" height="64" id="icon1" /></a>
        <a href="#"><img class="icon" src="<?php echo base_url();?>images/icons/digg-64x64.png" alt="" name="icon2" width="64" height="64" id="icon2" /></a>
        <a href="#"><img class="icon" src="<?php echo base_url();?>images/icons/delicious-64x64.png" alt="" name="icon3" width="64" height="64" id="icon3" /></a>
        <a href="#"><img class="icon" src="<?php echo base_url();?>images/icons/flickr-64x64.png" alt="" name="icon4" width="64" height="64" id="icon4" /></a>
        <a href="#"><img class="icon" src="<?php echo base_url();?>images/icons/twitter-64x64.png" alt="" name="icon5" width="64" height="64" id="icon5" /></a>
        <a href="#"><img class="icon" src="<?php echo base_url();?>images/icons/wordpress-64x64.png" alt="" name="icon6" width="64" height="64" id="icon6" /></a>
        </div>
</div>
<!--End Contact-->
<div class="spacer"></div>
<div id="footer"></div>

<script type="text/javascript">
	$(document).ready(function() {
	/*loadAll();
	
	$('#navigation').localScroll({
		target:'#container'
	});
		*/
	});
	</script>
</body>
</html>
