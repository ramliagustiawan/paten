<?php

//home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

// iumk index
Breadcrumbs::for('admin.iumk.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Ijin Usaha Mikro Kecil', route('admin.iumk.index'));
});

// iumk create
Breadcrumbs::for('admin.iumk.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Ijin Usaha Mikro Kecil', route('admin.iumk.index'));
    $trail->push('Tambah IUMK', route('admin.iumk.create'));
});

// iumk show
Breadcrumbs::for('admin.iumk.show', function ($trail, $iumk) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Ijin Usaha Mikro Kecil', route('admin.iumk.index'));
    $trail->push('Detail IUMK', route('admin.iumk.show', $iumk));
});

// iumk edit
Breadcrumbs::for('admin.iumk.edit', function ($trail, $iumk) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Ijin Usaha Mikro Kecil', route('admin.iumk.index'));
    $trail->push('Validasi IUMK', route('admin.iumk.edit', $iumk));
});

// proses index
Breadcrumbs::for('admin.proses.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Status Surat', route('admin.proses.index'));
});
// proses show
Breadcrumbs::for('admin.proses.show', function ($trail, $proses) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Status Surat', route('admin.proses.index'));
    $trail->push('Detail Surat', route('admin.proses.show', $proses));
});
// proses edit
Breadcrumbs::for('admin.proses.edit', function ($trail, $proses) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Status Surat', route('admin.proses.index'));
    $trail->push('Detail Surat', route('admin.proses.edit', $proses));
});


// tindak lanjut index
Breadcrumbs::for('admin.tindak.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Daftar Pelaporan', route('admin.tindak.index'));
});

// tindak edit
Breadcrumbs::for('admin.tindak.edit', function ($trail, $tindak) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Daftar Pelaporan', route('admin.tindak.index'));
    $trail->push('Tindak Lanjut', route('admin.tindak.edit', $tindak));
});

// user index
Breadcrumbs::for('admin.user.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Administrator', route('admin.user.index'));
});

// suket
// suket index
Breadcrumbs::for('admin.suket.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Surat Keterangan', route('admin.suket.index'));
});

// suket create
Breadcrumbs::for('admin.suket.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Surat Keterangan', route('admin.suket.index'));
    $trail->push('Tambah Surat Keterangan', route('admin.suket.create'));
});

// suket show
Breadcrumbs::for('admin.suket.show', function ($trail, $suket) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Surat Keterangan', route('admin.suket.index'));
    $trail->push('Detail Surat Keterangan', route('admin.suket.show', $suket));
});

// suket edit
Breadcrumbs::for('admin.suket.edit', function ($trail, $suket) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Surat Keterangan', route('admin.suket.index'));
    $trail->push('Validasi suket', route('admin.suket.edit', $suket));
});