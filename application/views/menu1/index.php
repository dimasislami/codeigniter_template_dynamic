<div class="box">
    <div class="box-body">
      <div class="col-xs-12">
           <button class="btn btn-primary" onclick="add_admin()"><i class="fa fa-plus"></i> Tambah</button>
           <button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
            </div>
            <div class="box-body">
             <br />
                <br />
                  <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align:center">No </th>
                                <th style="text-align:center">Nama Lengkap</th>
                                <th style="text-align:center">Username</th>
                                <th style="text-align:center">Jenis Kelamin</th>
                                <th style="text-align:center">Posisi</th>
                                <th style="text-align:center;width:150px">Pembuatan Akun</th>
                                <th style="text-align:center;width:150px">Perubahan Akun</th>
                                <th style="text-align: center;width:150px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
          </div><!-- /.box-body -->
    </div>
</div>

<script>
$(document).ready(function(){
	$('#table').DataTable();
});
</script>
 