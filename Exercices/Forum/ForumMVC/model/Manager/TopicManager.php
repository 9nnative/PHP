<?php
    namespace Model\Manager;
    
    use App\AbstractManager;
    
    class TopicManager extends AbstractManager
    {
        private static $classname = "Model\Entity\Topic";

        public function __construct(){
            self::connect(self::$classname);
        }

        public function findAll(){

            $sql = "SELECT t.id, title, t.date, t.closed, t.resolved, t.user_id
                    FROM topic t";

            return self::getResults(
                self::select($sql,
                    null, 
                    true
                ), 
                self::$classname
            );
        }

        public function findOneById($id){
            $sql = "SELECT * 
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
        public function addTopic($array){
            $sql = "INSERT INTO sujet (titreSujet, visiteur_id) VALUE (:titreSujet, :visiteur)"; 
           
          //  return self::getOneOrNullResult(
            return self::create($sql, [
                'titreSujet' => $array["titreSujet"],
                'visiteur' => $array["visiteur"]
          //    'user_id' => Session::getUser()->getId(),

            ]);

        }

    }