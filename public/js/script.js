$(function () {
  
  $('.tampilModalUbah').on('click', function () {
    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/PWEB/Tugas-crud-app-manager/public/Cars/getUbahCars',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#id_cars').val(data.id_cars);
        $('#type').val(data.type);
        $('#deskripsi').val(data.deskripsi);
        $('#stock').val(data.stock);
        $('#price').val(data.price);
        // $('#image_path').val(data.image_path);
      },
    });
  });
});
