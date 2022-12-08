



{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<script>
    var uploadField = document.getElementById("file");

uploadField.onchange = function() {
    if(this.files[0].size > 2048){
       alert("Image is too big!");
       this.value = "";
    };
};

function showDiv(divId, element)
{
    document.getElementById(divId).style.display = element.value == 'BUSINESS' ? 'block' : 'none';
}

function showDiv(divId, element)
{
    document.getElementById(divId).style.display = element.value == 'Transfer' ? 'block' : 'none';
}
</script>
