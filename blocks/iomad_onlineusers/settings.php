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
 * Online users block settings.
 *
 * @package    block_iomad_onlineusers
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('block_iomad_onlineusers_timetosee', get_string('timetosee', 'block_iomad_onlineusers'),
                   get_string('configtimetosee', 'block_iomad_onlineusers'), 5, PARAM_INT));

    $settings->add(new admin_setting_configcheckbox('block_iomad_onlineusers_onlinestatushiding',
            get_string('onlinestatushiding', 'block_iomad_onlineusers'),
            get_string('onlinestatushiding_desc', 'block_iomad_onlineusers'), 1));
}

