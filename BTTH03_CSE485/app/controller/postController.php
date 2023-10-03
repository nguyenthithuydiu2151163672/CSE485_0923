<?php
require_once(APP_ROOT."/app/services/postService.php");
class PostController{
    public function index(){
        $postService=new PostService();
        $post=$postService->getAllPost();
        if($post == []){
            require_once(APP_ROOT."/app/views/Error/index.php");
        }
        else{
            require_once(APP_ROOT."/app/views/post/index.php");
        }
    }
}
class ErrorController{
    public function index(){
        require_once(APP_ROOT."/app/views/error/index.php");
    }
}