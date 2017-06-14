<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findLikeName($productName)
    {
        return $this->createQueryBuilder('product')
            ->where('product.name LIKE :product_name')
            ->setParameter('product_name', '%'.$productName.'%')
            ->getQuery()->getArrayResult();
    }
}