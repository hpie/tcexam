<?php
//============================================================+
// File name   : tce_menu_modules.php
// Begin       : 2004-04-20
// Last Update : 2010-05-10
//
// Description : Output XHTML unordered list menu for modules.
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com S.r.l.
//               Via della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//
// License:
//    Copyright (C) 2004-2010 Nicola Asuni - Tecnick.com S.r.l.
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU Affero General Public License as
//    published by the Free Software Foundation, either version 3 of the
//    License, or (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU Affero General Public License for more details.
//
//    You should have received a copy of the GNU Affero General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//    Additionally, you can't remove the original TCExam logo, copyrights statements
//    and links to Tecnick.com and TCExam websites.
//
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * Output XHTML unordered list menu for modules.
 * @package com.tecnick.tcexam.admin
 * @author Nicola Asuni
 * @copyright Copyright © 2004-2010, Nicola Asuni - Tecnick.com S.r.l. - ITALY - www.tecnick.com - info@tecnick.com
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License
 * @link www.tecnick.com
 * @since 2010-05-10
 */

/**
 */

require_once('../config/tce_config.php');

$pagelevel = 1;
require_once('../../shared/code/tce_authorization.php');

$thispage_title = $l['w_modules'];
require_once('../code/tce_page_header.php');

echo '<div class="container">'.K_NEWLINE;

echo '<ul>'.K_NEWLINE;

echo '<li>'.F_menu_link('tce_edit_module.php', $l['t_modules_editor'], $l['w_modules'], K_AUTH_ADMIN_MODULES).'</li>'.K_NEWLINE;
echo '<li>'.F_menu_link('tce_edit_subject.php', $l['t_subjects_editor'], $l['w_subjects'], K_AUTH_ADMIN_SUBJECTS).'</li>'.K_NEWLINE;
echo '<li>'.F_menu_link('tce_edit_question.php', $l['t_questions_editor'], $l['w_questions'], K_AUTH_ADMIN_QUESTIONS).'</li>'.K_NEWLINE;
echo '<li>'.F_menu_link('tce_edit_answer.php', $l['t_answers_editor'], $l['w_answers'], K_AUTH_ADMIN_ANSWERS).'</li>'.K_NEWLINE;
echo '<li>'.F_menu_link('tce_show_all_questions.php', $l['t_questions_list'], $l['w_list'], K_AUTH_ADMIN_RESULTS).'</li>'.K_NEWLINE;
echo '<li>'.F_menu_link('tce_import_xml_questions.php', $l['t_question_importer'], $l['w_import'], K_AUTH_ADMIN_SUBJECTS).'</li>'.K_NEWLINE;

echo '</ul>'.K_NEWLINE;

//echo '<div class="pagehelp">'.$l['w_modules'].'</div>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;

require_once('../code/tce_page_footer.php');

//============================================================+
// END OF FILE
//============================================================+
?>
