<?php
// LAB 3 — Enkapsulasi
// Spesifikasi:
//  - Rekening(string $nomor, string $pemilik), properti PRIVATE $saldo = 0
//      setor(float $jumlah): bool   -> false jika jumlah <= 0
//      tarik(float $jumlah): bool   -> false jika jumlah > saldo
//      transfer(Rekening $tujuan, float $jumlah): bool
//      getSaldo(): float, getRiwayat(): array
//  - Siswa() dengan setNilai(int) (hanya 0–100) dan getNilai(): int

class Rekening
{
    // TODO
}

class Siswa
{
    // TODO
}

// Coba setelah selesai (hapus tanda komentar):
// $a = new Rekening('001', 'Andi');
// $a->setor(100000);
// echo $a->getSaldo();
