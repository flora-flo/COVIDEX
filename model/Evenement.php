<?PHP
	class Evenement{
		private  $id ;
		private  $tpe ;
		private  $titre = null;
		private  $date = null;
		private  $lieu = null;
		private  $descrip = null;
		private  $nbParticip = null;
		
		
		function __construct( $tpe,$titre, $date, $lieu, $descrip, $nbParticip){
			$this->tpe=$tpe;
			$this->titre=$titre;
			$this->date=$date;
			$this->lieu=$lieu;
			$this->descrip=$descrip;
			$this->nbParticip=$nbParticip;
			
		}
		
		function getId(){
			return $this->id;
		}
		function getTpe(){
			return $this->tpe;
		}
		function getTitre(){
			return $this->titre;
	 }
		function getDate() {
			return $this->date;
		}
		function getLieu(){
			return $this->lieu;
		}
		function getDescrip(){
			return $this->descrip;
		}
		function getNbParticip(){
			return $this->nbParticip;
		}
		

		

		function setTpe($tpe) {
			$this->tpe=$tpe;
		}
		function setTitre($titre) {
			$this->titre=$titre;
		}

		function setDate($date){
			$this->date=$date;
		}
		function setLieu($lieu){
			$this->lieu=$lieu;
		}
		function setDescrip($descrip){
			$this->descrip=$descrip;
		}
		function setNbParticip($nbParticip){
			$this->nbParticip=$nbParticip;
		}
		
		  }
		 
	?>