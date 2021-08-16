
    <script type="text/javascript" src="/asset/js/jquery.js"></script>
    <script type="text/javascript" src="/asset/script.js"></script>

    <script>
        $(document).ready(function() {
            console.log('jquery ทำงานแล้ว');
        });

        function hello() {
            let name = $('#name').val();
            //let name = $("[name='txtname']").val();
            let surname = $('#surname').val();
            alert(name + ' ' +surname);
        }

    </script>
