<?php
session_start();

require_once __DIR__ . '/../../core/FbChatMock.php';

$userId = (int) $_SESSION['user_id'];
$msgto = htmlentities($_GET['msgto'],  ENT_NOQUOTES);

$chat = new FbChatMock();
$messages = $chat->getMessages($userId, $msgto);
$chat_converstaion = array();

if (!empty($messages)) {
  $chat_converstaion[] = '<table>';
  foreach ($messages as $message) {
    $msg = htmlentities($message['message'], ENT_NOQUOTES);
    $user_name = ucfirst($message['username']);
    //$sent = date('F j, Y, g:i a', $message['sent_on']);
      $sent = $message['sent_on'];
    $chat_converstaion[] = <<<MSG
      <tr class="msg-row-container msg" data-sender="{$user_name}" data-user="{$_SESSION['user_name']}">
        <td>
          <div class="msg-row">
            <div class="avatar"></div>
            <div class="message">
              <span class="user-label"><a href="#" style="color: #6D84B4;">{$user_name}</a> <span class="msg-time">{$sent}</span></span><br/>{$msg}
            </div>
          </div>
        </td>
      </tr>
MSG;
  }
  $chat_converstaion[] = '</table>';
} else {
  echo '<span style="margin-left: 25px;">No chat messages available!</span>';
}

echo implode('', $chat_converstaion);
?>
