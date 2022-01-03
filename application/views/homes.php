<?php include('file/header.php'); ?>
<form action="<?php echo base_url().'index.php/Empl_controller/create'; ?>" method="post">

<div class="form-group">
    <label for="Username">Name</label>
    <input type="text" class="form-control" name="name" id="name" 
    placeholder="name"> 
</div>
<div class="form-group">
    <label for="Phone">Contact</label>
    <input type="number" class="form-control" name="phone" id="phone" 
    placeholder="Phone"> 
</div>
<div class="form-group">
    <label for="Username">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email"> 
</div>
<div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="city"> 
</div>
<div class="form-group">
    <label for="city">Gender</label>
    <select id = "gender" name = "gender" type="text">
    <option value="">SELECT</option>
        <option value = "male">Male</option>
        <option value = "female">female</option>
     </select>
</div>
<div class="form-group">
    <label for="role">Role</label>
    <select id = "role" name = "role_id" type="text">
      <option value="">SELECT</option>
        <option value = "ADMIN">ADMIN</option>
        <option value = "COADMIN">COADMIN</option>
     </select>
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password"
     placeholder="password"> 
</div>
<div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
</form>
                    </div>
                    
                </div>
            </div>
        </div>

</body>

</html>