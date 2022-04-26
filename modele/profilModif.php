 <?php


include "connSQL_modele.php";

$data=array();

function getInfoProfil($nom) {
    $resultat = array();
    global $data;
    #global $resultat;
    $conn=connexionSQL();
	if ($conn == FALSE)
	{
	echo "Erreur CONNEXION SQL";
	}
	$sql=("SELECT P.* FROM PROFIL P, COMPTE C WHERE C.PSEUDO_U='$nom' AND C.ID_U=P.ID_U;");
	$resultat=mysqli_query($conn,$sql);
	
	$data = mysqli_fetch_array($resultat);
    #var_dump($data);
    
	
	
	

}

#getInfoProfil("TATA")

function getInfoProfil($nom) {
    $conn=connexionSQL();
	if ($conn == FALSE)
	{
	echo "Erreur CONNEXION SQL";
	}
	$sql=("UPDATE PROFIL SET NOM=$nom, PRENOM=$prenom, PSEUDO_U=$pseudo, AGE=$age, BIO=$bio, CODE_POSTAL=$codePost, DATE_NAISSANCE=$dateNais, TEL=$tel, CENTRE_FORMATION=$ctrForm, LANGUE=$lang, MAIL=$mail WHERE ID_U=$id;");
	mysqli_query($conn,$sql);

?>

