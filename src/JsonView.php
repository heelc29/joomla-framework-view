<?php
/**
 * Part of the Joomla Framework View Package
 *
 * @copyright  Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\View;

/**
 * Joomla Framework JSON View Class
 *
 * @since  2.0.0-beta
 */
class JsonView extends AbstractView
{
	/**
	 * Method to render the view.
	 *
	 * @return  string  The rendered view.
	 *
	 * @since   2.0.0-beta
	 */
	public function render()
	{
		return json_encode($this->getData());
	}
}
