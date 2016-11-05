<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getDirectory')) {
    function getDirectory()
    {
        return "./complemento/acervo/";
    }
}

if (!function_exists('getExcelUploadDirectory')) {
    function getUploadConfig($fileName = '')
    {
        return array(
            'allowed_types' => 'pdf',
            'max_size' => 10000000000,
            'upload_path' => getDirectory(),
            'file_name' => $fileName
        );
    }
}
