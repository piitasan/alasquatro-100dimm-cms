<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Media extends Controller
{
    public function heroVideo(string $fileName)
    {
        $safeName = basename($fileName);
        $path = WRITEPATH . 'uploads/video/' . $safeName;

        if (!is_file($path)) {
            return $this->response->setStatusCode(404);
        }

        $mime = mime_content_type($path) ?: 'application/octet-stream';
        $size = filesize($path);

        $this->response->setHeader('Content-Type', $mime);
        $this->response->setHeader('Content-Length', (string) $size);
        $this->response->setHeader('Accept-Ranges', 'bytes');

        $rangeHeader = $this->request->getHeaderLine('Range');
        if ($rangeHeader) {
            return $this->serveRange($path, $size, $rangeHeader, $mime);
        }

        return $this->response->setBody(file_get_contents($path));
    }

    private function serveRange(string $path, int $size, string $rangeHeader, string $mime)
    {
        if (!preg_match('/bytes=(\d+)-(\d*)/', $rangeHeader, $matches)) {
            return $this->response->setStatusCode(416);
        }

        $start = (int) $matches[1];
        $end = $matches[2] !== '' ? (int) $matches[2] : $size - 1;

        if ($start > $end || $end >= $size) {
            return $this->response->setStatusCode(416);
        }

        $length = $end - $start + 1;
        $handle = fopen($path, 'rb');
        if ($handle === false) {
            return $this->response->setStatusCode(500);
        }

        fseek($handle, $start);
        $data = fread($handle, $length);
        fclose($handle);

        return $this->response
            ->setStatusCode(206)
            ->setHeader('Content-Type', $mime)
            ->setHeader('Content-Length', (string) $length)
            ->setHeader('Content-Range', 'bytes ' . $start . '-' . $end . '/' . $size)
            ->setBody($data);
    }
}
