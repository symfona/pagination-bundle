<?php declare(strict_types=1);

namespace Symfona\PaginationBundle\Tests\App\Controller;

use Symfona\Pagination\Adapter\FactoryInterface;
use Symfona\Pagination\Adapter\InMemory\ArrayObjectAdapter;
use Symfona\Pagination\Paginator;
use Symfona\Pagination\Query;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ExampleController
{
    #[Route]
    public function index(Paginator $paginator, FactoryInterface $factory): JsonResponse
    {
        $factory->add(\ArrayObject::class, ArrayObjectAdapter::class);

        $query = new Query(skip: 2, limit: 2);
        $storage = new \ArrayObject([1, 2, 3, 4, 5]);

        return new JsonResponse($paginator->paginate($storage, $query));
    }
}
