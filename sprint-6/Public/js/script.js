$(function() {

    $('.tombolTambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/Monitoring-Backend/sprint-6/Public/Mahasiswa/tambah');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Monitoring-Backend/sprint-6/Public/Mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            type: "post",
            url: "http://localhost/Monitoring-Backend/sprint-6/Public/Mahasiswa/getUbah",
            data: {
                id : id
            },
            dataType: "json",
            success: function (data) {
                // console.log(data);
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });

});