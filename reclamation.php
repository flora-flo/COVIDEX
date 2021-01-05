
<?php
	/**
	* 
	*/
	class Reclamation
	{
		public $id;
		public $titre;
		public $description;
		public $role;
		public $created;
		
		function __construct($id,$titre,$description,$role, $created)
		{
			$this->id=$id;
			$this->titre=$titre;
			$this->description=$description;
			$this->role=$role;
			$this->created=$created;

		}

		function getId(){
			return $this->id;
		}
		function getTitre(){
			return $this->titre;
		}
		function getdDscription(){
			return $this->description;
		}
		function getRole(){
			return $this->role;
		}
		function getCreated(){
			return $this->created;
		}

		function setId($id){
			$this->id=$id;
		}
		function setTitre($titre){
			$this->titre=$titre;
		}
		function setDescription($description){
			$this->description=$description;
		}
		function setRole($role){
			$this->role=$role;
		}
		function setCreated($created){
			$this->created=$created;
		}
	
	}

  ?>
