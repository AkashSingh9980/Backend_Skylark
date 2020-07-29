<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" http-equiv="encoding" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Packages | Skylark</title>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-confirmation2/dist/bootstrap-confirmation.min.js"></script>
        
        
        <style>
          @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
          @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
        </style>
    
        <link rel="stylesheet" href="../css/dashboard.css">
       
      </head>
      <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <a class="navbar-brand" href="dashboard">Skylark Dashboard</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="/dashboard">
                  <i class="fa fa-fw fa-dashboard"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-wrench"></i>
                  <span class="nav-link-text">Modules</span>
                </a>
                <ul class="sidenav-second-level collapse show" id="collapseComponents">
                  <li>
                    <div class="p-3 ml-4 bg-secondary text-white"> Packages</div>
                    {{-- <a class="text-white">Packages</a> --}}
                  </li>
                  <li>
                    <a href="cards.html">Products</a>
                  </li>
                  <li>
                    <a href="">Services</a>
                  </li>
                </ul>
              </li>
             
            </ul>
            <ul class="navbar-nav sidenav-toggler">
              <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                  <i class="fa fa-fw fa-angle-left"></i>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                  <a class="dropdown-item" href="logout">
                    <span>
                      <strong>
                       Logout
                      </strong>
                    </span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        
        <div class="content-wrapper">
                    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Packages</li>
            </ol>
            
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-database"></i> Packages
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                                <th><input type="checkbox" id="master"></th>
                                <th>id</th>
                                <th>dataid</th>
                                <th>datatype</th>
                                <th>title</th>
                                <th>price</th>
                                <th>header</th>
                                <th>description</th>
                                <th>actions</th>
                            </tr>
                    </thead>
                    <tbody>
                      @foreach($packages as $package)
                        <tr id="{{$package->id}}">
                          <td><input type="checkbox" class="sub_chk" data-id="{{$package->id}}"></td>
                          <td>{{$package->id}}</td>
                          <td contenteditable="true">{{$package->dataid}}</td>
                          <td contenteditable="true">{{$package->datatype}}</td>
                          <td contenteditable="true">{{$package->title}}</td>
                          <td contenteditable="true">{{$package->price}}</td>
                          <td contenteditable="true">{{$package->header}}</td>
                          <td contenteditable="true">{{$package->description}}</td>
                          <td>
                            <button style="margin-bottom: 10px" class="btn btn-outline-danger delete_single" data-url="{{url('dashboard/packagesDeleteAll')}}" data-id="{{$package->id}}">
                                <i class="fa fa-trash"></i>
                            </button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div>
                    <button style="margin-bottom: 10px" class="btn btn-danger delete_all" data-url="{{url('dashboard/packagesDeleteAll')}}">
                        Delete All Selected
                    </button>
                </div>    
                <div class="spinner-grow" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
              </div>
              <div class="card-footer small text-muted">
                {{-- Retrieved <span id="datetime"></span>
                    <script>
                      var dt=new Date();
                      document.getElementById("datetime").innerHTML=dt.toLocaleString();
                    </script> --}}
              </div>
            </div>
          </div>
          <!-- /.container-fluid-->
          <!-- /.content-wrapper-->
          <footer class="sticky-footer">
            {{-- <div class="container">
              <div class="text-center">
                <small>Copyright ©GetPlaced 2020</small>
              </div>
            </div> --}}
          </footer>
          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
          </a>

          {{-- Begin modal template --}}
          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="editModalTitle">Edit entry</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                     
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Done</button>
                </div>
              </div>
            </div>
          </div>
          {{-- $('#editModal').on('show.bs.modal',function(e){
              var opener=e.relatedTarget;
              var 
          }) --}}
          <!-- Logout Modal-->
        </div>
      </body>
      <script type="text/javascript">
        $(document).ready(function(){
            $('#master').on('click',function(e){
                if($(this).is(':checked',true))
                {
                    $('.sub_chk').prop('checked',true);
                }
                else{
                    $('.sub_chk').prop('checked',false);
                }
            });
        
        $('.delete_all').on('click',function(e){
            var allVals=[];
            $(".sub_chk:checked").each(function(){
                allVals.push($(this).attr('data-id'));
            });
            if(allVals.length<=0)
            {
                alert("Please select row");
            }
            else{
                
                var check=confirm("Are you sure you want to delete this row?");
                if(check==true){
                    var join_selected_values=allVals.join(",");
                    var baap=$(this).parent();
                    // console.log(baap);
                    baap.html(
                        `<div class="progress" style="width:25%"><div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>`
                    );
                    // console.log(baap);

                    $.ajax({
                        url:$(this).data('url'),
                        type:'DELETE',
                        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                        data:'ids='+join_selected_values,
                        success:function(data){
                            if(data['success']){
                                $(".sub_chk:checked").each(function(){
                                    console.log($(this))
                                    $(this).parents('tr').remove();
                                });
                                baap.html(`<button style="margin-bottom: 10px" class="btn btn-danger delete_all" data-url="{{url('dashboard/packagesDeleteAll')}}">Delete All Selected</button>`);
                                alert(data['success']);
                                //location.reload(true);
                            }
                            else if(data['error']){
                                alert(data['error']);                             
                            }
                            else{
                                alert('Something went seriously wrong');
                            }
                        },
                        error:function(data){
                            alert(data.responseText);
                            
                        }
                    });

                    $.each(allVals,function(index,value){          
                        var rows=$('table tr').filter("[data-row-id='"+value+"']");
                        rows.remove();
                    });

                }
            }
        });

        $('.delete_single').on('click',function(e){
            
            var baap=$(this).parent();
            baap.html(
                `<div class="progress"><div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>`
            );
            // console.log($(this).parent());
                
            var selected_values=[];
            selected_values.push($(this).attr('data-id'));
            $.ajax({
                url:$(this).data('url'),
                type:'DELETE',
                headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                data:'ids='+selected_values,
                success:function(data){
                    if(data['success']){
                      console.log($(".sub-chk"));
                      $(this).parents('tr').remove();
                      baap.html(`<button type="button" style="margin-bottom: 10px" class="btn btn-outline-danger delete_single" disabled><i class="fa fa-check"></i></button>`);
                      
                      alert(data['success']);
                        //baap.html(`<button type="button" style="margin-bottom: 10px" class="btn btn-outline-danger delete_single" disabled><i class="fa fa-check"></i></button>`);
                        
                    }
                    else if(data['error']){
                        alert(data['error']);                             
                    }
                    else{
                        alert('Something went seriously wrong');
                    }
                },
                error:function(data){
                    alert(data.responseText);
                    
                }
            });
            
            $.each(selected_values,function(index,value){
                var rows=$('table tr').filter("[data-row-id='"+value+"']");
                rows.remove();
            });
                    
            
                    
        });
        
        
        });
      </script>
</html>