<?php
// vim: foldmethod=marker
/**
 *	action_class.php
 *
 *	@author		Masaki Fujimoto <fujimoto@php.net>
 *	@license	http://www.opensource.org/licenses/bsd-license.php The BSD License
 *	@package	Ethna
 *	@version	$Id$
 */

// {{{ Ethna_CLI_ActionClass
/**
 *	���ޥ�ɥ饤��action�¹ԥ��饹
 *
 *	@author		Masaki Fujimoto <fujimoto@php.net>
 *	@access		public
 *	@package	Ethna
 */
class Ethna_CLI_ActionClass extends Ethna_ActionClass
{
	/**
	 *	action����
	 *
	 *	@access	public
	 */
	function Perform()
	{
		parent::Perform();
		$_SERVER['REMOTE_ADDR'] = "0.0.0.0";
		$_SERVER['HTTP_USER_AGENT'] = "";
	}
}
// }}}
?>