<?php
if (! function_exists('sis_namahari')) {
    function sis_namahari()
    {
        $result = ['senin','selasa','rabu','kamis','jumat','sabtu'];
        return $result;
    }
}
if (! function_exists('sis_cekarsip')) {
    function sis_cekarsip($arsip)
    {
        $arsip = (!is_null($arsip)) ? "<span class='text-success'>sudah ada</span>" : NULL ;
        return $arsip;
    }
}
if (! function_exists('sis_akseskhusus')) {
    function sis_akseskhusus()
    {
        $result = ['tidak ada','kesiswaan','kepegawaian','kurikulum','aset','perpustakaan','administrasi'];
        sort($result);
        return $result;
    }
}
if (! function_exists('sis_arsipdokumen')) {
    function sis_arsipdokumen()
    {
        $dokumen    = [
            'ktp' => 'kartu tanda penduduk',
            'kk' => 'kartu keluarga',
            'sk_awal' => 'surat keputusan awal',
            'npwp' => 'nomor pokok wajib pajak',
            'karis' => 'karis',
            'skgb' => 'skgb',
            'sd' => 'ijasah sd',
            'smp' => 'ijasah smp',
            'sma' => 'ijasah sma',
            's1' => 'ijasah s1',
            's2' => 'ijasah s2',
            's3' => 'ijasah s3',
            'sertifikat' => 'sertifikat',
            'lainnya' => 'lainnya'
        ];
        return $dokumen;
    }
}