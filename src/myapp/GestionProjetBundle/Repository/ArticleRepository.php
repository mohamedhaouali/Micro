<?php

namespace myapp\GestionProjetBundle\Repository;


class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    public function findArticlesBytitre($titre){
        
    $query = $this->createQueryBuilder('a')
    ->where('a.titre like :titre')
    ->setParameter('titre', $titre.'%')
    ->orderBy('a.titre', 'ASC')
    ->getQuery();

     return  $query->getResult();
          
          
          
          
}
}