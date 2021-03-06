<?php
/**
 * @version		2.0.14
 * @package		mod_sidebar
 * @copyright	Copyright (C) 2012 Beyounic SA. All rights reserved.
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.beyounic.com
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

class ModOhanahattendeesHtml extends ModDefaultHtml
{
	public function __construct(KConfig $config)
    {
        parent::__construct($config);
        $this->params  = $config->params;
    }
    
	public function display()
	{
		$id = KRequest::get('get.id', 'int');
		if (!$id) $id = JFactory::getApplication()->getPageParameters()->get('id');
		
		if ((KRequest::get('get.option', 'string') == 'com_ohanah') && (KRequest::get('get.view', 'string') == 'event') && $id) {
			$event = $this->getService('com://admin/ohanah.model.events')->id($id)->getItem();

			$this->assign('event', $event);
			$this->assign('listStyle', $this->params->get('listStyle'));
			$this->assign('must_pay_to_be_listed_as_attendee_in_paid_events', $this->params->get('must_pay_to_be_listed_as_attendee_in_paid_events'));

			return parent::display();		
		}
	}
}