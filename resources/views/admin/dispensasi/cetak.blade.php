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
                    <td height="15"></td>
                </tr>
            <tr>
                <td align="center" style="line-height: 1.6; font-weight: bold; font-size: 23px;"><b><u>{{$title}}<u></b></td>
            </tr>

            <tr>
                <td align="center">Nomor : {{$dispensasi->nosurat}}</td>
            </tr>

            <tr>
                <td height="30"></td>
            </tr>

    </table>

    {{--  isi surat  --}}

    <table>
        <tr>
            <td align="justify">    Berdasarkan Peraturan Pemerintah Nomor : 09 Tahun 1975 Pasal 3 Ayat 1, Bahwa Pelaksanaan akad Nikah bagi calon suami 10 hari sejak Pelaksanaan Pencatatan Nikah, mengingat bahwa persyaratan saudara tidak memenuhi syarat yakni kurang dari 10 hari dimaksud, maka berdasarkan permohonan Dispensasi kepala KUA Kecamatan Dungingi, dengan ini saya Camat Dungingi memberikan Dispensasi Kepada :</td>
        </tr>
    </table>




<table align="center"  >

    <tr>
        <td height="20"></td>
    </tr>

    <tr>
        <td style="font-size: 20px;"><strong>Nama</strong></td>
        <td width="400" style="font-size: 20px;">  : <strong> {{$dispensasi->nama}}   (Calon Suami) </strong></td>
       
    </tr>
        <tr>
            <td height="7"></td>
        </tr>
    <tr>
        <td style="font-size: 20px;"><strong>Nama</strong></td>
        <td width="400"style="font-size: 20px;">  : <strong> {{$dispensasi->namacln}}   (Calon Istri) </strong></td>
    </tr>
        <tr>
            <td height="20"></td>
        </tr>
   
</table>


<table>
    <tr>
    <td align="justify">    Untuk Melaksanakan Pernikahan (Akad Nikah) Pada Hari {{$dispensasi->waktuakad}} di {{$dispensasi->tempatakad}} </td>
    </tr>
</table>


    <table>
        <tr>
            <td align="justify">    Demikian Dispensasi Nikah ini dibuat dan diberikan untuk Pengurusan Nikah di Kantor KUA Dungingi.</td>
        </tr>
        <tr>
            <td height="40"></td>
        </tr>
    </table>

 

<br>

{{--  tandatangan  --}}

<table style="position: absolute;  margin-left: 330px;">

    <tr>
        <td align="center">Gorontalo, {{$dispensasi->tglsurat}}</td>
    </tr>
    <tr>
        <td align="center"><b>{{$dispensasi->pejabat->jabatan}}</b></td>
    </tr>
    <tr>
        <td align="center"><b>{{$dispensasi->pejabat->ketjabatan}}</b></td>
    </tr>
    <tr>
        <td height="35"></td>
    </tr>
    <tr>
        <td align="center"><u>{{$dispensasi->pejabat->nama}}</u></td>
    </tr>

    <tr>
        <td>NIP. {{$dispensasi->pejabat->nip}}</td>
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

<table >

        <tr>
            <td height="95"></td>
        </tr>
    
        <tr>
            <td><u>Tembusan Kepada Yth :</u></td>          
        </tr>         
        <tr>
            <td><i>Kepala KUA Kecamatan Dungingi</i></td>
            
        </tr>
            <tr>
                <td height="25"></td>
            </tr>
       
    </table>


</body>

</html>

