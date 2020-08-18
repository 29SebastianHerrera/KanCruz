<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceCalculator extends Model
{

    public static string $errorGuestNumber = 'El número de huespedes no es un numero';
    public static string $errorMaxPax = 'El número de huespedes sobrepasa el límite';
    public static string $errorNightNumber = 'El número de noches no es un numero';
    public static string $errorPetsNumber = 'El número de mascotas no es un numero';
    public static string $errorBreakfast = 'El valor para desayuno no es válido';

    public static  int $guestLimit = 12;

    public function validate_data(array $data)
    {
        if (!is_int($data['guestNumber']))
        {
            $error = self::$errorGuestNumber;
            return $error;
        }
        if(!is_int($data['nightNumber']))
        {
            $error=self::$errorNightNumber;
            return $error;
        }
        if(!is_int($data['petsNumber']))
        {
            $error=self::$errorPetsNumber;
            return $error;
        }
        if(!is_bool($data['breakfast']))
        {
            $error=self::$errorBreakfast;
            return $error;
        }
        if ($data['guestNumber']>12)
        {
            $error = self::$errorMaxPax;
            return $error;
        }
        return $data;
    }
    
    public function convert_guest_number_to_variable(array $data)
    {
        if (is_int($data['guestNumber']))
        {
            $guestNumber=$data['guestNumber'];
        }
        return $guestNumber;
    }
    public function convert_night_number_to_variable(array $data)
    {
        if (is_int($data['nightNumber']))
        {
            $nightNumber=$data['nightNumber'];
        }
        return $nightNumber;
    }
    public function convert_pets_number_to_variable(array $data)
    {
        if (is_int($data['petsNumber']))
        {
            $petsNumber=$data['petsNumber'];
        }
        return $petsNumber;
    }
    public function convert_breakfast_to_variable(array $data)
    {
        if (is_bool($data['breakfast']))
        {
            $breakfast=$data['breakfast'];
        }
        return $breakfast;
    }
    public function calcul_rooms (int $guestNumber)
    {
        $totalRooms=0;
        if ($guestNumber<=4)
        {
            $totalRooms=1;
        }
        if ($guestNumber>4 AND $guestNumber<=8)
        {
            $totalRooms=2;
        }
        if ($guestNumber>8 AND $guestNumber<=self::$guestLimit)
        {
            $totalRooms=3;
        }
        return $totalRooms;
    }

    public function calcul_breakfast_price (int $guestNumber, bool $breakfast, int $nightNumber)
    {
        $breakfastPrice=0;
        if ($breakfast=true)
        {
            $breakfastPrice=$guestNumber*12*$nightNumber;
        }
        return $breakfastPrice;
    }

    public function calcul_pet_price (int $nightNumber, int $petsNumber)
    {
        $petPrice=$petsNumber*$nightNumber*5;
        return $petPrice;
    }

    public function calcul_total_price(int $guestNumber, int $nightNumber, int $petsNumber, bool $breakfast)
    {
        $totalRooms=self::calcul_rooms($guestNumber);
        $breakfastPrice=self::calcul_breakfast_price($guestNumber, $breakfast, $nightNumber);
        $petPrice=self::calcul_pet_price($nightNumber, $petsNumber);
        
        $totalPrice=($totalRooms*85)*$nightNumber+$breakfastPrice+$petPrice;
        return $totalPrice;
    }

    public function return_data(int $guestNumber, int $nightNumber, int $petsNumber, bool $breakfast)
    {    
       $data=array(
        'guestNumber'=> $guestNumber,
        'roomsNumber'=> self::calcul_rooms($guestNumber),
        'nightNumber'=> $nightNumber,
        'petsNumber'=> $petsNumber,
        'breakfast'=> $breakfast
       );
       return $data;
    }
}
?>