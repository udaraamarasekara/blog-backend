<?php 
namespace App\Modules\Post;
use App\Models\Post;
class PostRepository implements PostRepositoryInterface{
 public function newPost(array $data)
 {
   return Post::create($data);
 }

 public function editPost(int $id, array $data)
 {

 }

 public function getPost(int $id)
 {

 }
 public function allPosts()
 {

 }

 public function deletePost(int $id)
 {
   
 }
}