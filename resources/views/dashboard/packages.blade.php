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
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
                  <a class="dropdown-item" href="../logout">
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
                @if(session('insertStatus'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <h4>Amazing!</h4>
                  <p>{{session('insertStatus')}}</p>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @elseif(session('editStatus'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <h4>Edit done!</h4>
                  <p>{{session('editStatus')}}</p>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
                <div>
                  <button style="margin-bottom: 10px" class="btn btn-secondary" data-toggle="modal" data-target="#insertModal">
                    <i class="fa fa-plus"></i>
                    <b>Insert a package</b>
                  </button>
                  <button style="margin-bottom: 10px" class="btn btn-danger delete_all" data-url="{{url('dashboard/packagesDeleteAll')}}">
                    <i class="fa fa-trash"></i>  
                    Delete All Selected
                  </button>
                </div>
                <div>
                  
              </div> 
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
                          <td>{{$package->dataid}}</td>
                          <td>{{$package->datatype}}</td>
                          <td>{{$package->title}}</td>
                          <td>{{$package->price}}</td>
                          <td>{{$package->header}}</td>
                          <td>{{$package->description}}</td>
                          <td>
                            <button style="margin-bottom: 10px" class="btn btn-outline-danger delete_single" data-url="{{url('dashboard/packagesDeleteAll')}}" data-id="{{$package->id}}">
                                <i class="fa fa-trash"></i>
                            </button>
                            <button style="margin-bottom: 10px" class="btn btn-outline-primary edit_single" data-id="{{$package->id}}" data-dataid="{{$package->dataid}}" data-datatype="{{$package->datatype}}" data-title="{{$package->title}}" data-price="{{$package->price}}" data-header="{{$package->header}}" data-description="{{$package->description}}" data-toggle="modal" data-target="#editModal">
                              <i class="fa fa-pencil"></i>
                            </button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
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
                  <form method="post" action="{{url('dashboard/packagesUpdate')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="form-group">
                      <label for="inputItemHeader">DB id</label>
                      <input type="text" class="form-control" id="editItemDBID" name="editItemDBID" readonly>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputItemId">Webpage Id</label>
                        <input type="text" class="form-control" id="editItemId" name="editItemId" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputItemDatatype">Item "datatype"</label>
                        <input type="text" class="form-control" id="editItemDatatype" name="editItemDatatype" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-8">
                        <label for="inputItemTitle">Title</label>
                        <input type="text" class="form-control" id="editItemTitle" name="editItemTitle" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputItemPrice">Price</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">₹</div>
                          </div>
                          <input type="number" class="form-control" id="editItemPrice" name="editItemPrice" required>
                        </div>           
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputItemHeader">Header</label>
                      <input type="text" class="form-control" id="editItemHeader" name="editItemHeader" required>
                    </div>
                    <div class="form-group">
                      <label for="inputItemDescription">Description</label>
                      <textarea type="text" class="form-control" id="editItemDescription" name="editItemDescription" rows="5" required></textarea>
                    </div>
                    <div class="text-right">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                 
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="insertModalLongTitle">Insert a package</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{url('dashboard/packages')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputItemId">Webpage Id</label>
                        <input type="text" class="form-control" id="inputItemId" name="inputItemId" placeholder="eg: id-0" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputItemDatatype">Item "datatype"</label>
                        <input type="text" class="form-control" id="inputItemDatatype" name="inputItemDatatype" placeholder="eg: cat-item-1" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-8">
                        <label for="inputItemTitle">Title</label>
                        <input type="text" class="form-control" id="inputItemTitle" name="inputItemTitle" placeholder="eg: Skyhome Smart Package" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputItemPrice">Price</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">₹</div>
                          </div>
                          <input type="number" class="form-control" id="inputItemPrice" name="inputItemPrice" placeholder="eg: 10000" required>
                        </div>
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputItemHeader">Header</label>
                      <input type="text" class="form-control" id="inputItemHeader" name="inputItemHeader" placeholder="eg: Ideal for builders & hotels (> 40,000 sq ft)" required>
                    </div>
                    <div class="form-group">
                      <label for="inputItemDescription">Description</label>
                      <textarea type="text" class="form-control" id="inputItemDescription" name="inputItemDescription" placeholder="eg: Smart home is......" rows="5" required></textarea>
                    </div>
                    <div class="text-right">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    

                  </form>
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
        $('#editModal').on('show.bs.modal',function(e)
        {
          var id=$(e.relatedTarget).data('id');
          var dataId=$(e.relatedTarget).data('dataid');
          var datatype=$(e.relatedTarget).data('datatype');
          var dataTitle=$(e.relatedTarget).data('title');
          var dataPrice=$(e.relatedTarget).data('price');
          var dataHeader=$(e.relatedTarget).data('header');
          var dataDescription=$(e.relatedTarget).data('description');

          $(e.currentTarget).find('input[name="editItemDBID"]').val(id);
          $(e.currentTarget).find('input[name="editItemId"]').val(dataId);
          $(e.currentTarget).find('input[name="editItemDatatype"]').val(datatype);
          $(e.currentTarget).find('input[name="editItemTitle"]').val(dataTitle);
          $(e.currentTarget).find('input[name="editItemPrice"]').val(dataPrice.substring(1));
          $(e.currentTarget).find('input[name="editItemHeader"]').val(dataHeader);
          $(e.currentTarget).find('textarea[name="editItemDescription"]').val(dataDescription);
          
        });
        
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
                    baap.html(
                        `<button style="margin-bottom: 10px" class="btn btn-secondary" disabled><i class="fa fa-plus"></i><b> Insert a package</b></button> <button style="margin-bottom: 10px" class="btn btn-danger"><div class="spinner-grow spinner-grow-sm" role="status"><span class="sr-only">Loading...</span></div></button>`
                    );
                    $.ajax({
                        url:$(this).data('url'),
                        type:'DELETE',
                        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                        data:'ids='+join_selected_values,
                        success:function(data){
                            if(data['success']){
                                $(".sub_chk:checked").each(function(){
                                    $(this).parents('tr').remove();
                                });
                                baap.html(`<button style="margin-bottom: 10px" class="btn btn-secondary" disabled><i class="fa fa-plus"></i><b> Insert a package</b></button> <button style="margin-bottom: 10px" class="btn btn-warning" type="button" disabled><span class="spinner-border spinner-border-sm" role="status"></span>  Refreshing..</button>`);
                                alert(data['success']);
                                location.reload(true);
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
                `<button style="margin-bottom: 10px" class="btn btn-danger"><div class="spinner-grow spinner-grow-sm" role="status"><span class="sr-only">Loading...</span></div></button>`
            );
                
            var selected_values=[];
            selected_values.push($(this).attr('data-id'));
            $.ajax({
                url:$(this).data('url'),
                type:'DELETE',
                headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                data:'ids='+selected_values,
                success:function(data){
                    if(data['success']){
                      
                      baap.html(`<button style="margin-bottom: 10px" class="btn btn-primary" type="button" disabled><span class="spinner-border spinner-border-sm" role="status"></span> <span class="sr-only"> Refreshing..</span></button>`);
                      alert(data['success']);
                      baap.parent().remove();
                      location.reload(true);
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