<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocumentosRespaldoMargaritaHuacaya>
 */
class DocumentosRespaldoMargaritaHuacayaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_of_the_institution' => fake()->randomElement(['UPDS-SUCRE', 'GADCH-DH']),
            'reception_date' => fake()->date(),
            'cite_or_number' => fake()->randomElement(['123-Pruebas', '123-Varios']),
            'sender' => fake()->randomElement(['Jose Antonio Ramirez Barrera', 'Juan Pablo Cossio Cruz']),
            'addressee' => fake()->randomElement(['Ramiro Miguel Calizaya Callpa', 'Damián Condori Herrera']),
            'reference' => fake()->randomElement(['Pruebas al Sistema Web y los Servicios Implicados', 'Practicas Profesionales']),
            'number_of_sheets' => fake()->randomElement(['100 Hojas', '90 Hojas', '80 Hojas']),
            'folder_name_and_year' => fake()->randomElement([
                'A.H.C.8D.Orient.',
                'Ctrs.Cons.Geof.Pet.',
                'Ctrs.Cons.Prod.L.',
                'Conv.Vrs.',
                'DH.Doc.Cmpo.Mga.Huac.',
                'DH.EAFD.Cmpo.Mga.Huac.',
                'Dir.YPFB.Nts.Inf.',
                'Doc.Pres.',
                'Docs.Resp.Mga.Huac.',
                'Emit.',
                'Edo.Cts.',
                'Gdo.Pte.Cgo.',
                'IDH.IEHD.',
                'Inf.Cmpo.Prods.',
                'Ley.Sec.Hidro.Ener.',
                'Pract.Ind.',
                'Rec.',
                'Rec.Ext.',
                'Rec.Int.',
                'Reg.',
                'Rpts.Prod.',
                'Res.Min.Cmpo.Mga.Huac.',
                'Retro.Reg.',
                '1ro.2do.Crpo.Cmpo.I.A.',
                '3ro.4to.Crpo.Cmpo.I.A.',
                '5to.6to.Crpo.Cmpo.I.A.',
                '7mo.8vo.Crpo.Cmpo.I.A.',
                '9no.10mo.Crpo.Cmpo.I.A.',
                'Vrs.',
            ]),
            'observation' => fake()->randomElement(['Ninguna', 'De Maravilla la Pagina Web']),
            'pdf' => fake()->randomElement(['.pdf', '.word']),
        ];
    }
}
