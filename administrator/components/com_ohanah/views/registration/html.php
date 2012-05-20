<?php 
/**
 * @version		2.0.14
 * @package		com_ohanah
 * @copyright	Copyright (C) 2012 Beyounic SA. All rights reserved.
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.beyounic.com
 */

defined('_JEXEC') or die('Restricted access');

class ComOhanahViewRegistrationHtml extends ComOhanahViewHtml {

	public function display()
	{   
		KRequest::set('get.hidemainmenu', 1);

		return parent::display();
	}
}