<?php
 
class GetTodoAPI {
    private $db;
     
    // Constructor - open DB connection
    function __construct() {
        $this->db = new mysqli("westonkleecom.ipagemysql.com","demo_user","Plann3r!","planner");
    }
 
    // Destructor - close DB connection
    function __destruct() {
        $this->db->close();
    }
 
 	//http://www.php.net/manual/en/mysqli-stmt.fetch.php
    // Main method to redeem a code
    function call() {
        // Print all codes in database
        $stmt = $this->db->prepare("SELECT todo_id, title FROM todo");
        $stmt->execute();
		header("Content-type: text/xml");
		echo "<TODOS>";
		
		/* bind result variables */
	    $stmt->bind_result($id, $title);
	
	    /* fetch values */
	    while ($stmt->fetch()) {
	        echo "<TODO>";
		    echo "<title>".$title."</title>";
		    echo "<id>".$id."</id>";
		    echo "</TODO>";
	    }

		echo "</TODOS>";
        $stmt->close();
    }
}
 
// This is the first thing that gets called when this page is loaded
// Creates a new instance of the RedeemAPI class and calls the redeem method

// im3460 / T3stus3r
$api = new GetTodoAPI;
$api->call();


?>