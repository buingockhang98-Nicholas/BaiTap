<?php
class Login{
  const email = 'email@email.com';
  const password = '12345678';
    public $email;
    public $password;
    function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }
    
    public function login(){
      return ($this->email === self::email && $this->password === self::password);
    }
}

?>
