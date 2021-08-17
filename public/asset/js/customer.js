
$(document).ready(function() {

    initEvent();
  
});

  function initEvent() {
    
    $('#code').focus(function() {
      console.log('code focus');
    });
  
    $('#code').blur(function() {
      console.log('code blur');
    });

    $('#add').click(function() {
      add();
    });

    $('#Form1').submit(function() {
        console.log('on submit...');
        window.scrollTo(0, 0);
        fn_form_validate();
    });

    fn_init_datatable();

  }

  function fn_init_datatable() {
    
    $('#myTable').DataTable({
      ajax: "/kook/customer/listall",
      "paging":  true,
      "ordering": true,
      "info":     false,
      "searching": true,
      "responsive": false,
      dom: "fti<'row'<'col-md-12 dt-footer'lp>>",
      "columnDefs": [ 
              {"targets": 0,"orderable": true},
              {"targets": 1,"orderable": true},
              {"targets": 2,"orderable": true},
              {"targets": 3,"orderable": true},
              {"targets": 4,"orderable": false},
              {"targets": 5,"orderable": false},
          ],
          "order": [[ 2, "asc" ]],
    });
  }

  function fn_form_validate() {
    let code = $('#code').val();
    let name = $('#name').val();

    error_msg = '';
    if (code == '') {
      error_msg = 'กรุณาใส่รหัสลูกค้า';
    } else if (name == '') {
      error_msg = 'กรุณาใส่ชื่อลูกค้า';
    }

    if (error_msg != '') {

      event.preventDefault();
      swal({
        title: "",
        text: error_msg,
        icon: "error",
      });
    }

  }

  function add() {

    $('#edit_mode').val('insert');

    fn_blankform();
    $('#exampleModalLabel').text('เพิ่มข้อมูลลูกค้า');
    $('#exampleModal').modal('show');

  }
  
  function edit(id) {


    $('#edit_mode').val('edit');
    $('#edit_id').val(id);

    $('#load').css('visibility', 'show');
    $('#save').hide();

    fn_blankform();

    $('#exampleModalLabel').text('แก้ไขข้อมูลลูกค้า');
    $('#exampleModal').modal('show');

    $.ajax({
      type: "GET",
      dataType: 'json',
      url: "/kook/customer/get/" + id,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(callback) {
        
        // $('#load').hide();
        $('#load').css('visibility', 'hidden');

        console.log(callback.data.customer_code);
        console.log(callback.data.customer_name);
        
        $('#code').val(callback.data.customer_code);
        $('#name').val(callback.data.customer_name);
        $('#address').val(callback.data.address);

        $('#save').show();

  
      },
    });


  }

  function confirm_deldata(id) {

    swal({
      title: "Are you sure",
      text: "ยืนยันการลบข้อมูล ?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          //swal("Poof! Your imaginary file has been deleted!", {icon: "success",});
          deldata(id);
      } else {
        //swal("Your imaginary file is safe!");
      }
    });

  }

  function deldata(id) {
    
    $.ajax({
      type: "GET",
      dataType: 'json',
      url: "/kook/customer/delete/" + id,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(callback) {
        console.log(callback);
        //location.reload();
        var table = $('#myTable').DataTable();
        table.ajax.reload();

      },
    });

  }
  
  function fn_blankform() {
    $('#code').val('');
    $('#name').val('');
    $('#address').val('');
  }
