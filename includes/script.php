<script src="assets/js/sweetalert.min.js"></script>
<script>
    swal({
  title: "No No! อย่าๆ",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("ok ทำไปทำไม!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
</script>