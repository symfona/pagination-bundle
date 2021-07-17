<?php declare(strict_types=1);

namespace Symfona\PaginationBundle\Tests\App\Model;

use Symfona\Pagination\Adapter\FactoryInterface;
use Symfona\Pagination\Adapter\InMemory\ArrayObjectAdapter;
use Symfona\Pagination\Query;
use Symfona\Pagination\Result;
use Symfona\PaginationBundle\DependencyInjection\PaginatorTrait;

final class Example
{
    use PaginatorTrait;

    public function __construct(FactoryInterface $factory)
    {
        $factory->add(\ArrayObject::class, ArrayObjectAdapter::class);
    }

    public function getResult(Query $query, object $storage): Result
    {
        return $this->paginator->paginate($storage, $query);
    }
}
