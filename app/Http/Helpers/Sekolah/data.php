<?php
if (! function_exists('sis_namahari')) {
    function sis_namahari()
    {
        $result = ['senin','selasa','rabu','kamis','jumat','sabtu'];
        return $result;
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