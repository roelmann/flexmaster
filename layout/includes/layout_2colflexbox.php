    <div id="page-content" class="flexible">
        <section id="region-main" class="maincontent flexible">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>

        <!-- This option cheats slightly for the 2 column layout as it pushes side-post under side-pre in a single column whether before or after the main content -->
        <div class = <?php echo $layoutorder;?> >
            <?php
            if ($hassidepre) {echo $OUTPUT->blocks('side-pre', $layoutorder);}
            if ($hassidepost) {echo $OUTPUT->blocks('side-post', $layoutorder);}
            ?>
        </div>
    </div>
