<?php

$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

function afficherTableHTML($capitales){
asort($capitales); 


        foreach ($capitales as $pays => $unite){
        $url = "https://fr.wifikipedkia.org/wiki/".$unite;
        $contenu =

        "<tr>
                            
                            <td>".$unite."</td>
                            <td>".strtoupper($pays)."</td>
                            <td><a href =$url.>$url</a>
                            </td>

        </tr>";}

        return "<table border ='2' ;>
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
                <th>Lien</th>

            <tr>
        </thead>
        <tbody>".$contenu."</tbody>
    </table>";

        }

echo afficherTableHTML($capitales);

?>