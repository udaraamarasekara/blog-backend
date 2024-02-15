<?php
namespace App\Modules\Post;

interface PostRepositoryInterface{
   public function newPost(array $data);
   public function editPost(int $id,array $data);
   public function getPost(int $id);
   public function deletePost(int $id);
   public function allPosts();

}