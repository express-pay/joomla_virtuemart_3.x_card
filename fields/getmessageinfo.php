<?php

defined('JPATH_BASE') or die();

jimport('joomla.form.formfield');
class JFormFieldGetMessageInfo extends JFormField {

	var $type = 'getMessageInfo';

	protected function getInput() {
		$value = htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8');

		$value = trim($value);
		$value = ( empty($value) ) ? JText::_('VMPAYMENT_INFO_LABEL_DEFAULT') : $value;
		
		$html = '<textarea name="params[info]" id="params_info" cols="120" rows="3">' . $value . '</textarea>';

		return $html;
	}

}