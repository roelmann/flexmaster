    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span9<?php if ($left) { echo ' pull-right'; } ?>">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php
        $classextra = '';
        if ($left) {
            $classextra = ' desktop-first-column';
        }
        echo $OUTPUT->blocks('side-pre', 'span3'.$classextra);
        ?>
    </div>
