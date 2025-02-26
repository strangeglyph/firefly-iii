<?php

/**
 * firefly.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    '404_header'              => 'Firefly III tidak dapat menemukan halaman ini.',
    '404_page_does_not_exist' => 'Halaman yang anda minta tidak ada. Harap pastikan bahwa anda sudah memasukkan URL yang benar. Mungkin ada kesalahan pengetikan?',
    '404_send_error'          => 'Jika anda diarahkan ke halaman ini secara otomatis, saya mohon maaf. Kesalahan ini sudah dicatat pada file log dan saya sangat berterima kasih jika anda mengirimkan kesalahan ini kepada saya.',
    '404_github_link'         => 'Jika anda yakin halaman ini seharusnya ada, silakan buat tiket isu pada <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'whoops'                  => 'Whoops',
    'fatal_error'             => 'Ada kesalahan fatal. Silakan cek berkas log di "storage/logs" atau gunakan "docker logs -f [container]" untuk melihat apa yang terjadi.',
    'maintenance_mode'        => 'Firefly III sedang dalam mode pemeliharaan.',
    'be_right_back'           => 'Segera kembali!',
    'check_back'              => 'Firefly III tidak dapat diakses untuk pemeliharaan. Silakan cek kembali beberapa saat lagi.',
    'error_occurred'          => 'Ups! Terjadi kesalahan.',
    'error_not_recoverable'   => 'Sayangnya, kesalahan ini tidak dapat diperbaiki :(. Firefly III mengalami kerusakan. Kesalahan yang terjadi adalah:',
    'error'                   => 'Kesalahan',
    'error_location'          => 'Kesalahan ini terjadi pada file "<span style="font-family: monospace;">:file</span>" pada baris :line dengan kode :code.',
    'stacktrace'              => 'Tumpukan jejak',
    'more_info'               => 'Informasi lebih lanjut',
    'collect_info'            => 'Silakan ambil informasi lebih lanjut di direktori<code>storage/logs</code> di mana Anda dapat menemukan file log. Jika Anda menggunakan Docker, gunakan <code>docker logs -f [container]</code>.',
    'collect_info_more'       => 'Anda dapat membaca lebih lanjut dalam mengumpulkan informasi kesalahan di <a href="https://docs.firefly-iii.org/faq/other#how-do-i-enable-debug-mode">Pertanyaan yang sering diajukan</a>.',
    'github_help'             => 'Dapatkan bantuan di GitHub',
    'github_instructions'     => 'Anda sangat diperbolehkan untuk membuka isu baru <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">di GitHub</a></strong>.',
    'use_search'              => 'Gunakan pencarian!',
    'include_info'            => 'Sertakan informasi <a href=":link"> dari halaman debug ini</a>.',
    'tell_more'               => 'Beri tahu kami selain "kata Whoops!"',
    'include_logs'            => 'Sertakan log kesalahan (lihat di atas).',
    'what_did_you_do'         => 'Beritahu kami apa yang anda lakukan.',
    'offline_header'          => 'Anda sedang luring',
    'offline_unreachable'     => 'Firefly III tidak dapat dijangkau. Perangkat anda kemungkinan luring atau server sedang tidak bekerja.',
    'offline_github'          => 'Jika anda yakin perangkat anda dan server dalam keadaan daring, mohon buat tiket isu di <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',

];
