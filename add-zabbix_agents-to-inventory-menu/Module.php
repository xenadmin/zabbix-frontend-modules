<?php declare(strict_types = 1);
 
namespace Modules\AddZabbixAgentsToInventoryMenu;
 
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
			->findOrAdd(_('Inventory'))
				->getSubmenu()
					->insertAfter(_('Hosts'),((new \CMenuItem(_('Zabbix Agents')))
							->setUrl(new \CUrl('hostinventoriesoverview.php?filter_groupby=software_app_a&filter_set=1'), 'hostinventoriesoverview.php'))
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