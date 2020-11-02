<?php declare(strict_types = 1);
 
namespace Modules\AddTriggersToConfigurationMenu;
 
use APP;
use CController as CAction;
 
/**
 * Please see Core\CModule class for additional reference.
 */
class Module extends \Core\CModule {
 
	/**
	 * Initialize module.
	 */
	public function init(): void {
		// Initialize main menu (CMenu class instance).
		APP::Component()->get('menu.main')
			->findOrAdd(_('Configuration'))
				->getSubmenu()
					->insertAfter(_('Hosts'),((new \CMenuItem(_('Triggers')))
							->setUrl(new \CUrl('triggers.php'), 'triggers.php'))
					);
	}
 
	/**
	 * Event handler, triggered before executing the action.
	 *
	 * @param CAction $action  Action instance responsible for current request.
	 */
	public function onBeforeAction(CAction $action): void {
	}
 
	/**
	 * Event handler, triggered on application exit.
	 *
	 * @param CAction $action  Action instance responsible for current request.
	 */
	public function onTerminate(CAction $action): void {
	}
}