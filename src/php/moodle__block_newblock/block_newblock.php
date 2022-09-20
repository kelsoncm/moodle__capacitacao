<?php
/**
 * Newblock block caps.
 *
 * @package    block_newblock
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class block_newblock extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_newblock');
    }

    function get_content() {
        global $CFG, $OUTPUT;

        if ($this->content !== null) {
            return $this->content;
        }

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

        if (isset($this->content)) {
            return $this->content;
        }

        $renderable = new \block_newblock\output\main();
        $renderer = $this->page->get_renderer('block_newblock');

        $this->content = new stdClass();
        // $this->content->text = $renderer->render($renderable);
        $this->content->text = "Kelson";
        $this->content->footer = '';

        return $this->content;
        
    //     // user/index.php expect course context, so get one if page has module context.
    //     $currentcontext = $this->page->context->get_course_context(false);

    //     if (! empty($this->config->text)) {
    //         $this->content->text = $this->config->text;
    //     }

    //     $this->content = '';
    //     if (empty($currentcontext)) {
    //         return $this->content;
    //     }
    //     if ($this->page->course->id == SITEID) {
    //         $this->content->text .= "site context";
    //     }

    //     if (! empty($this->config->text)) {
    //         $this->content->text .= $this->config->text;
    //     }

    //     return $this->content;
    }

    // my moodle can only have SITEID and it's redundant here, so take it away
    public function applicable_formats() {
        return array('all' => false,
                     'site' => true,
                     'site-index' => true,
                     'course-view' => true, 
                     'course-view-social' => false,
                     'mod' => true, 
                     'mod-quiz' => false);
    }

    public function instance_allow_multiple() {
          return true;
    }

    function has_config() {return true;}

    public function cron() {
            mtrace( "Hey, my cron script is running" );
             
                 // do something
                  
                      return true;
    }
}
