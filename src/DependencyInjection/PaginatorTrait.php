<?php declare(strict_types=1);

namespace Symfona\PaginationBundle\DependencyInjection;

use Symfona\Pagination\Paginator;
use Symfony\Contracts\Service\Attribute\Required;

trait PaginatorTrait
{
    private Paginator $paginator;

    #[Required]
    public function setPaginator(Paginator $paginator): void
    {
        $this->paginator = $paginator;
    }
}
