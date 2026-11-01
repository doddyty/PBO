<?php
// LAB 1 — Gaya Prosedural vs OOP

// ======================================
// 1. VERSI PROSEDURAL
// ======================================

echo "=== VERSI PROSEDURAL ===\n";

$buku = [
    [
        'judul' => 'Laskar Pelangi',
        'penulis' => 'Andrea Hirata',
        'tahun' => 2005
    ],
    [
        'judul' => 'Bumi Manusia',
        'penulis' => 'Pramoedya Ananta Toer',
        'tahun' => 1980
    ],
    [
        'judul' => 'Negeri 5 Menara',
        'penulis' => 'Ahmad Fuadi',
        'tahun' => 2009
    ]
];

foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}


// ======================================
// 2. VERSI OOP
// ======================================

echo "\n=== VERSI OOP ===\n";

class Buku
{
    // Properti
    public string $judul;
    public string $penulis;
    public int $tahun;

    // Constructor
    public function __construct(
        string $judul,
        string $penulis,
        int $tahun
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    // Method untuk menampilkan informasi buku
    public function info(): string
    {
        return "{$this->judul} - {$this->penulis} ({$this->tahun})";
    }
}

// Membuat 3 object Buku
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005);
$buku2 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980);
$buku3 = new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009);

// Menampilkan informasi buku
echo $buku1->info() . "\n";
echo $buku2->info() . "\n";
echo $buku3->info() . "\n";
?>
