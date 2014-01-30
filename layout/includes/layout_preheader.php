<?php
// Get the HTML for the settings bits.
$html = theme_flexmaster_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}
$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR in bootstrapgrid

/* $layout order has been left as a variable as this can later be
 * redeveloped to be set as a setting or through some logic giving more
 * flexibility within the layouts. Currently this is set in the
 * separate layout files.
 * -------------------------------------------------------------------*/
//$layoutorder = 'premainpost';   //use in 3col layouts
//$layoutorder = 'mainprepost';   //use in 3col layouts
//$layoutorder = 'prepostmain';   //use in 3col layouts
//$layoutorder = 'sidemain';   //use in 2col layouts
//$layoutorder = 'mainside';   //use in 2col layouts
//$layoutorder = 'mainonly';   //use in content only layouts

$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));
$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

?>

<!-- Start main document --
  ------------------------->
<?php echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>Modernizr.addTest('flexbox', Modernizr.testAllProps('flex'));</script>

    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<?php
$flexbox=TRUE;
if (core_useragent::is_ie() && !core_useragent::check_ie_version('10.0')) {$flexbox=FALSE;}
if (core_useragent::is_firefox() && !core_useragent::check_firefox_version('22.0')) {$flexbox=FALSE;}
if (core_useragent::is_chrome() && !core_useragent::check_chrome_version('21.0')) {$flexbox=FALSE;}
if (core_useragent::is_safari() && !core_useragent::check_safari_version('6.1')) {$flexbox=FALSE;}
if (core_useragent::is_opera() && !core_useragent::check_opera_version('15.0')) {$flexbox=FALSE;}
?>

<!-- Browser flexbox warnings -->
<div class="browserwarningnoflex useralerts alert alert-error"><span class="fa fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-warning fa-stack-1x fa-inverse"></i></span><?php echo "Your Browser does not support Flexbox layouts, so some of the features and layouts of this theme may not be available to you. For best results please upgrade your browser (IE10+, Firefox22+, Chrome21+, Safari7+)"?></div>
<div class="browserwarningflexleg useralerts alert alert-error"><span class="fa fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-warning fa-stack-1x fa-inverse"></i></span><?php echo "Your Browser supports legacy flexbox layouts, so while you should be able to use this theme as intended, some of the features and layouts of this theme may not be available to you. For best results please upgrade your browser (IE10+, Firefox22+, Chrome21+, Safari7+)"?></div>
