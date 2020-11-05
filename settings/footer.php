<?php

// This file is part of the Telaformation theme for Moodle
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
 * Theme Telaformation settings footer file.
 *
 * @package    theme_telaformation
 * @copyright  Tela Botanica 2020
 * @author     Sylvain Revenu - Pimenko 2020 <contact@pimenko.com> <pimenko.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// Some parts there are from 'adaptable' theme.
$page = new admin_settingpage('theme_telaformation_footer', get_string('footersettings', 'theme_telaformation'));

// Navbar color.
$name          = 'theme_telaformation/footercolor';
$title         = get_string(
        'footercolor',
        'theme_telaformation'
);
$description   = get_string(
        'footercolordesc',
        'theme_telaformation'
);
$previewconfig = null;
$setting       = new admin_setting_configcolourpicker(
        $name,
        $title,
        $description,
        '',
        $previewconfig
);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Navbar text color.

$name          = 'theme_telaformation/footertextcolor';
$title         = get_string(
        'footertextcolor',
        'theme_telaformation'
);
$description   = get_string(
        'footertextcolordesc',
        'theme_telaformation'
);
$previewconfig = null;
$setting       = new admin_setting_configcolourpicker(
        $name,
        $title,
        $description,
        '',
        $previewconfig
);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$setting = new simple_theme_settings(
        $page,
        'theme_telaformation',
        'settings:footer:'
);

for ($i = 1; $i <= 4; $i++) {
    $setting->add_headings(
            'footercolumn',
            $i
    );
    $setting->add_texts(
            'footerheading',
            $i
    );
    $setting->add_superhtmleditors(
            'footertext',
            $i
    );
}
$page->add($setting);

$settings->add($page);