<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Action</th>
    </tr>
    <?php
    include "koneksi.php";
    $hasil = mysqli_query($kon, "select * from mahasiswa order by nim asc");
    $no = 0;
    while($data = mysqli_fetch_array($hasil)):
        $no++;
    ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $data['nim'];?></td>
        <td><?php echo $data['nama'];?></td>
        <td><?php echo $data['prodi'];?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td>
            <button id="<?php echo $data['nim']; ?>" class="update">Edit</button>
            <button id="<?php echo $data['nim']; ?>" class="delete">Hapus</button>
        </td>
    </tr>
    <?php endwhile;?>
</table>

<script type='text/javascript'>
function reset(){
    document.getElementById("idnim").innerHTML = '';
    document.getElementById("idnama").innerHTML = '';
}

$(document).on('click', '.delete', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "delete.php",
        data: {id:id},
        success: function() {
            $('#tampil_data').load("read.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});

$(document).on('click', '.update', function(){
    var id = $(this).attr('id');
    var nama=$("#idnama").val();
    var prodi=$("#idprodi").val();
    var angkatan=$("#idangkatan").val();
    $.ajax({
        type    : 'POST',
        url :"update.php",
        data: {
            id:id,
            nama:nama,
            prodi:prodi,
            angkatan:angkatan
        },
        cache   : false,
        success : function(data){
            reset();
            $('#idnim').val(id);
            $('#tampil_data').load("read.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
</script>