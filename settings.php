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
 * Settings for plugin tool Browse users (classic mode)
 *
 * @package tool_browse_users_classic
 * @copyright 2025 Andrei Bautu <abautu@gmail.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if (!$hassiteconfig) {
    return;
}

$browsepage = new admin_externalpage(
    'tool_browse_users_classic',
    get_string('pluginname', 'tool_browse_users_classic'),
    new moodle_url('/admin/tool/browse_users_classic/index.php'),
    'moodle/user:update'
);

$ADMIN->add('accounts', $browsepage, 'userbulk');
