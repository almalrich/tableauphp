<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 15:28
 */

$classe=[
    0=>["flamant","brian","36","fontaine"=>["crytocurrency","botanique alchimie"]
    ],
    1=>["spilmont","andre","31","wignehies"=>["jeux video","la nourriture","la conduite"]
    ],
    2=>["bon","romain","26","berlaimont"=>["football","jeux video","cuisine"]
    ],
    3=>["Labaye","amandine","17","etroengt"=>["jeux video","football","netflix"]
    ],
    4=>["sophie","claisse","34","fourmies"=>["musique","litterature","langues etrangeres"]
    ],
    5=>["brian","bultot","26","fourmies"=>["les filles","la nourriture","les soirées"]
    ],
    6=>["sebastien","bouret","40","glageon"=>["jeux video","mangas","vins"]
    ],
    7=>["maxime","ducamp","30","beaudignies"=>["camenbert","chevre","maroilles"]
    ],
    8=>["florence","soudain","33","leval"=>["japon","manga","jeux videos"]
    ],
    9=>["arnaud","duthoit","29","wignehies"=>["lecture","promenade","les cacahuetes"]
    ],
    10=>["benoit","carpentier","39","fourmies"=>["l'informatique","l'astronomie","le tricot"]
    ],
    11=>["david","pronnier","32","fourmies"=>["photographie","informatique","sonorisation"]
    ],
    12=>["cyriak","leclercq","27","fourmies"=>["jeux video","séries","mangas"]
    ],
    13=>["stevens","dorchies","23","floyon"=>["south park","jeux video","manga"]
    ],
    14=>["lubin","meunier","30","marcy sous marle"=>["les gateaux","les bonbons","boire chocolat"]
    ],
    15=>["gregory","caron","40","fourmies"=>["jeux video","informatique","la vie"]
    ]
];

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach($classe as $index=>$eleve){?>
    <?php echo $eleve[0]. " ".$eleve[1]."<br>";  ?>
<?php } ?>

</body>
</html>
