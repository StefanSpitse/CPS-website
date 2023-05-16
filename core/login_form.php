<?php
function login_form()
{
return'


<div class="modal" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group"> 
                    <label for="usr">Username: </label>
                    <input type="text" class="form-control" id="usr">
                </div>
                <div class="form-group"> 
                    <label for="pwd">Password: </label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="text-center m-2">
                    <input type="submit" class="btn primary" name="login"> <br>
                    or
                </div>
                <div class="text-center">
                    <input type="submit" class="btn primary" value="Make an account" name="create">
                </div>
            </div>
        </div>
    </div>
</div>

';
}
