<?php

namespace PruebasBundle\Entity;

/**
 * Event
 */
class Event
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameEvent;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */

    private $population;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameEvent
     *
     * @param string $nameEvent
     *
     * @return Event
     */
    public function setNameEvent($nameEvent)
    {
        $this->nameEvent = $nameEvent;

        return $this;
    }

    /**
     * Get nameEvent
     *
     * @return string
     */
    public function getNameEvent()
    {
        return $this->nameEvent;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Event
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @var string
     */
    private $popoulation;


    /**
     * Set popoulation
     *
     * @param string $popoulation
     *
     * @return Event
     */
    public function setPopoulation($popoulation)
    {
        $this->popoulation = $popoulation;

        return $this;
    }

    /**
     * Get popoulation
     *
     * @return string
     */
    public function getPopoulation()
    {
        return $this->popoulation;
    }
}
