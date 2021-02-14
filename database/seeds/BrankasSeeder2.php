<?php

use Illuminate\Database\Seeder;

class BrankasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brankas = [];

        $brankas[] = [
            'judul' => 'CAPEX_CAPEX DEPLOYER FTTH_2017',
            'no_dokumen' =>'34/JR/2017',
            'tahun' =>'2017',
            'brankas' =>'Brankas L3D',
            'rincian' =>'Berkas Laporan',
            'no_po' =>'4500343410',
            'no_spk' =>'K.Tel.001840/HK.810/R5W-5H510000/2',
            'lokasi' =>'-',
            'keterangan' =>'-'
        ];

        $brankas[] = [
            'judul' => 'CAPEX_CAPEX HEM_2017',
            'no_dokumen' =>'35/JR/2017',
            'tahun' =>'2017',
            'brankas' =>'Brankas L3D',
            'rincian' =>'Berkas Laporan',
            'no_po' =>'4500344546',
            'no_spk' =>'K.Tel.002250/HK.810/R5W-5H510000/2017',
            'lokasi' =>'-',
            'keterangan' =>'-'
        ];

        $brankas[] = [
            'judul' => 'CAPEX_CAPEX QE RELOKASI_2017',
            'no_dokumen' =>'51/JR/2017',
            'tahun' =>'2017',
            'brankas' =>'Brankas L3D',
            'rincian' =>'Berkas Laporan',
            'no_po' =>'4500346969',
            'no_spk' =>'K.Tel.003195/HK.810/R5W-5H510000/2',
            'lokasi' =>'-',
            'keterangan' =>'-'
        ];

        $brankas[] = [
            'judul' => 'CAPEX_CAPEX QE RELOKASI_2017',
            'no_dokumen' =>'52/JR/2017',
            'tahun' =>'2017',
            'brankas' =>'Brankas L3D',
            'rincian' =>'Berkas Laporan',
            'no_po' =>'4500346973',
            'no_spk' =>'K.Tel.003198/HK.810/R5W-5H510000/2',
            'lokasi' =>'-',
            'keterangan' =>'-'
        ];

        $brankas[] = [
            'judul' => 'CAPEX_CAPEX QE RECOVERY_2017',
            'no_dokumen' =>'53/JR/2017',
            'tahun' =>'2017',
            'brankas' =>'Brankas L3D',
            'rincian' =>'Berkas Laporan',
            'no_po' =>'4500348101',
            'no_spk' =>'K.Tel.003787/HK.810/R5W-5H510000/2',
            'lokasi' =>'-',
            'keterangan' =>'-'
        ];

        DB::table('brankas')->insert($brankas);
        $this->command->info("Data Dummy Brankas berhasil diinsert");
    }
}
