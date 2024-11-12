<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Mechanicsquestions = [
            [
                'question' => 'What is the SI unit of force?',
                'option1' => 'Newton',
                'option2' => 'Joule',
                'option3' => 'Watt',
                'option4' => 'Pascal',
                'option5' => 'Meter',
                'answer' => 'Newton',
                'level' => 'Beginer',
                'category' => 'Mechanics',
                'sub_category' => 'Speed',
                'delete_status' => 0,
            ],
            [
                'question' => 'What is the speed of light in a vacuum?',
                'option1' => '3 x 10^8 m/s',
                'option2' => '3 x 10^6 m/s',
                'option3' => '3 x 10^5 m/s',
                'option4' => '3 x 10^3 m/s',
                'option5' => '3 x 10^7 m/s',
                'answer' => '3 x 10^8 m/s',
                'level' => 'Beginer',
                'category' => 'Mechanics',
                'sub_category' => 'Speed',
                'delete_status' => 0,
            ],
            [
                'question' => 'Which of the following particles has no charge?',
                'option1' => 'Electron',
                'option2' => 'Proton',
                'option3' => 'Neutron',
                'option4' => 'Positron',
                'option5' => 'Photon',
                'answer' => 'Neutron',
                'level' => 'Beginer',
                'category' => 'Mechanics',
                'sub_category' => 'Speed',
                'delete_status' => 0,
            ],
            [
                'question' => 'Which law explains why you feel a force when you accelerate in a car?',
                'option1' => 'Newton\'s First Law',
                'option2' => 'Newton\'s Second Law',
                'option3' => 'Newton\'s Third Law',
                'option4' => 'Law of Conservation of Energy',
                'option5' => 'Hooke\'s Law',
                'answer' => 'Newton\'s Second Law',
                'level' => 'Beginer',
                'category' => 'Mechanics',
                'sub_category' => 'Speed',
                'delete_status' => 0,
            ],
            [
                'question' => 'What is the primary cause of the greenhouse effect?',
                'option1' => 'Ozone layer depletion',
                'option2' => 'Water vapor',
                'option3' => 'Nitrogen oxides',
                'option4' => 'Carbon dioxide',
                'option5' => 'Methane',
                'answer' => 'Carbon dioxide',
                'level' => 'Beginer',
                'category' => 'Mechanics',
                'sub_category' => 'Speed',
                'delete_status' => 0,
            ],
            [
                'question' => 'Which phenomenon explains why a straw appears bent in water?',
                'option1' => 'Reflection',
                'option2' => 'Refraction',
                'option3' => 'Diffraction',
                'option4' => 'Interference',
                'option5' => 'Dispersion',
                'answer' => 'Refraction',
                'level' => 'Beginer',
                'category' => 'Mechanics',
                'sub_category' => 'Speed',
                'delete_status' => 0,
            ],
            [
                'question' => 'What is the first law of thermodynamics?',
                'option1' => 'Energy cannot be created or destroyed',
                'option2' => 'Entropy of a system always increases',
                'option3' => 'For every action, there is an equal and opposite reaction',
                'option4' => 'Force equals mass times acceleration',
                'option5' => 'Energy flows from hot to cold',
                'answer' => 'Energy cannot be created or destroyed',
                'level' => 'Beginer',
                'category' => 'Mechanics',
                'sub_category' => 'Speed',
                'delete_status' => 0,
            ],
            [
                'question' => 'Which color of light has the shortest wavelength?',
                'option1' => 'Red',
                'option2' => 'Yellow',
                'option3' => 'Blue',
                'option4' => 'Green',
                'option5' => 'Violet',
                'answer' => 'Violet',
                'level' => 'Beginer',
                'category' => 'Mechanics',
                'sub_category' => 'Speed',
                'delete_status' => 0,
            ],
        ];

        $Lightquestions = [
            // Existing questions...
        
            // New questions for the "Light" lesson
            [
                'question' => 'What is the speed of light in a vacuum?',
                'option1' => '3 x 10^8 m/s',
                'option2' => '2.9 x 10^8 m/s',
                'option3' => '1.5 x 10^7 m/s',
                'option4' => '3.5 x 10^7 m/s',
                'option5' => '2.5 x 10^8 m/s',
                'answer' => '3 x 10^8 m/s',
                'level' => 'Expert',
                'category' => 'Optics',
                'sub_category' => 'Properties of Light',
                'delete_status' => 0,
            ],
            [
                'question' => 'What phenomenon causes a rainbow?',
                'option1' => 'Reflection',
                'option2' => 'Refraction',
                'option3' => 'Diffraction',
                'option4' => 'Dispersion',
                'option5' => 'Interference',
                'answer' => 'Dispersion',
                'level' => 'Expert',
                'category' => 'Optics',
                'sub_category' => 'Light Phenomena',
                'delete_status' => 0,
            ],
            [
                'question' => 'Which type of mirror is used in car headlights?',
                'option1' => 'Concave',
                'option2' => 'Convex',
                'option3' => 'Plane',
                'option4' => 'Spherical',
                'option5' => 'Parabolic',
                'answer' => 'Concave',
                'level' => 'Expert',
                'category' => 'Optics',
                'sub_category' => 'Reflection',
                'delete_status' => 0,
            ],
            [
                'question' => 'What is the term for light bending as it enters a different medium?',
                'option1' => 'Reflection',
                'option2' => 'Diffraction',
                'option3' => 'Dispersion',
                'option4' => 'Refraction',
                'option5' => 'Absorption',
                'answer' => 'Refraction',
                'level' => 'Expert',
                'category' => 'Optics',
                'sub_category' => 'Refraction',
                'delete_status' => 0,
            ],
            [
                'question' => 'Which color of visible light has the most energy per photon?',
                'option1' => 'Red',
                'option2' => 'Yellow',
                'option3' => 'Green',
                'option4' => 'Blue',
                'option5' => 'Violet',
                'answer' => 'Violet',
                'level' => 'Expert',
                'category' => 'Optics',
                'sub_category' => 'Wavelength and Color',
                'delete_status' => 0,
            ],
            [
                'question' => 'What type of lens corrects myopia (nearsightedness)?',
                'option1' => 'Convex',
                'option2' => 'Concave',
                'option3' => 'Cylindrical',
                'option4' => 'Spherical',
                'option5' => 'Plano-convex',
                'answer' => 'Concave',
                'level' => 'Expert',
                'category' => 'Optics',
                'sub_category' => 'Lenses',
                'delete_status' => 0,
            ],
        ];
        

        foreach ($Lightquestions as $question) {
            Question::create($question);
        }
    }
}
