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
 * Block XP lib.
 *
 * @package    pathfinder
 * @copyright  
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Example of Level Up Plugin importing files
 * function block_xp_pluginfile($course, $bi, $context, $filearea, $args, $forcedownload, array $options = array()) {
 *   $fs = \block_xp\di::get('file_server');
 *   if ($fs instanceof \block_xp\local\file\block_file_server) {
 *       $fs->serve_block_file($course, $bi, $context, $filearea, $args, $forcedownload, $options);
 *   }
 * }
**/