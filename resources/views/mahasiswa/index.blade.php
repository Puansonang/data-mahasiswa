<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col.6">
                    <h1> DATA MAHASISWA </h1>
                </div>
                <div class="col.6">
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data Mahasiswa Baru
  </button>
     </div>
                <table class="table table-dark table-hover">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>text</th>
                        <th>Jurusan</th>
                        <th>Semester</th>
                    </tr>
                    @foreach($data_mahasiswa as $mahasiswa)
                    <tr>
                        <td>{($mahasiswa->nim)}</td>
                        <td>{($mahasiswa->nama)}</td>
                        <td>{($mahasiswa->jenis_kelamin)}</td>
                        <td>{($mahasiswa->alamat)}</td>
                        <td>{($mahasiswa->no_telp)}</td>
                        <td>{($mahasiswa->text)}</td>
                        <td>{($mahasiswa->jurusan)}</td>
                        <td>{($mahasiswa->semester)}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Modal title</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/mahasiswa/create" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">NIM</label>
              <input name="nim" type="text" class="form-control" placeholder="Isi NIM" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">Nama</label>
              <input name="nama" type="text" class="form-control" placeholder="Isi Nama Lengkap" aria-describedby="textHelp">
            </div>
            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
              <option selected>Pilih Jenis Kelamin</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
            <div class="form-floating">
              <input name="Alamat" textarea class="form-control" placeholder="Isi Alamat Lengkap" id="floatingtextarea"></textarea>
              <label for="floatingtextarea">Alamat</label>
            </div>
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">No Telepon</label>
              <input name="no_telp" type="text" class="form-control" placeholder="Isi No Telepon" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">email</label>
              <input name="email" type="email" class="form-control" placeholder="Isi email" aria-describedby="textHelp"><div class="mb-3">
                <label for="exampleInputtext1" class="form-label">Jurusan</label>
                <input name="jurusan" type="text" class="form-control" placeholder="Isi Jurusan" aria-describedby="textHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">Semester</label>
                <input name="semester" type="text" class="form-control" placeholder="Isi Semester" aria-describedby="textHelp">
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
