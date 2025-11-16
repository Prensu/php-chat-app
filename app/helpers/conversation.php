<?php

function getConversation($user_id, $conn){
    /**
     * Get all users except the logged-in user
     * This ensures you can see all users, even if no conversation exists yet
     */

    $sql = "SELECT user_id, name, username, p_p, last_seen
            FROM users
            WHERE user_id != ?
            ORDER BY name ASC";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$user_id]);

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $users; // return all other users
}
