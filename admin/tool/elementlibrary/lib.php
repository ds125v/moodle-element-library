<?php

/**
 * Returns the HTML source generated by executing the file provided
 *
 * @param string $filename Name of the file to display
 * @return HTML source code produced by the code in $filename
 */
function get_source_output($filename) {
    // we don't know what globals the file might need
    global $OUTPUT, $USER, $SESSION, $DB, $CFG;
    if (!file_exists($filename)) {
        return false;
    }
    ob_start();
    include($filename);
    return htmlentities(ob_get_clean());
}

/**
 * Returns the code contained within the file provided, escaped so
 * as to be suitable for printing to an HTML page
 *
 * @param string $filename Name of the file
 * @return Escaped copy of the code in $filename
 */
function get_html_output($filename) {
    if (!file_exists($filename)) {
        return false;
    }
    return htmlentities(file_get_contents($filename));
}

