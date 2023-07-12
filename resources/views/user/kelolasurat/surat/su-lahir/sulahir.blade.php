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
            font-family: Tahoma;
            panose-1: 2 11 6 4 3 5 4 4 2 4;
        }

        @font-face {
            font-family: "Arial Black";
            panose-1: 2 11 10 4 2 1 2 2 2 4;
        }

        /* Style Definitions */
        p.MsoNormal,
        li.MsoNormal,
        div.MsoNormal {
            margin: 0cm;
            font-size: 12.0pt;
            font-family: "Times New Roman", serif;
        }

        a:link,
        span.MsoHyperlink {
            color: blue;
            text-decoration: underline;
        }

        .MsoChpDefault {
            font-size: 12.0pt;
        }

        @page WordSection1 {
            size: 21.0cm 936.1pt;
            margin: 92.15pt 70.85pt 70.9pt 92.15pt;
        }

        div.WordSection1 {
            page: WordSection1;
        }

        /* List Definitions */
        ol {
            margin-bottom: 0cm;
        }

        ul {
            margin-bottom: 0cm;
        }
    </style>

</head>

<body lang=EN-ID link=blue vlink=purple style='word-wrap:break-word'>

    <div class=WordSection1>

        <p class=MsoNormal align-center style='text-align:center'><span style='position:relative;z-index:251658240'><span
                    style='left:0px;position:absolute;left:-84px;top:-4px;width:68px;height:95px'><img width=68 height=95
                        src="{{ url('public/dist/img/image001.jpg') }}"></span></span><b><span lang=IN
                    style='font-size:14.0pt'>PEMERINTAH
                    KABUPATEN </span></b><b><span lang=EN-US style='font-size:14.0pt'>KETAPANG</span></b></p>

        <p class=MsoNormal align-center style='text-align:center'><b><span lang=IN style='font-size:14.0pt'>KECAMATAN
                    BENUA KAYONG</span></b></p>

        <p class=MsoNormal align-center style='text-align:center'><b><span lang=IN
                    style='font-size:14.0pt;font-family:"Arial Black",sans-serif'>KELURAHAN MULIA
                    KERTA</span></b></p>

        <p class=MsoNormal align-center style='text-align:center'><b><span lang=IN style='font-size:9.0pt'>Alamat :
                    Jl.Pangeran Kusuma Jaya Kec.Benua Kayong
                    Kab.Ketapang</span></b></p>

        <p class=MsoNormal align-center style='text-align:center'><b><span lang=IN style='font-size:9.0pt'>Email :
                    &nbsp;</span></b><span lang=IN><a href="mailto:kelurahanmuliakerta@gmail.com"><b><span
                            style='font-size:9.0pt'>kelurahanmuliakerta@gmail.com</span></b></a></span><b><span lang=IN
                    style='font-size:9.0pt'> Kode pos : 78822</span></b></p>

        <div style='border:none;border-top:solid windowtext 3.0pt;padding:1.0pt 0cm 0cm 0cm'>
            <p class=MsoNormal align-center style='text-align:center;border:none;padding:0cm'><b><span
                        lang=IN>&nbsp;</span></b></p>
        </div>

        <p class=MsoNormal align-center style='text-align:center'><b><u><span lang=IN>SURAT
                        KETERANGAN </span></u></b><b><u><span lang=EN-US>LAHIR</span></u></b></p>

        <p class=MsoNormal style='margin-left:1.30in;text-align:justify;text-indent:
                        .5in'><span
                lang=IN> </span>
            <span lang=IN>Nomor:</span><span lang=IN> </span><span lang=IN>P /</span><span>....</span><span lang=IN>/KMK
                A.474.3 / III / 2023 </span>
        </p>

        <p class=MsoNormal style='text-align:justify'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal style='text-align:justify;line-height:150%'><span lang=EN-US>Kepala Kelurahan Mulia Kerta
                Kecamatan Benua Kayong Kabupaten Ketapang,
                menerangkan</span><span lang=IN> bahwa :</span></p>

