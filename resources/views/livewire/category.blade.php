@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($create)
<div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- <div class="form-group">
                    <label for="create-category">Category</label>
                    <br>
                    <input type="text" name="category_name" id="category_name"> --}}

                    <div class="form-group">
                        <label>Category</label>
                        <input wire:model="category_name" type="text" class="form-control" name="category_name" id="category_name">
                        @error('category_name')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                {{-- </div> --}}
                <span wire:click="store" class="btn btn-sm btn-success">Save</span>
            </div>
        </div>
    </div>
</div>
@endif

@if ($edit)
<div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- <div class="form-group">
                    <label for="create-category">Category</label>
                    <br>
                    <input type="text" name="category_name" id="category_name"> --}}

                    <div class="form-group">
                        <label>Category</label>
                        <input wire:model="category_name" type="text" class="form-control" name="category_name" id="category_name">
                        @error('category_name')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                {{-- </div> --}}
                <span wire:click="update({{$category_id}})" class="btn btn-sm btn-success">Update</span>
            </div>
        </div>
    </div>
</div>
@endif
      <div class="card-header">
        <div class="card-tools">
                        <span wire:click="create" class="btn btn-sm btn-primary float-right">Tambah</span>
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>Category</th>
                        <th style="width: 15%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{$item->category_name}}</td>
                          <td>
                              <div class="btn-group">
                                  <span wire:click="edit({{ $item->id }})" class="btn btn-sm btn-warning mr-2">Edit</span>
                                  <span class="btn btn-sm btn-danger">Hapus</span>
                              </div>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            {{-- </div> --}}
            <!-- /.card -->
            {{-- </div> --}}
            {{-- </div> --}}
          <!-- /.row -->
          <div class="">
              {{$category->links()}}

          </div>

      {{-- </div> --}}
      {{-- <div class="card-footer clearfix"> --}}
          {{-- </div> --}}
        </div>

  {{-- </div> --}}


