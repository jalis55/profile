@extends('profile.home')
@section('admin_content')
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add skill</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <form action="{{url('/add-skill')}}" method="post">
            {{csrf_field()}}
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email" requird>Skill Name</label>
                    <input type="text" id="defaultForm-email" name="skill_name" class="form-control validate" required>

                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Skill Rate</label>
                    <input type="text" id="defaultForm-pass" name="skill_rate" class="form-control validate" required>

                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <input class="btn btn-success btn-block" type="submit" value="Submit">
            </div>
          </form>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalLoginForm">Add new skill</a>
</div>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Skill Name</th>
      <th scope="col">Skill Rate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  @foreach($data as $row)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$row->skill_name}}</td>
      <td>{{$row->skill_rate}}</td>
      <td>
              {{-- edit --}}
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="{{ $row->id }}" data-name="{{ $row->skill_name }}" data-rate="{{$row->skill_rate}}">Edit</button>
              {{-- delete --}}
                <a class="btn btn-danger" href="{{url('/delete-skill')}}/{{$row->id}}">
                    <span class="glyphicon glyphicon-trash"></span> Delete
                </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{-- edit modal --}}
<div class="modal fade" id="editModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="editModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="editModalLabel">Edit Skill</h4>
      </div>
      <div class="modal-body">
                  <form action="{{url('/update-skill')}}" method="post">
            {{csrf_field()}}
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email" requird>Skill Name</label>
                    <input type="hidden" name="id">
                    <input type="text" id="defaultForm-email" name="skill_name" class="form-control validate" required>

                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Skill Rate</label>
                    <input type="text" id="defaultForm-pass" name="skill_rate" class="form-control validate" required>

                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <input class="btn btn-primary btn-block" type="submit" value="Update">
            </div>
          </form>
        
      </div>
    </div>
  </div>
</div>
<script>
  $('#editModal').on('show.bs.modal', function(e) {
    var skill_name = $(e.relatedTarget).data('name');
    var skill_rate=$(e.relatedTarget).data('rate');
    var skill_id=$(e.relatedTarget).data('id');
    $(e.currentTarget).find('input[name="skill_name"]').val(skill_name);
    $(e.currentTarget).find('input[name="skill_rate"]').val(skill_rate);
    $(e.currentTarget).find('input[name="id"]').val(skill_id);
});
</script>
@endsection