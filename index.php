<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require __DIR__ . '/vendor/autoload.php';

use Apfelbox\FileDownload\FileDownload;

$type = 'pdf';
$path = __DIR__ . dirname('/') . 'files/' . urldecode($_GET['file']) . '.' . $_GET['type'];
$output_path = __DIR__ . dirname('/') . 'output';
$download_path = __DIR__ . dirname('/') . 'output/' . urldecode($_GET['file']) . '.' . $type;

switch ($_GET['type']) {
    case 'docx':
        $output = shell_exec("soffice --headless --convert-to pdf:writer_pdf_Export --outdir $output_path $path");

        $fileDownload = FileDownload::createFromFilePath($download_path);
        $fileDownload->sendDownload(uniqid() . '.' . $type);
        break;

    default:
        throw new Exception('Type file tidak didukung !');
        break;
}
