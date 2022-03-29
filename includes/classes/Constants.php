<?php
class Constants {
    //static means u don't have to create an instance of the class first
    //no $constants = Constants()
    public static $passwordsDoNotMatch = "Your passwords don't match";
    public static $passwordNotAlphanumeric = "Your passwords can only contain numbers and letters";
    public static $passwordCharacters = "Your passwords must be between 5 and 40 characters";
    public static $emailInvalid = "Email is invalid";
    public static $emailsDoNotMatch = "Your emails don't match";
    public static $lastNameCharacters = "Your last name must be between 2 and 25 characters";
    public static $firstNameCharacters = "Your first name must be between 2 and 25 characters";
    public static $usernameCharacters = "Your username must be between 5 and 25 characters";
    public static $usernameTaken = "This username already exists";
    public static $emailTaken = "This email is already in use";
    public static $loginFailed = "Your username or password was not correct";
}
?>

