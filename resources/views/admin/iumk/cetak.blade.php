<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>
        Laporan
    </title>

</head>

<body>
    {{--  kop surat  --}}
<img src="{{('./assets/images/kota.png')}}" style="position: absolute; width: 75px; height: auto; margin-left: 40px;" alt="Kota Gorontalo">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold; font-size: 23px;">
                    PEMERINTAH KOTA GORONTALO
                </span>

                <br>
                <span style="line-height: 1.6; font-weight: bold; font-size: 18px;">
                    KECAMATAN DUNGINGI
                </span>
                <br>
                <span style="line-height: 1.6; font-weight: bold; font-size: 13px;">
                   <i> Jalan Apel II Telp (0435)8526697 Email: dungingioffice@gmail.com</i>
                </span>

            </td>
        </tr>
    </table>
    <hr class="line-title">

    {{--  nomor surat  --}}

    <table align="center">
            <tr>
                <td align="center" style="line-height: 1.6; font-weight: bold; font-size: 23px;"><b><u>{{$title}}<u></b></td>
            </tr>

            <tr>
                <td align="center">Nomor : {{$iumk->nosurat}}</td>
            </tr>

            <tr>
                <td height="10"></td>
            </tr>

    </table>

    {{--  isi surat  --}}

    <table>
        <tr>
            <td align="justify">    Berdasarkan Undang-Undang Nomor 20 Tahun 2008 tentang Usaha Mikro Kecil dan Menengah ; Peraturan Presiden Nomor 98 Tahun 2014  ; Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil ; Peraturan Walikota Gorontalo Nomor 11 Tahun 2015 Tentang Pendelegasian Kewenangan Pelaksanaan Pemberian izin usaha Mikro dan Kecil (IUMK) kepada Camat Se-Kota Gorontalo, Bersama ini menyatakan  dan memberikan izin kepada :</td>
        </tr>
    </table>


    

<table align="center"  >
       
    <tr>
        <td height="1"></td>
    </tr>

    <tr>
        <td>Nama</td>
        <td width="400">  : {{$iumk->nama}} </td>
    </tr>
        <tr>
            <td height="1"></td>
        </tr>
    <tr>
        <td>NIK</td>
        <td width="400">  : {{$iumk->nik}} </td>
    </tr>
        <tr>
            <td height="1"></td>
        </tr>
    <tr>
        <td>Alamat</td>
        <td width="400">  : {{$iumk->alamat}}</td>
    </tr>
        <tr>
            <td height="1"></td>
        </tr>
    <tr>
        <td>No. Telpon</td>
        <td width="400">  : {{$iumk->kontak}}</td>
    </tr>
    <tr>
            <td height="1"></td>
        </tr>

     
</table>


<table>
    <tr>
        <td align="justify">    Untuk mendirikan usaha Mikro dan Kecil yang mencakup perizinan dasar berupa: Menempati lokasi/domisili, melakukan kegiatan usaha baik peroduksi maupun penjualan barang dan jasa dengan identitas:</td>
    </tr>
</table>

<table align="center"  >
        <tr>
            <td height="1"></td>
        </tr>

        <tr>
            <td>Nama Usaha</td>
            <td width="350">  : {{$iumk->naper}} </td>
        </tr>
            <tr>
                <td height="1"></td>
            </tr>
        <tr>
            <td>Bentuk Usaha</td>
            <td width="350">  : {{$iumk->bentuk}}</td>
        </tr>
            <tr>
                <td height="1"></td>
            </tr>
        <tr>
            <td>NPWP</td>
            <td width="350">  : {{$iumk->npwp}}</td>
        </tr>
            <tr>
                <td height="1"></td>
            </tr>
        <tr>
            <td>Kegiatan Usaha</td>
            <td width="350">  : {{$iumk->giatusaha}}</td>
        </tr>
            <tr>
                <td height="1"></td>
            </tr>
        <tr>
            <td>Sarana Usaha</td>
            <td width="350">  : {{$iumk->statusbangunan}}</td>
        </tr>
            <tr>
                <td height="1"></td>
            </tr>
            <tr>
                <td>Alamat Usaha</td>
                <td width="350">  : {{$iumk->alamatusaha}}</td>
            </tr>
                <tr>
                    <td height="1"></td>
                </tr>
            <tr>
                <td>Jumlah Modal Usaha</td>
                <td width="350">  : Rp. {{$iumk->modal}}</td>
            </tr>
                <tr>
                    <td height="1"></td>
                </tr>
            <tr>
                <td>Nomor Pendaftaran</td>
                <td width="350">  : </td>
            </tr>


        <tr>
            <td height="1"></td>
        </tr>


    </table>

    <table>
        <tr>
            <td align="justify">    Perizinan dasar usaha ini diberikan dengan ketentuan tidak dapat dipindahtangankan, wajib membayar pajak dan pungutan pemerintah, mematuhi peraturan perundang-undangan lain yang berlaku, menjaga kebersihan lingkungan dan mengembalikan perizinan ini apabila berpindah tempat usaha, perubahan skala usaha, serta memperbaharuinya apabila terjadi perubahan pada penanggungjawab perusahaan.</td>
        </tr>
    </table>

    <table>
        <tr>
            <td align="justify">    Demikian perizinan ini diberikan untuk dipergunakan sebagaimana mestinya.</td>
        </tr>
    </table>

<br>

{{--  tandatangan  --}}

<table style="position: absolute;  margin-left: 330px;">

    <tr>
        <td align="center">Gorontalo, {{$iumk->tglsurat}}</td>
    </tr>
    <tr>
        <td align="center"><b>Camat Dungingi</b></td>
    </tr>
    <tr>
        <td height="35"></td>
    </tr>
    <tr>
        <td align="center"><u>{{$iumk->pejabat}}</u></td>
    </tr>

    <tr>
        <td>NIP. {{$iumk->nip}}</td>
    </tr>

</table>

<table>
        <th></th>
        <td ><img src="{{('./assets/code/qr.png')}}" style="margin-left:125px; height:100px;"></td>
</table>



</body>

</html>

