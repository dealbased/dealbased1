<?php

/**
 * Description of FbChatMock
 *
 * @author Tamil
 */
class FbChatMock {

  // Holds the database connection
  private $dbConnection;
  
  //----- Database connection details --/
  //-- Change these to your database values
  
  private $_dbHost = 'localhost';
  
  private $_dbUsername = 'dealldsx_dealers';
  
  private $_dbPassword = 'Qq03049835';
  
//  private $_dbUsername = 'root';
//  
//  private $_dbPassword = 'root';
  
  public $_databaseName = 'dealldsx_dealers';
  
  //----- ----/

  /**
   * Create's the connection to the database and stores it in the dbConnection
   */
  public function __construct() {
    $this->dbConnection = new mysqli($this->_dbHost, $this->_dbUsername, 
        $this->_dbPassword, $this->_databaseName);

    if ($this->dbConnection->connect_error) {
      die('Connection error.');
    }
  }

  /**
   * Get the list of messages from the chat
   * 
   * @return array
   */
  public function getMessages($userId, $msgto) {
    $messages = array();
    $query = <<<QUERY
        SELECT 
          `chat`.`message`, 
          `chat`.`sent_on`,
          `users`.`id`, 
          `users`.`username`
        FROM `users`
        JOIN `chat`
          ON `chat`.`user_id` = `users`.`id` where (`chat`.`user_id`= $userId and `chat`.`user_id_to`=$msgto) or (`chat`.`user_id`=$msgto and `chat`.`user_id_to`=$userId)
      ORDER BY `sent_on` DESC LIMIT 0, 10
QUERY;
    
    // Execute the query
    $resultObj = $this->dbConnection->query($query);
    // Fetch all the rows at once.
    while ($row = $resultObj->fetch_assoc()) {
      $messages[] = $row;
    }
    
    return array_reverse ($messages);
    }

  /**
   * Add a new message to the chat table
   * 
   * @param Integer $userId The user who sent the message
   * @param String $message The Actual message
   * @return bool|Integer The last inserted id of success and false on faileur
   */
  public function addMessage($userId, $message, $messageto) {
    $addResult = false;
    
    $cUserId = (int) $userId;
    // Escape the message with mysqli real escape
    $cMessage = $this->dbConnection->real_escape_string($message);
    
    $query = <<<QUERY
      INSERT INTO `chat`(`user_id`, `user_id_to`, `message`, `sent_on`)
      VALUES ({$cUserId}, {$messageto}, '{$cMessage}', NOW())
QUERY;

      //echo "Query:".$query."<br>";
    $result = $this->dbConnection->query($query);
    
    if ($result !== false) {
      // Get the last inserted row id.
      $addResult = $this->dbConnection->insert_id;
    } else {
      echo "Error: ".$this->dbConnection->error;
    }
    
    return $addResult;
  }

}
