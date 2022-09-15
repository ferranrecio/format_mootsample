<?php

namespace format_mootsample\output;

use core_courseformat\output\section_renderer;

// Some Moodle 4.0 important changes:
// - Format renderer extends section_renderer not format_section_renderer_base.
// - $this->courserenderer is deprecated, the new renderer extends the course one.

/**
 * Example Moot format content class.
 *
 * @package     format_mootsample
 * @copyright   YOURNAME <YOURNAME@YOURSITE.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class renderer extends section_renderer {

    // Override any necessary renderer method here.

}
