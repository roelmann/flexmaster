    <div id="page-content" class="flexible">
        <section id="region-main" class="maincontent flexible">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>

        <?php
        if ($showsidepre) {echo $OUTPUT->blocks('side-pre', $layoutorder);}
        if ($showsidepost) {echo $OUTPUT->blocks('side-post', $layoutorder);}
        ?>
    </div>
