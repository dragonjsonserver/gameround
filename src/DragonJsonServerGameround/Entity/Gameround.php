<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
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
	 * @Doctrine\ORM\Mapping\Column(type="integer")
	 **/
	protected $progress = 0;
	
	/**
	 * @Doctrine\ORM\Mapping\Column(type="boolean")
	 **/
	protected $active = true;
	
	/**
	 * @Doctrine\ORM\Mapping\Column(type="string")
	 **/
	protected $event = 'tick';
	
	/**
	 * Setzt die ID der Spielrunde
	 * @param integer $gameround_id
	 * @return Gameround
	 */
	protected function setGameroundId($gameround_id)
	{
		$this->gameround_id = $gameround_id;
		return $this;
	}
	
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
	 * @param boolean $bot
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
	 * Setzt den Fortschritt der Spielrunde
	 * @param integer $progress
	 * @return Gameround
	 */
	public function setProgress($progress)
	{
		$this->progress = $progress;
		return $this;
	}
	
	/**
	 * Gibt den Fortschritt der Spielrunde zurück
	 * @return integer
	 */
	public function getProgress()
	{
		return $this->progress;
	}
	
	/**
	 * Setzt das Activeflag der Spielrunde
	 * @param boolean $active
	 * @return Gameround
	 */
	public function setActive($active)
	{
		$this->active = $active;
		return $this;
	}
	
	/**
	 * Gibt das Activeflag der Spielrunde zurück
	 * @return boolean
	 */
	public function getActive()
	{
		return $this->active;
	}
	
	/**
	 * Setzt die Eventart der Spielrunde
	 * @param string $event
	 * @return Gameround
	 */
	public function setEvent($event)
	{
		$this->event = $event;
		return $this;
	}
	
	/**
	 * Gibt die Eventart der Spielrunde zurück
	 * @return string
	 */
	public function getEvent()
	{
		return $this->event;
	}
	
	/**
	 * Setzt die Attribute der Spielrunde aus dem Array
	 * @param array $array
	 * @return Gameround
	 */
	public function fromArray(array $array)
	{
		return $this
			->setGameroundId($array['gameround_id'])
			->setCreatedTimestamp($array['created'])
			->setLanguage($array['language'])
			->setBot($array['bot'])
			->setProgress($array['progress'])
			->setActive($array['active'])
			->setEvent($array['event']);
	}
	
	/**
	 * Gibt die Attribute der Spielrunde als Array zurück
	 * @return array
	 */
	public function toArray()
	{
		return [
			'__className' => __CLASS__,
			'gameround_id' => $this->getGameroundId(),
			'created' => $this->getCreatedTimestamp(),
			'language' => $this->getLanguage(),
			'bot' => $this->getBot(),
			'progress' => $this->getProgress(),
			'active' => $this->getActive(),
			'event' => $this->getEvent(),
		];
	}
}
