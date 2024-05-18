<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">




<div class="modal fade" id="addOfficialModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Official Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Full Name</label>
            <input type="text" class="form-control form-control-border" name="full_name" placeholder="Full Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Chairmanship</label>
            <select type="text" class="form-control form-control-border" name="chairmanship">
            <option value="No Chairmanship">No Chairmanship</option>
              <option value="Chairperson on Peace and Order">Chairperson on Peace and Order</option>
              <option value="Chairperson on Health and Sanitation">Chairperson on Health and Sanitation</option>
              <option value="Chairperson on Education and Culture">Chairperson on Education and Culture</option>
              <option value="Chairperson on Finance">Chairperson on Finance</option>
              <option value="Chairperson on Infrastructure">Chairperson on Infrastructure</option>
              <option value="Chairperson on Social Services and Community Development">Chairperson on Social Services and Community Development</option>
              <option value="Chairperson on Women and Family Affairs">Chairperson on Women and Family Affairs</option>
              <option value="Chairperson on Youth and Sports Development">Chairperson on Youth and Sports Development</option>
            </select>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Position</label>
            <select type="text" class="form-control form-control-border" name="position">
              <option value="Barangay Captain (Punong Barangay)">Barangay Captain (Punong Barangay)</option>
              <option value="Barangay Kagawad">Barangay Kagawad</option>
              <option value="SK Chairperson">SK Chairperson</option>
              <option value="Barangay Secretary">Barangay Secretary</option>
              <option value="Barangay Treasurer">Barangay Treasurer</option>
              <option value="Barangay Tanod">Barangay Tanod</option>
              <option value="Barangay Day Care Worker">Barangay Day Care Worker</option>
              <option value="Barangay Lupong Tagapamayapa">Barangay Lupong Tagapamayapa</option>
            </select>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Term Start</label>
            <input type="date" class="form-control form-control-border" name="term_start" placeholder="Term Start">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Term End</label>
            <input type="date" class="form-control form-control-border" name="term_end" placeholder="Term End">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Status</label>
            <select type="text" class="form-control form-control-border" name="status">
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" name="add_official" class="btn btn-primary" id="saveUserChanges">Add Official</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>





<div class="modal fade" id="editOfficialModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Edit Official</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Full Name</label>
            <input type="text" value="Test" class="form-control form-control-border" name="full_name" placeholder="Full Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Chairmanship</label>
            <select type="text" class="form-control form-control-border" name="chairmanship">
            <option value="No Chairmanship">No Chairmanship</option>
              <option value="Chairperson on Peace and Order">Chairperson on Peace and Order</option>
              <option value="Chairperson on Health and Sanitation">Chairperson on Health and Sanitation</option>
              <option value="Chairperson on Education and Culture">Chairperson on Education and Culture</option>
              <option value="Chairperson on Finance">Chairperson on Finance</option>
              <option value="Chairperson on Infrastructure">Chairperson on Infrastructure</option>
              <option value="Chairperson on Social Services and Community Development">Chairperson on Social Services and Community Development</option>
              <option value="Chairperson on Women and Family Affairs">Chairperson on Women and Family Affairs</option>
              <option value="Chairperson on Youth and Sports Development">Chairperson on Youth and Sports Development</option>
            </select>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Position</label>
            <select type="text" class="form-control form-control-border" name="position">
              <option value="Barangay Captain (Punong Barangay)">Barangay Captain (Punong Barangay)</option>
              <option value="Barangay Kagawad">Barangay Kagawad</option>
              <option value="SK Chairperson">SK Chairperson</option>
              <option value="Barangay Secretary">Barangay Secretary</option>
              <option value="Barangay Treasurer">Barangay Treasurer</option>
              <option value="Barangay Tanod">Barangay Tanod</option>
              <option value="Barangay Day Care Worker">Barangay Day Care Worker</option>
              <option value="Barangay Lupong Tagapamayapa">Barangay Lupong Tagapamayapa</option>
            </select>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Term Start</label>
            <input type="date" class="form-control form-control-border" name="term_start" placeholder="Term Start">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Term End</label>
            <input type="date" class="form-control form-control-border" name="term_end" placeholder="Term End">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Status</label>
            <select type="text" class="form-control form-control-border" name="status">
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" name="update_official" class="btn btn-primary" id="saveUserChanges">Update Details</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>




<div class="modal fade" id="deleteOfficialModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Are you sure you want to delete this official?</label>
          </div>
        </div>

    
      </div>
      <div class="modal-footer">
        <button type="submit" name="delete_official" class="btn btn-primary" id="saveUserChanges">Delete Official</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="deleteResidentModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Are you sure you want to delete this resident?</label>
          </div>
        </div>

    
      </div>
      <div class="modal-footer">
        <button type="submit" name="delete_official" class="btn btn-primary" id="saveUserChanges">Delete Resident</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>







