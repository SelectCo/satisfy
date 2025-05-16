<?php

namespace Playbloom\Event;

use Playbloom\Model\BuildContext;
use Playbloom\Model\RepositoryInterface;
use Symfony\Contracts\EventDispatcher\Event;

class BuildEvent extends Event
{
    public const EVENT_NAME = 'satis_build';

    /** @var RepositoryInterface|null */
    private $repository;

    /** @var int|null */
    private $status;

    /**
     * @var BuildContext|null
     */
    private ?BuildContext $context;

    public function __construct(?RepositoryInterface $repository = null)
    {
        $this->repository = $repository;
    }

    /**
     * @return RepositoryInterface|null
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @return int|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    public function getContext(): ?BuildContext
    {
        return $this->context;
    }

    public function setContext(BuildContext $context): void
    {
        $this->context = $context;
    }
}
