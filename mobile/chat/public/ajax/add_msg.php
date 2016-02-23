<?php
session_start();

if (isset($_POST['msg'])) {
  require_once __DIR__ . '/../../core/FbChatMock.php';
  
  $userId = (int) $_SESSION['user_id'];
  // Escape the message string
  $msg = htmlentities($_POST['msg'],  ENT_NOQUOTES);
  $msgto = htmlentities($_POST['msgto'],  ENT_NOQUOTES);
  
  $chat = new FbChatMock();
  $result = $chat->addMessage($userId, $msg, $msgto);
}
else
    {
        require_once __DIR__ . '/../../core/FbChatMock.php';
        
        $userId = 2;
        // Escape the message string
        $msg = "Hello from code.";
        
        $chat = new FbChatMock();
        $result = $chat->addMessage($userId, $msg, $msgto);
    
        echo "Result: ".$result;
    }
?>