<div class="modal fade" id="addResidentModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Resident Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">First Name</label>
            <input type="text" class="form-control form-control-border" name="firstname" placeholder="First Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Middle Name</label>
            <input type="text" class="form-control form-control-border" name="middlename" placeholder="Middle Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Last Name</label>
            <input type="text" class="form-control form-control-border" name="lastname" placeholder="Last Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Place of Birth</label>
            <input type="text" class="form-control form-control-border" name="place_of_birth" placeholder="Place of Birth">
          </div>
        </div>
        
        <div class="row mt-3">
          <div class="col">
            <label for="">Birth Date</label>
            <input type="date" class="form-control form-control-border" name="birth_date" placeholder="Birth Date">
          </div>
        </div>

        
        <div class="row mt-3">
          <div class="col">
            <label for="">Age</label>
            <input type="number" class="form-control form-control-border" name="age" placeholder="Age">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Civil Status</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Single">Single</option>
              <option value="Married">Married</option>
            </select>
          </div>
        </div>


        <div class="row mt-3">
          <div class="col">
            <label for="">Voter Status</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Voter">Voter</option>
              <option value="Non-voter">Non-voter</option>
            </select>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Email Address</label>
            <input type="email" class="form-control form-control-border" name="email" placeholder="Email Address">
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Contact Number</label>
            <input type="number" class="form-control form-control-border" name="contact_number" placeholder="Contact Number">
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Occupation</label>
            <input type="text" class="form-control form-control-border" name="occupation" placeholder="Occupation">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Citizenship</label>
            <input type="text" class="form-control form-control-border" name="citizenship" placeholder="Citizenship">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Address</label>
            <textarea name="address" class="form-control form-control-border" placeholder="Address" id="" cols="3" rows="3"></textarea>
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Image</label>
            <input type="file" class="form-control form-control-border" name="image" >
          </div>
        </div>
   
      </div>
      <div class="modal-footer">
        <button type="submit" name="add_resident" class="btn btn-primary" id="saveUserChanges">Add Resident</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>






<div class="modal fade" id="editResidentModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Resident Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">First Name</label>
            <input type="text" class="form-control form-control-border" name="firstname" placeholder="First Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Middle Name</label>
            <input type="text" class="form-control form-control-border" name="middlename" placeholder="Middle Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Last Name</label>
            <input type="text" class="form-control form-control-border" name="lastname" placeholder="Last Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Place of Birth</label>
            <input type="text" class="form-control form-control-border" name="place_of_birth" placeholder="Place of Birth">
          </div>
        </div>
        
        <div class="row mt-3">
          <div class="col">
            <label for="">Birth Date</label>
            <input type="date" class="form-control form-control-border" name="birth_date" placeholder="Birth Date">
          </div>
        </div>

        
        <div class="row mt-3">
          <div class="col">
            <label for="">Age</label>
            <input type="number" class="form-control form-control-border" name="age" placeholder="Age">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Civil Status</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Single">Single</option>
              <option value="Married">Married</option>
            </select>
          </div>
        </div>


        <div class="row mt-3">
          <div class="col">
            <label for="">Voter Status</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Voter">Voter</option>
              <option value="Non-voter">Non-voter</option>
            </select>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Email Address</label>
            <input type="email" class="form-control form-control-border" name="email" placeholder="Email Address">
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Contact Number</label>
            <input type="number" class="form-control form-control-border" name="contact_number" placeholder="Contact Number">
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Occupation</label>
            <input type="text" class="form-control form-control-border" name="occupation" placeholder="Occupation">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Citizenship</label>
            <input type="text" class="form-control form-control-border" name="citizenship" placeholder="Citizenship">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Address</label>
            <textarea name="address" class="form-control form-control-border" placeholder="Address" id="" cols="3" rows="3"></textarea>
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Image</label>
            <input type="file" class="form-control form-control-border" name="image" >
          </div>
        </div>
   
      </div>
      <div class="modal-footer">
        <button type="submit" name="add_resident" class="btn btn-primary" id="saveUserChanges">Update Details</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>







