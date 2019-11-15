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
    $trail->push('Tindak Lanjut', route('admin.tindak.index'));
});

// user index
Breadcrumbs::for('admin.user.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Administrator', route('admin.user.index'));
});
