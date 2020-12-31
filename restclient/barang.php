<h1 class="h3 mb-4 text-gray-800 text-center text-primary"><strong>Barang</strong></h1>
<br><br><br>
<button type="button" class="btn btn-info btn-lg create" data-toggle="modal" data-target="#exampleModalCenterBrg"><i class="fa fa-table mr-3"></i>Tambah Data</button>
<br>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">id_paket</th>
            <th scope="col">item</th>
            <th scope="col">syarat</th>
            <th scope="col">harga</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody id="table_barang">

    </tbody>
</table>
<div class="modal fade" id="exampleModalCenterBrg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formbarang">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Pilih Paket</label>
                        <select class="form-control inputPkt" name="id_Pkt">

                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Item</label>
                        <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Syarat</label>
                        <input type="text" class="form-control" name="createAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga</label>
                        <input type="text" class="form-control" name="createAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addBrg" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterBrg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formbarang">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Pilih Paket</label>
                        <select class="form-control inputUpPkt" name="update_id_Pkt">

                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Item</label>
                        <input type="text" class="form-control" name="updateNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Syarat</label>
                        <input type="text" class="form-control" name="updateAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga</label>
                        <input type="text" class="form-control" name="updateAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updateBrg" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>