<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_flexmaster
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

include ('includes/layout_preheader.php'); // incorporates the logic of the layout and the <head> tags
?>

<body <?php echo $OUTPUT->body_attributes(); ?>>
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php include ('includes/layout_mainmenu.php'); ?>

<div id="page" class="container-fluid">

    <?php include ('includes/layout_breadcrumbs.php'); ?>

    <?php  if ($flexbox == TRUE) {
        include ('includes/layout_1colflexbox.php');
    } else {
        include ('includes/layout_1colbootstrapgrid.php');
    } ?>


    <?php include ('includes/layout_footer.php'); ?>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>
