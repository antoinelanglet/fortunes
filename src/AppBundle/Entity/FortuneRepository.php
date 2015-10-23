<?php

namespace AppBundle\Entity;

class FortuneRepository extends \Doctrine\ORM\EntityRepository
{
  public function findLasts() {
    return $this->createQueryBuilder('F')
      ->orderBy("F.createdAt", "DESC")
      ->setMaxResults(10)
      ->getQuery()
      ->getResult();
  }

  public function bestRated() {
    return $this->createQueryBuilder('F')
      ->orderBy("F.upVote/F.downVote", "DESC")
      ->setMaxResults(10)
      ->getQuery()
      ->getResult();
  }

  public function worstRated() {
    return $this->createQueryBuilder('F')
      ->orderBy("F.downVote/F.upVote", "DESC")
      ->setMaxResults(10)
      ->getQuery()
      ->getResult();
  }

  public function findByAuthor($author) {
    return $this->createQueryBuilder('F')
      ->orderBy("F.createdAt", "DESC" )
      ->where("F.author = :author")
      ->setParameter("author", $author)
      ->setMaxResults(10)
      ->getQuery()
      ->getResult();
  }

  public function getQuoteId($id) {
    return $this->createQueryBuilder('F')
      ->orderBy("F.id", "DESC" )
      ->where("F.id = :id")
      ->setParameter("id", $id)
      ->getQuery()
      ->getResult();
  }

  public function getCategorie($categorie) {
    return $this->createQueryBuilder('F')
      ->orderBy("F.categorie", "DESC" )
      ->where("F.categorie = :categorie")
      ->setParameter("categorie", $categorie)
      ->getQuery()
      ->getResult();
  }

  // public function getcomments() {
  //   return $this->createQueryBuilder('F')
  //     ->orderBy("F.createdAt", "DESC")
  //     ->setMaxResults(10)
  //     ->getQuery()
  //     ->getResult();
  // }


}
