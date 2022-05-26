const flashData = $('.flash-data').data('flashdata');


if (flashData){
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: flashData
});
}else{

}
//tombol hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
  title: 'Apakah anda yakin?',
  text: "Data terpilih akan terhapus!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus data!'
}).then((result) => {
  if (result.isConfirmed) {
    document.location.href = href;
    
  }
});
});