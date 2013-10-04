<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
          /** Hier einfach mal ein Kommentar, der gerne wieder gelöscht werden kann. */
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}