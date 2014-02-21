<?php

use Faker\Factory as Faker;
use Carbon\Carbon;

class EventosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('eventos')->truncate();
        Eloquent::unguard();

		$faker = Faker::create();

        foreach(range(1,100) as $index)
        {
            $fecha = $faker->dateTimeBetween('now','+1 month');

            $horario['inicio'] = Carbon::instance( $fecha )->setTime(18,0,0);

            $horario['fin'] = Carbon::instance($horario['inicio'])->addHours(2);

            Evento::create([

                'titulo' => $faker->sentence(3),
                'descripcion' => $faker->paragraph(5),
                'inicio' => $horario['inicio'],
                'fin'   => $horario['fin'],
                'precio' => $faker->randomDigit()*10,
            ]);

        }
	}

}
