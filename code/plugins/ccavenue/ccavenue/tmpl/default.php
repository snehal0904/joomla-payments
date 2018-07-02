<?php
/**
 *  @copyright  Copyright (c) 2009-2013 TechJoomla. All rights reserved.
 *  @license    GNU General Public License version 2, or later
 */
defined('_JEXEC') or die('Restricted access');

// for billing info
$userInfo = array();
$wholeAddress = '';
if(!empty($vars->userInfo))
{
	$userInfo = $vars->userInfo;
	$wholeAddress = $userInfo['add_line1'] . ' ' . $userInfo['add_line2'];
	$wholeAddress = trim($wholeAddress);
}

?>

			<form name="frmccavenue" id="frmccavenue" method="post" action="<?php echo $vars->action_url; ?>">
				<input type="hidden" name="merchant_id" value="<?php echo $vars->merchant_id; ?>" />
				<input type="hidden" name="amount" value="<?php echo (float)$vars->amount; ?>" />
				<input type="hidden" name="order_id" value="<?php echo $vars->order_id; ?>" />
				<input type="hidden" name="currency" value="<?php echo $vars->currency_code; ?>" />
				<input type="hidden" name="redirect_url" value="<?php echo $vars->notify_url; ?>" />
				<input type="hidden" name="billing_name" value="<?php echo $vars->user_firstname; ?>" />
				<input type="hidden" name="billing_address" value="<?php echo $wholeAddress; ?>" />
				<input type="hidden" name="billing_email" value="<?php echo $vars->user_email; ?>" />
				<input type="hidden" name="billing_country" value="<?php echo !empty($userInfo['country_code']) ?$userInfo['country_code']:'' ;?>">
				<input type="hidden" name="billing_state" value="<?php echo !empty($userInfo['state_code']) ?$userInfo['state_code']:'' ;?>">
				<input type="hidden" name="billing_city" value="<?php echo !empty($userInfo['city']) ?$userInfo['city']:'' ;?>">
				<input type="hidden" name="billing_zip" value="<?php echo !empty($userInfo['zipcode']) ?$userInfo['zipcode']:'' ;?>">
				<input type="hidden" name="billing_tel" value="<?php echo !empty($userInfo['phone']) ?$userInfo['phone']:'' ;?>">
				<input type="hidden" name="delivery_cust_name" value="">
				<input type="hidden" name="delivery_cust_address" value="">
				<input type="hidden" name="delivery_cust_country" value="">
				<input type="hidden" name="delivery_cust_state" value="">
				<input type="hidden" name="delivery_cust_tel" value="">
				<input type="hidden" name="delivery_cust_notes" value="">
				<input type="hidden" name="merchant_param1" value="">
				<input type="hidden" name="billing_zip_code" value="">
				<input type="hidden" name="delivery_cust_city" value="">
				<input type="hidden" name="delivery_zip_code" value="">
				<input type="submit" class="btn btn-success btn-large" border="0"  value="<?php echo JText::_('SUBMIT'); ?>" alt="CCAvenue Pay" />

		</form>

