<?php 

function sayhello(){
    echo "<br> Bonjour";
}

function direBonjourA($prenom){
    echo "<br> Bonjour ". ucfirst(strtolower($prenom));
}


sayhello();
direBonjourA("Fatou");

$p = "mAMADOU";

direBonjourA($p);