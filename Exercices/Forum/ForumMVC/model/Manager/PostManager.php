<?php
    namespace Model\Manager;
    use App\Router;
    use App\AbstractManager;
    
    class PostManager extends AbstractManager
    {
        private static $classname = "Model\Entity\Post";

        public function __construct(){
            self::connect(self::$classname);
        }

        public function findAll(){

            $sql = "SELECT p.id, text, p.date, p.topic_id, p.user_id
                    FROM post p
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
            $sql = "SELECT text, date, user_id, topic_id
                        WHERE id = :id";
            return self::getOneOrNullResult(
                self::select($sql, 
                    ["id" => $id], 
                    false
                ), 
                self::$classname
            );
        }

        public function findByTopic($topic_id){
            $sql = "SELECT text, date, user_id, topic_id
                    FROM post
                    WHERE topic_id = :topic_id";

            return self::getResults(
                self::select($sql,
                    ["topic_id" => $topic_id],
                    true
            ),
            self::$classname
        );
            // public function findByTopic($id){
            //     $sql = "SELECT *
            //             FROM post
            //             WHERE topic_id = :id";
            //     return self::getResults(
            //         self::select($sql,
            //             ["id" => $id],
            //             true
            //         ),
            //         self::$classname
              
            //     );
            // }
        }

    }
