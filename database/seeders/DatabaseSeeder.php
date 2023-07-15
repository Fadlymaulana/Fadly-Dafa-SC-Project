<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Listing::create([
            'title' => 'Persona 5',
            'tags' => 'game',
            'company' => 'p-studio',
            'location' => 'tanjung balai',
            'email' => 'uhuy1@gmail.com',
            'website' => 'blablabla.com',
            'description' => 'Persona 5 is a 2016 role-playing video game developed by Atlus. 
            It takes place in modern-day Tokyo and follows a high school student known by the pseudonym Joker 
            who transfers to a new school after being falsely accused of assault and put on probation.'

        ]);
        Listing::create([
            'title' => 'god of war',
            'tags' => 'game',
            'company' => 'salto-studio ',
            'location' => 'KISARAN',
            'email' => 'uhuy2@gmail.com',
            'website' => 'bloloolo.com',
            'description' => 'God of War is an action-adventure video game developed by Santa Monica Studio and published by Sony 
            Interactive Entertainment. It was released worldwide on April 20, 2018, for the PlayStation 4, 
            with a Windows port released on January 14, 2022. The game is the eighth installment in the God of War series, 
            the eighth chronologically, and the sequel to 2010 God of War III. Unlike previous games, which were loosely based on 
            Greek mythology, this installment is loosely inspired by Norse mythology, with the majority of it set in ancient 
            Scandinavia in the realm of Midgard. For the first time in the series, there are two protagonists: Kratos, the former Greek
             God of War who remains the only playable character, and his young son, Atreus. Following the death of Kratos 
             second wife—Atreus mother—they journey to fulfill her request that her ashes be spread at the highest peak of the nine 
             realms. Kratos keeps his troubled past a secret from Atreus, who is unaware of his divine nature. 
             Along their journey, they come into conflict with monsters and gods of the Norse world.'

        ]);
    }
}
