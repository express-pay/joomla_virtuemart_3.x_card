<?php

defined('JPATH_BASE') or die();

jimport('joomla.form.formfield');
class JFormFieldGetMessageFail extends JFormField {

	var $type = 'getMessageFail';

	protected function getInput() {
		$value = htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8');

		$value = trim($value);
		$value = ( empty($value) ) ? JText::_('VMPAYMENT_MESSAGE_FAIL_LABEL_DEFAULT') : $value;
		
		$html = '<textarea name="params[message_fail]" id="params_message_fail" cols="120" rows="3">' . $value . '</textarea>';

		return $html;
	}

}