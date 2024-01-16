<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rol_id' => 3,
            'asesor_tese_id' => rand(3, 29),
            'nombre_usuario' => $this->faker->name(),
            'apaterno_usuario' => $this->faker->firstNameMale(),
            'amaterno_usuario' => $this->faker->firstNameFemale(),
            'matricula_usuario' => $this->faker->ean8(),
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('12345678'),
            'domicilio_usuario' => $this->faker->address(),
            'creditos_usuario' => rand(75, 100),
            'telefono_usuario' => $this->faker->phoneNumber(),
            'nombre_empresa' => $this->faker->company(),
            'rfc_empresa' => $this->faker->swiftBicNumber(),
            'telefono_empresa' => $this->faker->phoneNumber(),
            'web_empresa' => $this->faker->domainName(),
            'giro_empresa' => $this->faker->catchPhrase(),
            'direccion_empresa' => $this->faker->address(),
            'nombre_dirige_documentacion' =>  $this->faker->name() . ' ' . $this->faker->firstNameMale() . ' ' . $this->faker->firstNameFemale(),
            'cargo_dirige_documentacion' => $this->faker->jobTitle(),
            'horario_residencia' => "Lunes a Viernes de " . rand(7, 9) . " am  a " . rand(5, 8) . ' pm',
            'periodo_comprendido' => "Del 05/10/2022 al 10/11/2022",
            'nombre_proyecto' => strtoupper($this->faker->domainWord()) . ' SYSTEM',
            'beneficio_empresa' => $this->faker->text(50),
            'asesor_empresa' => $this->faker->name() . ' ' . $this->faker->firstNameMale() . ' ' . $this->faker->firstNameFemale(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
