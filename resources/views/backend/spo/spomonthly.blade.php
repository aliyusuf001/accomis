@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
            {{-- Flash message --}}
                <div id="alert">
                @include('partials.flash')
                </div>
        {{-- Flash message end--}}
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SPO Monthly Minutes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SPO Minutes Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->

        @can('spo_role')
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">SPO Minutes of Meeting</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
            <form role="form" action="{{ route('spo.add_monthly') }}" enctype="multipart/form-data" method="POST">
             @csrf
          <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>State</label>

                  <input type="text" name="state"  class="form-control select2" style="width: 100%;" id="state" value="{{$states}}"  readonly>


                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group">
                  <label>Date of Meeting</label>
                  <input type="date" name="meeting_date" class="form-control" placeholder="">

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputFile">Attach Signed Copy</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="attachment">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
              </div>


            </div>
            <label>Minutes of Meeting</label>
            <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px;
            font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="minutes"></textarea>



            <button class="btn btn-primary">Submit Report</button>
            <!-- /.row -->

          </div>
            </form>
          <!-- /.card-body -->
          <div class="card-footer">
            <!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin. -->
          </div>
        </div>
        <!-- /.card -->



        </div>
        @endcan
        <!-- SELECT2 EXAMPLE -->
        @can('admin_spo')
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Monthly Reports</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>id</th>
                <th>Meeting Date</th>
                <th>Attachment</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>

              @if (count($spos)>0)
              @foreach ($spos as $spo)
              <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $spo->date_of_meeting }}</td>
              <td><a href="{{ url('storage/attachments/'.$spo->attachment)}}" target="_blank"><i class="fa fa-file-download"></i></a></td>
              <td><span class="badge bg-warning">Pending</span></td>
              <td><a href="#" data-toggle="modal" data-target="{{ '#Modal' . $spo->id }}" ><i
                      class="fa fa-eye"></i></a>

                      <div class="modal fade" id="{{ 'Modal' . $spo->id }}" tabindex="-1"
                  role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="ModalLabel">spo Monthly Minutes
                              </h5>
                              <button type="button" class="close" data-dismiss="modal"
                                  aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="card">
                                  <div class="card-header">
                                      <h3 class="card-title">
                                          <i class="fas fa-text-width"></i>

                                      </h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                      <dl class="row">
                                          <dt class="col-sm-4">State</dt>
                                          <dd class="col-sm-8">{{ $spo->state }}.
                                          </dd>

                                          <dt class="col-sm-4">Spo Name:</dt>
                                          <dd class="col-sm-8">{{ $spo->name }}.
                                          </dd>
                                          <dt class="col-sm-4">Minutes:</dt>
                                          <dd class="col-sm-8">
                                            {!! $spo->minutes_of_meeting !!}


                                          <dt class="col-sm-4">Attached Report:</dt>
                                          <dd class="col-sm-8"><a href="{{ url('storage/attachments/'.$spo->attachment)}}" target="_blank"><i class="fa fa-file-download"></i></a>
                                          </dd>
                                          <dt class="col-sm-4"></dt>
                                          <dd class="col-sm-8"> <embed
                                            src="{{ url('storage/attachments/'.$spo->attachment)}}"
                                            style="width:400px; height:300px;"
                                            frameborder="0"></a>
                                          </dd>

                                          <dt class="col-sm-4">Date of Submission:</dt>
                                          <dd class="col-sm-8">{{ $spo->created_at }}.
                                          </dd>
                                          <br>
                                          <dt class="col-sm-4">Status:</dt>
                                          <dd class="col-sm-8"><a class="btn btn-success">Approved</a>
                                          </dd>

                                      </dl>
                                  </div>
                                  <!-- /.card-body -->
                              </div>
                              <!-- /.card -->

                              <div class="modal-footer">
                                  <p>
                                      <button type="button" class="btn btn-info"
                                          data-dismiss="modal">Close</button>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              </td>
              </tr>
        @endforeach
        @endif
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Meeting Date</th>
                    <th>Attachment</th>
                    <th>Status</th>

                    <th>Action</th>
                  </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
          @endcan

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#example1').DataTable();
    });
</script>
@endsection
