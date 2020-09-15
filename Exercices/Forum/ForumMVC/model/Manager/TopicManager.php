<?php
    namespace Model\Manager;
    use App\Router;
    use App\AbstractManager;
    
    class TopicManager extends AbstractManager
    {
        private static $classname = "Model\Entity\Topic";

        public function __construct(){
            self::connect(self::$classname);
        }

        public function findAll(){

            $sql = "SELECT t.id, t.title, t.date, t.closed, t.resolved, t.user_id
                        FROM topic t
                    ORDER BY date DESC";

            return self::getResults(
                self::select($sql,
                    null, 
                    true
                ), 
                self::$classname
            );
        }

        public function findOneById($id){
            $sql = "SELECT id, title, date, closed, user_id, resolved
                        FROM topic 
                        WHERE id = :id";
            return self::getOneOrNullResult(
                self::select($sql, 
                    ["id" => $id], 
                    false
                ), 
                self::$classname
            );
        }
        public function addTopic(){
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $stmt =(
                "INSERT INTO topic (title) ".
                "VALUES (:title)"
            );

    self::createTopic ($stmt, ["title" => $title,
                                "user_id" => $_SESSION['user']->getID()]);
            $_SESSION['success'] = "Sujet bien ajouté !";
            header("Location:index.php");
            die();
        // }
        //   //  return self::getOneOrNullResult(
        //     return self::create($sql, [
        //         'title' => $array["title"],
        //   //    'user_id' => Session::getUser()->getId(),

        //     ]);

        }

    }