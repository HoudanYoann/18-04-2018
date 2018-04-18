<?php

require 'chat.php';

// Je définit grâce à la class CHAT et ses propriétés private, des propriétés unique selon les nouveaux chats que j'inscris
$sphynx = new Chat('Pharaon', 15, 'beige', 'mâle', 'sphynx');
$persan = new Chat('Minouche', 2, 'blanc', 'femelle', 'persan');
$snowShoes = new Chat('Elune', 4, 'gris', 'femelle', 'snowshoes');

// J'affiche grâce à écho les chats qui ont été définit :
?>
    <p><h2><strong>Sphynx :</strong></h2></p>
<?php
// Je peux à présent, montrer les informations sur les chats :
echo $sphynx->Name() . ' ' . $sphynx->Age() . ' ' . $sphynx->Color() . ' ' . $sphynx->Sexe() . ' ' . $sphynx->Race();
?>
<br>
    <p><h2><strong>Persan :</strong></h2></p>
<?php
echo $persan->Name() . ' ' . $persan->Age() . ' ' . $persan->Color() . ' ' . $persan->Sexe() . ' ' . $persan->Race();
?>
<br>
    <p><h2><strong>Snowshoes :</strong></h2></p>
<?php
echo $snowShoes->Name() . ' ' . $snowShoes->Age() . ' ' . $snowShoes->Color() . ' ' . $snowShoes->Sexe() . ' ' . $snowShoes->Race();




