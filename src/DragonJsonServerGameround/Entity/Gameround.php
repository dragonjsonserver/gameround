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
 * Entityklasse einer Spielrunde
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="gamerounds")
 */
class Gameround
{
	use \DragonJsonServerDoctrine\Entity\CreatedTrait;
	
	/**
	 * @Doctrine\ORM\Mapping\Id 
	 * @Doctrine\ORM\Mapping\Column(type="integer")
	 * @Doctrine\ORM\Mapping\GeneratedValue
	 **/
	protected $gameround_id;
	
	/**
	 * @Doctrine\ORM\Mapping\Column(type="string")
	 **/
	protected $language;
	
	/**
	 * @Doctrine\ORM\Mapping\Column(type="boolean")
	 **/
	protected $bot;
	
	/**
	 * Gibt die ID der Spielrunde zurück
	 * @return integer
	 */
	public function getGameroundId()
	{
		return $this->gameround_id;
	}
	
	/**
	 * Setzt die Sprache der Spielrunde
	 * @param string $language
	 * @return Gameround
	 */
	public function setLanguage($language)
	{
		$this->language = $language;
		return $this;
	}
	
	/**
	 * Gibt die Sprache der Spielrunde zurück
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	
	/**
	 * Setzt das Botflag der Spielrunde
	 * @param boolean $language
	 * @return Gameround
	 */
	public function setBot($bot)
	{
		$this->bot = $bot;
		return $this;
	}
	
	/**
	 * Gibt das Botflag der Spielrunde zurück
	 * @return boolean
	 */
	public function getBot()
	{
		return $this->bot;
	}
	
	/**
	 * Gibt die Attribute der Spielrunde als Array zurück
	 * @return array
	 */
	public function toArray()
	{
		return [
			'gameround_id' => $this->getGameroundId(),
			'created' => $this->getCreatedTimestamp(),
			'language' => $this->getLanguage(),
			'bot' => $this->getBot(),
		];
	}
}
