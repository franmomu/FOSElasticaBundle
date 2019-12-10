<?php

/*
 * This file is part of the FOSElasticaBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\ElasticaBundle\Event;

/**
 * Index ResetEvent.
 *
 * @author Oleg Andreyev <oleg.andreyev@intexsys.lv>
 */
class IndexResetEvent extends IndexEvent
{
    /**
     * @var bool
     */
    private $force;

    /**
     * @var bool
     */
    private $populating;

    /**
     * @param string $index
     * @param bool   $populating
     * @param bool   $force
     */
    public function __construct($index, $populating, $force)
    {
        parent::__construct($index);

        $this->force = $force;
        $this->populating = $populating;
    }

    /**
     * @return bool
     */
    public function isForce()
    {
        return $this->force;
    }

    /**
     * @return bool
     */
    public function isPopulating()
    {
        return $this->populating;
    }

    /**
     * @param bool $force
     */
    public function setForce($force)
    {
        $this->force = $force;
    }
}
