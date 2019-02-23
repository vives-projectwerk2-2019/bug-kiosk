<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    public function trim($item)
    {
        $trimmed = !empty($item) ? trim($item) : null;
        return $trimmed;
    }
    
    public function checkIfValidEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email!";
            return false;
        }else  {
            if($this->checkIfEmailExists($email)){
                return !filter_var($email, FILTER_VALIDATE_EMAIL) === false;
            }
        }
    }

    public function checkIfEmailExists($email)
    {
        if (User::where('email', '=', $email)->exists()) {
            echo "E-mail is already in use!";
            return false;
        } else {
            return true;
        }
    }

    public function checkIfValidPassword($password, $passwordConfirmation)
    {
        if ($password == $passwordConfirmation) {
            return true;
        }
        echo "Password's did not match!";
        return false;
    }
}
