

  <!-- Trigger the modal with a button -->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="height: 30px; width: 30px;">x</button>
          <h4 class="modal-title">@yield('title_modal')</h4>
        </div>
        <div class="modal-body">
          
          <p>@yield('content_modal')</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn " data-dismiss="modal">Agregar</button>
        </div>
      </div>
      
    </div>
  </div>
  
