<?php
    namespace Controller;
    
    use App\Session;
    use App\Router;
    use Model\Manager\TopicManager;
    use Model\Manager\PostManager;

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

            $id = (isset($_GET['id'])) ? $_GET['id'] : null;
            $manTopic = new TopicManager();
            $manPost = new PostManager();

            $topic = $manTopic->findOneById($id);
            $posts = $manPost->findByTopic($id);
            
            return [
                "view" => "forum/posts.php",
                "data" => [
                    "topic" => $topic,
                    "posts" => $posts,
                ],
                "titrePage" => "FORUM | ".$topic
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

        public function LoginForm(){
            return [
                "view" => "forum/login_form.php",
                "data" => null,
                "titrePage" => "FORUM | Se connecter"
            ];
        }
    }