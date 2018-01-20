<?php

use Illuminate\Database\Seeder;

class aditthiajanwar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adit=[
        	['nis'=>'161710085','nama_siswa'=>'2Cool','alamat'=>'Jl.Tanggerang','tempat_lahir'=>'bandung','cita_cita'=>'Masuk Surga','tanggal_lahir'=>'2018-10-12','hobi'=>'Renang','foto'=>'tukul.jpg'	],

            ['nis'=>'161710086','nama_siswa'=>'Ariel','alamat'=>'Jl.Serang','tempat_lahir'=>'Bandung','cita_cita'=>'Masuk Surga','tanggal_lahir'=>'2017-11-13','hobi'=>'Futsal','foto'=>'ariel.jpg' ],

            ['nis'=>'161710087','nama_siswa'=>'Messi','alamat'=>'Jl.Tol','tempat_lahir'=>'Papua','cita_cita'=>'Masuk Surga','tanggal_lahir'=>'2016-12-14','hobi'=>'Main Bola','foto'=>'messi.jpg' ],

            ['nis'=>'161710088','nama_siswa'=>'Sule','alamat'=>'Jl.Cisewu','tempat_lahir'=>'Lombok','cita_cita'=>'Masuk Surga','tanggal_lahir'=>'2015-11-15','hobi'=>'Mandi','foto'=>'sule.jpg' ],

            ['nis'=>'161710089','nama_siswa'=>'Andre','alamat'=>'Jl.Terminal','tempat_lahir'=>'Cina','cita_cita'=>'Masuk Surga','tanggal_lahir'=>'2001-01-01','hobi'=>'Tidur','foto'=>'andre.jpg' ],

            ['nis'=>'161710090','nama_siswa'=>'Luna Maya','alamat'=>'Jl.Citumang','tempat_lahir'=>'Tasik','cita_cita'=>'Masuk Surga','tanggal_lahir'=>'2001-01-01','hobi'=>'Minum','foto'=>'luna.jpg' ],

            ['nis'=>'161710091','nama_siswa'=>'Ranti Mariana','alamat'=>'Jl.Gasibu','tempat_lahir'=>'Lembang','cita_cita'=>'Masuk Surga','tanggal_lahir'=>'2001-01-01','hobi'=>'makan','foto'=>'ranti.jpg' ],

            ['nis'=>'161710092','nama_siswa'=>'Natasya Wilona','alamat'=>'Jl.Patung Lauk','tempat_lahir'=>'Sumatra','cita_cita'=>'Masuk Surga','tanggal_lahir'=>'2001-01-01','hobi'=>'membaca','foto'=>'nata.jpg' ]
        ];
        DB::table('siswas')->insert($adit);
    }
}
