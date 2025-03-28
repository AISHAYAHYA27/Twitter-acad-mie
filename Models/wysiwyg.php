<?php
include_once ('Connect.php'); //normalement déjà include dans index mais depuis controller $db = null sans cet include
// echo 'MODELS WYSIWYG'.PHP_EOL;
function insertTweet($cols, $values, $tweet) {
    
    global $db;

    try {
        $sql = "INSERT INTO tweet ($cols) SELECT $values FROM user 
        WHERE MD5(CONCAT(user.id, 'pavkis the best KVAp')) = '{$_COOKIE['Twitter_connected']}';";

        $stmt = $db->prepare($sql);
        $stmt->execute($tweet);

        echo "Nouveau tweet ajouté: " . $db->lastInsertId();
    
    } catch (PDOException $e) {
        echo "ERR: " . $e->getMessage();
    }
}

function insertHashtag($newTag) {

    global $db;

    try {
        $sql = "INSERT INTO hashtag (name) SELECT ? WHERE NOT EXISTS (SELECT name FROM hashtag WHERE binary name = ?);";

        $stmt = $db->prepare($sql);

        $stmt->bindParam(1, $newTag);
        $stmt->bindParam(2, $newTag);
        $stmt->execute();

        echo "Nouveau hashtag ajouté: " . $db->lastInsertId();
        
    } catch (PDOException $e) {
        echo "ERR: " . $e->getMessage();
    }
}

function mentionFollowings($cookie) {
    global $db;

    try {
        $sql = "SELECT user.picture, user.display_name, user.username FROM user JOIN follow ON user.id = follow.id_user_followed WHERE MD5(CONCAT(follow.id_user_follow, 'pavkis the best KVAp')) = '$cookie' AND user.is_active = 1;";

        $stmt = $db->prepare($sql);

        // $stmt->bindParam(1, $newTag);
        // $stmt->bindParam(2, $newTag);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_NUM);
        return $result;
        
    } catch (PDOException $e) {
        echo "ERR: " . $e->getMessage();
    }
}
