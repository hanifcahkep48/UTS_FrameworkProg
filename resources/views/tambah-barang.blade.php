<span class="d-block p-2 bg-dark text-white">
    <h3>Tambah Data Parfum</h3>
</span>
<div class="card border-light">
<style>
    h3 {
        font-family: arial, sans-serif;
        position: relative;
        text-align: center;
    }
    form {
        position: relative;
    }
</style>
<div class="card-body">
<div class="container">
<form action="/simpan-barang" method="POST" >
    <div class="form-group">
        <label for="nama_parfum">Nama Parfum : </label>
        <input class="form-control" type="text" name="nama_parfum" id="nama_parfum">
    </div>
    <div class="form-group">
        <label for="kategori_parfum">Kategori Parfum : </label>
        <input class="form-control" type="text" name="kategori_parfum" id="kategori_parfum">
    </div>
    <div class="form-group">
        <label for="stock_parfum">Stock Parfum : </label>
        <input class="form-control" type="number" name="stock_parfum" id="stock_parfum">
    </div>
    <input class="btn btn-success" type="submit" value="Simpan"><br>
</form>
</div>
</div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

