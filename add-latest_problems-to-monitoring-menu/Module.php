<?php declare(strict_types = 1);
 
namespace Modules\AddLatestProblemsToMonitoringMenu;
 
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
			->findOrAdd(_('Monitoring'))
				->getSubmenu()
					->insertAfter(_('Problems'),((new \CMenuItem(_('Latest problems')))
							->setUrl(new \CUrl('zabbix.php?action=problem.view&filter_show=3&filter_application=&filter_name=&filter_severities[2]=2&filter_severities[4]=4&filter_severities[3]=3&filter_severities[5]=5&filter_inventory[0][field]=type&filter_inventory[0][value]=&filter_evaltype=0&filter_tags[0][tag]=&filter_tags[0][operator]=0&filter_tags[0][value]=&filter_show_tags=0&filter_show_opdata=1&filter_unacknowledged=1&filter_show_timeline=1&filter_set=1'), 'zabbix.php'))
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