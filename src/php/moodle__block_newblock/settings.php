<?php
/**
 * Newblock block caps.
 *
 * @package    block_newblock
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$settings->add(new admin_setting_heading('sampleheader',
                                         get_string('headerconfig', 'block_newblock'),
                                         get_string('descconfig', 'block_newblock')));

$settings->add(new admin_setting_configcheckbox('newblock/foo',
                                                get_string('labelfoo', 'block_newblock'),
                                                get_string('descfoo', 'block_newblock'),
                                                '0'));
