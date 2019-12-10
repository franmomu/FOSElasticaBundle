<?php

/*
 * This file is part of the FOSElasticaBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\ElasticaBundle\Persister\Event;

use FOS\ElasticaBundle\Persister\ObjectPersisterInterface;
use FOS\ElasticaBundle\Provider\PagerInterface;
use Symfony\Contracts\EventDispatcher\Event;

final class PreInsertObjectsEvent extends Event implements PersistEvent
{
    /**
     * @var PagerInterface
     */
    private $pager;

    /**
     * @var ObjectPersisterInterface
     */
    private $objectPersister;

    /**
     * @var object[]
     */
    private $objects;

    /**
     * @var array
     */
    private $options;

    public function __construct(PagerInterface $pager, ObjectPersisterInterface $objectPersister, array $objects, array $options)
    {
        $this->pager = $pager;
        $this->objectPersister = $objectPersister;
        $this->objects = $objects;
        $this->options = $options;
    }

    /**
     * @return PagerInterface
     */
    public function getPager()
    {
        return $this->pager;
    }

    /**
     * @param PagerInterface $pager
     */
    public function setPager($pager)
    {
        $this->pager = $pager;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * @return ObjectPersisterInterface
     */
    public function getObjectPersister()
    {
        return $this->objectPersister;
    }

    public function setObjectPersister(ObjectPersisterInterface $objectPersister)
    {
        $this->objectPersister = $objectPersister;
    }

    /**
     * @return object[]
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * @param object[] $objects
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;
    }
}
