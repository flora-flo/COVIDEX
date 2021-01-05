<?PHP
	class Utilisateur{
		private  $id  ;
		private  $nom = null;
		private  $prenom = null;
		private  $email = null;
		private  $telephone = null;
		
		
		function __construct( $nom, $prenom, $email ,$telephone){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->telephone=$telephone;
			
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getTelephone(): string{
			return $this->telephone;
		}
		

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom;
		}
		function setEmail( $email): void{
			$this->email=$email;
		}
		function setTelephone( $telephone): void{
			$this->telephone=$telephone;
		}
	}
?>