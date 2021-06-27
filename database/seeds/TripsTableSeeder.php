<?php

use App\Trip;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private function randomTravelMethod(){
        $arr = ['plane', 'carr', 'buss', 'boat', 'cruise', 'train'];
        shuffle($arr);
        return $arr[1];
    }
    
    private function randomAccomodation(){
        $arr = ['hotell','house', 'mansion', 'appartment', 'camping'];
        shuffle($arr);
        return $arr[1];
    }

    public function run(Faker $faker)
    {
        /* $table->id();
            $table->string('destination', 50);
            $table->string('travel_method', 50);
            $table->dropColumn('description');
            $table->string('accomodation', 50);
            $table->tinyInteger('party_number')->unsigned();
            $table->tinyInteger('cost')->unsigned();
            $table->date('date_of_trip');
            $table->timestamps(); 
        */

        for($i = 0; $i < 100; $i++){
            
            $new_trip = new Trip();        
            $new_trip->destination = $faker->city();
            $new_trip->travel_method = $this->randomTravelMethod();
            $new_trip->description = $faker->sentence();
            $new_trip->accomodation = $this->randomAccomodation();
            $new_trip->party_number = $faker->randomDigit();
            $new_trip->cost = $faker->numberBetween(0,100);
            $new_trip->date_of_trip = $faker->dateTime();
            $new_trip->save();
        };
    }
   
}
