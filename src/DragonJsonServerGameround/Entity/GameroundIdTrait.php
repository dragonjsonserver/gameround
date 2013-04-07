<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerGameround
 */

namespace DragonJsonServerGameround\Entity;

/**
 * Trait für die GameroundID mit der Beziehung zu einer Spielrunde
 */
trait GameroundIdTrait
{
	/**
	 * @Doctrine\ORM\Mapping\Column(type="integer")
	 **/
	protected $gameround_id;
	
	/**
	 * Setzt die GameroundID der Entity
	 * @param integer $gameround_id
	 * @return GameroundIdTrait
	 */
	public function setGameroundId($gameround_id)
	{
		$this->gameround_id = $gameround_id;
		return $this;
	}
	
	/**
	 * Gibt die GameroundID der Entity zurück
	 * @return integer
	 */
	public function getGameroundId()
	{
		return $this->gameround_id;
	}
}
