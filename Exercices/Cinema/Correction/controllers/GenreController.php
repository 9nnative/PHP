<?php

// require 'bdd/DAO.php';

class GenreController {
    
    /**
     * findAll
     *
     * @return void
     */
    public function findAll() {

        $dao = new DAO();
        $sql = "SELECT id_genre, nom_genre
                    FROM genre
                    ORDER BY nom_genre";
        $genres = $dao->executerRequete($sql);
        require 'views/genre/listGenre.php';
    }
    
    /**
     * findOneById
     *
     * @param  mixed $id
     * @param  mixed $edit
     * @return void
     */
    public function findOneById($id, $edit = false) {

        $dao = new DAO();
        $sql = "SELECT id_genre, nom_genre 
                    FROM genre
                    WHERE id_genre = :id";
        $genre = $dao->executerRequete($sql, [":id" => $id]);
        $filmographie = $this->getFilmographie($id);

        if(!$edit){
            require 'views/genre/detailGenre.php';
        } else {
            return $genre;
        }
    }
    
    /**
     * getFilmographie
     *
     * @param  mixed $id
     * @return void
     */
    public function getFilmographie($id) {

        $dao = new DAO();
        $sql = "SELECT titre_film, annee_film, id_film
                    FROM film f, genre g, genre_film gf
                    WHERE gf.id_genre = g.id_genre
                    AND gf.id_film = f.id_film
                    AND g.id_film = :id
                    AND g.id_genre = :id";
                    
                    
        $filmographie = $dao->executerRequete($sql, [":id" => $id]);
        return $filmographie;
    }
    
    /**
     * formAddGenre
     *
     * @return void
     */
    public function formAddGenre() {

        require "views/genre/addGenre.php";
    }
    
    /**
     * formEditGenre
     *
     * @param  mixed $id
     * @return void
     */
    public function formEditGenre($id) {

        $genre = $this->findOneById($id, true);
        require "views/genre/editGenre.php";
    }
    
    /**
     * addgenre
     *
     * @param  mixed $array
     * @return void
     */
    public function addgenre($array) {

        $nom_genre = filter_var ($array["nom_genre"], FILTER_SANITIZE_STRING);
        
        $dao = new DAO();
        $sql = "INSERT INTO genre(nom_genre) 
                    VALUES (:nom_genre)";
        $dao->executerRequete($sql, [
                ":nom_genre" => $nom_genre
            ]);

        header("Location: index.php?action=listGenre");
    }
    
    /**
     * editGenre
     *
     * @param  mixed $id
     * @param  mixed $array
     * @return void
     */
    public function editGenre($id, $array) {

        $nom_genre = filter_var ($array["nom_genre"], FILTER_SANITIZE_STRING);

        $dao = new DAO();
        $sql = "UPDATE genre 
                    SET nom_genre = :nom_genre
                    WHERE id_genre = :id";
        $dao->executerRequete($sql, [
            ":id" => $id,
            ":nom_genre" => $nom_genre
        ]);

        header("Location: index.php?action=listGenre");
    }
    
    /**
     * deletegenre
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteGenre($id) {

        $dao = new DAO();
        $sql1 =  "DELETE FROM genre_film WHERE id_genre = :id";
        $sql2 =  "DELETE FROM genre WHERE id_genre = :id";
               
        $dao->executerRequete($sql1, [
                ":id" => $id
            ]);
           
        $dao->executerRequete($sql2, [
               ":id" => $id
            ]);

        header("Location: index.php?action=listGenre");
    }
}