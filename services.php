<?php

$services = array(
	array(
		'name' => 'Keetup Development',
		'url' => 'http://www.keetup.com/elgg-services',
		'profile_url' => 'https://community.elgg.org/profile/pedroprez',
		'blurb' => 'We are professional Elgg developers specializing in plugins, themes and social networking advice. We also advise companies on Elgg implementations.',
		'icon_filename' => 'keetup.png'
	),
	array(
		'name' => 'Arck Interactive',
		'url' => 'http://www.arckinteractive.com/',
		'profile_url' => 'https://community.elgg.org/profile/arckinteractive',
		'blurb' => 'We are a Portland-based web development agency focused on developing custom social networks, intranets and other applications using Elgg.',
		'icon_filename' => 'arck.jpg'
	),
);

shuffle($services);

?>
<?php include '_includes/head.php'; ?>

<div id="sidebar_menu">
	<div class="sidebar_box">
		<h2>*Get Listed</h2>
		The service listing feature is currently on hold while we establish the Elgg Foundation. Watch this space and the <a href="blog" style="padding: 0;">Elgg Blog</a> for more information!
		<!--
		<p>The following is a list of companies who offer various Elgg services which is provided to help Elgg users looking for services. Curverider Ltd does not endorse the companies listed and they are in no way affiliated with Curverider Ltd unless stated as an official Elgg Partner, although they do help support core Elgg development through a <b>$150 per 30 day</b> listing fee. All the money raised via these listings goes straight into core Elgg development!</p>
		<p>We constantly monitor companies listed here to help create and foster good options for those requiring Elgg services. If you encounter issues with one of the providers listed here, please get in touch with us. If you are going to get in touch, please make sure you provide adequate detail regarding the issues you have had.</p>
		<p>If you represent a company providing Elgg services and would like to be listed, and in turn help with core development, <a href="mailto:info@elgg.com">please get in touch</a> <small>(info@elgg.com)</small>. At this time, we can only use PayPal, so payment for a listing will come via a PayPal invoice.</p>
		<p><small>We reserve the right to remove or refuse a listing without any prior warning at our complete discretion. There is no refund policy.</small></p>
-->
	</div>
</div>
<div id="page_contents">
	<h1 data-title class="header_color">Elgg services</h1>
	<div class="partners">
		<h2 class="subhead">Thematic Networks</h2>
	<p style="margin-top:10px;"><img src="images/tn_logo.png" alt="Thematic Networks" align="left" style="margin:0 10px 10px 0;border-right:15px solid #fff"/>
<a href="http://thematic.net">Thematic Networks</a> creates socially-enabled web platforms with enterprise tools that help businesses to engage with their communities and generate revenue from published digital content. Our solutions power all sorts of applications, ranging from Software-as-a-Service networks to customized enterprise social networks, corporate e-learning platforms and social marketplaces with App Stores.
<br />
Thematic Networks is a founding member and proud supporter of the Elgg Foundation.
<br /><br />
Contact: <a href="mailto:services@thematic.net">services@thematic.net</a>
</p>
	<div style="clear:both;"></div>
	</div>

	<h1>Listings</h1>
<?php

foreach ($services as $service) {
echo <<<___HTML
<div class="award">
	<p><a href="{$service['url']}"><img src="images/services/{$service['icon_filename']}" alt="{$service['name']}" align="left" style="margin-right:10px;" width="40px" /></a><b>{$service['name']}</b><br />
	{$service['blurb']}<br />
	<a href="{$service['url']}">{$service['name']} website</a> | <a href="{$service['profile_url']}">{$service['name']} Elgg community profile</a></p>
</div>
___HTML;
}

?>
	<?php
	/*
	<p style="margin:100px 0 0 0;"> ------------------- </p>
	<div class="award"><p>
		<img src="images/sample.jpg" alt="Sample" align="left" style="margin-right:10px;" width="40px" />
		This is a sample listing. You get 20 words, a link and 40 * 40 icon. $150 per 30 day listing fee* which goes directly towards core Elgg development. Listing order is first come, first serve.<br />
		<a href="">sample company</a></p>
		<div style="clear:both;"></div>
	</div>
	*/
	?>
</div>

<?php include '_includes/foot.php'; ?>
