<?PHP
	class Commentaire{
		private  $idcom  ;
		private  $Commentaire = null;
		
		
		function __construct($commentaire){
			
			$this->commentaire=$commentaire;
			
		}
		
		function getIdcom(){
			return $this->idcom;
		}
       
		function getCommentaire(){
			return $this->commentaire;
		}
		
		

		
		function setCommentaires($commentaire){
			$this->commentaire=$commentaire;
		}
		
		 }
	?>