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
// user create
Breadcrumbs::for('admin.user.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Manajemen User', route('admin.user.index'));
    $trail->push('Tambah user', route('admin.user.create'));
});

//user user rolper
Breadcrumbs::for('admin.user.role_permission', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Manajemen User', route('admin.user.index'));
    $trail->push('Role Permission', route('admin.user.role_permission'));
});

//user user roles
Breadcrumbs::for('admin.user.roles', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Manajemen User', route('admin.user.index'));
    $trail->push('Edit Role Akses', route('admin.user.roles'));
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

// nonijin
// nonijin index
Breadcrumbs::for('admin.nonijin.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Non Perijinan', route('admin.nonijin.index'));
});


// ijin index
Breadcrumbs::for('admin.ijin.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Perijinan', route('admin.ijin.index'));
});


// syarat index
Breadcrumbs::for('admin.syarat.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Detail Layanan', route('admin.syarat.index'));
});

// pejabat index
Breadcrumbs::for('admin.pejabat.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Pejabat', route('admin.pejabat.index'));
});

// role index
Breadcrumbs::for('admin.role.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Hak Akses', route('admin.role.index'));
});

// role permissions
Breadcrumbs::for('admin.permission.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Hak Akses', route('admin.permission.index'));
});

// dispensasi index
Breadcrumbs::for('admin.dispensasi.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Dispensasi Nikah', route('admin.dispensasi.index'));
});

// dispensasi show
Breadcrumbs::for('admin.dispensasi.show', function ($trail, $dispensasi) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Dispensasi Nikah', route('admin.dispensasi.index'));
    $trail->push('Detail Dispensasi Nikah', route('admin.dispensasi.show', $dispensasi));
});

// dispensasi edit
Breadcrumbs::for('admin.dispensasi.edit', function ($trail, $dispensasi) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Dispensasi Nikah', route('admin.dispensasi.index'));
    $trail->push('Validasi Dispensasi Nikah', route('admin.dispensasi.edit', $dispensasi));
});

// dispensasi create
Breadcrumbs::for('admin.dispensasi.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Dispensasi Nikah', route('admin.dispensasi.index'));
    $trail->push('Tambah Dispensasi Nikah', route('admin.dispensasi.create'));
});

// daftar
Breadcrumbs::for('admin.daftar.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Daftar Permohonan', route('admin.daftar.index'));
});
// daftar show
Breadcrumbs::for('admin.daftar.show', function ($trail, $model) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Permohonan Layanan', route('admin.daftar.index'));
    $trail->push('Detail Permohonan', route('admin.daftar.show', $model));
});

// suratin index
Breadcrumbs::for('admin.suratin.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Register Surat', route('admin.suratin.index'));
});
// create
Breadcrumbs::for('admin.suratin.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Register Surat', route('admin.suratin.index'));
    $trail->push('Registrasi Surat Masuk', route('admin.suratin.create'));
});

// edit
Breadcrumbs::for('admin.suratin.edit', function ($trail, $suratmasuk) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Register Surat', route('admin.suratin.index'));
    $trail->push('Registrasi Surat Masuk', route('admin.suratin.edit', $suratmasuk));
});

// suratin show
Breadcrumbs::for('admin.suratin.show', function ($trail, $suratmasuk) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Register Surat', route('admin.suratin.index'));
    $trail->push('Detail Surat Masuk', route('admin.suratin.show', $suratmasuk));
});
