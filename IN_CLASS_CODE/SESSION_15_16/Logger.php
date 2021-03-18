<?php

# a very general functionality we will use WITHOUT extending or implementing!
trait Logger{
    public function log($logString) {
        $className = __CLASS__;
        # generic logging function -> time and the name of this class
        echo date("Y-m-d h:i:s", time()) . ": [{$className}] {$logString}";
    }
}
class User{
    // we just want to use it -> rather than implment or extned it!
    use Logger;
    public $name;
    function __construct($name = '') {
        $this->name = $name;
        $this->log("Created user '{$this->name}'");
    }
    function __toString() {
        return $this->name;
    }
}
class UserGroup {
    use Logger;
    public $users = array();
    public function addUser(User $user) {
        if (!in_array($user, $this->users)) {
            $this->users[] = $user;
            $this->log("Added user '{$user}' to group");
        }
        else{
            echo "Already in";
        }
        print_r($this->users);
    }
}

$group = new UserGroup;
$userFranklin = new User("Frank");
$group->addUser($userFranklin);
#class_exists(UserGroup);
#get_class_methods(User);
//2012-03-09 07:12:58: [User] Created user 'Franklin'
//2012-03-09 07:12:58:[UserGroup] Added user 'Franklin' to group