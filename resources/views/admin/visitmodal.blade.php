<!-- Modal -->
<div class="modal fade" id="example-{{$visit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="post" action="#">
          @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Visit status for {{$visit->users->firstname ?? ''}} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="status" class="form-control" required>
              <option disabled>select status</option>
              <option value="1">Patient came on TCA</option>
              <option value="2">Patient came on a later date</option>
            </select>
            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Visit Date</label>
            <input type="date" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="visit_date" required>
            
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>