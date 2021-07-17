<?php declare(strict_types=1);

namespace Symfona\PaginationBundle\Tests\App\Controller;

use Symfona\Pagination\Query;
use Symfona\PaginationBundle\Tests\App\Model\ExampleModel;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ExampleController
{
    #[Route]
    public function index(ExampleModel $model): JsonResponse
    {
        $query = new Query(skip: 2, limit: 2);

        return new JsonResponse($model->getView($query));
    }
}
