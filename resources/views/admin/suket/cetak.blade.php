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
                <td align="center">Nomor : {{$suket->nosurat}}</td>
            </tr>

            <tr>
                <td height="10"></td>
            </tr>

    </table>

    {{--  isi surat  --}}

    <table>
        <tr>
            <td align="justify">   Yang bertanda tangan di bawah ini :
                </td>
        </tr>
    </table>


<table align="center"  >

    <tr>
        <td height="5"></td>
    </tr>

    <tr>
        <td>Nama</td>
        <td width="470">  : {{$suket->pejabat->nama}} </td>
    </tr>
        <tr>
            <td height="1"></td>
        </tr>
    <tr>
        <td>NIP </td>
        <td width="470">  : {{$suket->pejabat->nip}} </td>
    </tr>
        <tr>
            <td height="1"></td>
        </tr>
    <tr>
        <td>Jabatan</td>
        <td width="470">  : {{$suket->pejabat->jabatan}}</td>
    </tr>
        <tr>
            <td height="6"></td>
        </tr>

</table>


<table>
    <tr>
        <td align="justify">    Dengan ini Menerangkan Bahwa :</td>
    </tr>
</table>

<table align="center"  >
        <tr>
            <td height="5"></td>
        </tr>

        <tr>
            <td>Nama </td>
            <td width="350">  : {{$suket->nama}} </td>
        </tr>
            <tr>
                <td height="2"></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir </td>
                <td width="400">  : {{$suket->tempat}}, {{$suket->tgllhr}} </td>
            </tr>
            <tr>
                <td height="2"></td>
            </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td width="350">  : {{$suket->jk}}</td>
        </tr>
            <tr>
                <td height="2"></td>
            </tr>
        <tr>
            <td>Agama</td>
            <td width="350">  : {{$suket->agama}}</td>
        </tr>
            <tr>
                <td height="2"></td>
            </tr>
        <tr>
            <td>Pekerjaan</td>
            <td width="350">  : {{$suket->pekerjaan}}</td>
        </tr>
            <tr>
                <td height="2"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td width="350">  : {{$suket->alamat}}</td>
            </tr>
                <tr>
                    <td height="2"></td>
                </tr>
            <tr>
                <td>Keterangan</td>
                <td width="350">  : Rp. {{$suket->keterangan}}</td>
            </tr>
                <tr>
                    <td height="2"></td>
                </tr>
            <tr>
                <td>Keperluan</td>
                <td width="350">  : {{$suket->keperluan}}</td>
            </tr>


        <tr>
            <td height="9"></td>
        </tr>


    </table>

    <table>
        <tr>
        <td align="justify">    Yang bersangkutan adalah warga Kecamatan Dungingi Kota Gorontalo, Sesuai Keterangan yang bersangkutan, surat ini dipergunakan untuk {{$suket->keperluan}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <td align="justify">    Demikianlah surat keterangan ini , apabila dikemudian hari ternyata ada permasalahan, maka akan menjadi tanggung jawab yang bersangkutan sepenuhnya, dan pejabat yang menadatangani terlepas dari segala tuntutuan hukum yang berlaku.</td>
        </tr>
        <tr>
            <td height="9"></td>
        </tr>
    </table>

<br>

{{--  tandatangan  --}}

<table style="position: absolute;  margin-left: 330px;">

    <tr>
        <td align="center">Gorontalo, {{$suket->tglsurat}}</td>
    </tr>
    <tr>
        <td align="center"><b>{{$suket->pejabat->jabatan}}</b></td>
    </tr>
    <tr>
        <td height="35"></td>
    </tr>
    <tr>
        <td align="center"><u>{{$suket->pejabat->nama}}</u></td>
    </tr>

    <tr>
        <td>NIP. {{$suket->pejabat->nip}}</td>
    </tr>

</table>

{{-- tabel foto --}}

<table>
    <th></th>
    {{-- <td><img src="{{('./assets/images/kota.png')}}" style="margin-left:100px; height:100px;"></td> --}}

    <th></th>
    <td ><img src="{{('./assets/code/qr.png')}}" style="margin-left:160px; height:100px;"></td>
</table>

{{-- tabel qrcode --}}
{{-- <table>
        <th></th>
        <td ><img src="{{('./assets/code/qr.png')}}" style="height:80px;"></td>
</table> --}}




</body>

</html>

