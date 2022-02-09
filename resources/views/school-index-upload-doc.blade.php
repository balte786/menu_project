@extends('layouts.main')

@section('content')
    <?php   use \App\Http\Controllers\SchoolController;

    ?>
    <link rel="stylesheet" href="{{ asset('dist-assets/css/plugins/datatables.min.css') }}" />

    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">{{ Auth::user()->school->school_name }}</h1>
            <ul>
                <li><a href="">Application for Index Numbers</a></li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form id="std_doc_form" name="std_doc_form" action="{{url('school-index-submission',[$index_id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <!--table start-->
                <div class="card text-left">

                    <div class="card-body">
                        <h4 class="card-title mb-3">Application for Index Numbers for {{@$quota_data['year']}}</h4>


                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" id="multicolumn_ordering_table" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>State</th>
                                    <th>Upload PDF Documents (2MB each) </th>
                                    <th>Upload Student Picture </th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $i =1;?>
                                @foreach($students_list as $student)

                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$student['first_name']}} {{$student['middle_name']}} {{$student['last_name']}}</td>
                                    <td>{{$student['gender']}}</td>
                                    <td><?php echo date('d-m-Y',strtotime($student['date_of_birth']));?></td>
                                    <td>{{$student['state_of_origin']}}</td>
                                    <td>


                                            <div class="row">

                                                <div class="col-md-12 form-group mb-3 input-group">

                                                    <div class="custom-file">

                                                        <input class="custom-file-input" onchange="loadName(this,<?php echo $i;?>,'1')" id="student_doc_{{$i}}" name="student_doc[{{$student['id']}}]" type="file" required />
                                                        <label class="custom-file-label" id="filecontainer_{{$i}}" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                        <input type="hidden" value="{{$student['id']}}" name="student_id[]">

                                                    </div>


                                                </div>


                                            </div>

                                    </td>


                                    <td>


                                            <div class="row">

                                                <div class="col-md-12 form-group mb-3 input-group">

                                                    <div class="custom-file">

                                                        <input class="custom-file-input" onchange="loadName(this,<?php echo $i;?>,'2')" id="student_pic_{{$i}}" name="student_pic[{{$student['id']}}]" type="file" required />
                                                        <label class="custom-file-label" id="filecontainer_img{{$i}}" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>

                                                    </div>


                                                </div>


                                            </div>

                                    </td>

                                </tr>
                                <?php $i++; ?>
                                    @endforeach

                                </tbody>

                            </table>
                            <div class="col-lg-12 col-md-12">

                                <button class="btn btn-primary btn-icon m-1" type="submit"><span class="ul-btn__text">SUBMIT INDEXING APPLICATION</span></button>
                            </div>
                        </div>
                    </div>





                </div>
                    <input type="hidden" value="{{$student['index_id']}}" name="index_id">
                    <input type="hidden" value="{{$student['school_id']}}" name="school_id">

                </form>
                <!--table end-->
            </div>



        </div>
        <!-- end of row-->

        <!-- end of main-content -->
        <!-- Footer Start -->
        <div class="flex-grow-1"></div>
        <div class="app-footer">
            <div class="row">
                <div class="col-md-9">
                    <!--<p><strong>Pharmacists Council of Nigeria</strong></p>
                    <p>The Pharmacists Council of Nigeria (PCN) is a Federal Government parastatal established by Act 91 of 1992 (Cap P17 LFN 2004) charged with the responsibility for regulating and controlling Pharmacy Education, Practice and Training in all aspects and ramifications.
                        <sunt></sunt>
                    </p>-->
                </div>
            </div>
            <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">

                <span class="flex-grow-1"></span>
                <div class="d-flex align-items-center">
                    <img class="logo" src="{{ asset('dist-assets/images/logo.png') }}" alt="">
                    <div>
                        <p class="m-0">&copy; 2021 Pharmacists Council of Nigeria</p>
                        <p class="m-0">All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    <!-- fotter end -->
    </div>
    </div>
    </div>


    <script>

        function uploadStudentFiles(studet_id,loop_id) {


            event.preventDefault();

            var myform  = $('#std_doc_form_'+loop_id);

            var formData = new FormData(myform[0]);
            $.ajax({
                url: '{{ url('/upload-students-docs-ajax') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(result)
                {
                    //alert(result.success);

                    if(result.success=='0'){

                        $('#msg_container_'+loop_id).html('<span style="color:red;">Please Check The Doc Formate OR Select File</span>');
                    }else if(result.success=='1'){

                        $('#msg_container_'+loop_id).html('<span style="color:green;">'+result.message+'</span>');
                    }
                },
                error: function(data)
                {
                    console.log(data);
                }
            });



            return false;
        }


        function uploadStudentPicture(studet_id,loop_id) {


            event.preventDefault();

            var myform  = $('#std_pic_form_'+loop_id);

            var formData = new FormData(myform[0]);
            $.ajax({
                url: '{{ url('/upload-picture-ajax') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(result)
                {
                    //alert(result.success);

                    if(result.success=='0'){

                        $('#msg_container_pic_'+loop_id).html('<span style="color:red;">Please Check The picture formate OR Select picture</span>');
                    }else if(result.success=='1'){

                        $('#msg_container_pic_'+loop_id).html('<span style="color:green;">'+result.message+'</span>');
                    }
                },
                error: function(data)
                {
                    console.log(data);
                }
            });



            return false;
        }

      function loadName(fileData,id,type){

          var file = fileData.files[0];
          var filename = file.name;

          if(type==1){
              var fileInput =
                  document.getElementById('student_doc_'+id);

              var filePath = fileInput.value;

              // Allowing file type
              var allowedExtensions =
                  /(\.pdf)$/i;

              if (!allowedExtensions.exec(filePath)) {
                  $("#filecontainer_"+id).html("<span style='color:red;'>Invalid file type</span>");
                  fileInput.value = '';
                  return false;
              }
              $("#filecontainer_"+id).text(filename);
          }else{
              var fileInput =
                  document.getElementById('student_pic_'+id);

              var filePath = fileInput.value;

              // Allowing file type
              var allowedExtensions =
                  /(\.png|\.jpg|\.jpeg|\.gif)$/i;

              if (!allowedExtensions.exec(filePath)) {
                  $("#filecontainer_img"+id).html("<span style='color:red;'>Invalid image type</span>");
                  fileInput.value = '';
                  return false;
              }
              $("#filecontainer_img"+id).text(filename);
          }

      }



    </script>
@endsection
