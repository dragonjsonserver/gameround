<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerGameround
 */

namespace DragonJsonServerGameround\Service;

/**
 * Serviceklasse zur Verwaltung von Spielrunden
 */
class Gameround
{
	use \DragonJsonServer\ServiceManagerTrait;
	use \DragonJsonServer\EventManagerTrait;
	use \DragonJsonServerDoctrine\EntityManagerTrait;
	
    /**
	 * Gibt die empfohlene Spielrunde zurück
	 * @param string $language
	 * @param boolean $bot
	 * @return \DragonJsonServerGameround\Entity\Gameround
	 */
	public function getGameround($language, $bot)
	{
		$entityManager = $this->getEntityManager();

		if (null !== $language) {
			$configGameround = $this->getServiceManager()->get('Config')['gameround'];
			if (!in_array($language, $configGameround['languages'])) {
				$language = null;
			}
		}
		$gameround = $entityManager->getRepository('\DragonJsonServerGameround\Entity\Gameround')
					    		   ->findOneBy(['language' => $language, 'bot' => $bot]);
		if (null === $gameround) {
			$gameround = (new \DragonJsonServerGameround\Entity\Gameround())
				->setLanguage($language)
				->setBot($bot);
			$this->getServiceManager()->get('Doctrine')->transactional(function ($entityManager) use ($gameround) {
				$entityManager->persist($gameround);
				$entityManager->flush();
				$this->getEventManager()->trigger(
					(new \DragonJsonServerGameround\Event\CreateGameround())
						->setTarget($this)
						->setGameround($gameround)
				);
			});
		}
		return $gameround;
	}
	
	/**
	 * Gibt die Spielrunde zur übergebenen GameroundID zurück
	 * @param integer $gameround_id
	 * @return \DragonJsonServerGameround\Entity\Gameround
     * @throws \DragonJsonServer\Exception
	 */
	public function getGameroundByGameroundId($gameround_id)
	{
		$entityManager = $this->getEntityManager();

		$gameround = $entityManager->find('\DragonJsonServerGameround\Entity\Gameround', $gameround_id);
		if (null === $gameround) {
			throw new \DragonJsonServer\Exception('invalid gameround_id', ['gameround_id' => $gameround_id]);
		}
		return $gameround;
	}
}
