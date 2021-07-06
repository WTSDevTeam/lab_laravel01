
<script>
    $(document).ready(function() {
        console.log('jquery is work');

        $('#btnSave').click(function() {
            fntest();
        });

    });

    function fntest() {
        var name = $('#name').val();
        alert('hello : ' + name);
    }
</script>
