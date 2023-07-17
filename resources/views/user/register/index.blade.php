<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="user/css/new.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    {{-- kalender --}}
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                {{-- form --}}
                <form action="{{url('/proses-form')}}" method="POST" enctype="multipart/form-data" class="shadow p-3 mb-5 bg-white form p-4">
                    @csrf
                    <h3 style="margin-bottom: 20px;">Registration Manager</h3>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nama" class="details">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama" class="details">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nim" class="details">NIP</label>
                            <input type="text" class="form-control input-detail" id="nik" name="nik">
                            @error('nik')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group mt-2" class="details">
                            <label for="ttl" class="details">Tempat, Tanggal lahir</label>
                            <input type="text" class="form-control" id="ttl" name="ttl">
                            @error('ttl')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="form-group mt-2">
                            <label for="nama" class="details">NIDN/NIDK/ NO.SK</label>
                            <input type="text" class="form-control" id="nidn" name="nidn">
                            @error('nidn')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="form-group mt-2">
                            <label for="status">Status:</label>
                            <select id="status" class="form-control" name="status" onchange="toggleForm()">
                                <option value="">-- Pilih Status --</option>
                                <option value="dosen">Dosen</option>
                                <option value="tendik">Tendik</option>
                            </select>
                        </div>
                        <div id="nidnForm" style="display: none;">
                            <div class="form-group">
                                <label for="nidn" >NIDN:</label>
                                <input type="text" class="form-control" id="nidn" name="nidn"/>
                                @error('nidn')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div id="skForm" style="display: none;">
                            <div class="form-group">
                                <label for="skFile" >File SK Pengangkatan:</label>
                                <input type="file" class="form-control" id="skFile" name="skFile" />
                                @error('skFile')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-1 mt-2">
                            <label class="details">Jenis Kelamin</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L">
                                    <label class="form-check-label" for="laki_laki"> Laki-laki </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P">
                                    <label class="form-check-label" for="perempuan"> Perempuan </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group details mt-2 col">
                                <label class="form-label" for="cabor">Sebagai Manager</label>
                                <select class="form-select" name="cabor" id="cabor">
                                    <option value="Universitas Negeri Gorontalo">Bulu Tangkis</option>
                                    <option value="Universitas Negeri Jakarta">Tenis Lapangan</option>
                                    <option value="Universitas Negeri Makassar">Tenis Meja</option>
                                </select>
                            </div>
                            <div class="form-group details mt-2 col">
                                <label class="form-label" for="kampus">Asal Kampus</label>
                                <select class="form-select" name="kampus" id="kampus">
                                    <option value="Universitas Negeri Gorontalo">Universitas Negeri Gorontalo</option>
                                    <option value="Universitas Negeri Jakarta">Universitas Negeri Jakarta</option>
                                    <option value="Universitas Negeri Makassar">Universitas Negeri Makassar</option>
                                    <option value="Universitas Negeri Malang">Universitas Negeri Malang</option>
                                    <option value="Universitas Negeri Manado">Universitas Negeri Manado</option>
                                    <option value="Universitas Negeri Medan">Universitas Negeri Medan</option>
                                    <option value="Universitas Negeri Padang">Universitas Negeri Padan</option>
                                    <option value="Universitas Negeri Semarang">Universitas Negeri Semarang</option>
                                    <option value="Universitas Negeri Surabaya">Universitas Negeri Surabaya</option>
                                    <option value="Universitas Negeri Yogyakarta">Universitas Negeri Yogyakarta</option>
                                    <option value="Universitas Pendidikan Ganesha">Universitas Pendidikan Ganesha</option>
                                    <option value="Universitas Pendidikan Indonesia">Universitas Pendidikan Indonesia</option>
                                    <option value="Universitas Cenderawasih">Universitas Cenderawasih</option>
                                    <option value="Universitas Sebelas Maret">Universitas Sebelas Maret</option>
                                </select>
                            </div>
                        </div>
                        
                        {{-- button --}}
                        <div class="button">
                            <input type="submit" value="Register">
                        </div>
                    </div>
                </form>
                {{-- end form --}}

            </div>
        </div>
    </div>

    <script>
        $(function() {
          $("#ttl").datepicker({
            changeMonth: true, // Menampilkan dropdown pemilihan bulan
            changeYear: true, // Menampilkan dropdown pemilihan tahun
            yearRange: "c-100:c+0", // Rentang tahun 100 tahun ke belakang hingga tahun saat ini
            dateFormat: "dd/mm/yy" // Format tanggal (sesuaikan dengan kebutuhan)
          });
        });


        function toggleForm() {
            var status = document.getElementById("status").value;
            var nidnForm = document.getElementById("nidnForm");
            var skForm = document.getElementById("skForm");

            if (status === "dosen") {
                nidnForm.style.display = "block";
                skForm.style.display = "none";
            } else if (status === "tendik") {
                nidnForm.style.display = "none";
                skForm.style.display = "block";
            } else {
                nidnForm.style.display = "none";
                skForm.style.display = "none";
            }
        }
    </script>
      
         
</body>
</html>