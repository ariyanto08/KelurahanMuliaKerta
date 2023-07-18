<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <style>
        /* Font Definitions */
        @font-face {
            font-family: "Cambria Math";
            panose-1: 2 4 5 3 5 4 6 3 2 4;
        }

        @font-face {
            font-family: Calibri;
            panose-1: 2 15 5 2 2 2 4 3 2 4;
        }

        @font-face {
            font-family: "Arial Black";
            panose-1: 2 11 10 4 2 1 2 2 2 4;
        }

        /* Style Definitions */
        p.MsoNormal,
        li.MsoNormal,
        div.MsoNormal {
            margin: 0in;
            font-size: 12.0pt;
            font-family: "Times New Roman", serif;
        }

        a:link,
        span.MsoHyperlink {
            color: blue;
            text-decoration: underline;
        }

        .MsoChpDefault {
            font-family: "Calibri", sans-serif;
        }

        .MsoPapDefault {
            margin-bottom: 8.0pt;
            line-height: 107%;
        }

        @page WordSection1 {
            size: 8.5in 11.0in;
            margin: 1.0in 1.0in 1.0in 1.0in;
        }

        div.WordSection1 {
            page: WordSection1;
        }
    </style>

</head>

<body lang=EN-US link=blue vlink="#954F72" style='word-wrap:break-word'>

    <div class=WordSection1>

        <p class=MsoNormal align-center style='text-align:center'><span style='position:relative;z-index:251659264'><span
                    style='left:0px;position:absolute;left:-84px;top:-4px;width:68px;height:95px'><img width=68
                        height=95 src="{{ url('public/dist/img/image001.jpg') }}"></span></span><b><span lang=IN
                    style='font-size:14.0pt'>PEMERINTAH KABUPATEN </span></b><b><span
                    style='font-size:14.0pt'>KETAPANG</span></b></p>

        <p class=MsoNormal align-center style='text-align:center'><b><span lang=IN style='font-size:14.0pt'>KECAMATAN
                    BENUA KAYONG</span></b></p>

        <p class=MsoNormal align-center style='text-align:center'><b><span lang=IN
                    style='font-size:14.0pt;font-family:"Arial Black",sans-serif'>KELURAHAN MULIA
                    KERTA</span></b></p>

        <p class=MsoNormal align-center style='text-align:center'><b><span lang=IN style='font-size:9.0pt'>Alamat :
                    Jl.Pangeran Kusuma Jaya Kec.Benua Kayong
                    Kab.Ketapang</span></b></p>

        <p class=MsoNormal align-center style='text-align:center'><b><span lang=IN style='font-size:9.0pt'>Email :
                    &nbsp;<a href="mailto:kelurahanmuliakerta@gmail.com">kelurahanmuliakerta@gmail.com</a>
                    Kode pos : 78822</span></b></p>

        <div style='border:none;border-top:double windowtext 4.5pt;padding:1.0pt 0in 0in 0in'>

            <p class=MsoNormal align-center style='text-align:center;border:none;
                        padding:0in'><b><span
                        lang=IN>&nbsp;</span></b></p>

        </div>

        <p class=MsoNormal align-center style='text-align:center'><b><u><span lang=IN>SURAT
                        KETERANGAN KEMATIAN</span></u></b></p>

        <p class=MsoNormal style='margin-left:1.30in;text-align:justify;text-indent:
                    .5in'><span lang=IN> </span>
            <span lang=IN>Nomor:</span><span lang=IN> </span><span lang=IN>P /</span><span>....</span><span lang=IN>/KMK
                A.474.3 / III / 2023 </span></p>

        <p class=MsoNormal style='text-align:justify'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal style='text-align:justify'><span lang=IN>Yang bertanda
                tangan di bawah ini Kepala Desa Kemiri, Kecamatan Jepon, Kabupaten Blora
                menerangkan bahwa :</span></p>
{{-- @foreach ($list_kematian as $kematian) --}}
        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>Nama :
                {{$kematian->penduduk->nama}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>Tempat,
                Tgl. Lahir : {{$kematian->penduduk->tempat_lh}}, {{$kematian->penduduk->tgl_lh}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>Jenis
                Kelamin : {{$kematian->penduduk->jekel}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'>Agama :
            {{$kematian->penduduk->agama}}</p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'>Status
            Perkawinan : {{$kematian->penduduk->kawin}}</p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'>Pekerjaan :
            {{$kematian->penduduk->pekerjaan}}</p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'>NIK <span lang=IN> :
                </span>{{$kematian->penduduk->nik}}<span lang=IN></span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'>Alamat <span lang=IN> :
            </span>{{$kematian->penduduk->alamat}}<span lang=IN> </span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal style='text-align:justify'>Yang bersangkutan t<span lang=IN>elah
                meninggal dunia :</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>Hari :
                {{$kematian->hari_mati}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>Tanggal :
                {{$kematian->tgl_mendu}} </span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'>Tempat Meninggal<span lang=IN> :
                {{$kematian->tempat_mati}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'>Disebabkan <span lang=IN> :
                {{$kematian->sebab}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'>Tempat Pemakaman :
            <b>{{$kematian->tempat_makam}}</b>
        </p>
{{-- @endforeach --}}
        <p class=MsoNormal style='text-align:justify'><span lang=IN>Surat ke</span>terangan<span lang=IN> ini
                berdasarkan keterangan </span>dari<span lang=IN>:</span></p>

        <p class=MsoNormal style='text-align:justify'><span lang=IN> </span><b>Pelapor</b></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>Nama </span>Lengkap<span
                lang=IN> : {{$nama_pelapor}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>NIK :
                {{$nik_pelapor}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>Tempat,
                Tgl. Lahir : {{$tmp_lh_pelapor}}, {{$tgl_lh_pelapor}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'><span lang=IN>Pekerjaan :
                {{$pekerjaan_pelapor}}</span></p>

        <p class=MsoNormal style='margin-left:.5in;text-align:justify'>Alamat :
            {{$alamat_pelapor}}</p>

        <p class=MsoNormal style='text-align:justify'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal style='text-align:justify'><span lang=IN>Hubungan pelapor
                dengan yang meninggal : <b>{{$hub_pelapor}}</b>.</span></p>

        <p class=MsoNormal style='text-align:justify'><span lang=IN>Demikian surat
                keterangan</span><span lang=IN> </span><span lang=IN>ini dibuat dapat
                dipergunakan sebagaimana mestinya.</span></p>

        <p class=MsoNormal style='text-align:justify'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal align-center style='margin-left:2.5in;text-align:center'>Ketapang<span lang=IN>, {{$tgl_sur}}
            </span></p>

        <p class=MsoNormal align-center style='margin-left:2.5in;text-align:center'>LURAH
            MULIA KERTA</p>

        <p class=MsoNormal align-center style='margin-left:2.5in;text-align:center'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal align-center style='margin-left:2.5in;text-align:center'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal align-center style='margin-left:2.5in;text-align:center'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal align-center style='margin-left:2.5in;text-align:center'><b><u>UTI
                    SUKANDA,S.AP</u></b></p>

        <p class=MsoNormal style='margin-left:.25in'><span style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoNormal><span lang=IN>&nbsp;</span></p>

    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
