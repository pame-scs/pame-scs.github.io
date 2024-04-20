
<?php
class Database
{
    public $pdo;
    function __construct()
    {
        $dbFile = dirname(__FILE__) . "/projects.sqlite";
        $dbExists = file_exists($dbFile);
        $this->pdo = new PDO("sqlite:$dbFile");
        if (!$dbExists) {
            $this->createDatabase();
        }
    }

    function createDatabase()
    {
        $this->pdo->exec('CREATE TABLE projects (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                descPosition TEXT NOT NULL,
                descProject TEXT NOT NULL,
                img TEXT NOT NULL
            )');
    }

    function listep()
    {
        return $this->pdo->query("SELECT id, name, descProject, img FROM projects");
    }

    function addProject($name, $descPosition, $descProject, $img)
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO projects (name, descPosition, descProject, img)
            VALUES (:name, :descPosition, :descProject , :img)"
        );

        $result = $stmt->execute(
            array(
                'name' => $name,
                'descPosition' => $descPosition,
                'descProject' => $descProject,
                'img' => $img
            )
        );

        return $result;
    }
    function searchProject($terms)
    {
        $stmt = $this->pdo->prepare("SELECT id, name, descProject FROM projects WHERE name LIKE :terms OR descProject LIKE :terms");
        $stmt->execute(['terms' => "%$terms%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }





    function project($id)
    {
        $stmt = $this->pdo->prepare("SELECT id, name, descPosition, descProject,img FROM projects WHERE id=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
?>


<?php
/*
$projectManager = new Database(); 
$projectName = "Touch Technologies";
$projectPosition = "Community Manager";
$projectDesc = "Touch Technologies is a company in El Salvaor that I work for as a social media manager. I'm in charge of managing the social media accounts and creating content for the company. I focus on respecting the graphic chart and creating calendar posts.";
$projetImg = "assets/img/TouchTech-logo.png";
$result = $projectManager->addProject($projectName,$projectPosition, $projectDesc, $projetImg);

?>

<?php

$projectManager = new Database(); 
$projectName = "Amicale d'Informatique de l'Université de Strasbourg";
$projectPosition = "Resp Communications";
$projectDesc = "AIUS is a student association in Strasbourg that I participate for as a communications manager. I'm in charge of managing the social media accounts and promoting services and events of the association.";
$projetImg = "assets/img/aius-logo.png";
$result = $projectManager->addProject($projectName, $projectPosition,$projectDesc, $projetImg);
*/
?>
