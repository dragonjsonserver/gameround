<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerGameround
 */

namespace DragonJsonServerGameround\Api;

/**
 * API Klasse zur Verwaltung von Spielrunden
 */
class Gameround
{
	use \DragonJsonServer\ServiceManagerTrait;

	/**
	 * Gibt die empfohlene Spielrunde der Sprache zurück
	 * @param string $language
	 * @return array
	 * @DragonJsonServerAccount\Annotation\Session
	 */
	public function getGameround($language = null)
	{
		$serviceManager = $this->getServiceManager();
	
		return $serviceManager->get('\DragonJsonServerGameround\Service\Gameround')->getGameround($language, false)->toArray();
	}
	
    /**
	 * Gibt die empfohlene Spielrunde für Bots zurück
	 * @return array
	 * @DragonJsonServerAccount\Annotation\Session
	 */
	public function getBotGameround()
	{
		$serviceManager = $this->getServiceManager();

		return $serviceManager->get('\DragonJsonServerGameround\Service\Gameround')->getGameround(null, true)->toArray();
	}
}
