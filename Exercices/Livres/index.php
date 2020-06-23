<?php 

include 'class/Livre.php';


    $l1 = new Livre("Seigneur des Anneaux", "Tolkien", 250, 20,"14-09-1999");
    $l2 = new Livre("Harry Potter","J.K Rowling",145, 26, "25-05-2000");

    echo $l1."<br>";
    echo $l2;

?>

