<?php
    namespace Controller;
    
    use App\Session;
    use App\Router;
    use Model\Manager\TopicManager;
    use Model\Manager\PostManager;
    use Model\Manager\UserManager;

    class ForumController {

        public function index(){
            Router::redirectTo("home","index");
        }

        /**
         * Afficher tous les topics
         */
        public function allTopics(){

            $manTopic = new TopicManager();
            $topics = $manTopic->findAll();
          
            return [
                "view" => "forum/listTopics.php", 
                "data" => [
                    "topics" => $topics
                ],
                "titrePage" => "FORUM | Sujets"
            ];
        }

        //afficher le nombre de posts par topic

        public function countTopics(){

            
        }

        /**
         * Afficher les posts d'un topic
         */
        public function show(){

            $id = (isset($_GET['topic_id'])) ? $_GET['topic_id'] : null;
            $manTopic = new TopicManager();
            $manPost = new PostManager();

            $topic = $manTopic->findOneById($id);
            $posts = $manPost->findByTopic($id);
            
            return [
                "view" => "forum/listPostsByTopics.php",
                "data" => [
                    "topic" => $topic,
                    "posts" => $posts
                ],
                "titrePage" => "FORUM | ".$topic->getTitle()
            ];
        }

        public function Home(){
            $manTopic = new TopicManager();
            $topics = $manTopic->findAll();
          
            return [
                "view" => "forum/listTopics.php", 
                "data" => [
                    "topics" => $topics
                ],
                "titrePage" => "FORUM | Sujets"
            ];
        }
        public function create(){
            
            $id = (isset($_GET['id'])) ? $_GET['id'] : null;
            $manTopic = new TopicManager();
            //var_dump($_POST["titre"]);
            $topics = $manTopic->findAll();



            //permet de revenir a la page d'accueil
            //Router::redirectTo("home","index");

           return [
               "view" => "forum/addTopic.php",
               "data" => ["topics" =>$topics],
               "titrePage" => "FORUM | Créer un sujet"
           ];
            
        
        }
        
        public function addTopic(){
            return [
                "view" => "forum/addTopic.php",
                "titrePage" => "FORUM | Ajouter un topic"
            ];
        }

        public function allPosts(){

            $manPost = new PostManager();

            $posts = $manPost->findAll();
          
            return [
                "view" => "forum/listPosts.php", 
                "data" => [
                    "posts" => $posts
                ],
                "titrePage" => "FORUM | Posts"
            ];
        }

        public function detailPost(){
            
            $id = (isset($_GET['id'])) ? $_GET['id'] : null;
   
            $manPost = new PostManager();
            $manUser = new UserManager();

            $posts = $manPost->findOneById($id);
         
            // $user = $manUser->findOneById($user_id);
            
            return [
                "view" => "forum/detailPost.php",
                "data" => [
                    "posts" => $posts,
                    "user" => $posts->getUser()
                ],
                "titrePage" => "FORUM | ".$posts->getID()
            ];
        }


    }