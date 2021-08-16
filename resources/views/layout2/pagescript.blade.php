<script type="text/javascript" src="/asset/js/jquery.js"></script>
    <script type="text/javascript" src="/asset/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
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