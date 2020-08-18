<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use App\PriceCalculator;

class PriceCalculatorTest extends TestCase
{
    public function test_guest_number_is_not_integer()
    {
        $data=[
            'guestNumber'=>'a',
            'nightNumber'=>2,
            'petsNumber'=>1,
            'breakfast'=>true
        ];

        $calculator=new PriceCalculator();
        $result=$calculator->validate_data($data);

        $this->assertEquals(PriceCalculator::$errorGuestNumber,$result);
    }

    public function test_night_number_is_not_a_number()
    {
        $data=[
            'guestNumber'=>2,
            'nightNumber'=>'a',
            'petsNumber'=>1,
            'breakfast'=>true
        ];

        $calculator=new PriceCalculator();
        $result=$calculator->validate_data($data);
        $this->assertEquals(PriceCalculator::$errorNightNumber,$result);
    }

    public function test_pets_number_is_not_a_number()
    {
        $data=[
            'guestNumber'=>2,
            'nightNumber'=>2,
            'petsNumber'=>'a',
            'breakfast'=>true
        ];

        $calculator=new PriceCalculator();
        $result=$calculator->validate_data($data);
        $this->assertEquals(PriceCalculator::$errorPetsNumber,$result);
    }

    public function test_breakfast_is_not_a_boolean()
    {
        $data=[
            'guestNumber'=>2,
            'nightNumber'=>2,
            'petsNumber'=>3,
            'breakfast'=>4
        ];

        $calculator=new PriceCalculator();
        $result=$calculator->validate_data($data);
        $this->assertEquals(PriceCalculator::$errorBreakfast,$result);
    }

    public function test_max_pax()
    {
        $data=[
            'guestNumber'=>13,
            'nightNumber'=>2,
            'petsNumber'=>3,
            'breakfast'=>true
        ];
        $calculator=new PriceCalculator();
        $result=$calculator->validate_data($data);
        $this->assertEquals(PriceCalculator::$errorMaxPax,$result);
    }
    
    public function test_all_data_is_valid()
    {
        $data=[
            'guestNumber'=>2,
            'nightNumber'=>2,
            'petsNumber'=>3,
            'breakfast'=>true
        ];
        $expected=[
            'guestNumber'=>2,
            'nightNumber'=>2,
            'petsNumber'=>3,
            'breakfast'=>true
        ];

        $calculator=new PriceCalculator();
        $result=$calculator->validate_data($data);
        $this->assertEquals($expected,$result);
    }

    public function test_convert_guest_number_to_variable()
    {
        $data=[
            'guestNumber'=>2,
            'nightNumber'=>2,
            'petsNumber'=>3,
            'breakfast'=>true
        ];
        $expected=2;
        $calculator= new PriceCalculator();
        $result=$calculator->convert_guest_number_to_variable($data);
        $this->assertEquals($expected,$result);
    }

    public function test_convert_night_number_to_variable()
    {
        $data=[
            'guestNumber'=>2,
            'nightNumber'=>2,
            'petsNumber'=>3,
            'breakfast'=>true
        ];
        $expected=2;
        $calculator= new PriceCalculator();
        $result=$calculator->convert_night_number_to_variable($data);
        $this->assertEquals($expected,$result);
    }

    public function test_convert_pets_number_to_variable()
    {
        $data=[
            'guestNumber'=>2,
            'nightNumber'=>2,
            'petsNumber'=>2,
            'breakfast'=>true
        ];
        $expected=2;
        $calculator= new PriceCalculator();
        $result=$calculator->convert_pets_number_to_variable($data);
        $this->assertEquals($expected,$result);
    }
    
    public function test_convert_breakfast_to_variable()
    {
        $data=[
            'guestNumber'=>2,
            'nightNumber'=>2,
            'petsNumber'=>3,
            'breakfast'=>true
        ];
        $expected=true;
        $calculator= new PriceCalculator();
        $result=$calculator->convert_breakfast_to_variable($data);
        $this->assertEquals($expected,$result);
    }

    public function test_calcul_rooms_for_two_rooms ()
    {
        $guestNumber=5;

        $calculator= new PriceCalculator();
        $result=$calculator->calcul_rooms($guestNumber);
        $this->assertEquals(2,$result);
    }

    public function test_calcul_rooms_for_one_room ()
    {
        $guestNumber=4;

        $calculator= new PriceCalculator();
        $result=$calculator->calcul_rooms($guestNumber);
        $this->assertEquals(1,$result);
    }

    public function test_calcul_rooms_for_three_rooms ()
    {
        $guestNumber=9;

        $calculator= new PriceCalculator();
        $result=$calculator->calcul_rooms($guestNumber);
        $this->assertEquals(3,$result);
    }

    public function test_calcul_total_price()
    {
        $guestNumber=3;
        $nightNumber=2;
        $petsNumber=1;
        $breakfast=true;

        $reservationData = new PriceCalculator();
        $result = $reservationData->calcul_total_price($guestNumber, $nightNumber, $petsNumber, $breakfast);

        $this->assertEquals(252, $result);
    }

    public function test_return_data()
    {
        $guestNumber=3;
        $nightNumber=2;
        $petsNumber=1;
        $breakfast=true;

        $dataForReservation= new PriceCalculator();
        $result= $dataForReservation->return_data($guestNumber, $nightNumber, $petsNumber, $breakfast);
        $this->assertIsArray($result);
    }
}
?>