<div class="modal fade" id="manageComplaintModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Complaint Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Complainant</label>
            <input type="text" class="form-control form-control-border" name="complainant" placeholder="Complainant Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Respondent</label>
            <input type="text" class="form-control form-control-border" name="respondent" placeholder="Respondent Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Victim(s)</label>
            <input type="text" class="form-control form-control-border" name="victim" placeholder="Victim(s)">
          </div>
        </div>

        
        <div class="row mt-3">
          <div class="col">
            <label for="">Type</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Amicable">Amicable</option>
              <option value="Incident">Incident</option>
            </select>
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Location</label>
            <input type="text" class="form-control form-control-border" name="location" placeholder="Location">
          </div>
        </div>


   
        
        <div class="row mt-3">
          <div class="col">
            <label for="">Date</label>
            <input type="date" class="form-control form-control-border" name="date">
          </div>
        </div>



        
        <div class="row mt-3">
          <div class="col">
            <label for="">Time</label>
            <input type="time" class="form-control form-control-border" name="time">
          </div>
        </div>



        <div class="row mt-3">
          <div class="col">
            <label for="">Status</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Details</label>
            <textarea name="details" id="" class="form-control form-control-border" cols="2" rows="2" placeholder="Details"></textarea>
          </div>
        </div>





      </div>
      <div class="modal-footer">
        <button type="submit" name="add_resident" class="btn btn-primary" id="saveUserChanges">Add Complaint</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>






<div class="modal fade" id="editComplaintModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Complaint Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Complainant</label>
            <input type="text" class="form-control form-control-border" name="complainant" placeholder="Complainant Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Respondent</label>
            <input type="text" class="form-control form-control-border" name="respondent" placeholder="Respondent Name">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Victim(s)</label>
            <input type="text" class="form-control form-control-border" name="victim" placeholder="Victim(s)">
          </div>
        </div>

        
        <div class="row mt-3">
          <div class="col">
            <label for="">Type</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Amicable">Amicable</option>
              <option value="Incident">Incident</option>
            </select>
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Location</label>
            <input type="text" class="form-control form-control-border" name="location" placeholder="Location">
          </div>
        </div>


   
        
        <div class="row mt-3">
          <div class="col">
            <label for="">Date</label>
            <input type="date" class="form-control form-control-border" name="date">
          </div>
        </div>



        
        <div class="row mt-3">
          <div class="col">
            <label for="">Time</label>
            <input type="time" class="form-control form-control-border" name="time">
          </div>
        </div>



        <div class="row mt-3">
          <div class="col">
            <label for="">Status</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>
        </div>


        
        <div class="row mt-3">
          <div class="col">
            <label for="">Details</label>
            <textarea name="details" id="" class="form-control form-control-border" cols="2" rows="2" placeholder="Details"></textarea>
          </div>
        </div>





      </div>
      <div class="modal-footer">
        <button type="submit" name="add_resident" class="btn btn-primary" id="saveUserChanges">Update Complaint</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>




<div class="modal fade" id="deleteComplaintModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Are you sure you want to delete this complaint?</label>
          </div>
        </div>

    
      </div>
      <div class="modal-footer">
        <button type="submit" name="delete_official" class="btn btn-primary" id="saveUserChanges">Delete Complaint</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>





<div class="modal fade" id="editDocumentModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Update Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Request Status</label>
            <select name="status" class="form-control form-control-border" id="">
              <option value="Pending">Pending</option>
              <option value="Processing">Processing</option>
              <option value="Ready to Pick-up">Ready to Pick-up</option>
              <option value="Released">Released</option>

            </select>
          </div>
        </div>

    
      </div>
      <div class="modal-footer">
        <button type="submit" name="delete_official" class="btn btn-primary" id="saveUserChanges">Update</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="deleteDocumentModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Are you sure you want to delete this document request?</label>
          </div>
        </div>

    
      </div>
      <div class="modal-footer">
        <button type="submit" name="delete_official" class="btn btn-primary" id="saveUserChanges">Delete Request</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>





<div class="modal fade" id="addAnnouncementModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Announcement Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Announcement Title</label>
            <input type="text" class="form-control form-control-border">
          </div>
        </div>

    
        <div class="row mt-3">
          <div class="col">
            <label for="">Content</label>
            <input type="text" class="form-control form-control-border">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Status</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>
        </div>




      </div>
      <div class="modal-footer">
        <button type="submit" name="delete_official" class="btn btn-primary" id="saveUserChanges">Publish</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>






<div class="modal fade" id="editAnnouncementModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Announcement Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Announcement Title</label>
            <input type="text" class="form-control form-control-border">
          </div>
        </div>

    
        <div class="row mt-3">
          <div class="col">
            <label for="">Content</label>
            <input type="text" class="form-control form-control-border">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <label for="">Status</label>
            <select type="text" class="form-control form-control-border" name="civil_status">
            <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>
        </div>




      </div>
      <div class="modal-footer">
        <button type="submit" name="delete_official" class="btn btn-primary" id="saveUserChanges">Update Details</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="deleteAnnouncementModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../inc/function.php" method="POST" id="deleteUserForm">
      <div class="modal-body pl-4 pr-4">
        <div class="row">
          <div class="col">
            <label for="">Are you sure you want to delete this announcement?</label>
          </div>
        </div>

    
      </div>
      <div class="modal-footer">
        <button type="submit" name="delete_official" class="btn btn-primary" id="saveUserChanges">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
      </form>
    </div>
  </div>
</div>




