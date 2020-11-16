<?php 
// classes 
// what type is this is it a public one or is this a private property 
// public means we can access the property and change them from anywhere outside the class in our code 
// private mens we can only access them from inside the class itself 


class User {
    // these are properties 
    // public means you can change the values outside the class 
    // a constructor function is a special type of function inside classes that runs whenever we instantiate a class so whenever we say new user it's going to run that constructor function and that constructor function can set some initial values for our properties     
    private $emailProp;
    private $nameProp;
    
    // double underscore
    public function __construct($name, $email) {
        $this->emailProp = $email;
        $this->nameProp = $name;
    }

    public function login() {
        echo $this->nameProp . ' logged in';
    }
    // getters and setters 
// this is a public function accessing a private function using the this keyword
    public function getName() {
       return $this->nameProp; // returns the name private propery when called
    }

// public function to update name 
public function setName($name) {
    // so condition is can't be a number and is greater than 1 
   if (is_string($name) && strlen($name) > 1) {
      $this-> nameProp = $name;
      return "name has been updated to $name";
   } else {
      return "not a valid name";
   }
}

}

// instanantion a class to create a new object on that class 
// dash and arrow to access the properties and functions inside the class  

$userOne = new User('yoshi','yoshi@thenetninja.com');

// when public we can over ride the public properties values 
//$userOne->nameProp = 'mairo'; // can't do this as the property is now private
//echo $userOne->nameProp; // can't do this as the property is now private 
echo $userOne->getName();
echo $userOne->setName('tom');

?>