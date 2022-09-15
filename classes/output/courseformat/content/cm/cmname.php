<?php

namespace format_mootsample\output\courseformat\content\cm;

use core_courseformat\output\local\content\cm\cmname as cmname_base;
use renderer_base;
use stdClass;

/**
 * Example Moot UK format content class.
 *
 * @package     format_mootuk
 * @copyright   YOURNAME <YOURNAME@YOURSITE.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class cmname extends cmname_base {

    /**
     * Example of override export for template data.
     *
     * @param renderer_base $output typically, the renderer that's calling this function
     * @return stdClass data context for a mustache template
     */
    public function export_for_template(renderer_base $output): array {
        $format = $this->format;
        $data = parent::export_for_template($output);
        // Add any data attribute here. For example:
        $data['pluginname'] = 'My custom text';
        return $data;
    }
}
