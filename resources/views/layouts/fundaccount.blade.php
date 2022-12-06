 <!-- basic modal -->
 <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Fund Account</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="/addfund" method="post">
            @csrf

                <div class="form-group form-group-default">
                    <label>Method</label>
                    <select class="form-control" id="method" name="method">
                        <option value="card">Card</option>
                        <option value="transfer">Transfer</option>
                    </select>
                </div>

            <div class="form-group form-group-default">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount">
                @error('amount') <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-sm btn-success">Add Funds</button>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
