<?php

namespace FlightsTracker\Model;

include_once('BaseModel.php');

class RegistrationModel extends \FlightsTracker\Model\BaseModel {

    public function tryRegister(&$data) {

        if (!$this->isUsernameFree($data['username'])) 
            return false;

        //$date_indices = [4]; //TODO: find out why dates don't work
        $this->oci->insertRow('Account', $data);

        return true;
    }

    private function isUsernameFree($username) {
        $sql = "SELECT username 
                  FROM Account 
                 WHERE username = '" . $username . "'"
        ;
        $sql_count = 'SELECT COUNT(*) FROM (' . $sql . ')';
        $this->oci->bindColsFlatten($sql_count, $fetched_accounts);

        return $fetched_accounts == 0;
    }


    public function deleteAccount($username) {
        $this->oci->deleteRow('Account', 'username', $username);
        unset($_SESSION['logged_user']);
    }
   
}

?>