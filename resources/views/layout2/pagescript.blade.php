<script type="text/javascript" src="/asset/js/jquery.js"></script>
<script type="text/javascript" src="/asset/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

@yield('page-script')

<script>
    $(document).ready(function() {
        console.log('jquery is work');
    });

    function hello() {
        let name = $('#name').val();
        //let name = $("[name='txtname']").val();
        let surname = $('#surname').val();
        alert(name + ' ' +surname);
    }

</script>
