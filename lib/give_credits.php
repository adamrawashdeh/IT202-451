<?php

/**
 * Points should be passed as a positive value.
 * $losing should be where the points are coming from
 * $gaining should be where the points are going
 */
function give_credits($credits, $user_id, $reason, $details = "")
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($credits != 0) {
        $query = "INSERT INTO Credit_History (user_id, credit_diff, reason, details) 
            VALUES (:id, :pc, :r, :m)";
        //I'll insert both records at once, note the placeholders that are kept the same and the ones changed.
        $params[":id"] = $user_id;
        $params[":r"] = $reason;
        $params[":m"] = $details;
        $params[":pc"] = $credits;

        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);    
            $query = "UPDATE Users SET credits = (SELECT IFNULL(SUM(credit_diff), 0) FROM Credit_History WHERE user_id = :id) WHERE id = :id";
            $stmt = $db->prepare($query);
                $stmt->execute([":id" => get_user_id()]);
            return true;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transfering credits", "danger");
        }
        return false;
    }
}
/*    if ($credits != 0) {
        $query = "UPDATE Users SET credits = (SELECT IFNULL(SUM(credit_diff), 0) FROM Credit_History WHERE user_id = :id) WHERE id = :id";
    }
}
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":id" => get_user_id()]);
            get_credits();            
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transfering credits", "danger");
        }
    }
    return false;
} */