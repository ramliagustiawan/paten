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
    
 
 
        
        <style>
                body{
                    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                    color:#333;
                    text-align:left;
                    font-size:12px;
                    margin:0;
                }
                .container{
                    margin:0 auto;
                    margin-top:35px;
                    padding:40px;
                    width:400px;
                    height:auto;
                    background-color:#fff;
                }
                caption{
                    font-size:28px;
                    margin-bottom:15px;
                }
                table {
                    border:1px solid #333;
                    border-collapse:collapse;
                    margin:0 auto;
                    width:740px;
                }
                td, tr, th{
                    padding:12px;
                    border:1px solid #333;
                    width:15px;
                }
                th{
                    background-color: #f0f0f0;
                }
                h4, p{
                    margin:0px;
                }
            </style>
      

<caption style="font-size:18px;">
        DAFTAR STATUS LAYANAN PATEN
    </caption>

      
        <table id="display" class="table table-bordered oke">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Layanan</th>
					<th>Tanggal Pengajuan</th>
					<th>Persyaratan</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($prosessurat as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->nama}}</td>
					<td>{{$p->finish_at}}</td>
					<td>{{$p->tglajuan}}</td>
					<td>{{$p->syarat}}</td>
					<td>{{$p->ket}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
   



</body>

</html>

