<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<base href="<?php echo base_url() ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<?php echo $this->layout->get_meta(); ?>
<?php echo $this->layout->get_css(); ?>
<?php echo $this->layout->get_js(); ?>
<title><?php echo $this->layout->get_title(); ?></title>
<link rel="shortcut icon" href="img/favicon.ico">
	<script type="text/javascript">var base_url = "<?php echo base_url() ?>";</script>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body class="<?php echo $this->uri->segment(1) ?> <?php echo $this->uri->segment(2) ?> print-view">


<div class="container">
	<div class="header sixteen columns clearfix">
		<div class="twelve columns clearfix">
			<h2><?php echo $this->config->item('site_name'); ?></h2>
		</div>
	</div>

	<div class="content sixteen columns clearfix">
		<?php /*
		<div class="breadcrumb">
			<?php echo $this->layout->get_breadcrumbs(); ?>
		</div>
		*/ ?>
		<?php echo $view ?>
	</div>

	<div class="developedby sixteen columns">
		The Food Hub was developed by <a href="http://clouddataservice.co.uk/" target="_blank">Cloud Data Service Ltd</a>
		<br />The software is licensed under the <a href="http://opensource.org/licenses/OSL-3.0" target="_blank">Open Software License 3.0</a>
		<br />Please contact <a href="mailto:hello@clouddataservice.co.uk">hello@clouddataservice.co.uk</a> for more information
	</div>

</div>


	<!-- Delete dialogs -->
	<div id="delete_dialog" class="hidden">
		<h1>Delete <span class="name"></span></h1>
		<p class="text"></p>
		<?php echo form_open('', array('id' => 'delete_form')) ?>
			<div class="hidden" id="hidden_inputs"></div>
			<div style="margin: 30px 15px 15px 0; text-align: right; bottom: 0; position: absolute; right: 0;">
				<button type="submit" class="btn icon delete"><span>Delete</span></button>
				<a href="#" class="btn close-dialog">Cancel</a>
			</div>
		</form>
	</div>


<script>
    window.print();
</script>
</body>
</html>