@foreach ($list_kelahiran as $kelahiran)
        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=IN>Nama :
            </span>{{ $kelahiran->keluarga->penduduk->nama }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>NIK
            </span><span lang=IN> : </span>{{ $kelahiran->keluarga->nik }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=IN>Tempat,
                Tgl. Lahir : </span>{{ $kelahiran->keluarga->penduduk->tempat_lh }},{{ $kelahiran->keluarga->penduduk->tgl_lh }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=IN>Jenis
                Kelamin : </span>{{ $kelahiran->keluarga->penduduk->jekel }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Kewarganegaraan
                :</span>{{ $kelahiran->keluarga->penduduk->kewarganegaraan }}
        </p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Agama
                : </span>{{ $kelahiran->keluarga->penduduk->agama }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Pekerjaan
                : </span>{{ $kelahiran->keluarga->penduduk->pekerjaan }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Alamat </span><span lang=IN> :
            </span>{{ $kelahiran->keluarga->penduduk->alamat }}</p>
@endforeach

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal style='text-align:justify;line-height:150%'><span lang=EN-US>Kawin Sah dengan seorang
                perempuan yang bernama</span><span lang=IN>:</span></p>

@foreach ($list_anggota->where('hubungan', 'Istri') as $anggota)
        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=IN>Nama :
            </span>{{ $anggota->penduduk->nama }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>NIK
            </span><span lang=IN> : </span>{{ $anggota->nik }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=IN>Tempat,
                Tgl. Lahir : </span>{{ $anggota->penduduk->tempat_lh }},{{ $anggota->penduduk->tgl_lh }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=IN>Jenis
                Kelamin : </span>{{ $anggota->penduduk->jekel }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Kewarganegaraan
                :</span>{{ $anggota->penduduk->kewarganegaraan }}
        </p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Agama
                : </span>{{ $anggota->penduduk->agama }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Pekerjaan
                : </span>{{ $anggota->penduduk->pekerjaan }}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Alamat </span><span lang=IN> :
            </span>{{ $anggota->penduduk->alamat }}</p>
@endforeach
        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal style='text-align:justify;line-height:150%'><span lang=EN-US>Telah Mempunyai Seorang
                Anak</span><span lang=IN>:</span></p>

@foreach ($list_kelahiran as $kelahiran)
        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Jenis Kelamin </span><span
                lang=IN> : </span>{{$kelahiran->jekel}}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=IN>Tempat,
                Tgl. Lahir : </span>{{$kelahiran->tempat_lh}},{{$kelahiran->tgl_lh}}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Hari/Jam</span><span lang=IN>
                : </span><span lang=EN-US> - </span></p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Yang Diberi
                Nama : </span>{{$kelahiran->nama}}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Anak Yang Ke : </span>{{$kelahiran->anakke}}</p>

        <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-US>Alamat : </span>{{$kelahiran->alamat}}</p>
@endforeach
        <p class=MsoNormal style='text-align:justify;line-height:150%'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal style='text-align:justify;line-height:150%'><span lang=IN>Demikian
                surat keterangan</span><span lang=IN> </span><span lang=IN>ini dibuat dapat
                dipergunakan sebagaimana mestinya.</span></p>

        <p class=MsoNormal style='text-align:justify;line-height:150%'><span lang=IN>&nbsp;</span></p>

        <p class=MsoNormal align-center style='margin-left:180.0pt;text-align:center;line-height:150%'><span
                lang=EN-US>Ketapang</span><span lang=IN>, {{$tanggalsurat}} </span></p>

        <p class=MsoNormal align-center style='margin-left:180.0pt;text-align:center;line-height:150%'><span
                lang=EN-US>LURAH MULIA KERTA</span></p>

        <p class=MsoNormal align-center style='margin-left:180.0pt;text-align:center;line-height:150%'><span
                lang=IN>&nbsp;</span></p>

        <p class=MsoNormal align-center style='margin-left:180.0pt;text-align:center;line-height:150%'><span
                lang=IN>&nbsp;</span></p>

        <p class=MsoNormal align-center style='margin-left:180.0pt;text-align:center;line-height:150%'><span
                lang=IN>&nbsp;</span></p>

        <p class=MsoNormal align-center style='margin-left:180.0pt;text-align:center'><b><u><span lang=EN-US>UTI
                        SUKANDA,S.AP</span></u></b></p>

        <p class=MsoNormal style='margin-left:234.0pt;text-indent:36.0pt'><span lang=EN-US
                style='font-size:10.0pt'>Penata Muda Tk.l</span></p>

        <p class=MsoNormal style='margin-left:216.0pt;text-indent:36.0pt'><span lang=EN-US
                style='font-size:10.0pt'>NIP.1967028 199808 1 001</span></p>

        <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt'>&nbsp;</span></p>

        <p class=MsoNormal align-center style='margin-left:180.0pt;text-align:center'><b><u><span lang=IN><span
                            style='text-decoration:none'>&nbsp;</span></span></u></b></p>

    </div>
    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
