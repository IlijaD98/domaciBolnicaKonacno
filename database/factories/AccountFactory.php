<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $firstLetter=$this->faker->randomLetter();
        $numberSetOne=$this->faker->numberBetween($min=10,$max=99);
        $numberSetTwo=$this->faker->numberBetween($min=10,$max=99);
        $diagnosisCode=strtoupper($firstLetter).$numberSetOne.'.'.$numberSetTwo;


        return [
            
            'diagnosis_code'=>$diagnosisCode,
            'patient_id'=>$this->faker->numberBetween($min=1,$max=50),
            'doctor_id'=>$this->faker->numberBetween($min=1,$max=4)
        ];
    }
}
